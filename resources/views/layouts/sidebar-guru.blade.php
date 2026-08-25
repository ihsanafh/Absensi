<!-- Guru Sidebar -->
<div class="px-gutter mb-stack-lg flex items-center gap-3">
    <div class="w-10 h-10 rounded-full bg-white flex items-center justify-center font-bold text-primary shadow-sm">
        M
    </div>
    <div>
        <h2 class="font-h4 text-h4 font-bold text-on-primary">Presensi Guru</h2>
        <p class="font-body-sm text-body-sm text-on-primary opacity-80">MI AL-Faizein</p>
    </div>
</div>
<!-- Navigation Links -->
<div class="flex-1 overflow-y-auto px-stack-sm custom-scrollbar">
    <ul class="flex flex-col gap-1">
        <li>
            <a href="{{ route('guru.dashboard') }}" class="{{ request()->routeIs('guru.dashboard') ? 'flex items-center gap-3 px-4 py-3 text-white bg-white/10 border-l-4 border-white rounded-r-lg transition-colors duration-200' : 'flex items-center gap-3 px-4 py-3 text-white/80 hover:text-white hover:bg-white/10 rounded-lg transition-colors duration-200' }}">
                <span class="material-symbols-outlined w-6 h-6 flex items-center justify-center" {!! request()->routeIs('guru.dashboard') ? 'style="font-variation-settings: \'FILL\' 1;"' : '' !!}>home</span>
                <span class="whitespace-nowrap">Beranda</span>
            </a>
        </li>
        <li>
            <a href="{{ route('guru.presensi.scan') }}" class="{{ request()->routeIs('guru.presensi.*') ? 'flex items-center gap-3 px-4 py-3 text-white bg-white/10 border-l-4 border-white rounded-r-lg transition-colors duration-200' : 'flex items-center gap-3 px-4 py-3 text-white/80 hover:text-white hover:bg-white/10 rounded-lg transition-colors duration-200' }}">
                <span class="material-symbols-outlined w-6 h-6 flex items-center justify-center" {!! request()->routeIs('guru.presensi.*') ? 'style="font-variation-settings: \'FILL\' 1;"' : '' !!}>qr_code_scanner</span>
                <span class="whitespace-nowrap">Scan Presensi</span>
            </a>
        </li>
        <li>
            <a href="{{ route('guru.izin.index') }}" class="{{ request()->routeIs('guru.izin.*') ? 'flex items-center gap-3 px-4 py-3 text-white bg-white/10 border-l-4 border-white rounded-r-lg transition-colors duration-200' : 'flex items-center gap-3 px-4 py-3 text-white/80 hover:text-white hover:bg-white/10 rounded-lg transition-colors duration-200' }}">
                <span class="material-symbols-outlined w-6 h-6 flex items-center justify-center" {!! request()->routeIs('guru.izin.*') ? 'style="font-variation-settings: \'FILL\' 1;"' : '' !!}>assignment_return</span>
                <span class="whitespace-nowrap">Izin Keluar</span>
            </a>
        </li>
        <li>
            <a href="{{ route('guru.riwayat.index') }}" class="{{ request()->routeIs('guru.riwayat.*') ? 'flex items-center gap-3 px-4 py-3 text-white bg-white/10 border-l-4 border-white rounded-r-lg transition-colors duration-200' : 'flex items-center gap-3 px-4 py-3 text-white/80 hover:text-white hover:bg-white/10 rounded-lg transition-colors duration-200' }}">
                <span class="material-symbols-outlined w-6 h-6 flex items-center justify-center" {!! request()->routeIs('guru.riwayat.*') ? 'style="font-variation-settings: \'FILL\' 1;"' : '' !!}>history</span>
                <span class="whitespace-nowrap">Riwayat</span>
            </a>
        </li>
    </ul>
</div>
<div class="mt-auto border-t border-white/20 mt-4 pt-4">
    <ul class="flex flex-col gap-1">
        <li>
            <a href="{{ route('profile.edit') }}" class="flex items-center gap-3 px-4 py-3 text-white/80 hover:text-white hover:bg-white/10 rounded-lg transition-colors duration-200">
                <span class="material-symbols-outlined w-6 h-6 flex items-center justify-center">person</span>
                <span class="whitespace-nowrap">Profil Saya</span>
            </a>
        </li>
        <li>
            <form method="POST" action="{{ route('logout') }}" @submit.prevent="$dispatch('open-confirm-modal', {
                title: 'Konfirmasi Logout',
                message: 'Apakah Anda yakin ingin keluar dari sistem?',
                actionUrl: $el.action,
                confirmText: 'Ya, Keluar'
            })">
                @csrf
                <button type="submit" class="flex w-full items-center gap-3 px-4 py-3 text-white/80 hover:text-white hover:bg-white/10 rounded-lg transition-colors duration-200 text-left">
                    <span class="material-symbols-outlined w-6 h-6 flex items-center justify-center">logout</span>
                    <span class="whitespace-nowrap">Keluar</span>
                </button>
            </form>
        </li>
    </ul>
</div>
