<x-app-layout>
    <x-slot name="header">Manajemen Akun Guru</x-slot>

    <!-- Header Section -->
    <div class="flex flex-col md:flex-row md:items-center justify-between mb-stack-lg gap-stack-md">
        <div>
            <h2 class="font-h2 text-h2 font-semibold text-on-surface mb-1">Manajemen Akun Guru</h2>
            <p class="font-body-sm text-body-sm text-on-surface-variant">Kelola data dan akses akun seluruh guru MI AL-Faizein.</p>
        </div>
        <a href="{{ route('admin.guru.create') }}" class="bg-primary hover:bg-primary-container text-on-primary px-6 py-2.5 rounded-lg shadow-sm flex items-center justify-center gap-2 font-body-md text-body-md font-medium transition-colors w-full md:w-auto">
            <span class="material-symbols-outlined" data-icon="add">add</span>
            Tambah Guru
        </a>
    </div>

    @if (session('success'))
        <div class="bg-primary-container/20 border border-primary-container text-on-primary-container px-4 py-3 rounded-lg mb-4 flex items-center gap-2">
            <span class="material-symbols-outlined">check_circle</span>
            {{ session('success') }}
        </div>
    @endif

    <!-- Controls Section -->
    <div class="bg-surface rounded-xl shadow-sm border border-outline-variant p-4 mb-stack-md flex flex-col sm:flex-row gap-4 items-center justify-between">
        <form method="GET" action="{{ route('admin.guru.index') }}" class="relative w-full sm:w-96 flex gap-2">
            <div class="relative flex-1">
                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                    <span class="material-symbols-outlined text-outline" data-icon="search">search</span>
                </div>
                <input type="text" name="search" value="{{ request('search') }}" class="pl-10 pr-4 py-2 w-full border border-outline-variant rounded-lg focus:ring-2 focus:ring-primary focus:border-primary font-body-md text-body-md bg-surface text-on-surface placeholder-on-surface-variant/60 transition-all" placeholder="Cari nama atau NIP...">
            </div>
            <button type="submit" class="bg-primary text-on-primary px-4 py-2 rounded-lg font-medium hover:bg-primary-container transition-colors">Cari</button>
        </form>
    </div>

    <!-- Data Table Card -->
    <div class="bg-surface rounded-xl shadow-sm border border-outline-variant overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="border-b border-outline-variant bg-surface-container-lowest">
                        <th class="py-4 px-6 font-body-sm text-body-sm font-semibold text-on-surface-variant">Profil</th>
                        <th class="py-4 px-6 font-body-sm text-body-sm font-semibold text-on-surface-variant">NIP</th>
                        <th class="py-4 px-6 font-body-sm text-body-sm font-semibold text-on-surface-variant">Kontak</th>
                        <th class="py-4 px-6 font-body-sm text-body-sm font-semibold text-on-surface-variant text-center">Status Akun</th>
                        <th class="py-4 px-6 font-body-sm text-body-sm font-semibold text-on-surface-variant text-right">Aksi</th>
                    </tr>
                </thead>
                <tbody class="font-body-sm text-body-sm text-on-surface">
                    @forelse($gurus as $guru)
                    <tr class="border-b border-outline-variant hover:bg-surface-container-low transition-colors {{ $guru->trashed() ? 'opacity-50' : '' }}">
                        <td class="py-3 px-6 flex items-center gap-3">
                            <div class="w-10 h-10 rounded-full bg-primary/10 text-primary flex items-center justify-center font-bold text-lg">
                                {{ strtoupper(substr($guru->nama_lengkap ?? $guru->username, 0, 1)) }}
                            </div>
                            <div>
                                <p class="font-medium text-on-surface">{{ $guru->nama_lengkap }}</p>
                                <p class="text-[12px] text-on-surface-variant">{{ $guru->username }}</p>
                            </div>
                        </td>
                        <td class="py-3 px-6 font-label-mono text-label-mono text-on-surface-variant">
                            {{ $guru->nip ?? '-' }}
                        </td>
                        <td class="py-3 px-6 text-on-surface-variant">
                            {{ $guru->email ?? '-' }}<br>
                            <span class="text-[12px]">{{ $guru->no_telepon ?? '-' }}</span>
                        </td>
                        <td class="py-3 px-6 text-center">
                            @if($guru->trashed())
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-error/10 text-error">Dihapus</span>
                            @elseif($guru->status_akun === 'aktif')
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-primary-fixed text-on-primary-fixed-variant">Aktif</span>
                            @else
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-surface-variant text-on-surface-variant">Nonaktif</span>
                            @endif
                        </td>
                        <td class="py-3 px-6 text-right">
                            <div class="flex items-center justify-end gap-2">
                                <a href="{{ route('admin.guru.edit', $guru->id) }}" class="text-on-surface-variant hover:text-primary p-1 rounded hover:bg-surface-variant transition-colors" title="Edit">
                                    <span class="material-symbols-outlined text-[20px]" data-icon="edit">edit</span>
                                </a>
                                @if($guru->trashed())
                                    <form action="{{ route('admin.guru.restore', $guru->id) }}" method="POST" @submit.prevent="$dispatch('open-confirm-modal', {
                                        title: 'Konfirmasi Pemulihan',
                                        message: 'Apakah Anda yakin ingin memulihkan akun ini?',
                                        actionUrl: $el.action,
                                        method: 'PATCH',
                                        confirmText: 'Ya, Pulihkan'
                                    })">
                                        @csrf
                                        @method('PATCH')
                                        <button type="submit" class="text-on-surface-variant hover:text-primary p-1 rounded hover:bg-surface-variant transition-colors" title="Pulihkan">
                                            <span class="material-symbols-outlined text-[20px]">restore</span>
                                        </button>
                                    </form>
                                @else
                                    <form action="{{ route('admin.guru.destroy', $guru->id) }}" method="POST" @submit.prevent="$dispatch('open-confirm-modal', {
                                        title: 'Konfirmasi Penghapusan',
                                        message: 'Apakah Anda yakin ingin menghapus/menonaktifkan akun ini?',
                                        actionUrl: $el.action,
                                        method: 'DELETE',
                                        confirmText: 'Ya, Hapus'
                                    })">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-on-surface-variant hover:text-error p-1 rounded hover:bg-surface-variant transition-colors" title="Hapus">
                                            <span class="material-symbols-outlined text-[20px]" data-icon="delete">delete</span>
                                        </button>
                                    </form>
                                @endif
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="py-6 px-6 text-center text-on-surface-variant font-body-sm">
                            Tidak ada data guru ditemukan.
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        <div class="bg-surface-container-lowest px-6 py-4 border-t border-outline-variant flex items-center justify-between sm:px-6">
            {{ $gurus->withQueryString()->links('pagination::tailwind') }}
        </div>
    </div>
</x-app-layout>
