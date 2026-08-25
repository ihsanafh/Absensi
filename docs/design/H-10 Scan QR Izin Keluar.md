# H-10 Scan QR Izin Keluar

```html
<!-- H-10 Scan QR Izin Keluar -->
<!DOCTYPE html>

<html lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Scan QR Izin Keluar - Sistem Presensi Guru</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&amp;family=Plus+Jakarta+Sans:wght@600;700&amp;family=JetBrains+Mono:wght@500&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
      tailwind.config = {
        darkMode: "class",
        theme: {
          extend: {
            "colors": {
                    "on-secondary-fixed": "#281900",
                    "on-primary-fixed-variant": "#00522a",
                    "primary-fixed": "#9ef6b6",
                    "on-secondary": "#ffffff",
                    "surface-variant": "#e5e2e1",
                    "on-primary-container": "#90e7a8",
                    "secondary-fixed-dim": "#ffba3b",
                    "inverse-primary": "#83d99b",
                    "on-secondary-fixed-variant": "#604100",
                    "secondary-container": "#feb316",
                    "outline": "#6f7a6f",
                    "on-tertiary-fixed": "#002108",
                    "on-background": "#1c1b1b",
                    "on-primary-fixed": "#00210d",
                    "inverse-on-surface": "#f3f0ef",
                    "surface-container-high": "#eae7e7",
                    "secondary": "#7f5700",
                    "inverse-surface": "#313030",
                    "on-tertiary-fixed-variant": "#00531e",
                    "on-surface": "#1c1b1b",
                    "surface-bright": "#fcf9f8",
                    "surface-dim": "#dcd9d9",
                    "primary-fixed-dim": "#83d99b",
                    "surface-container": "#f0eded",
                    "surface-container-low": "#f6f3f2",
                    "primary-container": "#046a38",
                    "error-container": "#ffdad6",
                    "on-secondary-container": "#6a4800",
                    "secondary-fixed": "#ffdead",
                    "surface-container-lowest": "#ffffff",
                    "primary": "#004f28",
                    "tertiary-fixed": "#8ffa9b",
                    "error": "#ba1a1a",
                    "tertiary": "#00501c",
                    "on-tertiary": "#ffffff",
                    "on-error-container": "#93000a",
                    "surface": "#fcf9f8",
                    "tertiary-fixed-dim": "#73dc82",
                    "surface-tint": "#0a6d3a",
                    "outline-variant": "#bec9be",
                    "on-primary": "#ffffff",
                    "background": "#fcf9f8",
                    "on-surface-variant": "#3f4940",
                    "tertiary-container": "#006b29",
                    "on-error": "#ffffff",
                    "on-tertiary-container": "#82eb8f",
                    "surface-container-highest": "#e5e2e1"
            },
            "borderRadius": {
                    "DEFAULT": "0.25rem",
                    "lg": "0.5rem",
                    "xl": "0.75rem",
                    "full": "9999px"
            },
            "spacing": {
                    "stack-lg": "2rem",
                    "sidebar-admin": "240px",
                    "stack-md": "1rem",
                    "sidebar-guru": "220px",
                    "container-padding": "2rem",
                    "stack-sm": "0.5rem",
                    "gutter": "1.5rem"
            },
            "fontFamily": {
                    "label-mono": [
                            "JetBrains Mono"
                    ],
                    "h2": [
                            "Plus Jakarta Sans"
                    ],
                    "body-sm": [
                            "Inter"
                    ],
                    "body-md": [
                            "Inter"
                    ],
                    "h3": [
                            "Plus Jakarta Sans"
                    ],
                    "h1-mobile": [
                            "Plus Jakarta Sans"
                    ],
                    "body-lg": [
                            "Inter"
                    ],
                    "h1": [
                            "Plus Jakarta Sans"
                    ],
                    "h4": [
                            "Plus Jakarta Sans"
                    ]
            },
            "fontSize": {
                    "label-mono": [
                            "14px",
                            {
                                    "lineHeight": "1",
                                    "fontWeight": "500"
                            }
                    ],
                    "h2": [
                            "32px",
                            {
                                    "lineHeight": "1.2",
                                    "fontWeight": "600"
                            }
                    ],
                    "body-sm": [
                            "14px",
                            {
                                    "lineHeight": "1.5",
                                    "fontWeight": "400"
                            }
                    ],
                    "body-md": [
                            "16px",
                            {
                                    "lineHeight": "1.6",
                                    "fontWeight": "400"
                            }
                    ],
                    "h3": [
                            "24px",
                            {
                                    "lineHeight": "1.3",
                                    "fontWeight": "600"
                            }
                    ],
                    "h1-mobile": [
                            "28px",
                            {
                                    "lineHeight": "1.2",
                                    "fontWeight": "700"
                            }
                    ],
                    "body-lg": [
                            "18px",
                            {
                                    "lineHeight": "1.6",
                                    "fontWeight": "400"
                            }
                    ],
                    "h1": [
                            "40px",
                            {
                                    "lineHeight": "1.2",
                                    "fontWeight": "700"
                            }
                    ],
                    "h4": [
                            "20px",
                            {
                                    "lineHeight": "1.4",
                                    "fontWeight": "600"
                            }
                    ]
            }
    },
        },
      }
    </script>
<style>
        .material-symbols-outlined {
          font-variation-settings:
          'FILL' 0,
          'wght' 400,
          'GRAD' 0,
          'opsz' 24
        }
        .material-symbols-outlined.fill {
            font-variation-settings: 'FILL' 1;
        }
        
        @keyframes scan-line {
            0% { top: 0; opacity: 0; }
            10% { opacity: 1; }
            90% { opacity: 1; }
            100% { top: 100%; opacity: 0; }
        }
        
        .animate-scan-line {
            animation: scan-line 2.5s cubic-bezier(0.4, 0, 0.2, 1) infinite;
        }

        /* Glassmorphism utility for overlay elements */
        .glass-panel {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(8px);
            -webkit-backdrop-filter: blur(8px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }
    </style>

</head>
<body class="bg-background text-on-background min-h-screen font-sans antialiased overflow-x-hidden">
<!-- SideNavBar (Type: Guru) -->
<nav class="bg-primary dark:bg-primary-container text-on-primary dark:text-on-primary-container font-body-md text-body-md w-[220px] h-screen fixed left-0 top-0 shadow-sm flex flex-col py-stack-md z-50">
<!-- Header -->
<div class="px-gutter mb-stack-lg flex items-center gap-3">
<div class="w-10 h-10 rounded-full bg-surface flex items-center justify-center overflow-hidden flex-shrink-0">
<img alt="School Logo Small" class="w-full h-full object-cover" data-alt="A clean, minimalist school logo featuring a stylized open book and a modern geometric sunburst in primary green and gold colors, set against a pure white background. High contrast, vector style, professional educational branding." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDChG3OvJwkuRRSJNoCqRedcgYqRS3qTUPUI4lmyJmqVQb2QogFq5PbVOPdiVWFlWhHNHoeQENRg41VsnJ-IB0EpDewwj_qhLauZ8BKgXY2oATGe0rtt87weIYRMlY0WiBD-iigbV4IiVUzuK6Z75EHkBbNyH7f0BEkxz4Zt2E3BXx5FKHTZmo8Loi6f7D333EamK1IcXgOWbVksc4jm2dxPj_AihzKLgGM1REgYgKYtMkyNat-18Yw"/>
</div>
<div>
<h1 class="font-h4 text-h4 font-bold text-on-primary leading-tight">Presensi Guru</h1>
<p class="font-body-sm text-body-sm text-on-primary opacity-80 text-[12px]">MI AL-Faizein</p>
</div>
</div>
<!-- Navigation Links -->
<ul class="flex-1 flex flex-col gap-1 px-3">
<!-- Inactive: Beranda -->
<li>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors group" href="#">
<span class="material-symbols-outlined group-active:scale-95 duration-150" data-icon="home">home</span>
<span>Beranda</span>
</a>
</li>
<!-- Inactive: Scan Presensi -->
<li>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors group" href="#">
<span class="material-symbols-outlined group-active:scale-95 duration-150" data-icon="qr_code_scanner">qr_code_scanner</span>
<span>Scan Presensi</span>
</a>
</li>
<!-- Active: Izin Keluar -->
<li>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg bg-on-primary-fixed-variant text-on-primary-container border-l-4 border-secondary-fixed transition-colors translate-x-1 duration-200" href="#">
<span class="material-symbols-outlined fill" data-icon="assignment_return" data-weight="fill">assignment_return</span>
<span class="font-medium">Izin Keluar</span>
</a>
</li>
<!-- Inactive: Riwayat -->
<li>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors group" href="#">
<span class="material-symbols-outlined group-active:scale-95 duration-150" data-icon="history">history</span>
<span>Riwayat</span>
</a>
</li>
</ul>
<!-- Footer Links -->
<div class="px-3 mt-auto flex flex-col gap-1 border-t border-on-primary/20 pt-4">
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors group" href="#">
<span class="material-symbols-outlined group-active:scale-95 duration-150" data-icon="person">person</span>
<span>Profil Saya</span>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-error hover:bg-error/10 hover:opacity-100 transition-colors group" href="#">
<span class="material-symbols-outlined group-active:scale-95 duration-150" data-icon="logout">logout</span>
<span>Keluar</span>
</a>
</div>
</nav>
<!-- Main Content Wrapper (Accounts for Sidebar) -->
<div class="ml-[220px] min-h-screen flex flex-col relative">
<!-- TopAppBar (Type: Guru) -->
<header class="bg-surface dark:bg-surface-dim border-b border-outline-variant w-full flex justify-between items-center px-gutter py-stack-sm sticky top-0 z-40 h-[72px]">
<div class="flex items-center">
<h2 class="font-h3 text-h3 font-bold text-on-surface">Dashboard Guru</h2>
</div>
<div class="flex items-center gap-4">
<!-- Trailing Icon Action -->
<button class="w-10 h-10 rounded-full flex items-center justify-center text-on-surface-variant hover:text-primary hover:bg-surface-variant/50 transition-colors active:opacity-70">
<span class="material-symbols-outlined" data-icon="notifications">notifications</span>
</button>
<!-- Profile Avatar -->
<div class="w-10 h-10 rounded-full border border-outline-variant overflow-hidden cursor-pointer hover:ring-2 hover:ring-primary transition-all">
<img alt="Teacher Avatar" class="w-full h-full object-cover" data-alt="A professional headshot of a female Indonesian teacher wearing a neat green uniform and a matching hijab. Soft, flattering studio lighting with a clean, blurred light gray background. Friendly and approachable expression." src="https://lh3.googleusercontent.com/aida-public/AB6AXuB3LQ3bfsEmBmE5srs1fbmowi6EUb39cNmm0dwOdw7ubfAuaUzwsloxjsBr_vc3U-5gPrBmGZ4GBM49a1BsUYZ6J7NIIBRIZgHzG3BmUKeqbJ9iqCGFANeG7S7enrhnXttic8M9BZrmOblhD0SqbEs2MSC_g65SL64gdbRrkyYMXLXGGeRUgtXkVywEVndXj9QMEZgulZo4zGD7d3724JXeRhOO4IlNWJ5WDlksHzho-8GFY8srHC5i"/>
</div>
</div>
</header>
<!-- Canvas Content -->
<main class="flex-1 p-container-padding flex flex-col items-center justify-center">
<!-- Page Header Container -->
<div class="w-full max-w-3xl mb-stack-lg text-center">
<h1 class="font-h2 text-h2 text-on-background mb-2">Scan QR Izin Keluar</h1>
<p class="font-body-lg text-body-lg text-on-surface-variant max-w-xl mx-auto">Pindai QR izin yang ditampilkan oleh Admin/Operator Madrasah Ibtidaiyah AL-Faizein untuk memvalidasi keluarnya Anda dari area sekolah.</p>
</div>
<!-- Scanner Card -->
<div class="w-full max-w-3xl bg-surface-container-lowest rounded-xl shadow-sm border border-outline-variant overflow-hidden flex flex-col">
<!-- Card Header -->
<div class="px-6 py-4 border-b border-outline-variant flex justify-between items-center bg-surface">
<div class="flex items-center gap-2 text-primary">
<span class="material-symbols-outlined fill" data-weight="fill">camera</span>
<span class="font-h4 text-h4 font-semibold">Kamera Pemindai</span>
</div>
<div class="flex gap-2">
<!-- Camera Controls -->
<button class="p-2 rounded-full text-on-surface-variant hover:bg-surface-variant hover:text-primary transition-colors" title="Ganti Kamera">
<span class="material-symbols-outlined">flip_camera_ios</span>
</button>
<button class="p-2 rounded-full text-on-surface-variant hover:bg-surface-variant hover:text-primary transition-colors" title="Nyalakan Flash">
<span class="material-symbols-outlined">flashlight_on</span>
</button>
</div>
</div>
<!-- Viewfinder Area -->
<div class="relative w-full bg-inverse-surface aspect-[4/3] md:aspect-video flex items-center justify-center overflow-hidden">
<!-- Simulated Camera Feed Background -->
<div class="absolute inset-0 w-full h-full" data-alt="A blurred, slightly desaturated background resembling a brightly lit school hallway or administration office. Natural daylight streaming through windows. The scene is out of focus, serving as a realistic backdrop for a camera viewfinder overlay. Professional, institutional atmosphere." style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDNGXVR5nCRZEodkBqmEV95LwgkURVp30pDrK9rBG3m_JLBJixiD2bK8LvDJrXQ2yJrTYfTN-EK58CQxaZ9Y3q_bZjMoyDVY2-Dck9OkQLW6pnSlwUpZ4HP7OaE2BvKJmji7IRv90RCVD_48kuCJE1-PaNHsHW3zC9d7tFVSk4noXhErVJ_ZquOiYHn51qPqhKjmFLi14WMfzEyvJMmb1LZqK5fCJWCJy05C_muaf6V8iq_pr5STYck')"></div>
<!-- Darkening Overlay to focus on center -->
<div class="absolute inset-0 bg-inverse-surface/60 backdrop-blur-[2px]"></div>
<!-- The Gold-Tinted Viewfinder Frame -->
<div class="relative w-64 h-64 md:w-80 md:h-80 z-10">
<!-- Center Cutout Effect (Clear area) -->
<div class="absolute inset-0 bg-transparent shadow-[0_0_0_9999px_rgba(0,0,0,0.4)] rounded-lg"></div>
<!-- Corner Accents (Gold) -->
<div class="absolute -top-1 -left-1 w-12 h-12 border-t-4 border-l-4 border-secondary-container rounded-tl-lg"></div>
<div class="absolute -top-1 -right-1 w-12 h-12 border-t-4 border-r-4 border-secondary-container rounded-tr-lg"></div>
<div class="absolute -bottom-1 -left-1 w-12 h-12 border-b-4 border-l-4 border-secondary-container rounded-bl-lg"></div>
<div class="absolute -bottom-1 -right-1 w-12 h-12 border-b-4 border-r-4 border-secondary-container rounded-br-lg"></div>
<!-- Scanning Animation Line -->
<div class="absolute left-0 w-full h-[2px] bg-secondary-container shadow-[0_0_8px_rgba(254,179,22,0.8)] animate-scan-line z-20"></div>
<!-- Center Target Reticle -->
<div class="absolute inset-0 flex items-center justify-center opacity-30">
<div class="w-1 h-1 bg-secondary-container rounded-full"></div>
</div>
</div>
<!-- On-Screen Instructions -->
<div class="absolute bottom-6 left-0 right-0 flex justify-center z-20">
<div class="glass-panel px-6 py-3 rounded-full flex items-center gap-3">
<span class="material-symbols-outlined text-secondary-fixed animate-pulse">qr_code_scanner</span>
<span class="font-body-md text-body-md text-white font-medium">Posisikan QR Code di dalam bingkai</span>
</div>
</div>
</div>
<!-- Card Footer / Action Area -->
<div class="p-6 bg-surface-container-low flex flex-col md:flex-row justify-between items-center gap-4">
<div class="text-sm font-body-sm text-on-surface-variant flex items-center gap-2">
<span class="material-symbols-outlined text-outline" style="font-size: 18px;">info</span>
<span>Sistem otomatis memindai saat QR terbaca.</span>
</div>
<button class="w-full md:w-auto px-6 py-2.5 rounded-lg bg-surface border border-outline text-on-surface font-body-md text-body-md font-medium hover:bg-surface-variant transition-colors flex items-center justify-center gap-2">
<span class="material-symbols-outlined">close</span>
<span>Batalkan Pindai</span>
</button>
</div>
</div>
<!-- Optional Help Text below card -->
<div class="mt-6 text-center">
<a class="font-body-sm text-body-sm text-primary hover:underline flex items-center justify-center gap-1" href="#">
<span class="material-symbols-outlined" style="font-size: 16px;">help</span>
                    Kamera tidak berfungsi? Masukkan kode manual.
                </a>
</div>
</main>
</div>
</body></html>

```

