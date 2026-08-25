<!DOCTYPE html>
<html class="light" lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Sistem Presensi Guru') }}</title>

    <!-- Google Fonts & Material Symbols -->
    <link href="https://fonts.googleapis.com" rel="preconnect"/>
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=JetBrains+Mono:wght@500&family=Plus+Jakarta+Sans:wght@600;700&display=swap" rel="stylesheet"/>
    <link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>

    <style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
{{ $slot }}
    @if(session('success'))
    <script type="module">
        window.Swal.fire({
            toast: true,
            position: 'top-end',
            icon: 'success',
            title: '{!! addslashes(session('success')) !!}',
            showConfirmButton: false,
            timer: 3000
        });
    </script>
    @endif
    @if(session('error'))
    <script type="module">
        window.Swal.fire({
            toast: true,
            position: 'top-end',
            icon: 'error',
            title: '{!! addslashes(session('error')) !!}',
            showConfirmButton: false,
            timer: 3000
        });
    </script>
    @endif
</html>
