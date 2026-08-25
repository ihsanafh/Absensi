<x-app-layout>
    <!-- Page Header -->
    <div class="mb-stack-lg">
        <h1 class="font-h2 text-h2 text-on-surface mb-2">Riwayat Izin Keluar</h1>
        <p class="font-body-lg text-body-lg text-on-surface-variant">Arsip riwayat permohonan izin keluar guru beserta status persetujuannya.</p>
    </div>

    <!-- Filters Section -->
    <div class="bg-surface-container-lowest rounded-xl shadow-sm border border-outline-variant p-4 mb-stack-lg flex flex-wrap gap-4 items-end">
        <form action="{{ route('admin.izin.riwayat') }}" method="GET" class="w-full flex flex-wrap gap-4 items-end">
            <div class="flex-1 min-w-[200px]">
                <label class="block font-body-sm text-body-sm text-on-surface-variant mb-1">Cari Guru</label>
                <div class="relative">
                    <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline-variant text-[20px]">search</span>
                    <input name="search" value="{{ $search }}" class="w-full pl-10 pr-4 py-2 bg-surface border border-outline-variant rounded-lg font-body-md text-body-md text-on-surface focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-colors" placeholder="Nama guru..." type="text"/>
                </div>
            </div>
            
            <div class="min-w-[180px]">
                <label class="block font-body-sm text-body-sm text-on-surface-variant mb-1">Tanggal</label>
                <div class="relative">
                    <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline-variant text-[20px]">calendar_today</span>
                    <input type="date" name="tanggal" value="{{ $tanggal }}" class="w-full pl-10 pr-8 py-2 bg-surface border border-outline-variant rounded-lg font-body-md text-body-md text-on-surface focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary appearance-none transition-colors">
                </div>
            </div>
            
            <div class="min-w-[180px]">
                <label class="block font-body-sm text-body-sm text-on-surface-variant mb-1">Status</label>
                <select name="status" class="w-full px-4 py-2 bg-surface border border-outline-variant rounded-lg font-body-md text-body-md text-on-surface focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-colors">
                    <option value="">Semua Status</option>
                    <option value="Disetujui" {{ $status == 'Disetujui' ? 'selected' : '' }}>Disetujui</option>
                    <option value="Ditolak" {{ $status == 'Ditolak' ? 'selected' : '' }}>Ditolak</option>
                </select>
            </div>
            
            <button type="submit" class="px-6 py-2 bg-primary text-on-primary rounded-lg font-body-md text-body-md font-medium hover:bg-primary-container hover:text-on-primary-container transition-colors shadow-sm flex items-center gap-2">
                <span class="material-symbols-outlined text-[20px]">filter_list</span>
                Terapkan
            </button>
        </form>
    </div>

    <!-- Table Card -->
    <div class="bg-surface-container-lowest rounded-xl shadow-sm border border-outline-variant overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-surface-container-low border-b border-outline-variant">
                        <th class="py-4 px-6 font-body-sm text-body-sm font-semibold text-on-surface-variant uppercase tracking-wider">Nama Guru</th>
                        <th class="py-4 px-6 font-body-sm text-body-sm font-semibold text-on-surface-variant uppercase tracking-wider">Tanggal</th>
                        <th class="py-4 px-6 font-body-sm text-body-sm font-semibold text-on-surface-variant uppercase tracking-wider">Alasan</th>
                        <th class="py-4 px-6 font-body-sm text-body-sm font-semibold text-on-surface-variant uppercase tracking-wider">Waktu Keluar</th>
                        <th class="py-4 px-6 font-body-sm text-body-sm font-semibold text-on-surface-variant uppercase tracking-wider">Waktu Kembali</th>
                        <th class="py-4 px-6 font-body-sm text-body-sm font-semibold text-on-surface-variant uppercase tracking-wider">Estimasi Kembali</th>
                        <th class="py-4 px-6 font-body-sm text-body-sm font-semibold text-on-surface-variant uppercase tracking-wider">Status</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-outline-variant/50">
                    @forelse($izin_riwayat as $riwayat)
                    <tr class="hover:bg-surface-container-low/50 transition-colors">
                        <td class="py-4 px-6">
                            <div class="flex items-center gap-3">
                                <div class="w-8 h-8 rounded-full bg-primary/10 text-primary flex items-center justify-center font-bold font-body-sm uppercase">
                                    {{ substr($riwayat->user->nama_lengkap, 0, 2) }}
                                </div>
                                <span class="font-body-md text-body-md font-medium text-on-surface">{{ $riwayat->user->nama_lengkap }}</span>
                            </div>
                        </td>
                        <td class="py-4 px-6 font-body-md text-body-md text-on-surface-variant">{{ $riwayat->created_at->format('d M Y') }}</td>
                        <td class="py-4 px-6 font-body-md text-body-md text-on-surface-variant max-w-[200px] truncate" title="{{ $riwayat->alasan }}">{{ $riwayat->alasan }}</td>
                        <td class="py-4 px-6 font-label-mono text-label-mono text-on-surface">{{ $riwayat->waktu_izin ? \Carbon\Carbon::parse($riwayat->waktu_izin)->format('H:i') : '-' }}</td>
                        <td class="py-4 px-6 font-label-mono text-label-mono text-on-surface">
                            {{ $riwayat->waktu_kembali ? \Carbon\Carbon::parse($riwayat->waktu_kembali)->format('H:i') : '-' }}
                        </td>
                        <td class="py-4 px-6 font-label-mono text-label-mono text-on-surface-variant">
                            {{ $riwayat->estimasi_kembali ? \Carbon\Carbon::parse($riwayat->estimasi_kembali)->format('H:i') : 'Tidak Kembali' }}
                        </td>
                        <td class="py-4 px-6">
                            @if($riwayat->status == 'Disetujui')
                                <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-tertiary-container/20 text-tertiary font-body-sm text-body-sm font-medium border border-tertiary-container/30">
                                    <span class="w-1.5 h-1.5 rounded-full bg-tertiary"></span> Disetujui
                                </span>
                            @else
                                <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-error-container text-on-error-container font-body-sm text-body-sm font-medium border border-error-container/50">
                                    <span class="w-1.5 h-1.5 rounded-full bg-error"></span> Ditolak
                                </span>
                            @endif
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6" class="py-4 px-6 text-center font-body-md text-body-md text-on-surface-variant">Tidak ada data riwayat izin yang ditemukan.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        
        <!-- Pagination -->
        @if($izin_riwayat->hasPages())
        <div class="px-6 py-4 border-t border-outline-variant flex items-center justify-between bg-surface-container-lowest">
            {{ $izin_riwayat->appends(['search' => $search, 'status' => $status, 'tanggal' => $tanggal])->links() }}
        </div>
        @endif
    </div>
</x-app-layout>
