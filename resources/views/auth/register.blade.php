<x-guest-layout>
<body class="min-h-screen flex flex-col justify-center items-center bg-surface-container-low p-container-padding font-body-md text-body-md text-on-surface">
<!-- Main Card Container -->
<main class="w-full max-w-[500px] bg-surface-container-lowest rounded-xl shadow-sm overflow-hidden flex flex-col">
<!-- Header Strip -->
<header class="bg-primary px-stack-md py-stack-md flex items-center justify-center gap-stack-sm border-b border-primary-container">
<span class="material-symbols-outlined text-on-primary text-[28px]" style="font-variation-settings: 'FILL' 1;">person_add</span>
<h1 class="font-h4 text-h4 font-bold text-on-primary tracking-tight">Daftar Akun Baru</h1>
</header>
<!-- Register Form Section -->
<div class="p-stack-lg flex flex-col gap-stack-lg">

<!-- Form -->
<form action="{{ route('register') }}" class="flex flex-col gap-stack-md" method="POST">
@csrf

<!-- Nama Lengkap -->
<div class="flex flex-col gap-1">
<label class="font-body-sm text-body-sm font-semibold text-on-surface" for="nama_lengkap">Nama Lengkap</label>
<input class="w-full px-4 py-3 bg-surface border border-outline-variant rounded-lg font-body-md text-body-md text-on-surface focus:border-primary focus:ring-1 focus:ring-primary focus:outline-none transition-colors" id="nama_lengkap" name="nama_lengkap" type="text" value="{{ old('nama_lengkap') }}" required autofocus/>
<x-input-error :messages="$errors->get('nama_lengkap')" class="mt-1 text-error" />
</div>

<!-- Username -->
<div class="flex flex-col gap-1">
<label class="font-body-sm text-body-sm font-semibold text-on-surface" for="username">Username</label>
<input class="w-full px-4 py-3 bg-surface border border-outline-variant rounded-lg font-body-md text-body-md text-on-surface focus:border-primary focus:ring-1 focus:ring-primary focus:outline-none transition-colors" id="username" name="username" type="text" value="{{ old('username') }}" required/>
<x-input-error :messages="$errors->get('username')" class="mt-1 text-error" />
</div>

<!-- NIP -->
<div class="flex flex-col gap-1">
<label class="font-body-sm text-body-sm font-semibold text-on-surface" for="nip">NIP (Opsional)</label>
<input class="w-full px-4 py-3 bg-surface border border-outline-variant rounded-lg font-body-md text-body-md text-on-surface focus:border-primary focus:ring-1 focus:ring-primary focus:outline-none transition-colors" id="nip" name="nip" type="text" value="{{ old('nip') }}"/>
<x-input-error :messages="$errors->get('nip')" class="mt-1 text-error" />
</div>

<!-- Email -->
<div class="flex flex-col gap-1">
<label class="font-body-sm text-body-sm font-semibold text-on-surface" for="email">Email</label>
<input class="w-full px-4 py-3 bg-surface border border-outline-variant rounded-lg font-body-md text-body-md text-on-surface focus:border-primary focus:ring-1 focus:ring-primary focus:outline-none transition-colors" id="email" name="email" type="email" value="{{ old('email') }}" required/>
<x-input-error :messages="$errors->get('email')" class="mt-1 text-error" />
</div>

<!-- Password -->
<div class="flex flex-col gap-1">
<label class="font-body-sm text-body-sm font-semibold text-on-surface" for="password">Kata Sandi</label>
<input class="w-full px-4 py-3 bg-surface border border-outline-variant rounded-lg font-body-md text-body-md text-on-surface focus:border-primary focus:ring-1 focus:ring-primary focus:outline-none transition-colors" id="password" name="password" type="password" required/>
<x-input-error :messages="$errors->get('password')" class="mt-1 text-error" />
</div>

<!-- Confirm Password -->
<div class="flex flex-col gap-1">
<label class="font-body-sm text-body-sm font-semibold text-on-surface" for="password_confirmation">Konfirmasi Kata Sandi</label>
<input class="w-full px-4 py-3 bg-surface border border-outline-variant rounded-lg font-body-md text-body-md text-on-surface focus:border-primary focus:ring-1 focus:ring-primary focus:outline-none transition-colors" id="password_confirmation" name="password_confirmation" type="password" required/>
<x-input-error :messages="$errors->get('password_confirmation')" class="mt-1 text-error" />
</div>

<!-- Link to login -->
<div class="flex justify-end mt-2">
<a class="font-body-sm text-body-sm font-medium text-secondary hover:text-secondary-container transition-colors focus:outline-none focus:underline" href="{{ route('login') }}">Sudah punya akun?</a>
</div>
<!-- Submit Button -->
<button class="w-full mt-2 py-3 bg-primary text-on-primary rounded-xl font-h4 text-[16px] font-semibold tracking-wide hover:bg-primary-container focus:ring-2 focus:ring-offset-2 focus:ring-primary transition-all active:scale-[0.98] shadow-sm" type="submit">
                    Daftar
                </button>
</form>
</div>
</main>
</body>
</x-guest-layout>
