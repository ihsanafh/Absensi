<x-app-layout>
<div class="flex-1 p-container-padding flex items-center justify-center relative overflow-hidden bg-surface-container-low" x-data="cameraApp()">
    
    <!-- Error Alert -->
    <div x-show="errorMsg" x-cloak class="absolute top-4 z-50 bg-error-container text-on-error-container px-4 py-3 rounded-lg shadow-md border border-error/20 font-body-sm max-w-sm w-full text-center" x-transition>
        <span x-text="errorMsg"></span>
    </div>

    <!-- Camera Card -->
    <div class="bg-surface-container-lowest rounded-xl shadow-sm border border-outline-variant w-full max-w-2xl flex flex-col overflow-hidden relative z-10 animate-fade-in-up">
        
        <!-- Card Header -->
        <div class="p-stack-md text-center border-b border-outline-variant/50 bg-white">
            <h2 class="font-h3 text-h3 text-on-surface mb-1">Ambil Foto Bukti Kehadiran</h2>
            <p class="font-body-md text-body-md text-on-surface-variant">Pastikan wajah terlihat jelas di dalam area lingkaran</p>
        </div>

        <!-- Viewfinder Area -->
        <div class="relative w-full aspect-[4/3] bg-black overflow-hidden flex items-center justify-center">
            
            <!-- Video Element (Hidden when photo is taken) -->
            <video x-ref="video" autoplay playsinline class="absolute inset-0 w-full h-full object-cover" x-show="!photoTaken"></video>
            
            <!-- Canvas (Used to display the snapped photo) -->
            <canvas x-ref="canvas" class="absolute inset-0 w-full h-full object-cover hidden" x-show="photoTaken"></canvas>
            
            <!-- Target Overlay Guide -->
            <div class="absolute inset-0 pointer-events-none flex items-center justify-center" 
                 style="background: radial-gradient(circle at center, transparent 35%, rgba(0, 0, 0, 0.7) 36%);">
                <!-- Gold Guide Ring -->
                <div class="w-[60%] md:w-[50%] aspect-square rounded-full border-4 border-dashed border-[#F2A900] shadow-[0_0_15px_rgba(242,169,0,0.5)]"></div>
            </div>
            
            <!-- Instruction Text Overlay -->
            <div class="absolute bottom-6 w-full text-center px-4" x-show="!photoTaken">
                <span class="inline-block bg-black/60 backdrop-blur-sm text-white px-4 py-2 rounded-full font-body-sm text-body-sm shadow-md border border-white/10">
                    Posisikan wajah Anda dalam lingkaran
                </span>
            </div>
        </div>

        <!-- Actions Area -->
        <div class="p-stack-lg bg-surface-container-lowest flex flex-col md:flex-row items-center justify-center gap-6 border-t border-outline-variant/30">
            
            <template x-if="!photoTaken">
                <!-- Primary Shutter -->
                <button @click="takePhoto" :disabled="!streamReady" aria-label="Ambil Foto" 
                        class="w-20 h-20 rounded-full bg-[#F2A900] flex items-center justify-center shadow-md focus:outline-none transition-transform active:scale-95 disabled:opacity-50"
                        style="box-shadow: 0 0 0 4px white inset, 0 0 0 6px #F2A900 inset;">
                </button>
            </template>

            <template x-if="photoTaken">
                <div class="flex gap-4 w-full justify-center">
                    <!-- Retake Button -->
                    <button @click="retakePhoto" class="flex-1 py-3 px-6 rounded-lg font-body-md text-on-surface-variant bg-surface-container hover:bg-surface-container-high transition-colors text-center border border-outline-variant font-medium">
                        Ulangi
                    </button>
                    <!-- Submit Button -->
                    <button @click="submitPhoto" :disabled="isSubmitting" class="flex-1 py-3 px-6 rounded-lg font-body-md text-on-primary bg-primary hover:bg-primary-container transition-colors text-center shadow-sm font-medium disabled:opacity-70 flex items-center justify-center gap-2">
                        <span x-show="isSubmitting" class="w-5 h-5 border-2 border-white/30 border-t-white rounded-full animate-spin"></span>
                        <span x-text="isSubmitting ? 'Menyimpan...' : 'Gunakan Foto Ini'"></span>
                    </button>
                </div>
            </template>
        </div>
    </div>
</div>

<script>
    function cameraApp() {
        return {
            stream: null,
            streamReady: false,
            photoTaken: false,
            photoData: null,
            isSubmitting: false,
            errorMsg: '',

            init() {
                this.startCamera();
            },

            async startCamera() {
                try {
                    this.stream = await navigator.mediaDevices.getUserMedia({
                        video: { facingMode: 'user' },
                        audio: false
                    });
                    this.$refs.video.srcObject = this.stream;
                    
                    // Wait until video is playing
                    this.$refs.video.onplaying = () => {
                        this.streamReady = true;
                    };
                } catch (err) {
                    console.error("Camera access error:", err);
                    this.errorMsg = "Gagal mengakses kamera depan. Pastikan izin telah diberikan.";
                }
            },

            takePhoto() {
                if (!this.streamReady) return;
                
                const video = this.$refs.video;
                const canvas = this.$refs.canvas;
                
                canvas.width = video.videoWidth;
                canvas.height = video.videoHeight;
                
                const ctx = canvas.getContext('2d');
                ctx.drawImage(video, 0, 0, canvas.width, canvas.height);
                
                this.photoData = canvas.toDataURL('image/jpeg', 0.8);
                this.photoTaken = true;
                
                // Show canvas, hide video in UI
                canvas.classList.remove('hidden');
            },

            retakePhoto() {
                this.photoTaken = false;
                this.photoData = null;
                this.$refs.canvas.classList.add('hidden');
            },

            submitPhoto() {
                if (!this.photoData || this.isSubmitting) return;
                this.isSubmitting = true;
                this.errorMsg = '';

                fetch('{{ route("guru.presensi.store") }}', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').content,
                        'Accept': 'application/json'
                    },
                    body: JSON.stringify({ image: this.photoData })
                })
                .then(res => res.json().then(data => ({ status: res.status, body: data })))
                .then(res => {
                    if (res.status === 200) {
                        this.stopCamera();
                        window.location.href = res.body.redirect;
                    } else {
                        this.errorMsg = res.body.message || "Gagal menyimpan presensi.";
                        this.isSubmitting = false;
                    }
                })
                .catch(err => {
                    this.errorMsg = "Terjadi kesalahan jaringan.";
                    this.isSubmitting = false;
                });
            },

            stopCamera() {
                if (this.stream) {
                    this.stream.getTracks().forEach(track => track.stop());
                }
            }
        }
    }
</script>
</x-app-layout>
