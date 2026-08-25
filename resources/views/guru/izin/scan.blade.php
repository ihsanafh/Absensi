<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Scan QR Izin Keluar/Kembali') }}
        </h2>
    </x-slot>

    <!-- Memuat jsQR -->
    <script src="https://cdn.jsdelivr.net/npm/jsqr@1.4.0/dist/jsQR.min.js"></script>

    <div class="flex-1 bg-surface relative flex flex-col overflow-hidden" x-data="izinScannerApp()" style="min-height: calc(100vh - 64px);">
        <!-- Camera Area (Full Width/Height minus header) -->
        <div class="absolute inset-0 z-0 bg-black flex items-center justify-center">
            <video id="videoElement" class="w-full h-full object-cover" autoplay playsinline></video>
            
            <!-- Scan Guide Overlay -->
            <div class="absolute inset-0 flex flex-col items-center justify-center pointer-events-none">
                <!-- Frame Container -->
                <div class="relative w-72 h-72 rounded-3xl border-4 border-secondary/50 shadow-[0_0_0_9999px_rgba(0,0,0,0.6)]">
                    <!-- Corner Markers (Secondary color for Izin) -->
                    <div class="absolute -top-1 -left-1 w-10 h-10 border-t-4 border-l-4 border-secondary rounded-tl-3xl"></div>
                    <div class="absolute -top-1 -right-1 w-10 h-10 border-t-4 border-r-4 border-secondary rounded-tr-3xl"></div>
                    <div class="absolute -bottom-1 -left-1 w-10 h-10 border-b-4 border-l-4 border-secondary rounded-bl-3xl"></div>
                    <div class="absolute -bottom-1 -right-1 w-10 h-10 border-b-4 border-r-4 border-secondary rounded-br-3xl"></div>
                    
                    <!-- Scanning Beam -->
                    <div class="absolute top-0 left-0 w-full h-1 bg-secondary/80 blur-[2px] animate-[scan_2s_ease-in-out_infinite]"
                         style="box-shadow: 0 0 10px 2px rgba(var(--md-sys-color-secondary), 0.5);"></div>
                </div>
            </div>
        </div>

        <!-- Header / Status Bar over camera -->
        <div class="absolute top-0 left-0 w-full z-10 bg-gradient-to-b from-black/80 to-transparent pt-stack-lg pb-12 px-container-padding flex justify-between items-start">
            <a href="{{ route('guru.dashboard') }}" class="w-12 h-12 flex items-center justify-center rounded-full bg-surface/20 text-white backdrop-blur-md hover:bg-surface/40 transition-colors">
                <span class="material-symbols-outlined">arrow_back</span>
            </a>
            
            <!-- Status Badge -->
            <div class="flex items-center gap-2 bg-secondary-container/90 backdrop-blur-md px-4 py-2 rounded-full border border-secondary/30 shadow-lg">
                <span class="material-symbols-outlined text-secondary text-[20px] animate-pulse">qr_code_scanner</span>
                <span class="font-label-mono text-label-mono text-on-secondary-container uppercase tracking-widest font-semibold" x-text="scanStatusText">MENUNGGU QR...</span>
            </div>
        </div>

        <!-- Error/Loading Overlay -->
        <div x-show="errorMessage" x-cloak class="absolute inset-0 z-20 flex items-center justify-center bg-black/80 backdrop-blur-sm px-gutter">
            <div class="bg-error-container text-on-error-container rounded-[24px] p-stack-lg max-w-sm w-full text-center shadow-2xl transform transition-all">
                <div class="w-16 h-16 bg-error/10 rounded-full flex items-center justify-center mx-auto mb-4">
                    <span class="material-symbols-outlined text-error text-[32px]">error</span>
                </div>
                <h3 class="font-h3 text-h3 font-bold mb-2">Pindai Gagal</h3>
                <p class="font-body-md text-body-md opacity-90 mb-6" x-text="errorMessage"></p>
                <div class="flex gap-3 justify-center">
                    <a href="{{ route('guru.dashboard') }}" class="px-6 py-3 rounded-full font-body-md text-body-md font-medium text-error hover:bg-error/10 transition-colors">Kembali</a>
                    <button @click="resetScanner()" class="px-6 py-3 bg-error text-on-error rounded-full font-body-md text-body-md font-medium hover:bg-error/90 transition-colors shadow-sm">Coba Lagi</button>
                </div>
            </div>
        </div>

        <script>
            function izinScannerApp() {
                return {
                    video: null,
                    canvasElement: null,
                    canvas: null,
                    isScanning: false,
                    scanStatusText: 'MENUNGGU QR...',
                    errorMessage: '',
                    animationFrameId: null,

                    init() {
                        this.video = document.getElementById('videoElement');
                        this.canvasElement = document.createElement('canvas');
                        this.canvas = this.canvasElement.getContext('2d', { willReadFrequently: true });

                        this.startCamera();
                    },

                    startCamera() {
                        this.errorMessage = '';
                        navigator.mediaDevices.getUserMedia({ video: { facingMode: "environment" } })
                            .then(function(stream) {
                                this.video.srcObject = stream;
                                this.video.setAttribute("playsinline", true);
                                this.video.play();
                                this.isScanning = true;
                                this.scanStatusText = 'MENCARI QR...';
                                this.animationFrameId = requestAnimationFrame(this.tick.bind(this));
                            }.bind(this))
                            .catch(function(err) {
                                console.error("Kamera error:", err);
                                this.errorMessage = "Gagal mengakses kamera. Pastikan Anda memberikan izin akses kamera pada browser.";
                                this.isScanning = false;
                            }.bind(this));
                    },

                    stopCamera() {
                        this.isScanning = false;
                        if (this.animationFrameId) cancelAnimationFrame(this.animationFrameId);
                        if (this.video && this.video.srcObject) {
                            this.video.srcObject.getTracks().forEach(track => track.stop());
                        }
                    },

                    tick() {
                        if (!this.isScanning) return;

                        if (this.video.readyState === this.video.HAVE_ENOUGH_DATA) {
                            this.canvasElement.height = this.video.videoHeight;
                            this.canvasElement.width = this.video.videoWidth;
                            this.canvas.drawImage(this.video, 0, 0, this.canvasElement.width, this.canvasElement.height);
                            var imageData = this.canvas.getImageData(0, 0, this.canvasElement.width, this.canvasElement.height);
                            
                            var code = jsQR(imageData.data, imageData.width, imageData.height, {
                                inversionAttempts: "dontInvert",
                            });

                            if (code && code.data) {
                                this.handleScan(code.data);
                                return; // Stop ticking if found
                            }
                        }
                        this.animationFrameId = requestAnimationFrame(this.tick.bind(this));
                    },

                    handleScan(qrData) {
                        this.isScanning = false;
                        this.scanStatusText = 'MEMPROSES...';
                        
                        // Validasi Izin Token via AJAX
                        fetch('{{ route("guru.izin.process") }}', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                                'Accept': 'application/json'
                            },
                            body: JSON.stringify({ token: qrData })
                        })
                        .then(response => {
                            if (!response.ok) {
                                return response.json().then(err => { throw err; });
                            }
                            return response.json();
                        })
                        .then(data => {
                            this.stopCamera();
                            // Trigger global alpine toast successfully mapped via session in Dashboard
                            // Tapi karena kita Ajax, kita manual trigger toast (atau redirect dengan session)
                            // Jika Backend me-redirect, kita bisa window.location
                            if(data.redirect) {
                                // Instead of toast immediately, we let backend session do it.
                                // Actually backend returns JSON, so we handle UI here.
                                window.dispatchEvent(new CustomEvent('toast', {
                                    detail: { type: 'success', title: 'Berhasil', message: data.message, duration: 5000 }
                                }));
                                setTimeout(() => {
                                    window.location.href = data.redirect;
                                }, 1000);
                            }
                        })
                        .catch(err => {
                            this.errorMessage = err.message || "Terjadi kesalahan saat memvalidasi QR.";
                            this.scanStatusText = 'GAGAL';
                        });
                    },

                    resetScanner() {
                        this.errorMessage = '';
                        this.scanStatusText = 'MENCARI QR...';
                        this.isScanning = true;
                        this.animationFrameId = requestAnimationFrame(this.tick.bind(this));
                    }
                }
            }
        </script>
    </div>

    <style>
        @keyframes scan {
            0%, 100% { top: 0; }
            50% { top: calc(100% - 4px); }
        }
    </style>
</x-app-layout>
