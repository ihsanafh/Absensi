# H-22 Log Aktivitas

```html
<!-- H-22 Log Aktivitas -->
<!DOCTYPE html>

<html lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Log Aktivitas - MI AL-Faizein</title>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@600;700&amp;family=Inter:wght@400&amp;family=JetBrains+Mono:wght@500&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
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
                },
            },
        }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>
<body class="bg-surface text-on-surface h-screen overflow-hidden flex font-body-md text-body-md antialiased selection:bg-primary-fixed selection:text-on-primary-fixed">
<!-- Admin SideNavBar -->
<aside class="w-[240px] h-screen fixed left-0 top-0 bg-primary shadow-sm flex flex-col py-stack-md z-20">
<!-- Header -->
<div class="px-gutter mb-stack-lg flex items-center gap-3">
<div class="w-10 h-10 rounded-full bg-surface-container-lowest flex items-center justify-center shadow-sm overflow-hidden border-2 border-primary-fixed">
<img alt="School Logo" class="w-full h-full object-cover" data-alt="A clean, modern geometric logo design representing a school crest in dark green and gold on a pristine white background. Studio lighting, sharp focus, professional corporate identity style." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBAMG_iA8xI1NmXzDDIRtx7r5xJmx7tsYFR4zi_3DQcWEKnWRskGqubXV5aVIgC-RNFRDYB_nQbhWDYRbyq7BwMn6s2hzQbFyMzfZM_h6-TwUT0qeiBt_5P3acNirP645CVvx9VRXYptPiCl4tV-huCAiyCMQ1gkeJaEigPJmMxNweddPu_qkDlwaHC41QFYUD2ezGTk8ZahZh7Bj0OHACo1TS0teR2AjG-2L2Kf8XDJPdeVsxSJ8AA"/>
</div>
<div>
<h2 class="font-h4 text-h4 font-bold text-on-primary m-0 p-0 leading-tight">MI AL-Faizein</h2>
<p class="font-label-mono text-label-mono text-on-primary opacity-80 mt-1">Sistem Presensi Guru</p>
</div>
</div>
<!-- Navigation Tabs -->
<nav class="flex-1 overflow-y-auto px-stack-sm space-y-1">
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined text-[20px]">dashboard</span>
<span class="font-label-mono text-label-mono">Dashboard</span>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined text-[20px]">qr_code</span>
<span class="font-label-mono text-label-mono">Tampilan QR</span>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined text-[20px]">person_check</span>
<span class="font-label-mono text-label-mono">Data Presensi</span>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined text-[20px]">pending_actions</span>
<span class="font-label-mono text-label-mono">Permohonan Izin</span>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined text-[20px]">history_edu</span>
<span class="font-label-mono text-label-mono">Riwayat Izin</span>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined text-[20px]">manage_accounts</span>
<span class="font-label-mono text-label-mono">Manajemen Akun</span>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined text-[20px]">analytics</span>
<span class="font-label-mono text-label-mono">Laporan</span>
</a>
<!-- Active Tab -->
<a class="flex items-center gap-3 px-3 py-2.5 rounded-r-lg bg-on-primary-fixed-variant text-on-primary-container border-l-4 border-white transition-all duration-150 transform scale-100" href="#">
<span class="material-symbols-outlined text-[20px]" style="font-variation-settings: 'FILL' 1;">history</span>
<span class="font-label-mono text-label-mono">Log Aktivitas</span>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined text-[20px]">settings</span>
<span class="font-label-mono text-label-mono">Pengaturan</span>
</a>
</nav>
<!-- Footer Tabs -->
<div class="mt-auto px-stack-sm pt-stack-md border-t border-on-primary-fixed-variant">
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined text-[20px]">account_circle</span>
<span class="font-label-mono text-label-mono">Profil Saya</span>
</a>
<a class="flex items-center gap-3 px-3 py-2.5 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors text-error-container hover:text-error-container" href="#">
<span class="material-symbols-outlined text-[20px]">logout</span>
<span class="font-label-mono text-label-mono">Keluar</span>
</a>
</div>
</aside>
<!-- Main Content Area -->
<main class="flex-1 ml-[240px] flex flex-col h-full bg-surface-container-low">
<!-- Admin TopAppBar -->
<header class="h-[72px] bg-surface border-b border-outline-variant flex justify-between items-center px-gutter shrink-0 z-10">
<div class="flex items-center">
<h1 class="font-h3 text-h3 font-bold text-on-surface">Sistem Presensi</h1>
</div>
<div class="flex items-center gap-4">
<button class="w-10 h-10 rounded-full flex items-center justify-center text-on-surface-variant hover:bg-surface-container hover:text-primary transition-colors focus:outline-none focus:ring-2 focus:ring-primary">
<span class="material-symbols-outlined">notifications</span>
</button>
<div class="w-10 h-10 rounded-full border border-outline-variant overflow-hidden cursor-pointer hover:ring-2 hover:ring-primary transition-all">
<img alt="Admin Avatar" class="w-full h-full object-cover" data-alt="Professional headshot of an Indonesian school administrator in a bright office environment, wearing formal attire. Soft, flattering natural lighting, high resolution, corporate portrait style." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDYYGjCEa8mQ6WFjSq5moFqgtaN3V4AYovbxO3oVOYXzs7Fp8zZnDVFWEm2SVCymCNhM9-hUDA52NDH-vFNIsW1fAl5NJw5ILUaf-IMBnTwlJXRHupHC9B58KKnshqY2LWLNFZJ692jcO5nU1JSsmq8Pp3J7S1mqrm9llo2nb3ovH4dQH94qSH5tvylSf11I1ZF-uTqm0MkQ3rwsuY3z7T8jgwvHt5Zc35sTq7f6txRc7USp-NzLhJk"/>
</div>
</div>
</header>
<!-- Canvas -->
<div class="flex-1 overflow-y-auto p-container-padding">
<!-- Page Header -->
<div class="mb-stack-lg flex flex-col md:flex-row md:items-end justify-between gap-4">
<div>
<h2 class="font-h2 text-h2 text-on-surface mb-2">Log Aktivitas Sistem</h2>
<p class="font-body-md text-body-md text-on-surface-variant">Pantau jejak audit operasional dan interaksi pengguna secara real-time.</p>
</div>
<button class="inline-flex items-center gap-2 bg-surface-container-lowest border border-outline text-on-surface px-4 py-2 rounded-lg shadow-sm hover:bg-surface-container-low transition-colors font-label-mono text-label-mono">
<span class="material-symbols-outlined text-[18px]">download</span>
                    Ekspor CSV
                </button>
</div>
<!-- Filters & Search (Bento Card) -->
<div class="bg-surface-container-lowest rounded-xl shadow-sm border border-outline-variant p-stack-md mb-stack-lg flex flex-col lg:flex-row gap-4 items-center">
<div class="relative flex-1 w-full">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant">search</span>
<input class="w-full pl-10 pr-4 py-2.5 bg-surface-container-low border border-outline-variant rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary font-body-sm text-body-sm text-on-surface transition-all" placeholder="Cari berdasarkan nama, aktivitas, atau IP..." type="text"/>
</div>
<div class="flex flex-wrap md:flex-nowrap gap-3 w-full lg:w-auto">
<select class="px-4 py-2.5 bg-surface-container-lowest border border-outline-variant rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary font-body-sm text-body-sm text-on-surface-variant min-w-[140px]">
<option value="">Semua Peran</option>
<option value="admin">Administrator</option>
<option value="guru">Guru</option>
<option value="system">Sistem</option>
</select>
<select class="px-4 py-2.5 bg-surface-container-lowest border border-outline-variant rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary font-body-sm text-body-sm text-on-surface-variant min-w-[160px]">
<option value="">Semua Aktivitas</option>
<option value="login">Otentikasi</option>
<option value="presensi">Scan Presensi</option>
<option value="data">Perubahan Data</option>
<option value="izin">Pengajuan Izin</option>
</select>
<div class="relative min-w-[180px]">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant text-[18px]">calendar_today</span>
<input class="w-full pl-10 pr-4 py-2.5 bg-surface-container-lowest border border-outline-variant rounded-lg focus:outline-none focus:ring-2 focus:ring-primary focus:border-primary font-body-sm text-body-sm text-on-surface-variant cursor-pointer" type="date"/>
</div>
</div>
</div>
<!-- Log Table -->
<div class="bg-surface-container-lowest rounded-xl shadow-sm border border-outline-variant overflow-hidden">
<div class="overflow-x-auto">
<table class="w-full text-left border-collapse">
<thead class="bg-surface-container border-b border-outline-variant">
<tr>
<th class="py-3 px-4 font-label-mono text-[12px] uppercase tracking-wider text-on-surface-variant font-semibold">Timestamp (WIB)</th>
<th class="py-3 px-4 font-label-mono text-[12px] uppercase tracking-wider text-on-surface-variant font-semibold">Aktor / Pengguna</th>
<th class="py-3 px-4 font-label-mono text-[12px] uppercase tracking-wider text-on-surface-variant font-semibold">Detail Aktivitas</th>
<th class="py-3 px-4 font-label-mono text-[12px] uppercase tracking-wider text-on-surface-variant font-semibold">Informasi Perangkat</th>
</tr>
</thead>
<tbody class="divide-y divide-outline-variant font-label-mono text-label-mono">
<!-- Row 1 -->
<tr class="hover:bg-surface-container-low transition-colors group cursor-default">
<td class="py-3 px-4 text-on-surface whitespace-nowrap">2023-10-27 <span class="text-on-surface-variant">08:15:22</span></td>
<td class="py-3 px-4">
<div class="flex items-center gap-2">
<div class="w-6 h-6 rounded bg-primary-container text-on-primary-container flex items-center justify-center text-[10px] font-bold">AD</div>
<span class="text-on-surface font-medium">Admin Utama</span>
</div>
</td>
<td class="py-3 px-4 text-on-surface">Validasi sesi token QR <span class="text-tertiary">(Berhasil)</span></td>
<td class="py-3 px-4 text-on-surface-variant text-[13px] whitespace-nowrap">Chrome 118 / Win 11 / 192.168.1.10</td>
</tr>
<!-- Row 2 -->
<tr class="hover:bg-surface-container-low transition-colors group cursor-default">
<td class="py-3 px-4 text-on-surface whitespace-nowrap">2023-10-27 <span class="text-on-surface-variant">08:12:05</span></td>
<td class="py-3 px-4">
<div class="flex items-center gap-2">
<div class="w-6 h-6 rounded bg-surface-variant text-on-surface-variant flex items-center justify-center text-[10px] font-bold">GR</div>
<span class="text-on-surface">Ahmad Dahlan, S.Pd</span>
</div>
</td>
<td class="py-3 px-4 text-on-surface">Scan Presensi Masuk <span class="text-tertiary">(Berhasil)</span></td>
<td class="py-3 px-4 text-on-surface-variant text-[13px] whitespace-nowrap">App Android v1.2 / Samsung A52</td>
</tr>
<!-- Row 3 -->
<tr class="hover:bg-surface-container-low transition-colors group cursor-default bg-error-container/20">
<td class="py-3 px-4 text-on-surface whitespace-nowrap">2023-10-27 <span class="text-on-surface-variant">08:10:33</span></td>
<td class="py-3 px-4">
<div class="flex items-center gap-2">
<div class="w-6 h-6 rounded bg-surface-variant text-on-surface-variant flex items-center justify-center text-[10px] font-bold">GR</div>
<span class="text-on-surface">Siti Aminah, M.Ag</span>
</div>
</td>
<td class="py-3 px-4 text-on-surface">Scan Presensi Masuk <span class="text-error font-bold">(Gagal - Token Expired)</span></td>
<td class="py-3 px-4 text-on-surface-variant text-[13px] whitespace-nowrap">App iOS v1.1 / iPhone 13</td>
</tr>
<!-- Row 4 -->
<tr class="hover:bg-surface-container-low transition-colors group cursor-default">
<td class="py-3 px-4 text-on-surface whitespace-nowrap">2023-10-27 <span class="text-on-surface-variant">08:05:00</span></td>
<td class="py-3 px-4">
<div class="flex items-center gap-2">
<div class="w-6 h-6 rounded bg-secondary-container text-on-secondary-container flex items-center justify-center text-[10px] font-bold">SYS</div>
<span class="text-on-surface font-medium italic">Sistem Cron</span>
</div>
</td>
<td class="py-3 px-4 text-on-surface">Generate Daily Report Batch</td>
<td class="py-3 px-4 text-on-surface-variant text-[13px] whitespace-nowrap">Localhost / Server Node.js</td>
</tr>
<!-- Row 5 -->
<tr class="hover:bg-surface-container-low transition-colors group cursor-default">
<td class="py-3 px-4 text-on-surface whitespace-nowrap">2023-10-27 <span class="text-on-surface-variant">07:55:12</span></td>
<td class="py-3 px-4">
<div class="flex items-center gap-2">
<div class="w-6 h-6 rounded bg-primary-container text-on-primary-container flex items-center justify-center text-[10px] font-bold">AD</div>
<span class="text-on-surface font-medium">Admin Utama</span>
</div>
</td>
<td class="py-3 px-4 text-on-surface">Login Aplikasi <span class="text-tertiary">(Berhasil)</span></td>
<td class="py-3 px-4 text-on-surface-variant text-[13px] whitespace-nowrap">Chrome 118 / Win 11 / 192.168.1.10</td>
</tr>
</tbody>
</table>
</div>
<!-- Pagination -->
<div class="bg-surface-container-lowest border-t border-outline-variant px-4 py-3 flex items-center justify-between sm:px-6">
<div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
<div>
<p class="font-body-sm text-body-sm text-on-surface-variant">
                                Menampilkan <span class="font-bold text-on-surface">1</span> hingga <span class="font-bold text-on-surface">5</span> dari <span class="font-bold text-on-surface">248</span> log
                            </p>
</div>
<div>
<nav aria-label="Pagination" class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px">
<a class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-outline-variant bg-surface-container-lowest text-sm font-medium text-on-surface-variant hover:bg-surface-container" href="#">
<span class="sr-only">Sebelumnya</span>
<span class="material-symbols-outlined text-[20px]">chevron_left</span>
</a>
<a aria-current="page" class="z-10 bg-primary-container text-on-primary-container relative inline-flex items-center px-4 py-2 border border-primary-container text-sm font-medium" href="#">
                                    1
                                </a>
<a class="bg-surface-container-lowest border border-outline-variant text-on-surface-variant hover:bg-surface-container relative inline-flex items-center px-4 py-2 text-sm font-medium" href="#">
                                    2
                                </a>
<a class="bg-surface-container-lowest border border-outline-variant text-on-surface-variant hover:bg-surface-container relative inline-flex items-center px-4 py-2 text-sm font-medium" href="#">
                                    3
                                </a>
<span class="relative inline-flex items-center px-4 py-2 border border-outline-variant bg-surface-container-lowest text-sm font-medium text-on-surface-variant">
                                    ...
                                </span>
<a class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-outline-variant bg-surface-container-lowest text-sm font-medium text-on-surface-variant hover:bg-surface-container" href="#">
<span class="sr-only">Selanjutnya</span>
<span class="material-symbols-outlined text-[20px]">chevron_right</span>
</a>
</nav>
</div>
</div>
</div>
</div>
</div>
</main>
</body></html>

```

