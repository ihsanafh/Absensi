<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class GuruController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = User::where('role', 'guru')->withTrashed();

        if ($request->has('search')) {
            $search = $request->input('search');
            $query->where(function($q) use ($search) {
                $q->where('nama_lengkap', 'like', "%{$search}%")
                  ->orWhere('nip', 'like', "%{$search}%");
            });
        }

        $gurus = $query->paginate(10);
        return view('admin.guru.index', compact('gurus'));
    }

    public function create()
    {
        return view('admin.guru.create');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'nama_lengkap' => ['required', 'string', 'max:150'],
            'nip' => ['required', 'string', 'max:30', 'unique:users'],
            'email' => ['nullable', 'email', 'max:150', 'unique:users'],
            'no_telepon' => ['nullable', 'string', 'max:30'],
            'username' => ['required', 'string', 'max:50', 'unique:users'],
            'password' => ['required', 'string', 'min:8'],
            'status_akun' => ['required', 'in:aktif,nonaktif'],
        ]);

        $validated['password'] = \Illuminate\Support\Facades\Hash::make($validated['password']);
        $validated['role'] = 'guru';

        User::create($validated);

        return redirect()->route('admin.guru.index')->with('success', 'Sukses: Akun pengguna baru berhasil dibuat.');
    }

    public function edit(User $guru)
    {
        return view('admin.guru.edit', compact('guru'));
    }

    public function update(Request $request, User $guru)
    {
        $validated = $request->validate([
            'nama_lengkap' => ['required', 'string', 'max:150'],
            'nip' => ['required', 'string', 'max:30', 'unique:users,nip,'.$guru->id],
            'email' => ['nullable', 'email', 'max:150', 'unique:users,email,'.$guru->id],
            'no_telepon' => ['nullable', 'string', 'max:30'],
            'username' => ['required', 'string', 'max:50', 'unique:users,username,'.$guru->id],
            'password' => ['nullable', 'string', 'min:8'],
            'status_akun' => ['required', 'in:aktif,nonaktif'],
        ]);

        if (!empty($validated['password'])) {
            $validated['password'] = \Illuminate\Support\Facades\Hash::make($validated['password']);
        } else {
            unset($validated['password']);
        }

        $guru->update($validated);

        return redirect()->route('admin.guru.index')->with('success', 'Sukses: Data akun berhasil diperbarui.');
    }

    public function destroy(User $guru)
    {
        $guru->delete();
        return redirect()->route('admin.guru.index')->with('success', 'Sukses: Akun berhasil dihapus permanen.');
    }

    public function restore($id)
    {
        $guru = User::withTrashed()->findOrFail($id);
        $guru->restore();
        return redirect()->route('admin.guru.index')->with('success', 'Akun guru berhasil dipulihkan.');
    }
}
