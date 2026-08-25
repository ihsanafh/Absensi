<x-app-layout>
<div class="flex-1 p-container-padding flex flex-col relative">
    
    <div class="mb-stack-lg">
        <h1 class="font-h2 text-h2 text-on-surface">Scan QR Presensi</h1>
        <p class="font-body-md text-body-md text-on-surface-variant mt-1">Siapkan kamera Anda untuk melakukan absensi kehadiran.</p>
    </div>

    @if($state === 'selesai')
        <div class="bg-surface-container-lowest rounded-xl shadow-sm border border-outline-variant w-full max-w-3xl mx-auto flex flex-col items-center justify-center p-stack-lg flex-1 mb-stack-lg text-center">
            <div class="w-20 h-20 bg-primary/10 rounded-full flex items-center justify-center mb-4">
                <span class="material-symbols-outlined text-primary text-[40px]">task_alt</span>
            </div>
            <h3 class="font-h3 text-h3 text-on-surface font-bold mb-2">Presensi Selesai</h3>
            <p class="font-body-md text-body-md text-on-surface-variant max-w-md">Presensi Anda hari ini telah lengkap dicatat. Terima kasih atas dedikasi Anda, selamat beristirahat.</p>
            <a href="{{ route('guru.dashboard') }}" class="mt-6 px-6 py-3 bg-primary text-on-primary rounded-lg font-body-md text-body-md font-medium hover:bg-primary/90 transition-colors shadow-sm">Kembali ke Dasbor</a>
        </div>
    @else
        <div x-data="scannerApp()" class="flex flex-col flex-1">
            <!-- Error/Success Messages Alert -->
        <div x-show="message" x-cloak class="mb-4 px-4 py-3 rounded-lg border flex items-center gap-3 shadow-sm"
             :class="isError ? 'bg-error-container text-on-error-container border-error/20' : 'bg-primary-container/20 text-primary border-primary/20'"
             x-transition>
            <span class="material-symbols-outlined" x-text="isError ? 'error' : 'check_circle'"></span>
            <span class="font-body-sm font-medium" x-text="message"></span>
        </div>

        <!-- Main Scanner Card -->
        <div class="bg-surface-container-lowest rounded-xl shadow-sm border border-outline-variant w-full max-w-3xl mx-auto flex flex-col items-center p-stack-lg flex-1 mb-stack-lg relative overflow-hidden">
            
            <!-- Viewfinder Container -->
            <div class="relative w-full max-w-[480px] aspect-square bg-inverse-surface rounded-xl overflow-hidden shadow-inner mb-stack-lg flex justify-center items-center group">
                
                <!-- HTML5 QR Code Container -->
                <div id="reader" class="w-full h-full object-cover"></div>

                <!-- Custom Overlay -->
                <div class="absolute inset-0 pointer-events-none flex items-center justify-center" style="box-shadow: inset 0 0 0 5000px rgba(49,48,48,0.7);">
                    <!-- Target Frame -->
                    <div class="relative w-[280px] h-[280px]">
                        <div class="absolute top-0 left-0 w-8 h-8 border-t-4 border-l-4 border-secondary-container rounded-tl-lg"></div>
                        <div class="absolute top-0 right-0 w-8 h-8 border-t-4 border-r-4 border-secondary-container rounded-tr-lg"></div>
                        <div class="absolute bottom-0 left-0 w-8 h-8 border-b-4 border-l-4 border-secondary-container rounded-bl-lg"></div>
                        <div class="absolute bottom-0 right-0 w-8 h-8 border-b-4 border-r-4 border-secondary-container rounded-br-lg"></div>
                        
                        <!-- Scanning Line Animation -->
                        <div class="absolute top-0 left-0 w-full h-[2px] bg-secondary-container shadow-[0_0_12px_3px_rgba(254,179,22,0.6)] animate-[scan-line_2.5s_cubic-bezier(0.4,0,0.2,1)_infinite]"></div>
                    </div>
                </div>

                <!-- Guidance Text Overlay inside Viewfinder -->
                <div class="absolute bottom-8 w-full text-center pointer-events-none z-10">
                    <span class="inline-block bg-inverse-surface/80 text-on-secondary font-body-sm text-body-sm px-4 py-2 rounded-full backdrop-blur-sm border border-outline/30">
                        Posisikan QR dalam kotak
                    </span>
                </div>
            </div>

            <!-- Status & Helper Text Area -->
            <div class="flex flex-col items-center text-center max-w-md">
                <div class="flex items-center gap-2 mb-stack-sm bg-primary/5 px-4 py-2 rounded-full border border-primary/20">
                    <span class="material-symbols-outlined text-primary" style="font-variation-settings: 'FILL' 1;">qr_code_scanner</span>
                    <span class="font-h4 text-h4 text-primary">Kamera aktif</span>
                </div>
                <p class="font-body-lg text-body-lg text-on-surface-variant">
                    Arahkan kamera ke QR Code yang ditampilkan operator.
                </p>
            </div>
        </div>
        </div>
    @endif
