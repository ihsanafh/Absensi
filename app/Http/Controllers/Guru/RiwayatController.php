<?php

namespace App\Http\Controllers\Guru;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Presensi;
use App\Models\IzinKeluar;
use Carbon\Carbon;

class RiwayatController extends Controller
{
    public function index(Request $request)
    {
        $bulan = (int) $request->input('bulan', date('m'));
        $tahun = (int) $request->input('tahun', date('Y'));
        
        $user = auth()->user();
        
        $riwayat = Presensi::where('user_id', $user->id)
            ->whereMonth('tanggal', $bulan)
            ->whereYear('tanggal', $tahun)
            ->orderBy('tanggal', 'desc')
            ->paginate(10);
            
        // Izin Keluar in the month
        $izin_sebulan = IzinKeluar::where('user_id', $user->id)
            ->whereMonth('created_at', $bulan)
            ->whereYear('created_at', $tahun)
            ->where('status', 'Disetujui')
            ->get()
            ->keyBy(function($item) {
                return $item->created_at->format('Y-m-d');
            });

        return view('guru.riwayat.index', compact('riwayat', 'izin_sebulan', 'bulan', 'tahun'));
    }
}
