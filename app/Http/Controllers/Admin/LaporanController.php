<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Presensi;
use App\Models\IzinKeluar;
use App\Models\User;
use Carbon\Carbon;
use Symfony\Component\HttpFoundation\StreamedResponse;

class LaporanController extends Controller
{
    public function index()
    {
        $gurus = User::where('role', 'Guru')->orderBy('nama_lengkap')->get();
        return view('admin.laporan.index', compact('gurus'));
    }

    private function getLaporanData(Request $request)
    {
        $request->validate([
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'user_id' => 'nullable|exists:users,id'
        ]);

        $query = Presensi::with('user')
            ->whereBetween('tanggal', [$request->start_date, $request->end_date])
            ->orderBy('tanggal', 'desc');

        if ($request->filled('user_id')) {
            $query->where('user_id', $request->user_id);
        }

        $presensi = $query->get();

        $izinQuery = IzinKeluar::whereBetween('created_at', [
                $request->start_date . ' 00:00:00',
                $request->end_date . ' 23:59:59'
            ])
            ->where('status', 'Disetujui');
            
        if ($request->filled('user_id')) {
            $izinQuery->where('user_id', $request->user_id);
        }

        $izinData = $izinQuery->get()->groupBy(function($item) {
            return $item->user_id . '_' . Carbon::parse($item->created_at)->toDateString();
        });

        return [
            'presensi' => $presensi,
            'izin' => $izinData,
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'user' => $request->filled('user_id') ? User::find($request->user_id) : null
        ];
    }

    public function cetak(Request $request)
    {
        $data = $this->getLaporanData($request);
        return view('admin.laporan.cetak', $data);
    }

    public function csv(Request $request)
    {
        $data = $this->getLaporanData($request);
        $presensi = $data['presensi'];
        $izinData = $data['izin'];

        $fileName = 'Laporan_Presensi_' . $data['start_date'] . '_sd_' . $data['end_date'] . '.csv';

        $response = new StreamedResponse(function () use ($presensi, $izinData) {
            $handle = fopen('php://output', 'w');
            
            // Add BOM for Excel UTF-8 compatibility
            fputs($handle, chr(0xEF) . chr(0xBB) . chr(0xBF));
            
            // Header
            fputcsv($handle, ['Tanggal', 'Nama Guru', 'Masuk Absen', 'Pulang Absen', 'Keterangan Presensi', 'Keluar Izin', 'Kembali Izin', 'Keterangan Izin']);

            foreach ($presensi as $log) {
                $key = $log->user_id . '_' . $log->tanggal;
                $izin = $izinData->get($key)?->first();

                $tanggal = Carbon::parse($log->tanggal)->format('Y-m-d');
                $nama = $log->user->nama_lengkap;
                $waktu_masuk = $log->waktu_masuk ? Carbon::parse($log->waktu_masuk)->format('H:i:s') : '-';
                $waktu_keluar = $log->waktu_keluar ? Carbon::parse($log->waktu_keluar)->format('H:i:s') : '-';
                $status_masuk = $log->status_masuk ?? '-';
                
                $izin_keluar = ($izin && $izin->waktu_izin) ? Carbon::parse($izin->waktu_izin)->format('H:i:s') : '-';
                $izin_kembali = ($izin && $izin->waktu_kembali) ? Carbon::parse($izin->waktu_kembali)->format('H:i:s') : '-';
                $keterangan_izin = $izin ? $izin->alasan : '-';

                fputcsv($handle, [
                    $tanggal,
                    $nama,
                    $waktu_masuk,
                    $waktu_keluar,
                    $status_masuk,
                    $izin_keluar,
                    $izin_kembali,
                    $keterangan_izin
                ]);
            }

            fclose($handle);
        });

        $response->headers->set('Content-Type', 'text/csv');
        $response->headers->set('Content-Disposition', 'attachment; filename="' . $fileName . '"');

        return $response;
    }
}
