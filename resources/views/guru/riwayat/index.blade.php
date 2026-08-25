<x-app-layout>
    <!-- Page Header & Tab Switcher -->
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-4 mb-stack-lg">
        <div>
            <h2 class="text-3xl font-semibold text-gray-800">Riwayat Kehadiran</h2>
            <p class="text-gray-600 mt-1">Pantau statistik dan detail kehadiran Anda.</p>
        </div>
    </div>

    <!-- Filter Form -->
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 mb-stack-lg flex flex-wrap gap-4 items-end">
        <form action="{{ route('guru.riwayat.index') }}" method="GET" class="w-full flex flex-wrap gap-4 items-end">
            <div class="min-w-[180px] flex-1">
                <label for="bulan" class="block text-sm font-medium text-gray-700 mb-1">Bulan</label>
                <div class="relative">
                    <select id="bulan" name="bulan" class="w-full h-11 px-4 py-2.5 text-sm border border-gray-300 rounded-lg bg-white shadow-sm focus:ring-green-500 focus:border-green-500 appearance-none cursor-pointer transition-colors">
                        @foreach(range(1, 12) as $m)
                            <option value="{{ str_pad($m, 2, '0', STR_PAD_LEFT) }}" {{ $bulan == $m ? 'selected' : '' }}>
                                {{ \Carbon\Carbon::create()->month($m)->translatedFormat('F') }}
                            </option>
                        @endforeach
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-gray-500">
                        <span class="material-symbols-outlined">expand_more</span>
                    </div>
                </div>
            </div>
            <div class="min-w-[150px] flex-1">
                <label for="tahun" class="block text-sm font-medium text-gray-700 mb-1">Tahun</label>
                <div class="relative">
                    <select id="tahun" name="tahun" class="w-full h-11 px-4 py-2.5 text-sm border border-gray-300 rounded-lg bg-white shadow-sm focus:ring-green-500 focus:border-green-500 appearance-none cursor-pointer transition-colors">
                        @foreach(range(date('Y')-2, date('Y')) as $y)
                            <option value="{{ $y }}" {{ $tahun == $y ? 'selected' : '' }}>{{ $y }}</option>
                        @endforeach
                    </select>
                    <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-gray-500">
                        <span class="material-symbols-outlined">expand_more</span>
                    </div>
                </div>
            </div>
            <button type="submit" class="h-11 px-6 bg-green-700 text-white rounded-lg font-medium hover:bg-green-800 transition-colors shadow-sm flex items-center gap-2">
                <span class="material-symbols-outlined text-[20px]">filter_list</span>
                Terapkan
            </button>
        </form>
    </div>

    <!-- Table Data -->
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden">
        <div class="p-6 border-b border-gray-200 flex justify-between items-center">
            <h3 class="text-xl font-bold text-gray-800">Detail Kehadiran - {{ \Carbon\Carbon::create()->month((int) $bulan)->translatedFormat('F') }} {{ $tahun }}</h3>
        </div>
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-gray-50 text-gray-600 text-sm border-b border-gray-200">
                        <th class="py-4 px-6 font-medium">Tanggal</th>
                        <th class="py-4 px-6 font-medium">Jam Masuk</th>
                        <th class="py-4 px-6 font-medium">Jam Keluar</th>
                        <th class="py-4 px-6 font-medium">Status</th>
                    </tr>
                </thead>
                <tbody class="text-sm text-gray-800">
                    @forelse($riwayat as $log)
                        @php
                            $izinHariIni = $izin_sebulan->get($log->tanggal);
                        @endphp
                        <tr class="border-b border-gray-100 hover:bg-gray-50 transition-colors">
                            <td class="py-4 px-6 font-medium">
                                {{ \Carbon\Carbon::parse($log->tanggal)->translatedFormat('d M Y') }}
                            </td>
                            <td class="py-4 px-6 text-gray-600">
                                {{ $log->waktu_masuk ? \Carbon\Carbon::parse($log->waktu_masuk)->format('H:i') : '-' }}
                            </td>
                            <td class="py-4 px-6 text-gray-600">
                                @if($izinHariIni && $izinHariIni->waktu_izin)
                                    <span class="text-blue-600 font-bold" title="Izin Keluar pada jam ini">
                                        {{ \Carbon\Carbon::parse($izinHariIni->waktu_izin)->format('H:i') }} (Izin)
                                    </span>
                                @else
                                    {{ $log->waktu_keluar ? \Carbon\Carbon::parse($log->waktu_keluar)->format('H:i') : '-' }}
                                @endif
                            </td>
                            <td class="py-4 px-6">
                                @if($izinHariIni)
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-blue-100 text-blue-700">Ada Izin Keluar</span>
                                @elseif($log->status_masuk == 'Tepat Waktu')
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-green-100 text-green-700">Hadir (Tepat)</span>
                                @elseif($log->status_masuk == 'Terlambat')
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-yellow-100 text-yellow-700">Terlambat</span>
                                @else
                                    <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-medium bg-red-100 text-red-700">Belum Lengkap</span>
                                @endif
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="py-4 px-6 text-center text-on-surface-variant font-body-md">Belum ada riwayat presensi di bulan ini.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
        
        @if($riwayat->hasPages())
            <div class="px-6 py-4 border-t border-gray-200 bg-white">
                {{ $riwayat->appends(['bulan' => $bulan, 'tahun' => $tahun])->links() }}
            </div>
        @endif
    </div>
</x-app-layout>
