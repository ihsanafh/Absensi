<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Presensi;
use App\Models\IzinKeluar;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index(Request $request)
    {
        $bulan = $request->input('bulan', date('m'));
        $tahun = $request->input('tahun', date('Y'));
        
        $user_id = auth()->id();

        // Calculate Stats
        $total_hadir = Presensi::where('user_id', $user_id)
            ->whereMonth('tanggal', $bulan)
            ->whereYear('tanggal', $tahun)
            ->whereNotNull('waktu_masuk')
            ->count();

        $total_terlambat = Presensi::where('user_id', $user_id)
            ->whereMonth('tanggal', $bulan)
            ->whereYear('tanggal', $tahun)
            ->where('status_masuk', 'Terlambat')
            ->count();

        $total_izin = IzinKeluar::where('user_id', $user_id)
            ->whereMonth('created_at', $bulan)
            ->whereYear('created_at', $tahun)
            ->where('status', 'Disetujui')
            ->count();

        // Approximate Alpa calculation based on weekdays passed
        $targetMonth = Carbon::createFromDate($tahun, $bulan, 1);
        $daysInMonth = $targetMonth->daysInMonth;
        
        $now = Carbon::now();
        $endDay = ($now->month == $bulan && $now->year == $tahun) ? $now->day : $daysInMonth;
        
        $weekdays = 0;
        for ($i = 1; $i <= $endDay; $i++) {
            $date = Carbon::createFromDate($tahun, $bulan, $i);
            if ($date->isWeekday()) {
                $weekdays++;
            }
        }
        
        $total_alpha = max(0, $weekdays - $total_hadir - $total_izin);

        // Attendance History Table
        $riwayat = Presensi::where('user_id', $user_id)
            ->whereMonth('tanggal', $bulan)
            ->whereYear('tanggal', $tahun)
            ->orderBy('tanggal', 'desc')
            ->paginate(10);
            
        $riwayat->appends(['bulan' => $bulan, 'tahun' => $tahun]);

        $izin_sebulan = IzinKeluar::where('user_id', $user_id)
            ->whereMonth('created_at', $bulan)
            ->whereYear('created_at', $tahun)
            ->where('status', 'Disetujui')
            ->get()
            ->keyBy(function($item) {
                return Carbon::parse($item->created_at)->toDateString();
            });

        // Cek Izin Aktif Hari Ini untuk Tombol Scanner Izin
        $izin_aktif = IzinKeluar::where('user_id', $user_id)
            ->whereDate('created_at', Carbon::today())
            ->where('status', 'Disetujui')
            ->whereNull('waktu_kembali')
            ->first();

        return view('guru.dashboard', compact(
            'bulan', 'tahun', 'total_hadir', 'total_terlambat', 'total_izin', 'total_alpha', 'riwayat', 'izin_sebulan', 'izin_aktif'
        ));
    }
}
