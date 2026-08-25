<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Presensi;
use App\Models\User;
use Carbon\Carbon;

class DataPresensiController extends Controller
{
    public function index(Request $request)
    {
        $tanggal = $request->input('tanggal', Carbon::today()->toDateString());
        $guru_id = $request->input('guru_id', '');
        $status_masuk = $request->input('status_masuk', '');

        $query = Presensi::with('user')->where('tanggal', $tanggal);

        if ($guru_id) {
            $query->where('user_id', $guru_id);
        }

        if ($status_masuk) {
            if ($status_masuk == 'hadir') {
                $query->whereIn('status_masuk', ['Tepat Waktu']);
            } elseif ($status_masuk == 'terlambat') {
                $query->where('status_masuk', 'Terlambat');
            }
        }

        $presensis = $query->paginate(15);
        
        $userIds = $presensis->pluck('user_id');
        $izins = \App\Models\IzinKeluar::whereIn('user_id', $userIds)
            ->whereDate('created_at', $tanggal)
            ->where('status', 'Disetujui')
            ->get()
            ->keyBy('user_id');

        $gurus = User::where('role', 'Guru')->orderBy('nama_lengkap')->get();

        return view('admin.presensi.index', compact('presensis', 'gurus', 'tanggal', 'guru_id', 'status_masuk', 'izins'));
    }
}
