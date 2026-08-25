# H-17 Data Presensi Harian

```html
<!-- H-17 Data Presensi Harian -->
<!DOCTYPE html>

<html lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Data Presensi Harian - MI AL-Faizein</title>
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
<body class="bg-background text-on-background font-body-md text-body-md antialiased min-h-screen flex">
<!-- SideNavBar (Admin) -->
<nav class="w-[240px] h-screen fixed left-0 top-0 bg-primary shadow-sm flex flex-col py-stack-md z-20">
<div class="px-gutter mb-stack-lg">
<div class="flex items-center gap-3 mb-2">
<div class="w-10 h-10 rounded-full bg-surface-container-lowest flex items-center justify-center overflow-hidden">
<img alt="School Logo" class="w-full h-full object-cover" data-alt="A clean, minimalist school logo for MI AL-Faizein. Modern academic aesthetic, utilizing green and gold accents on a pristine white background. High resolution, professional corporate identity mark." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCktM692qO2rg-L9oUR_scYlOro2QvnA2siwC19scnY12n8keh8YUIMWX6nXGUI5uSLi_Lsr_vR83lDP9xvo-Q9j1l6UGV-Wf5InSutSVsV2zOXL6b5HYZSAXoEzsdTez7peybp0Y13tZ6TWJsOslq_0j_H0WHe9hRwFoYJaQQLv_b7t4N2XwDOdb-dFXei2j2JJeOSim4OjHmWOzClqmVEkTAvrkPS8cwSgXDVyU6bWK1wgEgM72lX"/>
</div>
<div>
<h1 class="font-h4 text-h4 font-bold text-on-primary">MI AL-Faizein</h1>
<p class="font-body-sm text-body-sm text-on-primary opacity-80">Sistem Presensi Guru</p>
</div>
</div>
</div>
<ul class="flex-1 flex flex-col gap-1 px-3">
<li>
<a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined">dashboard</span>
<span class="font-body-md text-body-md">Dashboard</span>
</a>
</li>
<li>
<a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined">qr_code</span>
<span class="font-body-md text-body-md">Tampilan QR</span>
</a>
</li>
<li>
<a class="flex items-center gap-3 px-4 py-3 rounded-lg bg-on-primary-fixed-variant text-on-primary-container border-l-4 border-white active:scale-95 duration-150" href="#">
<span class="material-symbols-outlined">person_check</span>
<span class="font-body-md text-body-md">Data Presensi</span>
</a>
</li>
<li>
<a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined">pending_actions</span>
<span class="font-body-md text-body-md">Permohonan Izin</span>
</a>
</li>
<li>
<a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined">history_edu</span>
<span class="font-body-md text-body-md">Riwayat Izin</span>
</a>
</li>
<li>
<a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined">manage_accounts</span>
<span class="font-body-md text-body-md">Manajemen Akun</span>
</a>
</li>
<li>
<a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined">analytics</span>
<span class="font-body-md text-body-md">Laporan</span>
</a>
</li>
<li>
<a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined">history</span>
<span class="font-body-md text-body-md">Log Aktivitas</span>
</a>
</li>
<li>
<a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined">settings</span>
<span class="font-body-md text-body-md">Pengaturan</span>
</a>
</li>
</ul>
<div class="mt-auto px-3 flex flex-col gap-1 border-t border-on-primary-fixed-variant pt-4">
<a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined">account_circle</span>
<span class="font-body-md text-body-md">Profil Saya</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined">logout</span>
<span class="font-body-md text-body-md">Keluar</span>
</a>
</div>
</nav>
<!-- Main Content Wrapper -->
<div class="flex-1 ml-[240px] flex flex-col min-h-screen relative">
<!-- TopAppBar (Admin) -->
<header class="bg-surface border-b border-outline-variant flex justify-between items-center px-gutter py-stack-sm w-full sticky top-0 z-10">
<div>
<h2 class="font-h3 text-h3 font-bold text-on-surface">Sistem Presensi</h2>
</div>
<div class="flex items-center gap-4">
<button class="text-on-surface-variant hover:text-primary transition-colors p-2 rounded-full hover:bg-surface-container">
<span class="material-symbols-outlined">notifications</span>
</button>
<div class="w-10 h-10 rounded-full overflow-hidden border border-outline-variant cursor-pointer">
<img alt="Admin Avatar" class="w-full h-full object-cover" data-alt="Professional portrait of a school administrator, middle-aged Indonesian woman wearing a neat hijab and corporate blazer. Well-lit office environment, neutral background. High-quality corporate headshot." src="https://lh3.googleusercontent.com/aida-public/AB6AXuA310rU37I3Zomoujwnmcciuix7V6fWHtPlM_T_WTuRpbiE3qKYq-IaJfwnnPsMTWfZ1DnR-riWmNmmaUB_WWIge9Ed4R5K2IVdlxx9-12U2RGphAPsc_UIBoJnRbpZgNpQ4kzDEqTIE7Mr6LzoLE33zBLBEoI9UIru2x13Sw72POtiKc3QtQ7OuHJ5gKpStutflvN43SsdVfxh91rLDQjrrD1-VMPL5R4waYrPI5lycmMTSmEpHaTO"/>
</div>
</div>
</header>
<!-- Page Canvas -->
<main class="flex-1 p-gutter md:p-container-padding flex flex-col gap-stack-lg">
<div class="flex justify-between items-end">
<div>
<h1 class="font-h2 text-h2 text-on-surface mb-2">Data Presensi Harian</h1>
<p class="text-on-surface-variant font-body-md text-body-md">Kelola dan pantau kehadiran guru setiap hari.</p>
</div>
</div>
<!-- Filters & Actions -->
<div class="bg-surface-container-lowest p-6 rounded-xl shadow-sm border border-outline-variant flex flex-wrap gap-4 items-end">
<div class="flex flex-col gap-2 w-full md:w-auto flex-1 max-w-xs">
<label class="font-body-sm text-body-sm text-on-surface-variant font-medium">Tanggal</label>
<div class="relative">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline">calendar_today</span>
<input class="w-full pl-10 pr-4 py-2 rounded-lg border border-outline-variant bg-surface focus:ring-2 focus:ring-primary focus:border-primary font-body-md text-body-md text-on-surface" type="date" value="2023-10-24"/>
</div>
</div>
<div class="flex flex-col gap-2 w-full md:w-auto flex-1 max-w-xs">
<label class="font-body-sm text-body-sm text-on-surface-variant font-medium">Nama Guru</label>
<select class="w-full px-4 py-2 rounded-lg border border-outline-variant bg-surface focus:ring-2 focus:ring-primary focus:border-primary font-body-md text-body-md text-on-surface">
<option value="">Semua Guru</option>
<option value="1">Ahmad Dahlan, S.Pd</option>
<option value="2">Siti Aminah, M.Pd</option>
</select>
</div>
<div class="flex flex-col gap-2 w-full md:w-auto flex-1 max-w-xs">
<label class="font-body-sm text-body-sm text-on-surface-variant font-medium">Status Kehadiran</label>
<select class="w-full px-4 py-2 rounded-lg border border-outline-variant bg-surface focus:ring-2 focus:ring-primary focus:border-primary font-body-md text-body-md text-on-surface">
<option value="">Semua Status</option>
<option value="hadir">Hadir</option>
<option value="terlambat">Terlambat</option>
<option value="izin">Izin</option>
</select>
</div>
<div class="w-full md:w-auto mt-4 md:mt-0">
<button class="w-full md:w-auto flex items-center justify-center gap-2 px-6 py-2 rounded-lg border border-primary text-primary hover:bg-primary-fixed transition-colors font-body-md text-body-md font-medium">
<span class="material-symbols-outlined">download</span>
                        Export Data
                    </button>
</div>
</div>
<!-- Data Table -->
<div class="bg-surface-container-lowest rounded-xl shadow-sm border border-outline-variant overflow-x-auto">
<table class="w-full text-left border-collapse">
<thead>
<tr class="border-b border-outline-variant bg-surface">
<th class="p-4 font-body-sm text-body-sm font-semibold text-on-surface-variant">Nama Guru</th>
<th class="p-4 font-body-sm text-body-sm font-semibold text-on-surface-variant">Waktu Masuk</th>
<th class="p-4 font-body-sm text-body-sm font-semibold text-on-surface-variant">Status Masuk</th>
<th class="p-4 font-body-sm text-body-sm font-semibold text-on-surface-variant">Waktu Keluar</th>
<th class="p-4 font-body-sm text-body-sm font-semibold text-on-surface-variant">Status Keluar</th>
<th class="p-4 font-body-sm text-body-sm font-semibold text-on-surface-variant">Keterangan</th>
<th class="p-4 font-body-sm text-body-sm font-semibold text-on-surface-variant text-center">Aksi</th>
</tr>
</thead>
<tbody class="divide-y divide-outline-variant">
<!-- Row 1 -->
<tr class="hover:bg-surface-container-low transition-colors">
<td class="p-4 flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-surface-variant flex items-center justify-center text-on-surface-variant font-bold text-sm">
                                    AD
                                </div>
<span class="font-body-md text-body-md font-medium text-on-surface">Ahmad Dahlan, S.Pd</span>
</td>
<td class="p-4 font-label-mono text-label-mono text-on-surface">06:45 WIB</td>
<td class="p-4">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-primary-fixed text-on-primary-fixed-variant border border-primary-container/20">
                                    Tepat Waktu
                                </span>
</td>
<td class="p-4 font-label-mono text-label-mono text-on-surface">15:10 WIB</td>
<td class="p-4">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-primary-fixed text-on-primary-fixed-variant border border-primary-container/20">
                                    Sesuai Jadwal
                                </span>
</td>
<td class="p-4">
<span class="text-on-surface-variant text-sm">-</span>
</td>
<td class="p-4 text-center">
<button class="text-on-surface-variant hover:text-primary transition-colors" title="Edit Presensi">
<span class="material-symbols-outlined" style="font-size: 20px;">edit</span>
</button>
</td>
</tr>
<!-- Row 2 -->
<tr class="hover:bg-surface-container-low transition-colors">
<td class="p-4 flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-surface-variant flex items-center justify-center text-on-surface-variant font-bold text-sm">
                                    SA
                                </div>
<span class="font-body-md text-body-md font-medium text-on-surface">Siti Aminah, M.Pd</span>
</td>
<td class="p-4 font-label-mono text-label-mono text-on-surface">
                                07:15 WIB
                            </td>
<td class="p-4">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-secondary-fixed text-on-secondary-fixed-variant border border-secondary-container/20">
                                    Terlambat
                                </span>
</td>
<td class="p-4 font-label-mono text-label-mono text-outline">Belum Absen</td>
<td class="p-4">
<span class="text-on-surface-variant text-sm">-</span>
</td>
<td class="p-4">
<span class="inline-flex items-center gap-1 px-2 py-1 rounded bg-surface-container border border-outline-variant text-xs font-medium text-on-surface-variant" title="Data ini telah disesuaikan oleh admin">
<span class="material-symbols-outlined" style="font-size: 14px;">info</span>
                                    Diedit Manual
                                </span>
</td>
<td class="p-4 text-center">
<button class="text-on-surface-variant hover:text-primary transition-colors" title="Edit Presensi">
<span class="material-symbols-outlined" style="font-size: 20px;">edit</span>
</button>
</td>
</tr>
<!-- Row 3 -->
<tr class="hover:bg-surface-container-low transition-colors">
<td class="p-4 flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-surface-variant flex items-center justify-center text-on-surface-variant font-bold text-sm">
                                    BW
                                </div>
<span class="font-body-md text-body-md font-medium text-on-surface">Budi Waluyo, S.Ag</span>
</td>
<td class="p-4 font-label-mono text-label-mono text-outline">-</td>
<td class="p-4">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-surface-container-high text-on-surface border border-outline-variant">
                                    Izin
                                </span>
</td>
<td class="p-4 font-label-mono text-label-mono text-outline">-</td>
<td class="p-4">
<span class="text-on-surface-variant text-sm">-</span>
</td>
<td class="p-4 text-sm text-on-surface-variant">Sakit (Srt Dokter terlampir)</td>
<td class="p-4 text-center">
<button class="text-on-surface-variant hover:text-primary transition-colors" title="Edit Presensi">
<span class="material-symbols-outlined" style="font-size: 20px;">edit</span>
</button>
</td>
</tr>
</tbody>
</table>
<!-- Pagination (Mock) -->
<div class="border-t border-outline-variant p-4 flex items-center justify-between bg-surface">
<span class="text-sm text-on-surface-variant">Menampilkan 1-3 dari 32 data</span>
<div class="flex gap-1">
<button class="w-8 h-8 flex items-center justify-center rounded border border-outline-variant text-on-surface-variant hover:bg-surface-container" disabled="">
<span class="material-symbols-outlined" style="font-size: 18px;">chevron_left</span>
</button>
<button class="w-8 h-8 flex items-center justify-center rounded bg-primary text-on-primary">1</button>
<button class="w-8 h-8 flex items-center justify-center rounded border border-outline-variant text-on-surface hover:bg-surface-container">2</button>
<button class="w-8 h-8 flex items-center justify-center rounded border border-outline-variant text-on-surface hover:bg-surface-container">3</button>
<button class="w-8 h-8 flex items-center justify-center rounded border border-outline-variant text-on-surface hover:bg-surface-container">
<span class="material-symbols-outlined" style="font-size: 18px;">chevron_right</span>
</button>
</div>
</div>
</div>
</main>
</div>
</body></html>

```

