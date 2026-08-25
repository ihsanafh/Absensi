<x-app-layout>
    <div class="mb-stack-lg">
        <h1 class="font-h2 text-h2 text-on-surface mb-2">Log Aktivitas</h1>
        <p class="font-body-md text-body-md text-on-surface-variant">Pantau rekaman aktivitas seluruh pengguna di dalam sistem.</p>
    </div>

    <!-- Filters -->
    <div class="bg-surface-container-lowest rounded-xl shadow-sm border border-outline-variant p-4 mb-stack-lg flex flex-wrap gap-4 items-end">
        <form action="{{ route('admin.log.index') }}" method="GET" class="w-full flex flex-wrap gap-4 items-end">
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
                    <option value="Berhasil" {{ $status == 'Berhasil' ? 'selected' : '' }}>Berhasil</option>
                    <option value="Gagal" {{ $status == 'Gagal' ? 'selected' : '' }}>Gagal</option>
                </select>
            </div>
            
            <button type="submit" class="px-6 py-2 bg-primary text-on-primary rounded-lg font-body-md text-body-md font-medium hover:bg-primary-container transition-colors shadow-sm flex items-center gap-2">
                <span class="material-symbols-outlined text-[20px]">filter_list</span>
                Terapkan
            </button>
        </form>
    </div>

    <!-- Table -->
    <div class="bg-surface-container-lowest rounded-xl shadow-sm border border-outline-variant overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-surface-container-low border-b border-outline-variant">
                        <th class="py-4 px-6 font-body-sm text-body-sm font-semibold text-on-surface-variant uppercase tracking-wider">Waktu</th>
                        <th class="py-4 px-6 font-body-sm text-body-sm font-semibold text-on-surface-variant uppercase tracking-wider">Pengguna</th>
                        <th class="py-4 px-6 font-body-sm text-body-sm font-semibold text-on-surface-variant uppercase tracking-wider">Aktivitas</th>
                        <th class="py-4 px-6 font-body-sm text-body-sm font-semibold text-on-surface-variant uppercase tracking-wider">Status</th>
                        <th class="py-4 px-6 font-body-sm text-body-sm font-semibold text-on-surface-variant uppercase tracking-wider">Perangkat Info</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-outline-variant/50">
                    @forelse($logs as $log)
                    <tr class="hover:bg-surface-container-low/50 transition-colors">
                        <td class="py-4 px-6 font-label-mono text-label-mono text-on-surface">{{ $log->created_at->format('d/m/Y H:i:s') }}</td>
                        <td class="py-4 px-6 font-body-md text-body-md text-on-surface font-semibold">
                            {{ $log->user ? $log->user->nama_lengkap : 'Sistem/Guest' }}
                            @if($log->user)
                                <span class="block font-body-sm text-body-sm text-on-surface-variant font-normal">{{ $log->user->role }}</span>
                            @endif
                        </td>
                        <td class="py-4 px-6 font-body-md text-body-md text-on-surface-variant">{{ $log->aktivitas }}</td>
                        <td class="py-4 px-6">
                            @if($log->status == 'Berhasil')
                                <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-primary-container/20 text-primary font-body-sm text-body-sm font-medium">
                                    <span class="w-1.5 h-1.5 rounded-full bg-primary"></span> Berhasil
                                </span>
                            @else
                                <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-error-container text-on-error-container font-body-sm text-body-sm font-medium">
                                    <span class="w-1.5 h-1.5 rounded-full bg-error"></span> {{ $log->status }}
                                </span>
                            @endif
                        </td>
                        <td class="py-4 px-6 font-body-sm text-body-sm text-on-surface-variant max-w-[200px] truncate" title="{{ $log->device_info }}">{{ $log->device_info }}</td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="5" class="py-4 px-6 text-center font-body-md text-body-md text-on-surface-variant">Tidak ada log aktivitas.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        
        @if($logs->hasPages())
        <div class="px-6 py-4 border-t border-outline-variant flex justify-end bg-surface-container-lowest">
            {{ $logs->appends(['tanggal' => $tanggal, 'status' => $status])->links() }}
        </div>
        @endif
    </div>
</x-app-layout>
