<x-app-layout>
    <x-slot name="header">Tambah Akun Guru</x-slot>

    <!-- Header -->
    <div class="flex justify-between items-start mb-stack-lg border-b border-outline-variant/50 pb-4">
        <div>
            <h2 class="font-h3 text-h3 text-on-surface mb-1">Tambah Akun Guru</h2>
            <p class="font-body-sm text-body-sm text-on-surface-variant flex items-center gap-1">
                <span class="material-symbols-outlined text-[18px]">info</span>
                Satu akun hanya untuk satu guru dan terikat pada NIP yang bersangkutan.
            </p>
        </div>
        <a href="{{ route('admin.guru.index') }}" class="text-on-surface-variant hover:text-primary transition-colors p-1 rounded-full hover:bg-surface-container/20">
            <span class="material-symbols-outlined">close</span>
        </a>
    </div>

    <!-- Form -->
    <div class="bg-surface-container-lowest rounded-xl shadow-sm p-stack-lg border border-outline-variant/50">
        <form action="{{ route('admin.guru.store') }}" method="POST" class="grid grid-cols-1 md:grid-cols-2 gap-x-stack-lg gap-y-6">
            @csrf

            <!-- LEFT COLUMN: Personal Info -->
            <div class="flex flex-col gap-4">
                <h3 class="font-h4 text-h4 text-primary border-b border-outline-variant pb-2 mb-2">Informasi Pribadi</h3>
                
                <!-- Nama Lengkap -->
                <div>
                    <label class="block font-body-sm font-medium text-on-surface mb-1" for="nama_lengkap">Nama Lengkap beserta Gelar</label>
                    <input type="text" id="nama_lengkap" name="nama_lengkap" value="{{ old('nama_lengkap') }}" required class="w-full rounded-lg border-outline-variant bg-surface focus:border-primary focus:ring focus:ring-primary/20 text-on-surface placeholder:text-on-surface-variant/50 transition-shadow" placeholder="Contoh: Ahmad Hidayat, S.Pd.">
                    <x-input-error :messages="$errors->get('nama_lengkap')" class="mt-2 text-error" />
                </div>
                
                <!-- NIP -->
                <div>
                    <label class="block font-body-sm font-medium text-on-surface mb-1" for="nip">NIP (Nomor Induk Pegawai)</label>
                    <input type="text" id="nip" name="nip" value="{{ old('nip') }}" required class="w-full rounded-lg border-outline-variant bg-surface focus:border-primary focus:ring focus:ring-primary/20 text-on-surface placeholder:text-on-surface-variant/50 transition-shadow font-label-mono" placeholder="Masukkan NIP">
                    <x-input-error :messages="$errors->get('nip')" class="mt-2 text-error" />
                </div>
                
                <!-- Email -->
                <div>
                    <label class="block font-body-sm font-medium text-on-surface mb-1" for="email">Alamat Email Aktif (Opsional)</label>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" class="w-full rounded-lg border-outline-variant bg-surface focus:border-primary focus:ring focus:ring-primary/20 text-on-surface placeholder:text-on-surface-variant/50 transition-shadow" placeholder="guru@alfaizein.sch.id">
                    <x-input-error :messages="$errors->get('email')" class="mt-2 text-error" />
                </div>
                
                <!-- Telepon -->
                <div>
                    <label class="block font-body-sm font-medium text-on-surface mb-1" for="no_telepon">Nomor Telepon / WhatsApp (Opsional)</label>
                    <input type="tel" id="no_telepon" name="no_telepon" value="{{ old('no_telepon') }}" class="w-full rounded-lg border-outline-variant bg-surface focus:border-primary focus:ring focus:ring-primary/20 text-on-surface placeholder:text-on-surface-variant/50 transition-shadow font-label-mono" placeholder="08...">
                    <x-input-error :messages="$errors->get('no_telepon')" class="mt-2 text-error" />
                </div>
            </div>

            <!-- RIGHT COLUMN: Account Settings -->
            <div class="flex flex-col gap-4">
                <h3 class="font-h4 text-h4 text-primary border-b border-outline-variant pb-2 mb-2">Pengaturan Akses</h3>
                
                <!-- Username -->
                <div>
                    <label class="block font-body-sm font-medium text-on-surface mb-1" for="username">Username Aplikasi</label>
                    <input type="text" id="username" name="username" value="{{ old('username') }}" required class="w-full rounded-lg border-outline-variant bg-surface focus:border-primary focus:ring focus:ring-primary/20 text-on-surface placeholder:text-on-surface-variant/50 transition-shadow" placeholder="Gunakan format pendek">
                    <x-input-error :messages="$errors->get('username')" class="mt-2 text-error" />
                </div>
                
                <!-- Password -->
                <div x-data="{ show: false }">
                    <label class="block font-body-sm font-medium text-on-surface mb-1" for="password">Password</label>
                    <div class="relative">
                        <input :type="show ? 'text' : 'password'" id="password" name="password" required class="w-full rounded-lg border-outline-variant bg-surface focus:border-primary focus:ring focus:ring-primary/20 text-on-surface placeholder:text-on-surface-variant/50 pr-10 transition-shadow" placeholder="Minimal 8 karakter">
                        <button type="button" @click="show = !show" class="absolute inset-y-0 right-0 px-3 flex items-center text-on-surface-variant hover:text-primary">
                            <span class="material-symbols-outlined text-[20px]" x-text="show ? 'visibility' : 'visibility_off'">visibility</span>
                        </button>
                    </div>
                    <x-input-error :messages="$errors->get('password')" class="mt-2 text-error" />
                </div>

                <!-- Status Toggle -->
                <div class="mt-2 flex items-center justify-between p-4 rounded-lg bg-surface-container-low border border-outline-variant/30">
                    <div>
                        <span class="block font-medium text-on-surface">Status Akun</span>
                        <span class="text-[12px] text-on-surface-variant">Akun dapat digunakan untuk login</span>
                    </div>
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input type="checkbox" name="status_akun" value="aktif" class="sr-only peer" checked>
                        <input type="hidden" name="status_akun" value="nonaktif" x-bind:disabled="$el.previousElementSibling.checked">
                        <div class="w-11 h-6 bg-surface-variant rounded-full peer peer-focus:ring-2 peer-focus:ring-primary/30 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-outline-variant after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary"></div>
                    </label>
                </div>
            </div>

            <!-- Footer / Actions -->
            <div class="col-span-1 md:col-span-2 pt-6 mt-4 border-t border-outline-variant/50 flex justify-end gap-3">
                <a href="{{ route('admin.guru.index') }}" class="px-6 py-2.5 rounded-lg font-body-md font-medium text-on-surface-variant bg-surface hover:bg-surface-container-high border border-outline-variant transition-colors focus:ring-2 focus:ring-outline/20">
                    Batal
                </a>
                <button type="submit" class="px-6 py-2.5 rounded-lg font-body-md font-medium text-on-primary bg-primary hover:bg-primary-container hover:shadow-md transition-all focus:ring-2 focus:ring-primary/40 flex items-center gap-2">
                    <span class="material-symbols-outlined text-[20px]">save</span>
                    Simpan Data
                </button>
            </div>
        </form>
    </div>
</x-app-layout>
