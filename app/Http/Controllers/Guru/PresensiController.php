<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Presensi;
use App\Models\IzinKeluar;
use App\Models\Pengaturan;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class PresensiController extends Controller
{
    public function scan()
    {
        $user = auth()->user();
        $today = Carbon::today()->toDateString();
        
        $presensi = Presensi::where('user_id', $user->id)
            ->where('tanggal', $today)
            ->first();

        $state = 'masuk';
        if ($presensi) {
            if ($presensi->waktu_keluar) {
                $state = 'selesai';
            } else if ($presensi->waktu_masuk) {
                $state = 'pulang';
            }
        }

        return view('guru.presensi.scan', compact('state'));
    }

    public function processScan(Request $request)
    {
        $request->validate([
            'token' => 'required|string'
        ]);

        $parts = explode('.', $request->token);
        if (count($parts) !== 2) {
            return response()->json(['message' => 'Format token tidak valid'], 400);
        }

        $base64Payload = $parts[0];
        $signature = $parts[1];

        $payloadJson = base64_decode($base64Payload);
        $expectedSignature = hash_hmac('sha256', $payloadJson, config('app.key'));

        if (!hash_equals($expectedSignature, $signature)) {
            return response()->json(['message' => 'Token tidak valid (Signature mismatch)'], 400);
        }

        $payload = json_decode($payloadJson, true);
        if (!$payload || !isset($payload['timestamp']) || !isset($payload['type'])) {
            return response()->json(['message' => 'Payload token tidak valid'], 400);
        }

        $durasi = (int) \App\Models\Pengaturan::getSetting('durasi_qr', 30);
        $tokenAge = time() - $payload['timestamp'];
        if ($tokenAge > $durasi || $tokenAge < -5) {
            return response()->json(['message' => 'QR Code sudah kedaluwarsa. Silakan scan QR terbaru.'], 400);
        }

        $user = auth()->user();
        $today = Carbon::today()->toDateString();
        $type = $payload['type']; // 'masuk' or 'keluar'

        $presensi = Presensi::where('user_id', $user->id)
            ->where('tanggal', $today)
            ->first();

        if ($type === 'masuk') {
            if ($presensi && $presensi->waktu_masuk) {
                return response()->json(['message' => 'Anda sudah melakukan presensi masuk hari ini.'], 400);
            }
        } else if ($type === 'keluar') {
            if (!$presensi || !$presensi->waktu_masuk) {
                return response()->json(['message' => 'Anda belum melakukan presensi masuk hari ini.'], 400);
            }
            if ($presensi->waktu_keluar) {
                return response()->json(['message' => 'Anda sudah melakukan presensi pulang hari ini.'], 400);
            }
            
            // Cek Edge Case: Guru tidak boleh absen pulang jika belum kembali dari Izin Keluar
            $izinAktif = IzinKeluar::where('user_id', $user->id)
                ->whereDate('created_at', $today)
                ->where('status', 'Disetujui')
                ->whereNotNull('waktu_izin')
                ->whereNull('waktu_kembali')
                ->first();
                
            if ($izinAktif) {
                return response()->json(['message' => 'Gagal: Anda harus melakukan scan Izin Kembali terlebih dahulu.'], 400);
            }
        } else {
            return response()->json(['message' => 'Tipe presensi tidak dikenal untuk presensi harian.'], 400);
        }

        // Token valid and user is allowed to proceed
        session()->put('presensi_scan_valid', true);
        session()->put('presensi_type', $type);

        return response()->json(['message' => 'Scan berhasil', 'redirect' => route('guru.presensi.foto')]);
    }

    public function foto()
    {
        if (!session('presensi_scan_valid')) {
            return redirect()->route('guru.presensi.scan')->with('error', 'Silakan scan QR Code terlebih dahulu.');
        }

        return view('guru.presensi.foto', ['type' => session('presensi_type')]);
    }

    public function store(Request $request)
    {
        if (!session('presensi_scan_valid')) {
            return response()->json(['message' => 'Sesi tidak valid'], 400);
        }

        $request->validate([
            'image' => 'required|string'
        ]);

        $user = auth()->user();
        $today = Carbon::today()->toDateString();
        $type = session('presensi_type');
        $now = now();

        // Decode base64 image
        $imageParts = explode(";base64,", $request->image);
        if (count($imageParts) !== 2) {
             return response()->json(['message' => 'Format foto tidak valid'], 400);
        }
        
        $imageTypeAux = explode("image/", $imageParts[0]);
        $imageType = $imageTypeAux[1] ?? 'png';
        $imageBase64 = base64_decode($imageParts[1]);

        $fileName = 'presensi/' . $user->id . '_' . $today . '_' . $type . '_' . time() . '.' . $imageType;
        Storage::disk('public')->put($fileName, $imageBase64);

        $presensi = Presensi::where('user_id', $user->id)
            ->where('tanggal', $today)
            ->first();

        $jamMasukSetting = Pengaturan::getSetting('jam_masuk', '07:00');
        $jamMasukParts = explode(':', $jamMasukSetting);
        $toleransi = (int)Pengaturan::getSetting('toleransi_keterlambatan', '15');
        
        $batasMasuk = Carbon::today()
            ->setHour((int)$jamMasukParts[0])
            ->setMinute((int)($jamMasukParts[1] ?? 0))
            ->setSecond(0)
            ->addMinutes($toleransi);

        if ($type === 'masuk') {
            if (!$presensi) {
                $presensi = new Presensi();
                $presensi->user_id = $user->id;
                $presensi->tanggal = $today;
            }
            $presensi->waktu_masuk = $now;
            $presensi->foto_masuk = $fileName;
            
            // Hitung status
            if ($now->greaterThan($batasMasuk)) {
                $presensi->status_masuk = 'Terlambat';
            } else {
                $presensi->status_masuk = 'Tepat Waktu';
            }
        } else {
            // Keluar
            $presensi->waktu_keluar = $now;
            $presensi->foto_keluar = $fileName;
        }

        $presensi->save();

        \App\Models\LogAktivitas::catat('Melakukan Presensi ' . ucfirst($type));

        session()->forget('presensi_scan_valid');
        session()->forget('presensi_type');
        session()->put('presensi_success_id', $presensi->id);

        return response()->json([
            'message' => 'Presensi berhasil disimpan',
            'redirect' => route('guru.presensi.success')
        ]);
    }

    public function success()
    {
        $presensiId = session('presensi_success_id');
        if (!$presensiId) {
            return redirect()->route('guru.dashboard');
        }

        $presensi = Presensi::findOrFail($presensiId);

        return view('guru.presensi.success', compact('presensi'));
    }
}
