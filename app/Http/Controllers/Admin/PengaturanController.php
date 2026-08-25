<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Pengaturan;

class PengaturanController extends Controller
{
    public function index()
    {
        $settings = Pengaturan::pluck('value', 'key')->toArray();
        return view('admin.pengaturan.index', compact('settings'));
    }

    public function update(Request $request)
    {
        $data = $request->validate([
            'nama_sekolah' => 'required|string|max:255',
            'jam_masuk' => 'required|date_format:H:i',
            'jam_pulang' => 'required|date_format:H:i',
            'toleransi_keterlambatan' => 'required|integer|min:0',
            'durasi_qr' => 'required|integer|min:10|max:120',
        ]);

        foreach ($data as $key => $value) {
            Pengaturan::updateOrCreate(['key' => $key], ['value' => $value]);
        }

        \App\Models\LogAktivitas::catat('Memperbarui Pengaturan Sistem');

        return redirect()->route('admin.pengaturan.index')->with('success', 'Pengaturan Berhasil Disimpan');
    }
}