</div>

<style>
    @keyframes scan-line {
        0% { transform: translateY(0); opacity: 0; }
        10% { opacity: 1; }
        90% { opacity: 1; }
        100% { transform: translateY(280px); opacity: 0; }
    }
    
    /* Hide the default html5-qrcode UI elements as much as possible since we use custom overlay */
    #reader { border: none !important; }
    #reader video { object-fit: cover; }
    #reader__dashboard_section_csr { display: none !important; }
    #reader__dashboard_section_swaplink { display: none !important; }
</style>

@if($state !== 'selesai')
<!-- Load html5-qrcode ONLY on this page -->
<script src="https://unpkg.com/html5-qrcode" type="text/javascript"></script>
<script>
    function scannerApp() {
        return {
            html5QrcodeScanner: null,
            message: '',
            isError: false,
            isProcessing: false,
            
            init() {
                // Konfigurasi html5-qrcode
                const config = {
                    fps: 10,
                    qrbox: { width: 280, height: 280 },
                    aspectRatio: 1.0,
                    disableFlip: false
                };

                // Initialize scanner
                const html5QrCode = new Html5Qrcode("reader");
                
                // Gunakan kamera belakang sebagai default
                html5QrCode.start(
                    { facingMode: "environment" },
                    config,
                    (decodedText, decodedResult) => {
                        this.onScanSuccess(decodedText, html5QrCode);
                    },
                    (errorMessage) => {
                        // ignore errors like 'QR code not found'
                    }
                ).catch((err) => {
                    this.message = "Gagal mengakses kamera: " + err;
                    this.isError = true;
                });
            },

            onScanSuccess(decodedText, html5QrCode) {
                if (this.isProcessing) return;
                this.isProcessing = true;

                // Stop scanning temporarily
                html5QrCode.pause();

                fetch('{{ route("guru.presensi.process") }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                        'Accept': 'application/json'
                    },
                    body: JSON.stringify({ token: decodedText })
                })
                .then(res => res.json().then(data => ({ status: res.status, body: data })))
                .then(res => {
                    if (res.status === 200) {
                        this.isError = false;
                        this.message = res.body.message || "Scan berhasil! Mengarahkan...";
                        
                        setTimeout(() => {
                            if (res.body.redirect) {
                                window.location.href = res.body.redirect;
                            } else {
                                this.message = '';
                                this.isProcessing = false;
                                html5QrCode.resume();
                            }
                        }, 2000);
                    } else {
                        this.isError = true;
                        this.message = res.body.message || "Gagal memproses QR Code.";
                        
                        setTimeout(() => {
                            this.message = '';
                            this.isProcessing = false;
                            html5QrCode.resume();
                        }, 3000);
                    }
                })
                .catch(err => {
                    this.isError = true;
                    this.message = "Terjadi kesalahan jaringan.";
                    
                    setTimeout(() => {
                        this.message = '';
                        this.isProcessing = false;
                        html5QrCode.resume();
                    }, 3000);
                });
            }
        }
    }
</script>
@endif
</x-app-layout>
