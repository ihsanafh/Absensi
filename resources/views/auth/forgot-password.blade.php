<x-guest-layout>
<body class="bg-surface text-on-surface font-body-md antialiased min-h-screen relative flex items-center justify-center">
<!-- Background Image with Overlay for premium feel -->
<div class="absolute inset-0 z-0 bg-cover bg-center" data-alt="A highly blurred, abstract, and soft-focus background image featuring elements of modern educational architecture." style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDtWGWAsnoxMGbCtZ5ux_rqvpo8B8g5Rfn7r5buQ5Ba80Dru9JKtKP8Bn81EWYkAoFhrJeo51lZHzPc3zDNMfKGXq4KwZpMklrQ-DteoJVjHrx-_dlORuY1i9fVbdQ6KRWHtLBwxasvn-THNp8pLf7_4mxHdZxBCUfl8ussmwR8evD05aYgIsiqw_ja377iaWRdYhrXQ-HzA0u8wbcE5_f3pyn3Ljs47Z0Dv4zHdWBlmDqbkmEErhVg')">
<div class="absolute inset-0 bg-surface/80 backdrop-blur-sm"></div>
</div>
<!-- Centered Card Container -->
<main class="relative z-10 w-full max-w-[480px] px-container-padding">
<!-- Brand Header (Above Card) -->
<div class="text-center mb-stack-lg flex flex-col items-center">
<div class="w-16 h-16 bg-primary rounded-xl shadow-sm flex items-center justify-center mb-stack-sm text-on-primary">
<span class="material-symbols-outlined text-4xl" data-weight="fill" style="font-variation-settings: 'FILL' 1;">school</span>
</div>
<h1 class="font-h4 text-h4 font-bold text-primary">MI AL-Faizein</h1>
<p class="font-label-mono text-label-mono text-on-surface-variant uppercase tracking-widest mt-1">Sistem Presensi</p>
</div>
<!-- Main Form Card -->
<div class="bg-surface-container-lowest rounded-xl shadow-lg border border-outline-variant p-stack-lg md:p-[2.5rem]">
<div class="text-center mb-stack-lg">
<h2 class="font-h2 text-h2 font-bold text-on-surface">Lupa Kata Sandi</h2>
<p class="font-body-md text-body-md text-on-surface-variant mt-stack-sm leading-relaxed">
                    Masukkan email akun Anda, kami akan mengirimkan tautan reset kata sandi
                </p>
</div>
<!-- Session Status -->
<x-auth-session-status class="mb-4 text-primary font-semibold" :status="session('status')" />

<form action="{{ route('password.email') }}" class="space-y-stack-md" method="POST">
@csrf
<!-- Email Field -->
<div>
<label class="block font-body-sm text-body-sm font-medium text-on-surface-variant mb-2" for="email">Alamat Email</label>
<div class="relative">
<div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-outline">
<span class="material-symbols-outlined">mail</span>
</div>
<input class="block w-full pl-12 pr-4 py-3 bg-surface-container-low border border-outline-variant rounded-lg font-body-md text-body-md text-on-surface placeholder:text-outline focus:ring-2 focus:ring-primary focus:border-primary transition-shadow" id="email" name="email" value="{{ old('email') }}" placeholder="guru@mi-alfaizein.sch.id" required autofocus type="email"/>
</div>
<x-input-error :messages="$errors->get('email')" class="mt-2 text-error" />
</div>
<!-- Submit Button -->
<div class="pt-stack-sm">
<button class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-sm font-body-md text-body-md font-medium text-on-primary bg-primary hover:bg-primary-container focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary transition-colors" type="submit">
                        Kirim Tautan Reset
                    </button>
</div>
</form>
</div>
<!-- Secondary Action (Below Card) -->
<div class="text-center mt-stack-lg">
<a class="inline-flex items-center gap-2 font-body-sm text-body-sm text-on-surface-variant hover:text-primary transition-colors font-medium" href="{{ route('login') }}">
<span class="material-symbols-outlined text-[18px]">arrow_back</span>
                Kembali ke halaman masuk
            </a>
</div>
</main>
</body>
</x-guest-layout>
