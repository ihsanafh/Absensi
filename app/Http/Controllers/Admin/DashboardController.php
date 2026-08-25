<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Presensi;
use App\Models\IzinKeluar;
use App\Models\User;
use Carbon\Carbon;

class DashboardController extends Controller
{
    public function index()
    {
        $today = Carbon::today()->toDateString();
        
        $log_presensi = Presensi::with('user')
            ->where('tanggal', $today)
            ->orderBy('updated_at', 'desc')
            ->get();

        return view('admin.dashboard', compact('log_presensi'));
    }

    public function stats()
    {
        $today = Carbon::today()->toDateString();

        $total_hadir = Presensi::where('tanggal', $today)->whereNotNull('waktu_masuk')->count();
        $total_terlambat = Presensi::where('tanggal', $today)->where('status_masuk', 'Terlambat')->count();
        $total_izin = IzinKeluar::whereDate('created_at', $today)->where('status', 'Disetujui')->count();
        
        $total_guru = User::where('role', 'Guru')->count();
        $total_belum_hadir = max(0, $total_guru - $total_hadir - $total_izin);

        return response()->json([
            'total_hadir' => $total_hadir,
            'total_terlambat' => $total_terlambat,
            'total_izin' => $total_izin,
            'total_belum_hadir' => $total_belum_hadir
        ]);
    }
}
