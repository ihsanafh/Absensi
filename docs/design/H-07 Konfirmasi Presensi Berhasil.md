# H-07 Konfirmasi Presensi Berhasil

```html
<!-- H-07 Konfirmasi Presensi Berhasil -->
<!DOCTYPE html>

<html class="light" lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Presensi Berhasil - MI AL-Faizein</title>
<!-- Material Symbols -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<!-- Google Fonts: Inter & Plus Jakarta Sans & JetBrains Mono -->
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&amp;family=JetBrains+Mono:wght@400;500&amp;family=Plus+Jakarta+Sans:wght@500;600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<!-- Tailwind CSS & Config -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
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
                    "label-mono": ["JetBrains Mono"],
                    "h2": ["Plus Jakarta Sans"],
                    "body-sm": ["Inter"],
                    "body-md": ["Inter"],
                    "h3": ["Plus Jakarta Sans"],
                    "h1-mobile": ["Plus Jakarta Sans"],
                    "body-lg": ["Inter"],
                    "h1": ["Plus Jakarta Sans"],
                    "h4": ["Plus Jakarta Sans"]
            },
            "fontSize": {
                    "label-mono": ["14px", {"lineHeight": "1", "fontWeight": "500"}],
                    "h2": ["32px", {"lineHeight": "1.2", "fontWeight": "600"}],
                    "body-sm": ["14px", {"lineHeight": "1.5", "fontWeight": "400"}],
                    "body-md": ["16px", {"lineHeight": "1.6", "fontWeight": "400"}],
                    "h3": ["24px", {"lineHeight": "1.3", "fontWeight": "600"}],
                    "h1-mobile": ["28px", {"lineHeight": "1.2", "fontWeight": "700"}],
                    "body-lg": ["18px", {"lineHeight": "1.6", "fontWeight": "400"}],
                    "h1": ["40px", {"lineHeight": "1.2", "fontWeight": "700"}],
                    "h4": ["20px", {"lineHeight": "1.4", "fontWeight": "600"}]
            }
          },
        }
      }
    </script>
<style>
        .pulse-animation {
            animation: pulse-ring 2s cubic-bezier(0.215, 0.61, 0.355, 1) infinite;
        }
        @keyframes pulse-ring {
            0% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(4, 106, 56, 0.7); }
            70% { transform: scale(1); box-shadow: 0 0 0 20px rgba(4, 106, 56, 0); }
            100% { transform: scale(0.95); box-shadow: 0 0 0 0 rgba(4, 106, 56, 0); }
        }
    </style>
</head>
<body class="bg-background text-on-background font-body-md min-h-screen flex overflow-hidden">
<!-- SideNavBar (Guru) -->
<nav aria-label="Sidebar" class="w-[220px] h-screen fixed left-0 top-0 bg-primary flex flex-col py-stack-md shadow-sm z-20 hidden md:flex">
<div class="px-gutter mb-stack-lg">
<h1 class="font-h4 text-h4 font-bold text-on-primary">Presensi Guru</h1>
<p class="font-body-sm text-body-sm text-on-primary opacity-80 mt-1">MI AL-Faizein</p>
</div>
<ul class="flex flex-col gap-1 px-3 flex-1">
<!-- Beranda -->
<li>
<a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined" data-icon="home">home</span>
<span class="font-body-md text-body-md">Beranda</span>
</a>
</li>
<!-- Scan Presensi (ACTIVE) -->
<li>
<a class="flex items-center gap-3 px-4 py-3 rounded-lg bg-on-primary-fixed-variant text-on-primary-container border-l-4 border-secondary-fixed active:translate-x-1 duration-200 transition-all" href="#">
<span class="material-symbols-outlined" data-icon="qr_code_scanner" data-weight="fill" style="font-variation-settings: 'FILL' 1;">qr_code_scanner</span>
<span class="font-body-md text-body-md font-medium">Scan Presensi</span>
</a>
</li>
<!-- Izin Keluar -->
<li>
<a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined" data-icon="assignment_return">assignment_return</span>
<span class="font-body-md text-body-md">Izin Keluar</span>
</a>
</li>
<!-- Riwayat -->
<li>
<a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined" data-icon="history">history</span>
<span class="font-body-md text-body-md">Riwayat</span>
</a>
</li>
</ul>
<div class="mt-auto px-3">
<ul class="flex flex-col gap-1 border-t border-on-primary/20 pt-4">
<li>
<a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined" data-icon="person">person</span>
<span class="font-body-md text-body-md">Profil Saya</span>
</a>
</li>
<li>
<a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined" data-icon="logout">logout</span>
<span class="font-body-md text-body-md">Keluar</span>
</a>
</li>
</ul>
</div>
</nav>
<!-- Main Content Wrapper -->
<div class="flex-1 flex flex-col min-h-screen md:ml-[220px] w-full md:w-[calc(100%-220px)] bg-surface-container-low relative">
<!-- TopAppBar (Guru) -->
<header class="bg-surface border-b border-outline-variant flex justify-between items-center px-gutter py-stack-sm w-full sticky top-0 z-10">
<div class="flex items-center gap-4">
<button class="md:hidden text-on-surface hover:text-primary transition-colors p-2">
<span class="material-symbols-outlined">menu</span>
</button>
<h2 class="font-h3 text-h3 font-bold text-on-surface hidden sm:block">Dashboard Guru</h2>
</div>
<div class="flex items-center gap-4">
<button class="text-on-surface-variant hover:text-primary transition-colors p-2 rounded-full hover:bg-surface-variant/50 active:opacity-70">
<span class="material-symbols-outlined" data-icon="notifications">notifications</span>
</button>
<div class="w-10 h-10 rounded-full bg-secondary-container flex items-center justify-center overflow-hidden border border-outline-variant cursor-pointer">
<img alt="Teacher Avatar" class="w-full h-full object-cover" data-alt="A close-up, highly detailed portrait of an Indonesian school teacher in a professional setting. Soft, natural light illuminates their face, creating a warm and approachable mood. The background is slightly blurred but suggests a modern educational environment with neutral colors and subtle greenery. High-quality corporate photography style." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDm3cMU4M12Hg3hOSpGcE0qz2-XBNETCBHSimQ9omjhiCuAElOvU7YdkVkmD8WZFhDvYJy8vOXZylTRBQSu5q4_q0EfmLH22qT8QN5MhKo418xa0TPekCokzvrk96dpOCGuha75ugDl_10Ro8runahzpwTR8ybWg0g9OGexVHHeZHHn58cDF3yVX5OrVxz7aY9A1NHr6aEHt0fVKZ-z-SEyYV1L8PhXiJ4OLbbMyQPGPyH1b0lvJCRv"/>
</div>
</div>
</header>
<!-- Main Canvas (Success State) -->
<main class="flex-1 overflow-y-auto p-container-padding flex items-center justify-center relative">
<!-- Subtle background decoration -->
<div class="absolute inset-0 z-0 pointer-events-none overflow-hidden flex items-center justify-center opacity-[0.03]">
<div class="w-96 h-96 rounded-full bg-primary-container blur-3xl"></div>
</div>
<div class="relative z-10 w-full max-w-md flex flex-col items-center">
<!-- Success Icon -->
<div class="mb-8 relative flex justify-center items-center">
<div class="absolute w-24 h-24 bg-tertiary-container/20 rounded-full pulse-animation"></div>
<span class="material-symbols-outlined text-[80px] text-tertiary-container relative z-10 drop-shadow-sm" style="font-variation-settings: 'FILL' 1;">check_circle</span>
</div>
<!-- Heading -->
<h2 class="font-h2 text-h2 text-on-surface text-center mb-stack-md">Presensi Berhasil!</h2>
<p class="font-body-md text-body-md text-on-surface-variant text-center mb-8">Terima kasih, data kehadiran Anda telah tercatat ke dalam sistem.</p>
<!-- Summary Card -->
<div class="bg-surface-container-lowest border border-outline-variant shadow-sm rounded-xl p-6 w-full flex flex-col gap-5">
<!-- Row: Waktu -->
<div class="flex justify-between items-center pb-4 border-b border-surface-variant">
<span class="font-body-md text-body-md text-on-surface-variant flex items-center gap-2">
<span class="material-symbols-outlined text-[20px] opacity-70">schedule</span>
                            Waktu Scan
                        </span>
<span class="font-h4 text-h4 font-bold text-on-surface">07:15 WIB</span>
</div>
<!-- Row: Status -->
<div class="flex justify-between items-center pb-4 border-b border-surface-variant">
<span class="font-body-md text-body-md text-on-surface-variant flex items-center gap-2">
<span class="material-symbols-outlined text-[20px] opacity-70">how_to_reg</span>
                            Status
                        </span>
<span class="bg-tertiary-container text-on-tertiary-container font-label-mono text-label-mono px-4 py-1.5 rounded-full inline-flex items-center gap-1.5 shadow-sm">
<span class="w-2 h-2 rounded-full bg-on-tertiary-container"></span>
                            Hadir Tepat Waktu
                        </span>
</div>
<!-- Row: Foto -->
<div class="flex justify-between items-center">
<span class="font-body-md text-body-md text-on-surface-variant flex items-center gap-2">
<span class="material-symbols-outlined text-[20px] opacity-70">photo_camera</span>
                            Foto Bukti
                        </span>
<div class="flex items-center gap-2 text-primary">
<span class="font-body-md text-body-md font-medium">Tersimpan</span>
<span class="material-symbols-outlined text-[20px]" style="font-variation-settings: 'FILL' 1;">check</span>
</div>
</div>
</div>
<!-- Action Button -->
<button class="mt-10 bg-primary text-on-primary w-full py-4 rounded-xl font-h4 text-h4 font-bold shadow-md hover:bg-primary-container hover:shadow-lg transition-all flex items-center justify-center gap-3 active:scale-[0.98]">
<span class="material-symbols-outlined">home</span>
                    Kembali ke Beranda
                </button>
</div>
</main>
</div>
</body></html>

```

