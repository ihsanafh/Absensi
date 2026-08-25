<x-app-layout>
<div class="flex-1 overflow-y-auto p-container-padding flex items-center justify-center relative bg-surface-container-low min-h-[calc(100vh-64px)]">
    
    <!-- Subtle background decoration -->
    <div class="absolute inset-0 z-0 pointer-events-none overflow-hidden flex items-center justify-center opacity-[0.03]">
        <div class="w-96 h-96 rounded-full bg-primary-container blur-3xl"></div>
    </div>

    <div class="relative z-10 w-full max-w-md flex flex-col items-center">
        <!-- Success Icon -->
        <div class="mb-8 relative flex justify-center items-center">
            <div class="absolute w-24 h-24 bg-tertiary-container/20 rounded-full animate-[pulse-ring_2s_cubic-bezier(0.215,0.61,0.355,1)_infinite]"></div>
            <span class="material-symbols-outlined text-[80px] text-tertiary-container relative z-10 drop-shadow-sm" style="font-variation-settings: 'FILL' 1;">check_circle</span>
        </div>

        <!-- Heading -->
        <h2 class="font-h2 text-h2 text-on-surface text-center mb-stack-md">Presensi Berhasil!</h2>
        <p class="font-body-md text-body-md text-on-surface-variant text-center mb-8">Terima kasih, data kehadiran Anda telah tercatat ke dalam sistem.</p>

        <!-- Summary Card -->
        <div class="bg-surface-container-lowest border border-outline-variant shadow-sm rounded-xl p-6 w-full flex flex-col gap-5">
            <!-- Row: Waktu -->
            <div class="flex justify-between items-center pb-4 border-b border-surface-variant">
                <span class="font-body-md text-body-md text-on-surface-variant flex items-center gap-2">
                    <span class="material-symbols-outlined text-[20px] opacity-70">schedule</span>
                    Waktu Scan
                </span>
                <span class="font-h4 text-h4 font-bold text-on-surface">
                    {{ \Carbon\Carbon::parse($presensi->waktu_masuk ?? $presensi->waktu_keluar)->format('H:i') }} WIB
                </span>
            </div>

            <!-- Row: Status -->
            <div class="flex justify-between items-center pb-4 border-b border-surface-variant">
                <span class="font-body-md text-body-md text-on-surface-variant flex items-center gap-2">
                    <span class="material-symbols-outlined text-[20px] opacity-70">how_to_reg</span>
                    Status
                </span>
                @php
                    // Jika ini scan masuk, gunakan status_masuk. Jika keluar, bisa kita sebut 'Pulang'
                    $isMasuk = session('presensi_type', 'masuk') === 'masuk';
                    $statusText = $isMasuk ? $presensi->status_masuk : 'Pulang';
                    $statusColor = $statusText === 'Tepat Waktu' || $statusText === 'Pulang' ? 'bg-tertiary-container text-on-tertiary-container' : 'bg-error-container text-on-error-container';
                    $dotColor = $statusText === 'Tepat Waktu' || $statusText === 'Pulang' ? 'bg-on-tertiary-container' : 'bg-on-error-container';
                @endphp
                <span class="{{ $statusColor }} font-label-mono text-label-mono px-4 py-1.5 rounded-full inline-flex items-center gap-1.5 shadow-sm">
                    <span class="w-2 h-2 rounded-full {{ $dotColor }}"></span>
                    {{ $statusText }}
                </span>
            </div>

            <!-- Row: Foto -->
            <div class="flex justify-between items-center">
                <span class="font-body-md text-body-md text-on-surface-variant flex items-center gap-2">
                    <span class="material-symbols-outlined text-[20px] opacity-70">photo_camera</span>
                    Foto Bukti
                </span>
                <div class="flex items-center gap-2 text-primary">
                    <span class="font-body-md text-body-md font-medium">Tersimpan</span>
                    <span class="material-symbols-outlined text-[20px]" style="font-variation-settings: 'FILL' 1;">check</span>
                </div>
            </div>
        </div>

        <!-- Action Button -->
        <a href="{{ route('guru.dashboard') }}" class="mt-10 bg-primary text-on-primary w-full py-4 rounded-xl font-h4 text-h4 font-bold shadow-md hover:bg-primary-container hover:shadow-lg transition-all flex items-center justify-center gap-3 active:scale-[0.98]">
            <span class="material-symbols-outlined">home</span>
            Kembali ke Beranda
        </a>
    </div>
</div>

<style>
    @keyframes pulse-ring {
        0% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(4, 106, 56, 0.7); }
        70% { transform: scale(1); box-shadow: 0 0 0 20px rgba(4, 106, 56, 0); }
        100% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(4, 106, 56, 0); }
    }
</style>
</x-app-layout>
