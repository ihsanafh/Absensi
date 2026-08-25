<x-app-layout>
    <div class="mb-stack-lg flex flex-col md:flex-row md:items-end justify-between gap-4">
        <div>
            <h1 class="text-3xl font-semibold text-gray-800 mb-2">Data Presensi Harian</h1>
            <p class="text-gray-600">Kelola dan pantau kehadiran guru setiap hari.</p>
        </div>
    </div>

    <!-- Filters & Actions -->
    <div class="bg-white p-6 rounded-xl shadow-sm border border-gray-100 flex flex-wrap gap-4 items-end mb-stack-lg">
        <form action="{{ route('admin.presensi.index') }}" method="GET" class="w-full flex flex-wrap gap-4 items-end">
            <div class="flex flex-col gap-2 w-full md:w-auto flex-1 max-w-xs">
                <label class="block text-sm font-medium text-gray-700">Tanggal</label>
                <div class="relative">
                    <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-gray-500">calendar_today</span>
                    <input name="tanggal" type="date" value="{{ $tanggal }}" class="w-full h-11 pl-10 pr-4 py-2.5 text-sm border border-gray-300 rounded-lg bg-white shadow-sm focus:ring-green-500 focus:border-green-500 transition-colors"/>
                </div>
            </div>
            
            <div class="flex flex-col gap-2 w-full md:w-auto flex-1 max-w-xs">
                <label class="block text-sm font-medium text-gray-700">Nama Guru</label>
                <select name="guru_id" class="w-full h-11 px-4 py-2.5 text-sm border border-gray-300 rounded-lg bg-white shadow-sm focus:ring-green-500 focus:border-green-500 appearance-none cursor-pointer transition-colors">
                    <option value="">Semua Guru</option>
                    @foreach($gurus as $guru)
                        <option value="{{ $guru->id }}" {{ $guru_id == $guru->id ? 'selected' : '' }}>{{ $guru->nama_lengkap }}</option>
                    @endforeach
                </select>
            </div>
            
            <div class="flex flex-col gap-2 w-full md:w-auto flex-1 max-w-xs">
                <label class="block text-sm font-medium text-gray-700">Status Kehadiran</label>
                <select name="status_masuk" class="w-full h-11 px-4 py-2.5 text-sm border border-gray-300 rounded-lg bg-white shadow-sm focus:ring-green-500 focus:border-green-500 appearance-none cursor-pointer transition-colors">
                    <option value="">Semua Status</option>
                    <option value="hadir" {{ $status_masuk == 'hadir' ? 'selected' : '' }}>Tepat Waktu</option>
                    <option value="terlambat" {{ $status_masuk == 'terlambat' ? 'selected' : '' }}>Terlambat</option>
                </select>
            </div>
            
            <div class="w-full md:w-auto mt-4 md:mt-0 flex gap-2">
                <button type="submit" class="w-full md:w-auto flex items-center justify-center gap-2 h-11 px-6 rounded-lg bg-green-700 text-white hover:bg-green-800 transition-colors font-medium">
                    <span class="material-symbols-outlined">filter_list</span>
                    Filter
                </button>
            </div>
        </form>
    </div>

    <!-- Data Table -->
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse whitespace-nowrap">
                <thead>
                    <tr class="border-b border-gray-200 bg-gray-50 text-gray-600">
                        <th class="p-4 text-sm font-semibold">Nama Guru</th>
                        <th class="p-4 text-sm font-semibold">Masuk Absen</th>
                        <th class="p-4 text-sm font-semibold">Pulang Absen</th>
                        <th class="p-4 text-sm font-semibold">Keterangan Presensi</th>
                        <th class="p-4 text-sm font-semibold">Keluar Izin</th>
                        <th class="p-4 text-sm font-semibold">Kembali Izin</th>
                        <th class="p-4 text-sm font-semibold">Keterangan Izin</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200 text-gray-800">
                    @forelse($presensis as $presensi)
                    @php $izin = $izins->get($presensi->user_id); @endphp
                    <tr class="hover:bg-gray-50 transition-colors">
                        <td class="p-4 flex items-center gap-3">
                            <div class="w-8 h-8 rounded-full bg-gray-100 flex items-center justify-center text-gray-600 font-bold text-sm uppercase">
                                {{ substr($presensi->user->nama_lengkap, 0, 2) }}
                            </div>
                            <span class="font-medium">{{ $presensi->user->nama_lengkap }}</span>
                        </td>
                        <td class="p-4">{{ $presensi->waktu_masuk ? \Carbon\Carbon::parse($presensi->waktu_masuk)->format('H:i') . ' WIB' : '-' }}</td>
                        <td class="p-4">{{ $presensi->waktu_keluar ? \Carbon\Carbon::parse($presensi->waktu_keluar)->format('H:i') . ' WIB' : '-' }}</td>
                        <td class="p-4">
                            @if($presensi->status_masuk == 'Tepat Waktu')
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-green-100 text-green-800 border border-green-200">
                                    Tepat Waktu
                                </span>
                            @elseif($presensi->status_masuk == 'Terlambat')
                                <span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-yellow-100 text-yellow-800 border border-yellow-200">
                                    Terlambat
                                </span>
                            @else
                                <span class="text-gray-500">-</span>
                            @endif
                        </td>
                        <td class="p-4">
                            {{ $izin && $izin->waktu_izin ? \Carbon\Carbon::parse($izin->waktu_izin)->format('H:i') . ' WIB' : '-' }}
                        </td>
                        <td class="p-4">
                            {{ $izin && $izin->waktu_kembali ? \Carbon\Carbon::parse($izin->waktu_kembali)->format('H:i') . ' WIB' : '-' }}
                        </td>
                        <td class="p-4 text-gray-500 max-w-[200px] truncate" title="{{ $izin ? $izin->alasan : '' }}">
                            {{ $izin ? $izin->alasan : '-' }}
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="7" class="p-4 text-center text-on-surface-variant">Tidak ada data presensi yang ditemukan.</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        
        <!-- Pagination -->
        @if($presensis->hasPages())
        <div class="border-t border-gray-200 p-4 flex justify-end bg-gray-50">
            {{ $presensis->appends(['tanggal' => $tanggal, 'guru_id' => $guru_id, 'status_masuk' => $status_masuk])->links() }}
        </div>
        @endif
    </div>
</x-app-layout>
