<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Sistem Presensi') }}</title>
    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
    <style>
        body { font-family: 'Poppins', sans-serif; }
        .material-symbols-outlined { font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24; }
        .material-symbols-outlined[data-weight="fill"], .material-symbols-outlined.fill { font-variation-settings: 'FILL' 1; }
    </style>
    <!-- Scripts -->
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-slate-50 text-gray-800 min-h-screen flex antialiased" x-data="{ sidebarOpen: false }">
    <div x-cloak x-show="sidebarOpen" class="fixed inset-0 z-40 bg-on-background/40 md:hidden backdrop-blur-sm" 
         x-transition.opacity @click="sidebarOpen = false"></div>

    <!-- Sidebar -->
    <nav :class="sidebarOpen ? 'translate-x-0' : '-translate-x-full'" 
         class="fixed left-0 top-0 z-50 h-screen w-[240px] flex flex-col py-stack-md shadow-sm transition-transform duration-300 md:translate-x-0 bg-primary text-on-primary">
         
         @if(auth()->user()->role === 'admin')
            @include('layouts.sidebar-admin')
         @else
            @include('layouts.sidebar-guru')
         @endif
    </nav>

    <!-- Main Content Area -->
    <div class="flex flex-1 flex-col min-h-screen md:ml-[240px] w-full bg-slate-50 relative">
        <!-- Header -->
        <header class="sticky top-0 z-30 flex items-center justify-between border-b border-gray-200 bg-white px-6 py-4">
            <div class="flex items-center gap-4">
                <button @click="sidebarOpen = true" class="p-2 text-gray-600 hover:bg-gray-100 rounded-full md:hidden transition-colors">
                    <span class="material-symbols-outlined">menu</span>
                </button>
                <h1 class="text-2xl font-semibold text-gray-800">{{ $header ?? 'Dashboard' }}</h1>
            </div>
            
            <div class="flex items-center gap-4">
                <button class="relative rounded-full p-2 text-gray-500 hover:bg-gray-100 transition-colors">
                    <span class="material-symbols-outlined">notifications</span>
                </button>
                
                <div class="relative" x-data="{ dropdownOpen: false }">
                    <button @click="dropdownOpen = !dropdownOpen" class="h-10 w-10 overflow-hidden rounded-full border border-gray-200 hover:border-green-600 transition-colors focus:outline-none">
                        <img src="https://ui-avatars.com/api/?name={{ urlencode(auth()->user()->nama_lengkap ?? auth()->user()->username) }}&background=046a38&color=fff" alt="Avatar" class="h-full w-full object-cover">
                    </button>
                    
                    <div x-cloak x-show="dropdownOpen" @click.away="dropdownOpen = false" x-transition class="absolute right-0 mt-2 w-48 rounded-lg border border-gray-200 bg-white shadow-lg py-1 z-50">
                        <a href="{{ route('profile.edit') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100">Profil Saya</a>
                        <form method="POST" action="{{ route('logout') }}" @submit.prevent="$dispatch('open-confirm-modal', {
                            title: 'Konfirmasi Logout',
                            message: 'Apakah Anda yakin ingin keluar dari sistem?',
                            actionUrl: $el.action,
                            confirmText: 'Ya, Keluar'
                        })">
                            @csrf
                            <button type="submit" class="w-full text-left px-4 py-2 text-sm text-red-600 hover:bg-red-50">Keluar</button>
                        </form>
                    </div>
                </div>
            </div>
        </header>

        <!-- Main Canvas -->
        <main class="flex-1 overflow-y-auto">
            <div class="max-w-7xl mx-auto w-full p-6">
                {{ $slot }}
            </div>
        </main>
    @if(session()->has('sweetalert_success'))
        <script type="module">
            window.Swal.fire({
                toast: true,
                position: 'top-end',
                icon: 'success',
                title: "{{ session('sweetalert_success') }}",
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
            });
        </script>
        @php
            session()->forget('sweetalert_success');
        @endphp
    @elseif(session()->has('success'))
        <script type="module">
            window.Swal.fire({
                toast: true,
                position: 'top-end',
                icon: 'success',
                title: "{{ session('success') }}",
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
            });
        </script>
    @endif

    @if(session()->has('sweetalert_error'))
        <script type="module">
            window.Swal.fire({
                toast: true,
                position: 'top-end',
                icon: 'error',
                title: "{{ session('sweetalert_error') }}",
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
            });
        </script>
        @php
            session()->forget('sweetalert_error');
        @endphp
    @elseif(session()->has('error'))
        <script type="module">
            window.Swal.fire({
                toast: true,
                position: 'top-end',
                icon: 'error',
                title: "{{ session('error') }}",
                showConfirmButton: false,
                timer: 3000,
                timerProgressBar: true,
            });
        </script>
    @endif
</body>
</html>
