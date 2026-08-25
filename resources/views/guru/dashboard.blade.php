<x-app-layout>
    <div class="mb-stack-lg">
        <h1 class="text-3xl font-semibold text-gray-800 mb-2">Dashboard Personal</h1>
        <p class="text-gray-600">Ringkasan statistik dan riwayat presensi bulanan Anda.</p>
    </div>
    <!-- Banner Izin Aktif -->
    @if(isset($izin_aktif) && $izin_aktif)
    <div class="mb-stack-lg bg-secondary-container text-on-secondary-container rounded-xl shadow-sm border border-secondary/20 p-6 flex flex-col md:flex-row items-center justify-between gap-4">
        <div class="flex items-center gap-4">
            <div class="p-3 bg-secondary/10 rounded-full text-secondary">
                <span class="material-symbols-outlined text-[32px]">assignment_return</span>
            </div>
            <div>
                <h3 class="font-h3 text-h3 font-bold mb-1">Izin Keluar Aktif</h3>
                <p class="font-body-md text-body-md opacity-90">Permohonan izin Anda hari ini telah disetujui. {{ $izin_aktif->waktu_izin ? 'Jangan lupa pindai QR saat kembali.' : 'Silakan pindai QR Izin Keluar di pos admin/satpam.' }}</p>
            </div>
        </div>
        <a href="{{ route('guru.izin.scan') }}" class="w-full md:w-auto text-center px-6 py-3 bg-secondary text-on-secondary rounded-lg font-body-md text-body-md font-medium hover:bg-secondary/90 transition-colors shadow-sm flex items-center justify-center gap-2 whitespace-nowrap">
            <span class="material-symbols-outlined">qr_code_scanner</span>
            Scan QR Izin
        </a>
    </div>
    @endif

    <!-- Filter Form -->
    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 mb-stack-lg flex flex-wrap gap-4 items-end">
        <form action="{{ route('guru.dashboard') }}" method="GET" class="w-full flex flex-wrap gap-4 items-end">
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

    <!-- Stats Grid (Bento) -->
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-stack-lg">
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 flex flex-col relative overflow-hidden group">
            <div class="absolute -right-4 -top-4 w-16 h-16 bg-green-500/5 rounded-full group-hover:scale-150 transition-transform duration-500"></div>
            <div class="flex items-center justify-between mb-4">
                <h3 class="font-medium text-gray-600">Hadir Bulan Ini</h3>
                <div class="p-2 bg-green-100 rounded-lg text-green-600">
                    <span class="material-symbols-outlined">check_circle</span>
                </div>
            </div>
            <div class="flex items-baseline gap-2">
                <span class="text-3xl font-bold text-gray-800">{{ $total_hadir }}</span>
                <span class="text-sm text-gray-500">Hari</span>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 flex flex-col relative overflow-hidden group">
            <div class="absolute -right-4 -top-4 w-16 h-16 bg-yellow-500/10 rounded-full group-hover:scale-150 transition-transform duration-500"></div>
            <div class="flex items-center justify-between mb-4">
                <h3 class="font-medium text-gray-600">Terlambat</h3>
                <div class="p-2 bg-yellow-100 rounded-lg text-yellow-600">
                    <span class="material-symbols-outlined">schedule</span>
                </div>
            </div>
            <div class="flex items-baseline gap-2">
                <span class="text-3xl font-bold text-gray-800">{{ $total_terlambat }}</span>
                <span class="text-sm text-gray-500">Hari</span>
            </div>
        </div>
        
        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 flex flex-col relative overflow-hidden group">
            <div class="absolute -right-4 -top-4 w-16 h-16 bg-blue-500/5 rounded-full group-hover:scale-150 transition-transform duration-500"></div>
            <div class="flex items-center justify-between mb-4">
                <h3 class="font-medium text-gray-600">Izin Disetujui</h3>
                <div class="p-2 bg-blue-100 rounded-lg text-blue-600">
                    <span class="material-symbols-outlined">assignment_return</span>
                </div>
            </div>
            <div class="flex items-baseline gap-2">
                <span class="text-3xl font-bold text-gray-800">{{ $total_izin }}</span>
                <span class="text-sm text-gray-500">Hari</span>
            </div>
        </div>

        <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 flex flex-col relative overflow-hidden group">
            <div class="absolute -right-4 -top-4 w-16 h-16 bg-red-500/5 rounded-full group-hover:scale-150 transition-transform duration-500"></div>
            <div class="flex items-center justify-between mb-4">
                <h3 class="font-medium text-gray-600">Alpha (Estimasi)</h3>
                <div class="p-2 bg-red-100 rounded-lg text-red-600">
                    <span class="material-symbols-outlined">cancel</span>
                </div>
            </div>
            <div class="flex items-baseline gap-2">
                <span class="text-3xl font-bold text-gray-800">{{ $total_alpha }}</span>
                <span class="text-sm text-gray-500">Hari</span>
            </div>
        </div>
    </div>


</x-app-layout>
