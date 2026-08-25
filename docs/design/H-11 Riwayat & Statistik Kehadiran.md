# H-11 Riwayat & Statistik Kehadiran

```html
<!-- H-11 Riwayat & Statistik Kehadiran -->
<!DOCTYPE html>

<html lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Riwayat & Statistik Kehadiran</title>
<!-- Material Symbols -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&family=JetBrains+Mono:wght@100..900&display=swap" rel="stylesheet"/>
<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<!-- Theme Configuration -->
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
                        "label-mono": ["14px", { "lineHeight": "1", "fontWeight": "500" }],
                        "h2": ["32px", { "lineHeight": "1.2", "fontWeight": "600" }],
                        "body-sm": ["14px", { "lineHeight": "1.5", "fontWeight": "400" }],
                        "body-md": ["16px", { "lineHeight": "1.6", "fontWeight": "400" }],
                        "h3": ["24px", { "lineHeight": "1.3", "fontWeight": "600" }],
                        "h1-mobile": ["28px", { "lineHeight": "1.2", "fontWeight": "700" }],
                        "body-lg": ["18px", { "lineHeight": "1.6", "fontWeight": "400" }],
                        "h1": ["40px", { "lineHeight": "1.2", "fontWeight": "700" }],
                        "h4": ["20px", { "lineHeight": "1.4", "fontWeight": "600" }]
                    }
                }
            }
        }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>
<body class="bg-background text-on-background font-body-md min-h-screen flex">
<!-- Guru SideNavBar -->
<nav class="bg-primary dark:bg-primary-container text-on-primary dark:text-on-primary-container font-body-md text-body-md w-[220px] h-screen fixed left-0 top-0 shadow-sm flex flex-col h-full py-stack-md z-50">
<!-- Header -->
<div class="px-gutter mb-stack-lg flex items-center gap-3">
<div class="w-10 h-10 rounded-full bg-on-primary/20 flex items-center justify-center shrink-0">
<span class="material-symbols-outlined">school</span>
</div>
<div class="flex flex-col">
<span class="font-h4 text-h4 font-bold text-on-primary">Presensi Guru</span>
<span class="text-body-sm opacity-80">MI AL-Faizein</span>
</div>
</div>
<!-- Navigation Tabs -->
<div class="flex-1 px-stack-sm flex flex-col gap-1">
<!-- Beranda -->
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined">home</span>
<span>Beranda</span>
</a>
<!-- Scan Presensi -->
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined">qr_code_scanner</span>
<span>Scan Presensi</span>
</a>
<!-- Izin Keluar -->
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined">assignment_return</span>
<span>Izin Keluar</span>
</a>
<!-- Riwayat (ACTIVE) -->
<a class="flex items-center gap-3 px-3 py-2 rounded-lg bg-on-primary-fixed-variant text-on-primary-container border-l-4 border-secondary-fixed translate-x-1 duration-200 shadow-sm" href="#">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">history</span>
<span class="font-bold">Riwayat</span>
</a>
</div>
<!-- Footer Tabs -->
<div class="px-stack-sm mt-auto flex flex-col gap-1 border-t border-on-primary/10 pt-stack-md">
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined">person</span>
<span>Profil Saya</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors text-error-container" href="#">
<span class="material-symbols-outlined">logout</span>
<span>Keluar</span>
</a>
</div>
</nav>
<!-- Main Content Area -->
<main class="flex-1 w-[calc(100%-220px)] ml-[220px] flex flex-col min-h-screen">
<!-- Guru TopAppBar -->
<header class="bg-surface dark:bg-surface-dim border-b border-outline-variant flex justify-between items-center px-gutter py-stack-sm sticky top-0 z-40">
<div class="flex items-center">
<h1 class="font-h3 text-h3 font-bold text-on-surface">Dashboard Guru</h1>
</div>
<div class="flex items-center gap-4">
<button class="text-on-surface-variant hover:text-primary transition-colors p-2 rounded-full hover:bg-surface-container">
<span class="material-symbols-outlined">notifications</span>
</button>
<div class="w-10 h-10 rounded-full bg-surface-container-high border border-outline-variant overflow-hidden shrink-0">
<img alt="Teacher Avatar" class="w-full h-full object-cover" data-alt="A professional headshot of a teacher wearing formal attire, suitable for a school dashboard avatar. The lighting is bright and studio-quality, set against a neutral light grey background. The mood is approachable and trustworthy." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAqNLQ5MCZ4cIx_54CEQWbLR7K0QUfO9zgTuCZ1euDPqgo6NM3xq0P2zQi20jDx1f2VVYV1W5Cp6Y4JMBBCrqV3sfoNCMGvBAFEzHvvKMBatgrinn-PaDdqjNayYRtEEagfDikgFvpgBsQrODgOuiIWq-3DVJ_YWJko2xufozPOiJScg5R06gRh9LEW_hkiZaz2ZudLz_JBZrqzl45g3pIx8G2airkmaFZZZBhnO42Hvse4WBioEYOC"/>
</div>
</div>
</header>
<!-- Canvas -->
<div class="p-container-padding flex flex-col gap-stack-lg bg-surface">
<!-- Page Header & Tab Switcher -->
<div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
<div>
<h2 class="font-h2 text-h2 text-on-surface">Riwayat Kehadiran</h2>
<p class="text-body-sm text-on-surface-variant mt-1">Pantau statistik dan detail kehadiran Anda.</p>
</div>
<!-- Pill Tab Switcher -->
<div class="bg-surface-container-low p-1 rounded-full flex self-start md:self-auto border border-outline-variant">
<button class="px-6 py-2 rounded-full text-body-sm font-medium text-on-surface-variant hover:text-primary transition-colors">Harian</button>
<button class="px-6 py-2 rounded-full text-body-sm font-medium text-on-surface-variant hover:text-primary transition-colors">Mingguan</button>
<button class="px-6 py-2 rounded-full text-body-sm font-medium bg-primary text-on-primary shadow-sm">Bulanan</button>
</div>
</div>
<!-- Stats & Chart Grid -->
<div class="grid grid-cols-1 lg:grid-cols-3 gap-gutter">
<!-- Summary Cards (Left Column) -->
<div class="lg:col-span-1 flex flex-col gap-stack-md">
<div class="bg-surface-container-lowest rounded-xl p-6 shadow-sm border border-outline-variant flex items-center justify-between">
<div>
<p class="text-body-sm text-on-surface-variant">Total Hadir</p>
<p class="font-h2 text-h2 text-primary mt-1">22 <span class="text-body-md text-on-surface-variant font-normal">hari</span></p>
</div>
<div class="w-12 h-12 rounded-full bg-tertiary-container/20 text-tertiary-container flex items-center justify-center">
<span class="material-symbols-outlined">check_circle</span>
</div>
</div>
<div class="bg-surface-container-lowest rounded-xl p-6 shadow-sm border border-outline-variant flex items-center justify-between">
<div>
<p class="text-body-sm text-on-surface-variant">Terlambat</p>
<p class="font-h2 text-h2 text-secondary-container mt-1">2 <span class="text-body-md text-on-surface-variant font-normal">hari</span></p>
</div>
<div class="w-12 h-12 rounded-full bg-secondary-container/20 text-secondary-container flex items-center justify-center">
<span class="material-symbols-outlined">schedule</span>
</div>
</div>
<div class="flex gap-stack-md">
<div class="bg-surface-container-lowest rounded-xl p-4 shadow-sm border border-outline-variant flex-1">
<p class="text-body-sm text-on-surface-variant">Izin/Sakit</p>
<p class="font-h3 text-h3 text-surface-tint mt-1">1</p>
</div>
<div class="bg-surface-container-lowest rounded-xl p-4 shadow-sm border border-outline-variant flex-1">
<p class="text-body-sm text-on-surface-variant">Alpa</p>
<p class="font-h3 text-h3 text-error mt-1">0</p>
</div>
</div>
</div>
<!-- Simple Bar Chart (Right Column) -->
<div class="lg:col-span-2 bg-surface-container-lowest rounded-xl shadow-sm border border-outline-variant p-6 flex flex-col">
<h3 class="font-h4 text-h4 text-on-surface mb-6">Statistik Bulan Ini</h3>
<div class="flex-1 flex items-end gap-2 sm:gap-4 h-48 relative">
<!-- Y-Axis Lines -->
<div class="absolute inset-0 flex flex-col justify-between pointer-events-none pb-8">
<div class="border-t border-outline-variant/30 w-full"></div>
<div class="border-t border-outline-variant/30 w-full"></div>
<div class="border-t border-outline-variant/30 w-full"></div>
<div class="border-t border-outline-variant/30 w-full"></div>
</div>
<!-- Bar Items (Mockup) -->
<div class="flex-1 flex flex-col justify-end items-center group relative h-full pb-8 z-10">
<div class="w-full max-w-[40px] bg-tertiary-container rounded-t-md h-[100%] transition-transform hover:scale-105"></div>
<span class="text-label-mono text-on-surface-variant absolute bottom-0">Mg 1</span>
</div>
<div class="flex-1 flex flex-col justify-end items-center group relative h-full pb-8 z-10">
<div class="w-full max-w-[40px] bg-secondary-container rounded-t-md h-[80%] transition-transform hover:scale-105"></div>
<span class="text-label-mono text-on-surface-variant absolute bottom-0">Mg 2</span>
</div>
<div class="flex-1 flex flex-col justify-end items-center group relative h-full pb-8 z-10">
<div class="w-full max-w-[40px] bg-tertiary-container rounded-t-md h-[100%] transition-transform hover:scale-105"></div>
<span class="text-label-mono text-on-surface-variant absolute bottom-0">Mg 3</span>
</div>
<div class="flex-1 flex flex-col justify-end items-center group relative h-full pb-8 z-10">
<div class="w-full max-w-[40px] flex flex-col justify-end gap-1 h-full">
<div class="w-full bg-surface-tint rounded-t-md h-[20%]"></div>
<div class="w-full bg-tertiary-container h-[60%]"></div>
</div>
<span class="text-label-mono text-on-surface-variant absolute bottom-0">Mg 4</span>
</div>
</div>
<div class="flex gap-4 mt-6 justify-center text-body-sm text-on-surface-variant border-t border-outline-variant/30 pt-4">
<div class="flex items-center gap-2"><div class="w-3 h-3 rounded-full bg-tertiary-container"></div> Tepat Waktu</div>
<div class="flex items-center gap-2"><div class="w-3 h-3 rounded-full bg-secondary-container"></div> Terlambat</div>
<div class="flex items-center gap-2"><div class="w-3 h-3 rounded-full bg-surface-tint"></div> Izin/Sakit</div>
</div>
</div>
</div>
<!-- Table Data -->
<div class="bg-surface-container-lowest rounded-xl shadow-sm border border-outline-variant overflow-hidden">
<div class="p-6 border-b border-outline-variant flex justify-between items-center">
<h3 class="font-h4 text-h4 text-on-surface">Detail Kehadiran</h3>
<button class="flex items-center gap-2 text-primary font-medium hover:bg-surface-container p-2 rounded-lg transition-colors text-body-sm">
<span class="material-symbols-outlined" style="font-size: 20px;">download</span> Unduh PDF
                    </button>
</div>
<div class="overflow-x-auto">
<table class="w-full text-left border-collapse">
<thead>
<tr class="bg-surface-container-low text-on-surface-variant text-body-sm border-b border-outline-variant">
<th class="py-4 px-6 font-medium">Tanggal</th>
<th class="py-4 px-6 font-medium">Jam Masuk</th>
<th class="py-4 px-6 font-medium">Jam Keluar</th>
<th class="py-4 px-6 font-medium">Status</th>
</tr>
</thead>
<tbody class="text-body-md text-on-surface">
<tr class="border-b border-outline-variant hover:bg-surface-container-low/50 transition-colors">
<td class="py-4 px-6">24 Okt 2023</td>
<td class="py-4 px-6 font-label-mono">06:45 WIB</td>
<td class="py-4 px-6 font-label-mono">15:10 WIB</td>
<td class="py-4 px-6">
<span class="inline-flex items-center px-3 py-1 rounded-full text-body-sm font-medium bg-tertiary-container/20 text-tertiary-container border border-tertiary-container/30">Hadir</span>
</td>
</tr>
<tr class="border-b border-outline-variant hover:bg-surface-container-low/50 transition-colors">
<td class="py-4 px-6">23 Okt 2023</td>
<td class="py-4 px-6 font-label-mono">07:15 WIB</td>
<td class="py-4 px-6 font-label-mono">15:05 WIB</td>
<td class="py-4 px-6">
<span class="inline-flex items-center px-3 py-1 rounded-full text-body-sm font-medium bg-secondary-container/20 text-secondary border border-secondary-container/30">Terlambat</span>
</td>
</tr>
<tr class="border-b border-outline-variant hover:bg-surface-container-low/50 transition-colors">
<td class="py-4 px-6">22 Okt 2023</td>
<td class="py-4 px-6 font-label-mono">-</td>
<td class="py-4 px-6 font-label-mono">-</td>
<td class="py-4 px-6">
<span class="inline-flex items-center px-3 py-1 rounded-full text-body-sm font-medium bg-surface-tint/10 text-surface-tint border border-surface-tint/30">Izin</span>
</td>
</tr>
<tr class="hover:bg-surface-container-low/50 transition-colors">
<td class="py-4 px-6">21 Okt 2023</td>
<td class="py-4 px-6 font-label-mono">06:50 WIB</td>
<td class="py-4 px-6 font-label-mono">15:00 WIB</td>
<td class="py-4 px-6">
<span class="inline-flex items-center px-3 py-1 rounded-full text-body-sm font-medium bg-tertiary-container/20 text-tertiary-container border border-tertiary-container/30">Hadir</span>
</td>
</tr>
</tbody>
</table>
</div>
<div class="p-4 border-t border-outline-variant bg-surface-container-lowest flex justify-center">
<button class="text-primary font-medium hover:underline text-body-sm">Lihat Semua Data</button>
</div>
</div>
</div>
</main>
</body></html>

```

