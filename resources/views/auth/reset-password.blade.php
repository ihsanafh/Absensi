<x-guest-layout>
<body class="bg-surface-container-low min-h-screen flex items-center justify-center p-container-padding font-body-md text-on-surface antialiased">
<!-- Main Transactional Card -->
<main class="bg-surface-container-lowest w-full max-w-md rounded-xl shadow-sm p-stack-lg border border-outline-variant/40 relative overflow-hidden">
<!-- Subtle Top Accent -->
<div class="absolute top-0 left-0 w-full h-1.5 bg-primary"></div>
<!-- Header / Identity -->
<header class="flex flex-col items-center mb-stack-lg mt-stack-sm text-center">
<div class="w-14 h-14 bg-primary-container/10 rounded-xl flex items-center justify-center mb-stack-sm shadow-sm ring-1 ring-primary-container/20">
<span class="material-symbols-outlined text-primary text-3xl" style="font-variation-settings: 'FILL' 1;">lock_reset</span>
</div>
<h1 class="font-h3 text-h3 text-on-surface mb-2">Buat Kata Sandi Baru</h1>
<p class="font-body-sm text-body-sm text-on-surface-variant max-w-[280px]">
                Silakan masukkan kata sandi baru Anda yang kuat dan mudah diingat.
            </p>
</header>

<x-input-error :messages="$errors->get('email')" class="mb-4 text-center text-error" />
<x-input-error :messages="$errors->get('password')" class="mb-4 text-center text-error" />

<!-- Reset Password Form -->
<form class="flex flex-col gap-stack-md" method="POST" action="{{ route('password.store') }}">
@csrf

<input type="hidden" name="token" value="{{ $request->route('token') }}">
<input type="hidden" name="email" value="{{ old('email', $request->email) }}">

<!-- Input: New Password -->
<div class="flex flex-col gap-2">
<label class="font-body-sm text-body-sm font-semibold text-on-surface" for="new_password">Kata Sandi Baru</label>
<div class="relative">
<span class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
<span class="material-symbols-outlined text-on-surface-variant text-[20px]">key</span>
</span>
<input class="w-full pl-11 pr-11 py-3 bg-surface border border-outline-variant rounded-lg focus:ring-2 focus:ring-primary focus:border-primary font-body-md text-body-md text-on-surface outline-none transition-all placeholder:text-outline/70" id="new_password" name="password" placeholder="Masukkan kata sandi" required autocomplete="new-password" type="password"/>
<button aria-label="Toggle password visibility" class="absolute inset-y-0 right-0 flex items-center pr-3.5 text-on-surface-variant hover:text-primary transition-colors focus:outline-none" onclick="toggleVisibility('new_password', 'icon_new')" type="button">
<span class="material-symbols-outlined text-[20px]" id="icon_new">visibility_off</span>
</button>
</div>
<!-- Password Strength Indicator -->
<div class="flex flex-col gap-1.5 mt-2">
<div class="flex h-1.5 w-full gap-1 rounded-full overflow-hidden bg-surface-variant/50">
<div class="h-full flex-1 bg-surface-variant transition-colors duration-300" id="strength-bar-1"></div>
<div class="h-full flex-1 bg-surface-variant transition-colors duration-300" id="strength-bar-2"></div>
<div class="h-full flex-1 bg-surface-variant transition-colors duration-300" id="strength-bar-3"></div>
</div>
<div class="flex justify-between items-center mt-0.5 px-1">
<span class="font-label-mono text-label-mono text-[12px] text-on-surface-variant transition-colors duration-300" id="strength-text">Belum diisi</span>
</div>
</div>
</div>
<!-- Input: Confirm Password -->
<div class="flex flex-col gap-2">
<label class="font-body-sm text-body-sm font-semibold text-on-surface" for="confirm_password">Konfirmasi Kata Sandi Baru</label>
<div class="relative">
<span class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
<span class="material-symbols-outlined text-on-surface-variant text-[20px]">lock_clock</span>
</span>
<input class="w-full pl-11 pr-11 py-3 bg-surface border border-outline-variant rounded-lg focus:ring-2 focus:ring-primary focus:border-primary font-body-md text-body-md text-on-surface outline-none transition-all placeholder:text-outline/70" id="confirm_password" name="password_confirmation" placeholder="Ulangi kata sandi" required autocomplete="new-password" type="password"/>
<button aria-label="Toggle confirm password visibility" class="absolute inset-y-0 right-0 flex items-center pr-3.5 text-on-surface-variant hover:text-primary transition-colors focus:outline-none" onclick="toggleVisibility('confirm_password', 'icon_confirm')" type="button">
<span class="material-symbols-outlined text-[20px]" id="icon_confirm">visibility_off</span>
</button>
</div>
</div>
<!-- Actions -->
<div class="mt-stack-sm pt-2">
<button class="w-full py-3.5 px-4 bg-primary text-on-primary font-body-md text-body-md font-semibold rounded-lg hover:bg-primary-container hover:text-on-primary-container focus:ring-4 focus:ring-primary/20 transition-all flex justify-center items-center gap-2 shadow-sm" type="submit">
                    Simpan Kata Sandi Baru
                    <span class="material-symbols-outlined text-[20px]">check_circle</span>
