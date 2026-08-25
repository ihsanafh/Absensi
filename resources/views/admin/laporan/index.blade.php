<x-app-layout>
    <div class="mb-stack-lg">
        <h1 class="text-3xl font-semibold text-gray-800 mb-2">Laporan Presensi & Izin</h1>
        <p class="text-gray-600">Buat dan ekspor rekapitulasi data presensi ke format PDF atau CSV.</p>
    </div>

    @if ($errors->any())
        <div class="mb-4 p-4 bg-red-100 text-red-800 rounded-lg text-sm">
            <ul class="list-disc pl-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="bg-white rounded-xl shadow-sm border border-gray-100 p-6 w-full max-w-4xl mx-auto">
        
        <form action="{{ route('admin.laporan.cetak') }}" method="GET" id="formLaporan">
            
            <div class="grid grid-cols-1 md:grid-cols-2 gap-stack-lg mb-stack-lg">
                <!-- Start Date -->
                <div>
                    <label for="start_date" class="block text-sm font-medium text-gray-700 mb-2">Tanggal Mulai <span class="text-red-500">*</span></label>
                    <input type="date" id="start_date" name="start_date" required value="{{ date('Y-m-01') }}" class="w-full h-11 px-4 py-2.5 text-sm border border-gray-300 rounded-lg bg-white shadow-sm focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-colors">
                </div>
                
                <!-- End Date -->
                <div>
                    <label for="end_date" class="block text-sm font-medium text-gray-700 mb-2">Tanggal Akhir <span class="text-red-500">*</span></label>
                    <input type="date" id="end_date" name="end_date" required value="{{ date('Y-m-d') }}" class="w-full h-11 px-4 py-2.5 text-sm border border-gray-300 rounded-lg bg-white shadow-sm focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-colors">
                </div>
                
                <!-- Filter Guru -->
                <div class="md:col-span-2">
                    <label for="user_id" class="block text-sm font-medium text-gray-700 mb-2">Filter Guru (Opsional)</label>
                    <div class="relative">
                        <select id="user_id" name="user_id" class="w-full h-11 px-4 py-2.5 text-sm border border-gray-300 rounded-lg bg-white shadow-sm focus:outline-none focus:ring-2 focus:ring-green-500 focus:border-green-500 transition-colors appearance-none cursor-pointer">
                            <option value="">-- Semua Guru --</option>
                            @foreach($gurus as $guru)
                                <option value="{{ $guru->id }}">{{ $guru->nama_lengkap }} (NIP: {{ $guru->nip }})</option>
                            @endforeach
                        </select>
                        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-gray-500">
                            <span class="material-symbols-outlined">expand_more</span>
                        </div>
                    </div>
                    <p class="mt-1 text-xs text-gray-500">Biarkan kosong untuk mencetak semua guru.</p>
                </div>
            </div>

            <!-- Action Buttons -->
            <div class="flex flex-col sm:flex-row items-center gap-4 pt-4 border-t border-gray-200">
                <button type="button" onclick="submitCetak()" class="flex-1 sm:flex-none h-11 px-6 bg-green-700 hover:bg-green-800 text-white rounded-lg font-medium transition-colors shadow-sm flex items-center justify-center gap-2">
                    <span class="material-symbols-outlined">print</span>
                    Cetak PDF
                </button>
                <button type="button" onclick="submitCsv()" class="flex-1 sm:flex-none h-11 px-6 bg-white border border-gray-300 text-gray-700 rounded-lg font-medium hover:bg-gray-50 transition-colors flex items-center justify-center gap-2">
                    <span class="material-symbols-outlined">download</span>
                    Unduh CSV
                </button>
            </div>
            
        </form>
    </div>

    <script>
        function submitCetak() {
            var form = document.getElementById('formLaporan');
            form.action = "{{ route('admin.laporan.cetak') }}";
            form.target = "_blank"; // Buka di tab baru
            form.submit();
        }

        function submitCsv() {
            var form = document.getElementById('formLaporan');
            form.action = "{{ route('admin.laporan.csv') }}";
            form.target = "_self"; // Download langsung
            form.submit();
        }
    </script>
</x-app-layout>
