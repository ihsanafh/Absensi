# H-09 Status Permohonan Izin

```html
<!-- H-09 Status Permohonan Izin -->
<!DOCTYPE html>

<html class="light" lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Status Permohonan Izin - MI AL-Faizein</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&amp;family=JetBrains+Mono:wght@500&amp;family=Plus+Jakarta+Sans:wght@600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script id="tailwind-config">
        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    colors: {
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
                    borderRadius: {
                        "DEFAULT": "0.25rem",
                        "lg": "0.5rem",
                        "xl": "0.75rem",
                        "full": "9999px"
                    },
                    spacing: {
                        "stack-lg": "2rem",
                        "sidebar-admin": "240px",
                        "stack-md": "1rem",
                        "sidebar-guru": "220px",
                        "container-padding": "2rem",
                        "stack-sm": "0.5rem",
                        "gutter": "1.5rem"
                    },
                    fontFamily: {
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
                    fontSize: {
                        "label-mono": ["14px", { lineHeight: "1", fontWeight: "500" }],
                        "h2": ["32px", { lineHeight: "1.2", fontWeight: "600" }],
                        "body-sm": ["14px", { lineHeight: "1.5", fontWeight: "400" }],
                        "body-md": ["16px", { lineHeight: "1.6", fontWeight: "400" }],
                        "h3": ["24px", { lineHeight: "1.3", fontWeight: "600" }],
                        "h1-mobile": ["28px", { lineHeight: "1.2", fontWeight: "700" }],
                        "body-lg": ["18px", { lineHeight: "1.6", fontWeight: "400" }],
                        "h1": ["40px", { lineHeight: "1.2", fontWeight: "700" }],
                        "h4": ["20px", { lineHeight: "1.4", fontWeight: "600" }]
                    }
                }
            }
        }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .icon-fill {
            font-variation-settings: 'FILL' 1;
        }
    </style>
</head>
<body class="bg-background text-on-background font-body-md antialiased flex">
<!-- Shared Component: SideNavBar (Guru) -->
<aside class="hidden md:flex flex-col h-screen fixed left-0 top-0 w-[220px] bg-primary dark:bg-primary-container text-on-primary dark:text-on-primary-container shadow-sm z-50 py-stack-md transition-all duration-300">
<!-- Header -->
<div class="px-gutter mb-stack-lg flex items-center gap-3">
<div class="w-10 h-10 rounded-full bg-surface-container-lowest overflow-hidden flex items-center justify-center shrink-0">
<img alt="School Logo Small" class="w-full h-full object-cover" data-alt="A meticulously designed, high-resolution vector logo of a modern Islamic elementary school, featuring a stylized green leaf motif intertwined with an open book, set against a pristine white background with subtle, elegant lighting." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCsXHMaMQLqmq8F860Syz_waPISjuWvSlWfQ-VPwzZ22r7B-I4Au6SqlJWPxRgfRsEWNkZlub5pL4iXeuVM1ht8pZUgP9-HJCF3N7d2z2WPNClb5bJt6A5S8d1UrDp7kwxCtD_fsAW9d0Gb41g_R0-O87_f7U9x_SHYGitaE4GnHJecg0NvN_bYC_jolhPQJzQjMtPPKCTEeFjXm41TCX7U37vRtZ-3o2mz7KhKkAgtTkGCRgDXO6RK"/>
</div>
<div>
<h1 class="font-h4 text-h4 font-bold text-on-primary truncate">Presensi Guru</h1>
<p class="font-body-sm text-body-sm opacity-80 truncate">MI AL-Faizein</p>
</div>
</div>
<!-- Navigation Tabs -->
<nav class="flex-1 overflow-y-auto px-3 space-y-1">
<a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors group" href="#">
<span class="material-symbols-outlined text-[20px]">home</span>
<span class="font-body-md text-body-md">Beranda</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors group" href="#">
<span class="material-symbols-outlined text-[20px]">qr_code_scanner</span>
<span class="font-body-md text-body-md">Scan Presensi</span>
</a>
<!-- Active Tab -->
<a class="flex items-center gap-3 px-4 py-3 rounded-lg bg-on-primary-fixed-variant text-on-primary-container border-l-4 border-secondary-fixed transition-all duration-200 group relative" href="#">
<span class="material-symbols-outlined text-[20px] icon-fill">assignment_return</span>
<span class="font-body-md text-body-md font-medium">Izin Keluar</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors group" href="#">
<span class="material-symbols-outlined text-[20px]">history</span>
<span class="font-body-md text-body-md">Riwayat</span>
</a>
</nav>
<!-- Footer -->
<div class="px-3 mt-auto pt-stack-md border-t border-outline/20">
<a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined text-[20px]">person</span>
<span class="font-body-md text-body-md">Profil Saya</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined text-[20px]">logout</span>
<span class="font-body-md text-body-md">Keluar</span>
</a>
</div>
</aside>
<!-- Mobile Bottom Navigation (Hidden on md+) -->
<nav class="md:hidden fixed bottom-0 left-0 w-full bg-surface-container-lowest border-t border-outline-variant shadow-[0_-2px_10px_rgba(0,0,0,0.05)] z-50 pb-safe">
<div class="flex justify-around items-center h-16">
<a class="flex flex-col items-center justify-center w-full h-full text-on-surface-variant hover:text-primary transition-colors" href="#">
<span class="material-symbols-outlined">home</span>
<span class="text-[10px] mt-1 font-medium">Beranda</span>
</a>
<a class="flex flex-col items-center justify-center w-full h-full text-on-surface-variant hover:text-primary transition-colors" href="#">
<span class="material-symbols-outlined">qr_code_scanner</span>
<span class="text-[10px] mt-1 font-medium">Scan</span>
</a>
<a class="flex flex-col items-center justify-center w-full h-full text-primary relative" href="#">
<span class="material-symbols-outlined icon-fill">assignment_return</span>
<span class="text-[10px] mt-1 font-medium">Izin</span>
<span class="absolute top-2 right-6 w-2 h-2 bg-error rounded-full"></span>
</a>
<a class="flex flex-col items-center justify-center w-full h-full text-on-surface-variant hover:text-primary transition-colors" href="#">
<span class="material-symbols-outlined">history</span>
<span class="text-[10px] mt-1 font-medium">Riwayat</span>
</a>
</div>
</nav>
<!-- Main Content Area -->
<main class="flex-1 md:ml-[220px] flex flex-col min-h-screen relative pb-20 md:pb-0">
<!-- Shared Component: TopAppBar (Guru) -->
<header class="sticky top-0 z-40 bg-surface dark:bg-surface-dim border-b border-outline-variant flex justify-between items-center px-gutter py-stack-sm w-full transition-all">
<div class="flex items-center gap-4">
<h2 class="font-h3 text-h3 font-bold text-on-surface md:block hidden">Dashboard Guru</h2>
<!-- Mobile Title -->
<h2 class="font-h4 text-h4 font-bold text-on-surface block md:hidden">Izin Keluar</h2>
</div>
<div class="flex items-center gap-3">
<button class="w-10 h-10 rounded-full flex items-center justify-center text-on-surface-variant hover:bg-surface-container-highest hover:text-primary transition-colors relative">
<span class="material-symbols-outlined">notifications</span>
<span class="absolute top-2 right-2 w-2 h-2 bg-error rounded-full"></span>
</button>
<div class="w-9 h-9 rounded-full bg-surface-variant overflow-hidden border border-outline-variant">
<img alt="Teacher Avatar" class="w-full h-full object-cover" data-alt="A professional studio portrait of a friendly Indonesian male teacher in his mid-30s, wearing a neat uniform, smiling warmly at the camera against a soft, well-lit studio background." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAt6gdy5McoF0mf9pkBaac6fl3bvVtjnZP10QNeL5ij-b1W5ZzNM8FfGoyPdBKvuDykN1IfolRY96qE-AdOUDoxaeQgsKE9FaXyL0hCKxhE64dT3Jjq3kxbdRgAbUEqkfV2ZwvFNazR6XXOwizN74uxy_GqxbvwfDMbABaPlJVfReboY8xpgtoIANzo3ev2vu7z4u-bjNrzxh5chxu4Unv5LOL_dh8-AUEOPQ751mRSssLrM2foQwUY"/>
</div>
</div>
</header>
<!-- Canvas -->
<div class="p-container-padding max-w-5xl mx-auto w-full flex-1">
<!-- Page Header -->
<div class="flex flex-col sm:flex-row justify-between items-start sm:items-center gap-4 mb-stack-lg">
<div>
<h1 class="font-h2 text-h2 text-on-surface md:block hidden">Riwayat Izin Keluar</h1>
<p class="font-body-md text-body-md text-on-surface-variant mt-1">Kelola dan pantau status permohonan izin Anda saat jam kerja.</p>
</div>
<button class="inline-flex items-center justify-center gap-2 px-6 py-3 bg-primary text-on-primary rounded-xl font-medium hover:bg-primary/90 transition-all shadow-sm shrink-0 w-full sm:w-auto">
<span class="material-symbols-outlined text-[20px]">add</span>
                    Ajukan Izin Baru
                </button>
</div>
<!-- Content Layout: Card Stack -->
<div class="space-y-4">
<!-- Card 1: Approved (Disetujui) -->
<article class="bg-surface-container-lowest rounded-xl shadow-sm border border-outline-variant/30 overflow-hidden relative">
<div class="absolute left-0 top-0 bottom-0 w-1 bg-primary"></div>
<div class="p-stack-md sm:p-6">
<div class="flex justify-between items-start mb-4">
<div>
<div class="flex items-center gap-2 text-on-surface-variant mb-1">
<span class="material-symbols-outlined text-[16px]">calendar_today</span>
<span class="font-label-mono text-label-mono">12 Okt 2023</span>
<span class="text-outline mx-1">•</span>
<span class="material-symbols-outlined text-[16px]">schedule</span>
<span class="font-label-mono text-label-mono">08:30 - 10:30 WIB</span>
</div>
<h3 class="font-h4 text-h4 text-on-surface">Keperluan Keluarga Mendesak</h3>
</div>
<span class="inline-flex items-center px-3 py-1 rounded-full bg-primary-fixed text-on-primary-fixed-variant text-sm font-semibold border border-primary-fixed-dim shrink-0">
                                Disetujui
                            </span>
</div>
<div class="bg-surface-container-low rounded-lg p-4 text-body-sm text-on-surface-variant mb-4">
<p><strong>Keterangan:</strong> Anak sakit dan perlu segera dijemput dari sekolah untuk dibawa ke klinik terdekat.</p>
</div>
<!-- Approved Action Area -->
<div class="border-t border-outline-variant/50 pt-4 mt-2 flex flex-col sm:flex-row items-center justify-between gap-4">
<div class="flex items-center gap-3 text-primary">
<span class="material-symbols-outlined text-[24px]">verified</span>
<p class="text-sm font-medium">QR izin sudah bisa dipindai di pos satpam.</p>
</div>
<button class="inline-flex items-center justify-center gap-2 px-5 py-2.5 bg-secondary-container text-on-secondary-container rounded-lg font-semibold hover:brightness-95 transition-all shadow-sm w-full sm:w-auto">
<span class="material-symbols-outlined text-[20px]">qr_code_scanner</span>
                                Buka Kamera Scan
                            </button>
</div>
</div>
</article>
<!-- Card 2: Pending (Menunggu) -->
<article class="bg-surface-container-lowest rounded-xl shadow-sm border border-outline-variant/30 overflow-hidden relative">
<div class="absolute left-0 top-0 bottom-0 w-1 bg-secondary-container"></div>
<div class="p-stack-md sm:p-6">
<div class="flex justify-between items-start mb-4">
<div>
<div class="flex items-center gap-2 text-on-surface-variant mb-1">
<span class="material-symbols-outlined text-[16px]">calendar_today</span>
<span class="font-label-mono text-label-mono">15 Okt 2023</span>
<span class="text-outline mx-1">•</span>
<span class="material-symbols-outlined text-[16px]">schedule</span>
<span class="font-label-mono text-label-mono">13:00 - 15:00 WIB</span>
</div>
<h3 class="font-h4 text-h4 text-on-surface">Pemeriksaan Kesehatan Rutin</h3>
</div>
<span class="inline-flex items-center px-3 py-1 rounded-full bg-secondary-container text-on-secondary-container text-sm font-semibold border border-secondary-fixed-dim shrink-0">
                                Menunggu
                            </span>
</div>
<div class="bg-surface-container-low rounded-lg p-4 text-body-sm text-on-surface-variant">
<p><strong>Keterangan:</strong> Jadwal check-up dokter gigi bulanan di RSUD.</p>
</div>
</div>
</article>
<!-- Card 3: Rejected (Ditolak) -->
<article class="bg-surface-container-lowest rounded-xl shadow-sm border border-outline-variant/30 overflow-hidden relative opacity-75">
<div class="absolute left-0 top-0 bottom-0 w-1 bg-error"></div>
<div class="p-stack-md sm:p-6">
<div class="flex justify-between items-start mb-4">
<div>
<div class="flex items-center gap-2 text-on-surface-variant mb-1">
<span class="material-symbols-outlined text-[16px]">calendar_today</span>
<span class="font-label-mono text-label-mono">10 Okt 2023</span>
<span class="text-outline mx-1">•</span>
<span class="material-symbols-outlined text-[16px]">schedule</span>
<span class="font-label-mono text-label-mono">09:00 - 11:00 WIB</span>
</div>
<h3 class="font-h4 text-h4 text-on-surface">Urusan Administrasi Bank</h3>
</div>
<span class="inline-flex items-center px-3 py-1 rounded-full bg-error-container text-on-error-container text-sm font-semibold border border-error-container shrink-0">
                                Ditolak
                            </span>
</div>
<div class="bg-error-container/20 rounded-lg p-4 text-body-sm text-on-surface-variant border border-error/10">
<p class="text-error mb-1"><strong>Alasan Penolakan:</strong></p>
<p>Jadwal mengajar sedang padat dan tidak ada guru pengganti yang tersedia pada jam tersebut. Mohon jadwalkan ulang di luar jam KBM.</p>
</div>
</div>
</article>
</div>
<!-- Divider for Demo -->
<div class="my-12 border-t border-outline-variant/30 flex items-center justify-center">
<span class="bg-background px-4 text-sm text-on-surface-variant -mt-2.5">Tampilan State Kosong (Contoh)</span>
</div>
<!-- Empty State Variant -->
<div class="bg-surface-container-lowest rounded-xl shadow-sm border border-outline-variant/30 p-12 flex flex-col items-center justify-center text-center">
<div class="w-24 h-24 bg-surface-variant rounded-full flex items-center justify-center mb-6 text-outline">
<span class="material-symbols-outlined text-[48px]">assignment_add</span>
</div>
<h3 class="font-h3 text-h3 text-on-surface mb-2">Belum Ada Riwayat Izin</h3>
<p class="font-body-md text-body-md text-on-surface-variant max-w-md mx-auto mb-8">
                    Anda belum pernah mengajukan izin keluar saat jam kerja. Klik tombol di bawah untuk mulai mengajukan izin baru.
                </p>
<button class="inline-flex items-center justify-center gap-2 px-6 py-3 bg-primary text-on-primary rounded-xl font-medium hover:bg-primary/90 transition-all shadow-sm">
<span class="material-symbols-outlined text-[20px]">add</span>
                    Ajukan Izin Sekarang
                </button>
</div>
</div>
</main>
</body></html>

```