</button>
</div>
<!-- Back Link -->
<div class="text-center mt-2">
<a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary transition-colors font-medium inline-flex items-center gap-1.5 py-2" href="{{ route('login') }}">
<span class="material-symbols-outlined text-[18px]">arrow_back</span>
                    Kembali ke halaman Masuk
                </a>
</div>
</form>
</main>
<!-- Interactive Logic Script -->
<script>
        // Toggle Password Visibility
        function toggleVisibility(inputId, iconId) {
            const input = document.getElementById(inputId);
            const icon = document.getElementById(iconId);
            if (input.type === 'password') {
                input.type = 'text';
                icon.textContent = 'visibility';
            } else {
                input.type = 'password';
                icon.textContent = 'visibility_off';
            }
        }

        // Password Strength Logic
        const passInput = document.getElementById('new_password');
        const b1 = document.getElementById('strength-bar-1');
        const b2 = document.getElementById('strength-bar-2');
        const b3 = document.getElementById('strength-bar-3');
        const sText = document.getElementById('strength-text');

        if (passInput) {
            passInput.addEventListener('input', function(e) {
                const val = e.target.value;
                const len = val.length;

                // Base Reset
                const defaultBg = 'bg-surface-variant';
                const defaultText = 'text-on-surface-variant';

                b1.className = `h-full flex-1 transition-colors duration-300 ${defaultBg}`;
                b2.className = `h-full flex-1 transition-colors duration-300 ${defaultBg}`;
                b3.className = `h-full flex-1 transition-colors duration-300 ${defaultBg}`;
                sText.className = `font-label-mono text-label-mono text-[12px] transition-colors duration-300 ${defaultText}`;

                if (len === 0) {
                    sText.textContent = 'Belum diisi';
                } else if (len > 0 && len < 6) {
                    b1.classList.replace(defaultBg, 'bg-error');
                    sText.textContent = 'Lemah';
                    sText.classList.replace(defaultText, 'text-error');
                } else if (len >= 6 && len < 10) {
                    b1.classList.replace(defaultBg, 'bg-secondary-container');
                    b2.classList.replace(defaultBg, 'bg-secondary-container');
                    sText.textContent = 'Sedang';
                    sText.classList.replace(defaultText, 'text-on-secondary-container');
                } else if (len >= 10) {
                    // Assuming >= 10 chars is strong for this visual demo
                    b1.classList.replace(defaultBg, 'bg-primary');
                    b2.classList.replace(defaultBg, 'bg-primary');
                    b3.classList.replace(defaultBg, 'bg-primary');
                    sText.textContent = 'Kuat';
                    sText.classList.replace(defaultText, 'text-primary');
                }
            });
        }
    </script>
</body>
</x-guest-layout>
