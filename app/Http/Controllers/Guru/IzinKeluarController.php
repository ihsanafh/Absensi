<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\IzinKeluar;
use Carbon\Carbon;

class IzinKeluarController extends Controller
{
    public function index()
    {
        $riwayat = IzinKeluar::where('user_id', auth()->id())
            ->orderBy('created_at', 'desc')
            ->paginate(5);
            
        return view('guru.izin.index', compact('riwayat'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'alasan' => 'required|string|max:255',
            'keterangan' => 'nullable|string',
            'waktu_kembali' => 'nullable|date_format:H:i'
        ]);

        $estimasi_kembali = null;
        if ($request->waktu_kembali) {
            $estimasi_kembali = Carbon::today()->setTimeFromTimeString($request->waktu_kembali);
        }

        IzinKeluar::create([
            'user_id' => auth()->id(),
            'alasan' => $request->alasan,
            'keterangan' => $request->keterangan,
            'estimasi_kembali' => $estimasi_kembali,
            'status' => 'Menunggu'
        ]);

        return redirect()->route('guru.izin.index')->with('success', 'Sukses: Permohonan izin Anda berhasil dikirim dan menunggu persetujuan.');
    }

    public function scan()
    {
        $izin = IzinKeluar::where('user_id', auth()->id())
            ->whereDate('created_at', Carbon::today())
            ->where('status', 'Disetujui')
            ->whereNull('waktu_kembali')
            ->first();

        if (!$izin) {
            return redirect()->route('guru.dashboard')->with('error', 'Anda tidak memiliki Izin Keluar aktif untuk dipindai hari ini.');
        }

        return view('guru.izin.scan', compact('izin'));
    }

    public function processScan(Request $request)
    {
        $request->validate(['token' => 'required|string']);

        $parts = explode('.', $request->token);
        if (count($parts) !== 2) return response()->json(['message' => 'Format token tidak valid'], 400);

        $payloadJson = base64_decode($parts[0]);
        $expectedSignature = hash_hmac('sha256', $payloadJson, config('app.key'));

        if (!hash_equals($expectedSignature, $parts[1])) {
            return response()->json(['message' => 'Token tidak valid'], 400);
        }

        $payload = json_decode($payloadJson, true);
        if (!$payload || !isset($payload['timestamp']) || !isset($payload['type'])) {
            return response()->json(['message' => 'Payload tidak valid'], 400);
        }

        $durasi = (int) \App\Models\Pengaturan::getSetting('durasi_qr', 30);
        $tokenAge = time() - $payload['timestamp'];
        if ($tokenAge > $durasi || $tokenAge < -5) {
            return response()->json(['message' => 'QR Code sudah kedaluwarsa.'], 400);
        }

        $type = $payload['type'];
        if ($type !== 'izin_keluar' && $type !== 'izin_kembali') {
            return response()->json(['message' => 'QR Code ini bukan untuk keperluan Izin.'], 400);
        }

        $query = IzinKeluar::where('user_id', auth()->id())
            ->whereDate('created_at', Carbon::today())
            ->where('status', 'Disetujui')
            ->whereNull('waktu_kembali');

        if ($type === 'izin_kembali') {
            $query->whereNotNull('waktu_izin');
        } else if ($type === 'izin_keluar') {
            $query->whereNull('waktu_izin');
        }

        $izin = $query->first();

        if (!$izin) {
            if ($type === 'izin_kembali') {
                return response()->json(['message' => 'Anda belum memindai QR Izin Keluar atau izin tidak aktif.'], 400);
            } else {
                return response()->json(['message' => 'Anda sudah memindai QR Izin Keluar atau tidak memiliki izin aktif.'], 400);
            }
        }

        $now = now();

        if ($type === 'izin_keluar') {
            $izin->update(['waktu_izin' => $now]);
            \App\Models\LogAktivitas::catat('Memulai Izin Keluar Sekolah');
            return response()->json([
                'message' => 'Izin Keluar berhasil dicatat. Silakan tinggalkan area sekolah.',
                'redirect' => route('guru.dashboard')
            ]);
        } else if ($type === 'izin_kembali') {
            $izin->update(['waktu_kembali' => $now]);
            \App\Models\LogAktivitas::catat('Kembali ke Sekolah (Izin Selesai)');
            return response()->json([
                'message' => 'Waktu kembali berhasil dicatat. Selamat bekerja kembali!',
                'redirect' => route('guru.dashboard')
            ]);
        }
    }
}
