<x-app-layout>
    <div class="mb-stack-lg flex justify-between items-end">
        <div>
            <h1 class="font-h2 text-h2 text-on-surface mb-2">Pengaturan Sistem</h1>
            <p class="font-body-md text-body-md text-on-surface-variant">Kelola konfigurasi global aplikasi seperti nama sekolah dan aturan jam presensi.</p>
        </div>
    </div>


    <div class="bg-surface-container-lowest rounded-xl shadow-sm border border-outline-variant p-stack-lg max-w-3xl">
        <form action="{{ route('admin.pengaturan.update') }}" method="POST">
            @csrf
            
            <div class="space-y-6">
                <!-- Nama Sekolah -->
                <div>
                    <label for="nama_sekolah" class="block font-body-sm text-body-sm text-on-surface-variant mb-2">Nama Sekolah <span class="text-error">*</span></label>
                    <input type="text" id="nama_sekolah" name="nama_sekolah" required 
                           value="{{ old('nama_sekolah', $settings['nama_sekolah'] ?? 'MI AL-Faizein') }}" 
                           class="w-full px-4 py-3 bg-surface border border-outline-variant rounded-lg font-body-md text-body-md text-on-surface focus:outline-none focus:border-primary transition-colors">
                    @error('nama_sekolah')
                        <p class="mt-1 text-sm text-error">{{ $message }}</p>
                    @enderror
                </div>

                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Jam Masuk -->
                    <div>
                        <label for="jam_masuk" class="block font-body-sm text-body-sm text-on-surface-variant mb-2">Jam Masuk Standar <span class="text-error">*</span></label>
                        <input type="time" id="jam_masuk" name="jam_masuk" required 
                               value="{{ old('jam_masuk', $settings['jam_masuk'] ?? '07:00') }}" 
                               class="w-full px-4 py-3 bg-surface border border-outline-variant rounded-lg font-body-md text-body-md text-on-surface focus:outline-none focus:border-primary transition-colors">
                        @error('jam_masuk')
                            <p class="mt-1 text-sm text-error">{{ $message }}</p>
                        @enderror
                    </div>

                    <!-- Jam Pulang -->
                    <div>
                        <label for="jam_pulang" class="block font-body-sm text-body-sm text-on-surface-variant mb-2">Jam Pulang Standar <span class="text-error">*</span></label>
                        <input type="time" id="jam_pulang" name="jam_pulang" required 
                               value="{{ old('jam_pulang', $settings['jam_pulang'] ?? '14:00') }}" 
                               class="w-full px-4 py-3 bg-surface border border-outline-variant rounded-lg font-body-md text-body-md text-on-surface focus:outline-none focus:border-primary transition-colors">
                        @error('jam_pulang')
                            <p class="mt-1 text-sm text-error">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <!-- Toleransi Keterlambatan -->
                <div>
                    <label for="toleransi_keterlambatan" class="block font-body-sm text-body-sm text-on-surface-variant mb-2">Toleransi Keterlambatan (Menit) <span class="text-error">*</span></label>
                    <div class="relative">
                        <input type="number" id="toleransi_keterlambatan" name="toleransi_keterlambatan" required min="0" 
                               value="{{ old('toleransi_keterlambatan', $settings['toleransi_keterlambatan'] ?? '15') }}" 
                               class="w-full px-4 py-3 pr-16 bg-surface border border-outline-variant rounded-lg font-body-md text-body-md text-on-surface focus:outline-none focus:border-primary transition-colors">
                        <div class="absolute inset-y-0 right-0 pr-4 flex items-center pointer-events-none text-on-surface-variant">
                            menit
                        </div>
                    </div>
                    <p class="mt-1 font-label-mono text-[12px] text-on-surface-variant/70">Guru yang melakukan scan masuk setelah Jam Masuk + Toleransi akan dianggap Terlambat.</p>
                    @error('toleransi_keterlambatan')
                        <p class="mt-1 text-sm text-error">{{ $message }}</p>
                    @enderror
                </div>

                <!-- Durasi Kedaluwarsa QR -->
                <div>
                    <label for="durasi_qr" class="block font-body-sm text-body-sm text-on-surface-variant mb-2">Durasi Kedaluwarsa QR Code (Detik) <span class="text-error">*</span></label>
                    <div class="relative">
                        <input type="number" id="durasi_qr" name="durasi_qr" required min="10" max="120"
                               value="{{ old('durasi_qr', $settings['durasi_qr'] ?? '30') }}" 
                               class="w-full px-4 py-3 pr-16 bg-surface border border-outline-variant rounded-lg font-body-md text-body-md text-on-surface focus:outline-none focus:border-primary transition-colors">
                        <div class="absolute inset-y-0 right-0 pr-4 flex items-center pointer-events-none text-on-surface-variant">
                            detik
                        </div>
                    </div>
                    <p class="mt-1 font-label-mono text-[12px] text-on-surface-variant/70">Lama waktu (10-120 detik) sebelum QR Code otomatis diperbarui.</p>
                    @error('durasi_qr')
                        <p class="mt-1 text-sm text-error">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <!-- Tombol Simpan -->
            <div class="mt-8 pt-6 border-t border-outline-variant flex justify-end">
                <button type="submit" class="px-6 py-3 bg-primary text-on-primary rounded-lg font-body-md text-body-md font-medium hover:bg-primary-container transition-colors shadow-sm flex items-center gap-2">
                    <span class="material-symbols-outlined">save</span>
                    Simpan Pengaturan
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
