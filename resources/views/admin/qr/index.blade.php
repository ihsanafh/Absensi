<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Tampilan QR Presensi') }}
        </h2>
    </x-slot>

    <!-- Memuat qrcodejs -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/qrcodejs/1.0.0/qrcode.min.js"></script>

    <style>
        /* QR Ring Animation */
        @keyframes countdown {
            from { stroke-dashoffset: 0; }
            to { stroke-dashoffset: 301.59; }
        }
        .animate-ring {
            stroke-dasharray: 301.59;
            transition: stroke-dashoffset 1s linear;
        }
    </style>

    <div class="flex-1 bg-slate-50 relative flex flex-col items-center justify-center overflow-hidden" x-data="qrApp()" style="min-height: calc(100vh - 64px);">
        <!-- Main Kiosk Content -->
        <div class="z-10 flex flex-col items-center w-full max-w-lg px-6 py-8">
            <!-- Header -->
            <div class="text-center mb-8 flex flex-col items-center">
                <h1 class="text-3xl font-semibold text-gray-800 mb-2 tracking-tight">Tampilan QR Presensi</h1>
                <p class="text-lg text-gray-600">MI AL-Faizein</p>
            </div>

            <!-- The White Card -->
            <div class="bg-white w-full rounded-[32px] shadow-sm border border-gray-100 p-8 flex flex-col items-center relative overflow-hidden">
                <!-- Toggle Switch Grid -->
                <div class="w-full grid grid-cols-2 gap-2 mb-8">
                    <button @click="setType('masuk')" class="py-3 px-2 rounded-xl text-center relative z-10 font-medium tracking-wide transition-all duration-300 border shadow-sm"
                            :class="type === 'masuk' ? 'bg-green-700 text-white border-green-700' : 'bg-gray-50 border-gray-200 text-gray-600 hover:border-green-700'">
                        Scan Masuk
                    </button>
                    <button @click="setType('keluar')" class="py-3 px-2 rounded-xl text-center relative z-10 font-medium tracking-wide transition-all duration-300 border shadow-sm"
                            :class="type === 'keluar' ? 'bg-green-700 text-white border-green-700' : 'bg-gray-50 border-gray-200 text-gray-600 hover:border-green-700'">
                        Scan Keluar
                    </button>
                    <button @click="setType('izin_keluar')" class="py-3 px-2 rounded-xl text-center relative z-10 font-medium tracking-wide transition-all duration-300 border shadow-sm"
                            :class="type === 'izin_keluar' ? 'bg-yellow-600 text-white border-yellow-600' : 'bg-gray-50 border-gray-200 text-gray-600 hover:border-yellow-600'">
                        Izin Keluar
                    </button>
                    <button @click="setType('izin_kembali')" class="py-3 px-2 rounded-xl text-center relative z-10 font-medium tracking-wide transition-all duration-300 border shadow-sm"
                            :class="type === 'izin_kembali' ? 'bg-yellow-600 text-white border-yellow-600' : 'bg-gray-50 border-gray-200 text-gray-600 hover:border-yellow-600'">
                        Izin Kembali
                    </button>
                </div>

                <!-- QR Code Display Area -->
                <div class="relative w-80 h-80 mb-8 flex items-center justify-center">
                    <!-- Gold Ring Timer SVG -->
                    <svg class="absolute inset-0 w-full h-full -rotate-90 transform" viewBox="0 0 100 100">
                        <circle class="stroke-gray-200" cx="50" cy="50" fill="none" r="48" stroke-width="2"></circle>
                        <circle class="stroke-green-500 drop-shadow-sm transition-all duration-1000 ease-linear" 
                                cx="50" cy="50" fill="none" r="48" stroke-linecap="round" stroke-width="3"
                                :stroke-dasharray="301.59"
                                :stroke-dashoffset="301.59 * (1 - (timeLeft / maxTime))"></circle>
                    </svg>

                    <!-- Inner QR Container -->
                    <div class="w-64 h-64 bg-white rounded-2xl shadow-sm border border-gray-200 p-4 relative z-10 flex items-center justify-center">
                        <div id="qrcode" class="w-full h-full flex items-center justify-center opacity-90"></div>
                        <!-- Scanning aesthetic overlay -->
                        <div class="absolute top-0 left-0 w-full h-1 bg-green-500/20 animate-pulse rounded-t-2xl"></div>
                    </div>
                </div>

                <!-- Timer Status Text -->
                <div class="flex items-center gap-3 bg-gray-50 px-6 py-3 rounded-full border border-gray-200">
                    <span class="material-symbols-outlined text-green-600 text-[20px] fill">timer</span>
                    <span class="text-sm text-gray-600 uppercase tracking-wider">
                        QR berganti dalam <strong class="text-green-700 text-base" x-text="timeLeft"></strong> detik
                    </span>
                </div>
            </div>

            <div class="mt-8 text-center w-full z-10">
                <p class="text-sm text-gray-500">Gunakan perangkat guru untuk melakukan scan</p>
            </div>
        </div>

        <script>
            function qrApp() {
                return {
                    type: 'masuk',
                    timeLeft: 30,
                    maxTime: 30,
                    intervalId: null,
                    qrcode: null,
                    isFetching: false,
                    
                    init() {
                        // Initialize QRCode
                        this.qrcode = new QRCode(document.getElementById("qrcode"), {
                            text: "Memuat...",
                            width: 216,
                            height: 216,
                            colorDark : "#000000",
                            colorLight : "#ffffff",
                            correctLevel : QRCode.CorrectLevel.H
                        });
                        this.fetchToken();
                    },

                    fetchToken() {
                        if (this.isFetching) return;
                        this.isFetching = true;

                        fetch(`/admin/qr/token?type=${this.type}`)
                            .then(res => res.json())
                            .then(data => {
                                this.maxTime = data.expires_in;
                                this.timeLeft = data.expires_in;
                                
                                this.qrcode.clear();
                                this.qrcode.makeCode(data.token);
                                
                                this.startTimer();
                            })
                            .catch(err => {
                                console.error('Failed to fetch token', err);
                            })
                            .finally(() => {
                                this.isFetching = false;
                            });
                    },

                    startTimer() {
                        if (this.intervalId) clearInterval(this.intervalId);
                        this.intervalId = setInterval(() => {
                            if (this.timeLeft > 0) {
                                this.timeLeft--;
                            }
                            if (this.timeLeft <= 0) {
                                this.fetchToken();
                            }
                        }, 1000);
                    },

                    setType(newType) {
                        if (this.type === newType) return;
                        this.type = newType;
                        this.fetchToken();
                    }
                }
            }
        </script>
    </div>
</x-app-layout>
