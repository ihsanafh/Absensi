<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\LogAktivitas;
use Carbon\Carbon;

class LogAktivitasController extends Controller
{
    public function index(Request $request)
    {
        $tanggal = $request->input('tanggal', Carbon::today()->toDateString());
        $status = $request->input('status', '');
        
        $query = LogAktivitas::with('user')->orderBy('created_at', 'desc');

        if ($tanggal) {
            $query->whereDate('created_at', $tanggal);
        }

        if ($status) {
            $query->where('status', $status);
        }

        $logs = $query->paginate(20);

        return view('admin.log.index', compact('logs', 'tanggal', 'status'));
    }
}
