<!-- Admin Sidebar -->
<div class="px-gutter mb-stack-lg">
    <div class="flex items-center gap-stack-sm mb-stack-md">
        <div class="w-10 h-10 rounded-full bg-white flex items-center justify-center font-bold text-primary shadow-sm">
            M
        </div>
        <div>
            <h2 class="font-h4 text-h4 font-bold text-on-primary">MI AL-Faizein</h2>
            <p class="font-body-sm text-body-sm opacity-80">Sistem Presensi</p>
        </div>
    </div>
</div>
<div class="flex-1 overflow-y-auto font-body-md text-body-md custom-scrollbar">
    <ul class="flex flex-col gap-1">
        <li>
            <a href="{{ route('admin.dashboard') }}" class="{{ request()->routeIs('admin.dashboard') ? 'flex items-center gap-3 px-4 py-3 text-white bg-white/10 border-l-4 border-white rounded-r-lg transition-colors duration-200' : 'flex items-center gap-3 px-4 py-3 text-white/80 hover:text-white hover:bg-white/10 rounded-lg transition-colors duration-200' }}">
                <span class="material-symbols-outlined w-6 h-6" {!! request()->routeIs('admin.dashboard') ? 'data-weight="fill"' : '' !!}>dashboard</span>
                <span class="whitespace-nowrap">Dashboard</span>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.qr.index') }}" class="{{ request()->routeIs('admin.qr.*') ? 'flex items-center gap-3 px-4 py-3 text-white bg-white/10 border-l-4 border-white rounded-r-lg transition-colors duration-200' : 'flex items-center gap-3 px-4 py-3 text-white/80 hover:text-white hover:bg-white/10 rounded-lg transition-colors duration-200' }}">
                <span class="material-symbols-outlined w-6 h-6" {!! request()->routeIs('admin.qr.*') ? 'data-weight="fill"' : '' !!}>qr_code</span>
                <span class="whitespace-nowrap">Layar QR Presensi</span>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.presensi.index') }}" class="{{ request()->routeIs('admin.presensi.*') ? 'flex items-center gap-3 px-4 py-3 text-white bg-white/10 border-l-4 border-white rounded-r-lg transition-colors duration-200' : 'flex items-center gap-3 px-4 py-3 text-white/80 hover:text-white hover:bg-white/10 rounded-lg transition-colors duration-200' }}">
                <span class="material-symbols-outlined w-6 h-6 {{ request()->routeIs('admin.presensi.*') ? 'icon-fill' : '' }}">person_check</span>
                <span class="whitespace-nowrap">Data Presensi</span>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.izin.index') }}" class="{{ request()->routeIs('admin.izin.index') ? 'flex items-center gap-3 px-4 py-3 text-white bg-white/10 border-l-4 border-white rounded-r-lg transition-colors duration-200' : 'flex items-center gap-3 px-4 py-3 text-white/80 hover:text-white hover:bg-white/10 rounded-lg transition-colors duration-200' }}">
                <span class="material-symbols-outlined w-6 h-6 {{ request()->routeIs('admin.izin.index') ? 'icon-fill' : '' }}">pending_actions</span>
                <span class="whitespace-nowrap">Permohonan Izin</span>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.izin.riwayat') }}" class="{{ request()->routeIs('admin.izin.riwayat') ? 'flex items-center gap-3 px-4 py-3 text-white bg-white/10 border-l-4 border-white rounded-r-lg transition-colors duration-200' : 'flex items-center gap-3 px-4 py-3 text-white/80 hover:text-white hover:bg-white/10 rounded-lg transition-colors duration-200' }}">
                <span class="material-symbols-outlined w-6 h-6 {{ request()->routeIs('admin.izin.riwayat') ? 'icon-fill' : '' }}">history_edu</span>
                <span class="whitespace-nowrap">Riwayat Izin</span>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.guru.index') }}" class="{{ request()->routeIs('admin.guru.*') ? 'flex items-center gap-3 px-4 py-3 text-white bg-white/10 border-l-4 border-white rounded-r-lg transition-colors duration-200' : 'flex items-center gap-3 px-4 py-3 text-white/80 hover:text-white hover:bg-white/10 rounded-lg transition-colors duration-200' }}">
                <span class="material-symbols-outlined w-6 h-6" {!! request()->routeIs('admin.guru.*') ? 'data-weight="fill"' : '' !!}>manage_accounts</span>
                <span class="whitespace-nowrap">Manajemen Akun</span>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.laporan.index') }}" class="{{ request()->routeIs('admin.laporan.*') ? 'flex items-center gap-3 px-4 py-3 text-white bg-white/10 border-l-4 border-white rounded-r-lg transition-colors duration-200' : 'flex items-center gap-3 px-4 py-3 text-white/80 hover:text-white hover:bg-white/10 rounded-lg transition-colors duration-200' }}">
                <span class="material-symbols-outlined w-6 h-6" {!! request()->routeIs('admin.laporan.*') ? 'style="font-variation-settings: \'FILL\' 1;"' : '' !!}>analytics</span>
                <span class="whitespace-nowrap">Laporan</span>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.log.index') }}" class="{{ request()->routeIs('admin.log.index') ? 'flex items-center gap-3 px-4 py-3 text-white bg-white/10 border-l-4 border-white rounded-r-lg transition-colors duration-200' : 'flex items-center gap-3 px-4 py-3 text-white/80 hover:text-white hover:bg-white/10 rounded-lg transition-colors duration-200' }}">
                <span class="material-symbols-outlined w-6 h-6 {{ request()->routeIs('admin.log.index') ? 'icon-fill' : '' }}">list_alt</span>
                <span class="whitespace-nowrap">Log Aktivitas</span>
            </a>
        </li>
        <li>
            <a href="{{ route('admin.pengaturan.index') }}" class="{{ request()->routeIs('admin.pengaturan.*') ? 'flex items-center gap-3 px-4 py-3 text-white bg-white/10 border-l-4 border-white rounded-r-lg transition-colors duration-200' : 'flex items-center gap-3 px-4 py-3 text-white/80 hover:text-white hover:bg-white/10 rounded-lg transition-colors duration-200' }}">
                <span class="material-symbols-outlined w-6 h-6 {{ request()->routeIs('admin.pengaturan.*') ? 'icon-fill' : '' }}">settings</span>
                <span class="whitespace-nowrap">Pengaturan</span>
            </a>
        </li>
    </ul>
</div>
<div class="mt-auto border-t border-white/20 mt-4 pt-4">
    <ul class="flex flex-col gap-1">
        <li>
            <a href="{{ route('profile.edit') }}" class="flex items-center gap-3 px-4 py-3 text-white/80 hover:text-white hover:bg-white/10 rounded-lg transition-colors duration-200">
                <span class="material-symbols-outlined w-6 h-6">account_circle</span>
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
                    <span class="material-symbols-outlined w-6 h-6">logout</span>
                    <span class="whitespace-nowrap">Keluar</span>
                </button>
            </form>
        </li>
    </ul>
</div>
