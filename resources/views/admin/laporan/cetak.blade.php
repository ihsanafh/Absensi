<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cetak Laporan Presensi</title>
    @vite(['resources/css/app.css'])
    <style>
        @media print {
            body { background-color: #fff; margin: 0; padding: 20px; }
            @page { size: landscape; margin: 10mm; }
            .print-hidden { display: none !important; }
            table { border-collapse: collapse !important; width: 100% !important; }
            th, td { border: 1px solid #000 !important; padding: 8px !important; }
            th { background-color: #f3f4f6 !important; -webkit-print-color-adjust: exact; }
        }
    </style>
</head>
<body class="bg-white text-black p-8 font-sans max-w-6xl mx-auto">

    <!-- Tombol Cetak Manual (Disembunyikan saat print) -->
    <div class="mb-6 flex justify-end print-hidden">
        <button onclick="window.print()" class="px-6 py-2 bg-primary text-white rounded-lg shadow-sm flex items-center gap-2 hover:bg-primary-container">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 6 2 18 2 18 9"></polyline><path d="M6 18H4a2 2 0 0 1-2-2v-5a2 2 0 0 1 2-2h16a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-2"></path><rect x="6" y="14" width="12" height="8"></rect></svg>
            Cetak Sekarang
        </button>
    </div>

    <!-- Kop Surat -->
    <div class="border-b-4 border-black pb-4 mb-6 text-center">
        <h1 class="text-2xl font-bold uppercase tracking-wider">Madrasah Ibtidaiyah Al-Faizein</h1>
        <p class="text-sm mt-1">Jl. Contoh Alamat Sekolah No. 123, Kota Pendidikan, Provinsi, 12345</p>
        <p class="text-sm">Telepon: (021) 1234567 | Email: info@mialfaizein.sch.id</p>
    </div>

    <!-- Judul Laporan -->
    <div class="mb-6 text-center">
        <h2 class="text-xl font-bold uppercase underline">Laporan Presensi Guru</h2>
        <p class="text-sm mt-2">Periode: {{ \Carbon\Carbon::parse($start_date)->translatedFormat('d F Y') }} s.d. {{ \Carbon\Carbon::parse($end_date)->translatedFormat('d F Y') }}</p>
        @if($user)
            <p class="text-sm font-semibold mt-1">Guru: {{ $user->nama_lengkap }} (NIP: {{ $user->nip }})</p>
        @endif
    </div>

    <!-- Tabel Data -->
    <table class="w-full border-collapse border border-black text-sm">
        <thead>
            <tr>
                <th class="border border-black px-4 py-2 bg-gray-100">No</th>
                <th class="border border-black px-4 py-2 bg-gray-100">Tanggal</th>
                <th class="border border-black px-4 py-2 bg-gray-100">Nama Guru</th>
                <th class="border border-black px-4 py-2 bg-gray-100">Masuk Absen</th>
                <th class="border border-black px-4 py-2 bg-gray-100">Pulang Absen</th>
                <th class="border border-black px-4 py-2 bg-gray-100">Ket. Presensi</th>
                <th class="border border-black px-4 py-2 bg-gray-100">Keluar Izin</th>
                <th class="border border-black px-4 py-2 bg-gray-100">Kembali Izin</th>
                <th class="border border-black px-4 py-2 bg-gray-100">Ket. Izin</th>
            </tr>
        </thead>
        <tbody>
            @forelse($presensi as $index => $log)
                @php
                    $key = $log->user_id . '_' . $log->tanggal;
                    $izin = $izin->get($key)?->first();
                @endphp
                <tr>
                    <td class="border border-black px-4 py-2 text-center">{{ $index + 1 }}</td>
                    <td class="border border-black px-4 py-2 whitespace-nowrap">{{ \Carbon\Carbon::parse($log->tanggal)->translatedFormat('d M Y') }}</td>
                    <td class="border border-black px-4 py-2 font-medium">{{ $log->user->nama_lengkap }}</td>
                    <td class="border border-black px-4 py-2 text-center">{{ $log->waktu_masuk ? \Carbon\Carbon::parse($log->waktu_masuk)->format('H:i') : '-' }}</td>
                    <td class="border border-black px-4 py-2 text-center">{{ $log->waktu_keluar ? \Carbon\Carbon::parse($log->waktu_keluar)->format('H:i') : '-' }}</td>
                    <td class="border border-black px-4 py-2 text-center">{{ $log->status_masuk ?? '-' }}</td>
                    <td class="border border-black px-4 py-2 text-center">{{ $izin && $izin->waktu_izin ? \Carbon\Carbon::parse($izin->waktu_izin)->format('H:i') : '-' }}</td>
                    <td class="border border-black px-4 py-2 text-center">{{ $izin && $izin->waktu_kembali ? \Carbon\Carbon::parse($izin->waktu_kembali)->format('H:i') : '-' }}</td>
                    <td class="border border-black px-4 py-2 text-center">{{ $izin ? $izin->alasan : '-' }}</td>
                </tr>
            @empty
                <tr>
                    <td colspan="9" class="border border-black px-4 py-4 text-center">Tidak ada data presensi pada periode ini.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <div class="mt-12 flex justify-end">
        <div class="text-center">
            <p class="mb-16">Mengetahui,<br>Kepala Madrasah</p>
            <p class="font-bold underline">(Nama Kepala Madrasah)</p>
            <p>NIP. 19800101 200501 1 001</p>
        </div>
    </div>

    <script>
        // Otomatis munculkan dialog cetak setelah halaman selesai dimuat sepenuhnya
        window.onload = function() {
            setTimeout(function() {
                window.print();
            }, 500); // Jeda sedikit agar font/CSS termuat
        };
    </script>
</body>
</html>
