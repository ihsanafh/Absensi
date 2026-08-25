<x-app-layout>
    <div x-data="{
        stats: {
            total_hadir: '--',
            total_terlambat: '--',
            total_izin: '--',
            total_belum_hadir: '--'
        },
        fetchStats() {
            fetch('{{ route('admin.dashboard.stats') }}')
                .then(response => response.json())
                .then(data => {
                    this.stats = data;
                })
                .catch(error => console.error('Error fetching stats:', error));
        }
    }" x-init="fetchStats(); setInterval(() => fetchStats(), 15000)">
    
    <div class="mb-stack-lg">
        <h1 class="font-h2 text-h2 text-on-surface mb-2">Dashboard Admin</h1>
        <p class="font-body-md text-body-md text-on-surface-variant">Ringkasan presensi harian secara real-time.</p>
    </div>

    <!-- Stats Grid (Bento) -->
    <div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-4 mb-stack-lg">
        <div class="bg-surface-container-lowest rounded-xl p-4 border border-outline-variant/30 shadow-sm flex flex-col relative overflow-hidden group">
            <div class="absolute -right-4 -top-4 w-16 h-16 bg-primary/5 rounded-full group-hover:scale-150 transition-transform duration-500"></div>
            <div class="flex items-center justify-between mb-4">
                <h3 class="font-body-md text-on-surface-variant font-medium">Total Hadir</h3>
                <div class="p-2 bg-primary/10 rounded-lg text-primary">
                    <span class="material-symbols-outlined" data-icon="check_circle">check_circle</span>
                </div>
            </div>
            <div class="flex items-baseline gap-2">
                <span class="font-h2 text-h2 text-on-surface" x-text="stats.total_hadir">--</span>
                <span class="text-body-sm text-on-surface-variant">Guru</span>
            </div>
        </div>

        <div class="bg-surface-container-lowest rounded-xl p-4 border border-outline-variant/30 shadow-sm flex flex-col relative overflow-hidden group">
            <div class="absolute -right-4 -top-4 w-16 h-16 bg-secondary-container/10 rounded-full group-hover:scale-150 transition-transform duration-500"></div>
            <div class="flex items-center justify-between mb-4">
                <h3 class="font-body-md text-on-surface-variant font-medium">Terlambat</h3>
                <div class="p-2 bg-secondary-container/20 rounded-lg text-secondary">
                    <span class="material-symbols-outlined" data-icon="schedule">schedule</span>
                </div>
            </div>
            <div class="flex items-baseline gap-2">
                <span class="font-h2 text-h2 text-on-surface" x-text="stats.total_terlambat">--</span>
                <span class="text-body-sm text-on-surface-variant">Guru</span>
            </div>
        </div>
        
        <div class="bg-surface-container-lowest rounded-xl p-4 border border-outline-variant/30 shadow-sm flex flex-col relative overflow-hidden group">
            <div class="absolute -right-4 -top-4 w-16 h-16 bg-blue-500/5 rounded-full group-hover:scale-150 transition-transform duration-500"></div>
            <div class="flex items-center justify-between mb-4">
                <h3 class="font-body-md text-on-surface-variant font-medium">Izin Disetujui</h3>
                <div class="p-2 bg-blue-500/10 rounded-lg text-blue-700">
                    <span class="material-symbols-outlined" data-icon="assignment_return">assignment_return</span>
                </div>
            </div>
            <div class="flex items-baseline gap-2">
                <span class="font-h2 text-h2 text-on-surface" x-text="stats.total_izin">--</span>
                <span class="text-body-sm text-on-surface-variant">Guru</span>
            </div>
        </div>

        <div class="bg-surface-container-lowest rounded-xl p-4 border border-outline-variant/30 shadow-sm flex flex-col relative overflow-hidden group">
            <div class="absolute -right-4 -top-4 w-16 h-16 bg-error/5 rounded-full group-hover:scale-150 transition-transform duration-500"></div>
            <div class="flex items-center justify-between mb-4">
                <h3 class="font-body-md text-on-surface-variant font-medium">Belum Hadir (Alpha)</h3>
                <div class="p-2 bg-error/10 rounded-lg text-error">
                    <span class="material-symbols-outlined" data-icon="cancel">cancel</span>
                </div>
            </div>
            <div class="flex items-baseline gap-2">
                <span class="font-h2 text-h2 text-on-surface" x-text="stats.total_belum_hadir">--</span>
                <span class="text-body-sm text-on-surface-variant">Guru</span>
            </div>
        </div>
    </div>

    <!-- Tabel Log Presensi Terkini -->
    <h3 class="font-h3 text-h3 font-bold text-on-surface mb-4">Log Presensi Terkini (Hari Ini)</h3>
    <div class="bg-surface-container-lowest rounded-xl shadow-sm border border-outline-variant overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-surface-container-low border-b border-outline-variant">
                        <th class="py-4 px-6 font-body-sm text-body-sm font-semibold text-on-surface-variant uppercase tracking-wider">Nama Guru</th>
                        <th class="py-4 px-6 font-body-sm text-body-sm font-semibold text-on-surface-variant uppercase tracking-wider">Waktu Masuk</th>
                        <th class="py-4 px-6 font-body-sm text-body-sm font-semibold text-on-surface-variant uppercase tracking-wider">Status Masuk</th>
                        <th class="py-4 px-6 font-body-sm text-body-sm font-semibold text-on-surface-variant uppercase tracking-wider">Waktu Keluar</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-outline-variant/50">
                    @forelse($log_presensi as $log)
                        <tr class="hover:bg-surface-container-low/50 transition-colors">
                            <td class="py-4 px-6 font-body-md text-body-md text-on-surface font-semibold">{{ $log->user->nama_lengkap }}</td>
                            <td class="py-4 px-6 font-label-mono text-label-mono text-on-surface">{{ $log->waktu_masuk ? \Carbon\Carbon::parse($log->waktu_masuk)->format('H:i:s') : '-' }}</td>
                            <td class="py-4 px-6">
                                @if($log->status_masuk == 'Tepat Waktu')
                                    <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-primary-container/20 text-primary font-body-sm text-body-sm font-medium border border-primary-container/30">
                                        <span class="w-1.5 h-1.5 rounded-full bg-primary"></span> Tepat Waktu
                                    </span>
                                @elseif($log->status_masuk == 'Terlambat')
                                    <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-secondary-container/20 text-secondary font-body-sm text-body-sm font-medium border border-secondary-container/30">
                                        <span class="w-1.5 h-1.5 rounded-full bg-secondary"></span> Terlambat
                                    </span>
                                @else
                                    -
                                @endif
                            </td>
                            <td class="py-4 px-6 font-label-mono text-label-mono text-on-surface">{{ $log->waktu_keluar ? \Carbon\Carbon::parse($log->waktu_keluar)->format('H:i:s') : '-' }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="py-4 px-6 text-center font-body-md text-body-md text-on-surface-variant">Belum ada aktivitas presensi hari ini.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
    
    </div>
</x-app-layout>
