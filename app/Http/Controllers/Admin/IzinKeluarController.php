<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\IzinKeluar;

class IzinKeluarController extends Controller
{
    public function index()
    {
        $izin_menunggu = IzinKeluar::with('user')
            ->where('status', 'Menunggu')
            ->orderBy('created_at', 'asc')
            ->get();

        return view('admin.izin.index', compact('izin_menunggu'));
    }

    public function riwayat(Request $request)
    {
        $status = $request->input('status', '');
        $search = $request->input('search', '');
        $tanggal = $request->input('tanggal', '');

        $query = IzinKeluar::with('user')->where('status', '!=', 'Menunggu');

        if ($status) {
            $query->where('status', $status);
        }

        if ($tanggal) {
            $query->whereDate('created_at', $tanggal);
        }
        
        if ($search) {
            $query->whereHas('user', function($q) use ($search) {
                $q->where('nama_lengkap', 'like', '%'.$search.'%');
            });
        }

        $izin_riwayat = $query->orderBy('created_at', 'desc')->paginate(10);

        return view('admin.izin.riwayat', compact('izin_riwayat', 'status', 'search', 'tanggal'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'status' => 'required|in:Disetujui,Ditolak'
        ]);

        $izin = IzinKeluar::findOrFail($id);
        $izin->update([
            'status' => $request->status
        ]);

        return redirect()->route('admin.izin.index')->with('success', 'Sukses: Status permohonan izin berhasil diperbarui.');
    }
}
