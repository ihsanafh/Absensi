<x-app-layout>
    <div x-data="{
        showModal: false,
        actionType: '',
        izinId: '',
        submitForm() {
            let form = document.createElement('form');
            form.method = 'POST';
            form.action = '{{ url('/admin/izin') }}/' + this.izinId;
            
            let csrf = document.createElement('input');
            csrf.type = 'hidden';
            csrf.name = '_token';
            csrf.value = '{{ csrf_token() }}';
            
            let method = document.createElement('input');
            method.type = 'hidden';
            method.name = '_method';
            method.value = 'PUT';

            let status = document.createElement('input');
            status.type = 'hidden';
            status.name = 'status';
            status.value = this.actionType === 'setujui' ? 'Disetujui' : 'Ditolak';

            form.appendChild(csrf);
            form.appendChild(method);
            form.appendChild(status);
            document.body.appendChild(form);
            form.submit();
        }
    }">
        <div class="mb-stack-lg">
            <h1 class="font-h2 text-h2 text-on-surface mb-2">Peninjauan Permohonan Izin</h1>
            <p class="font-body-md text-body-md text-on-surface-variant">Kelola permintaan izin keluar guru selama jam kerja.</p>
        </div>


        @if($izin_menunggu->count() > 0)
        <h3 class="font-h3 text-h3 font-bold text-on-surface mb-4">Menunggu Persetujuan</h3>
        <div class="grid grid-cols-1 lg:grid-cols-2 gap-gutter mb-8">
            @foreach($izin_menunggu as $izin)
            <div class="bg-surface rounded-xl shadow-sm border border-outline-variant overflow-hidden flex flex-col hover:shadow-md transition-shadow">
                <div class="p-4 border-b border-outline-variant flex justify-between items-start">
                    <div class="flex gap-3 items-center">
                        <div class="w-12 h-12 rounded-full bg-primary/10 text-primary flex items-center justify-center font-bold font-body-md uppercase">
                            {{ substr($izin->user->nama_lengkap, 0, 2) }}
                        </div>
                        <div>
                            <h3 class="font-h4 text-h4 text-on-surface">{{ $izin->user->nama_lengkap }}</h3>
                            <p class="font-body-sm text-body-sm text-on-surface-variant">{{ $izin->created_at->format('d M Y') }}</p>
                        </div>
                    </div>
                    <span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-secondary-container/20 text-on-secondary-container font-label-mono text-label-mono text-[12px]">
                        <span class="w-1.5 h-1.5 rounded-full bg-secondary"></span> Menunggu
                    </span>
                </div>
                <div class="p-4 flex-1 space-y-4">
                    <div class="grid grid-cols-2 gap-4">
                        <div class="bg-surface-container-low p-3 rounded-lg">
                            <span class="block font-label-mono text-label-mono text-on-surface-variant mb-1">JAM PENGAJUAN</span>
                            <span class="font-body-md text-body-md text-on-surface font-semibold">{{ $izin->created_at->format('H:i') }} WIB</span>
                        </div>
                        <div class="bg-surface-container-low p-3 rounded-lg">
                            <span class="block font-label-mono text-label-mono text-on-surface-variant mb-1">ESTIMASI KEMBALI</span>
                            <span class="font-body-md text-body-md text-on-surface font-semibold">{{ $izin->estimasi_kembali ? \Carbon\Carbon::parse($izin->estimasi_kembali)->format('H:i') . ' WIB' : 'Tidak Kembali' }}</span>
                        </div>
                    </div>
                    <div>
                        <span class="block font-label-mono text-label-mono text-on-surface-variant mb-1">ALASAN IZIN: {{ $izin->alasan }}</span>
                        <p class="font-body-md text-body-md text-on-surface bg-surface-container-low p-3 rounded-lg border-l-4 border-primary">
                            {{ $izin->keterangan ?? 'Tidak ada keterangan tambahan.' }}
                        </p>
                    </div>
                </div>
                <div class="p-4 bg-surface-container-lowest border-t border-outline-variant flex gap-3">
                    <button @click="showModal = true; actionType = 'tolak'; izinId = '{{ $izin->id }}'" class="flex-1 py-2 px-4 rounded-lg border border-error text-error hover:bg-error-container hover:text-on-error-container font-body-md text-body-md font-semibold transition-colors flex items-center justify-center gap-2">
                        <span class="material-symbols-outlined text-[20px]">close</span> Tolak
                    </button>
                    <button @click="showModal = true; actionType = 'setujui'; izinId = '{{ $izin->id }}'" class="flex-1 py-2 px-4 rounded-lg bg-primary text-on-primary hover:bg-primary-container hover:text-on-primary-container font-body-md text-body-md font-semibold transition-colors flex items-center justify-center gap-2">
                        <span class="material-symbols-outlined text-[20px]">check</span> Setujui
                    </button>
                </div>
            </div>
            @endforeach
        </div>
        @endif


        <!-- Confirmation Modal -->
        <div x-show="showModal" class="fixed inset-0 z-50 flex items-center justify-center bg-on-background/50 backdrop-blur-sm transition-opacity" style="display: none;">
            <div @click.away="showModal = false" class="bg-surface w-full max-w-sm rounded-xl shadow-lg border border-outline-variant overflow-hidden flex flex-col">
                <div class="p-6">
                    <h3 class="font-h3 text-h3 font-bold text-on-surface mb-2">Konfirmasi Aksi</h3>
                    <p class="font-body-md text-body-md text-on-surface-variant">
                        Apakah Anda yakin ingin <span class="font-semibold" x-text="actionType"></span> permohonan izin ini?
                    </p>
                </div>
                <div class="p-4 bg-surface-container-low flex justify-end gap-3 border-t border-outline-variant">
                    <button @click="showModal = false" class="py-2 px-4 rounded-lg border border-outline text-on-surface hover:bg-surface-variant font-body-md font-semibold transition-colors">Batal</button>
                    <button @click="submitForm()" class="py-2 px-4 rounded-lg bg-primary text-on-primary hover:bg-primary-container font-body-md font-semibold transition-colors">Ya, Lanjutkan</button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
