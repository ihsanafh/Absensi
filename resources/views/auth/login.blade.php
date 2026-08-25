<x-guest-layout>
<body class="min-h-screen flex flex-col justify-center items-center bg-surface-container-low p-container-padding font-body-md text-body-md text-on-surface">
<!-- Main Card Container -->
<main class="w-full max-w-[420px] bg-surface-container-lowest rounded-xl shadow-sm overflow-hidden flex flex-col">
<!-- Header Strip -->
<header class="bg-primary px-stack-md py-stack-md flex items-center justify-center gap-stack-sm border-b border-primary-container">
<!-- Placeholder Logo Icon -->
<span class="material-symbols-outlined text-on-primary text-[28px]" style="font-variation-settings: 'FILL' 1;">local_library</span>
<h1 class="font-h4 text-h4 font-bold text-on-primary tracking-tight">Sistem Presensi Guru</h1>
</header>
<!-- Login Form Section -->
<div class="p-stack-lg flex flex-col gap-stack-lg">
<!-- Heading & Subtext -->
<div class="flex flex-col gap-1 text-center">
<h2 class="font-h3 text-h3 text-on-surface">Masuk ke Akun</h2>
<p class="font-body-sm text-body-sm text-on-surface-variant">Gunakan akun yang diberikan oleh admin sekolah</p>
</div>
<!-- Session Status -->
<x-auth-session-status class="mb-4" :status="session('status')" />
<!-- Form -->
<form action="{{ route('login') }}" class="flex flex-col gap-stack-md" method="POST">
@csrf
<!-- Input Group: Email/Username -->
<div class="flex flex-col gap-1">
<label class="font-body-sm text-body-sm font-semibold text-on-surface" for="username">Email atau Username</label>
<div class="relative">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline-variant select-none pointer-events-none">person</span>
<input class="w-full pl-10 pr-4 py-3 bg-surface border border-outline-variant rounded-lg font-body-md text-body-md text-on-surface focus:border-primary focus:ring-1 focus:ring-primary focus:outline-none transition-colors placeholder:text-outline" id="username" name="username" placeholder="Masukkan email atau username" required autofocus autocomplete="username" type="text" value="{{ old('username') }}"/>
</div>
<x-input-error :messages="$errors->get('username')" class="mt-2 text-error" />
<x-input-error :messages="$errors->get('email')" class="mt-2 text-error" />
</div>
<!-- Input Group: Password -->
<div class="flex flex-col gap-1">
<label class="font-body-sm text-body-sm font-semibold text-on-surface" for="password">Kata Sandi</label>
<div class="relative">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline-variant select-none pointer-events-none">lock</span>
<input class="w-full pl-10 pr-10 py-3 bg-surface border border-outline-variant rounded-lg font-body-md text-body-md text-on-surface focus:border-primary focus:ring-1 focus:ring-primary focus:outline-none transition-colors placeholder:text-outline" id="password" name="password" placeholder="Masukkan kata sandi" required autocomplete="current-password" type="password"/>
<button aria-label="Toggle password visibility" class="absolute right-3 top-1/2 -translate-y-1/2 text-outline-variant hover:text-on-surface focus:outline-none transition-colors" type="button" onclick="const p = document.getElementById('password'); p.type = p.type === 'password' ? 'text' : 'password'; this.children[0].textContent = p.type === 'password' ? 'visibility_off' : 'visibility';">
<span class="material-symbols-outlined text-[20px]">visibility_off</span>
</button>
</div>
<x-input-error :messages="$errors->get('password')" class="mt-2 text-error" />
</div>
<!-- Forgot Password Link -->
<div class="flex justify-end">
<a class="font-body-sm text-body-sm font-medium text-secondary hover:text-secondary-container transition-colors focus:outline-none focus:underline" href="{{ route('password.request') }}">Lupa kata sandi?</a>
</div>
<!-- Submit Button -->
<button class="w-full mt-2 py-3 bg-primary text-on-primary rounded-xl font-h4 text-[16px] font-semibold tracking-wide hover:bg-primary-container focus:ring-2 focus:ring-offset-2 focus:ring-primary transition-all active:scale-[0.98] shadow-sm" type="submit">
                    Masuk
                </button>
</form>
</div>
</main>
<!-- Footer -->
<footer class="mt-stack-lg font-body-sm text-body-sm text-on-surface-variant opacity-80">
        &copy; {{ date('Y') }} MI AL-Faizein
    </footer>
</body>
</x-guest-layout>
