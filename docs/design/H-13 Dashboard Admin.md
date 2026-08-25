# H-13 Dashboard Admin

```html
<!-- H-13 Dashboard Admin -->
<!DOCTYPE html>

<html lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>H-13 Dashboard Admin - MI AL-Faizein</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&amp;family=JetBrains+Mono:wght@400;500&amp;family=Plus+Jakarta+Sans:wght@600;700&amp;display=swap" rel="stylesheet"/>
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
          font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .material-symbols-outlined[data-weight="fill"] {
            font-variation-settings: 'FILL' 1, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
      </style>
</head>
<body class="bg-background text-on-background font-body-md text-body-md min-h-screen flex">
<!-- SideNavBar (Admin) -->
<nav class="bg-primary dark:bg-primary-container text-on-primary dark:text-on-primary-container shadow-sm w-[240px] h-screen fixed left-0 top-0 flex flex-col h-full py-stack-md hidden md:flex z-50">
<div class="px-stack-md pb-stack-lg border-b border-primary-container/30 flex items-center gap-3">
<img class="w-10 h-10 rounded-full bg-white object-cover shadow-sm" data-alt="A small, professional school crest logo for MI AL-Faizein. Clean vector style, green and white colors, embodying an academic and trustworthy institution. Minimalist corporate aesthetic." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAyne-PEIvsfINtpyY_iwvgpx_kZ6Jmlz8sHaK9V4Lqo3vcIUI-nnfmTmKsum9BrsoVqlHHnnTLf2ubp-H2BYOjXXNSVieYGl3D9qFtZmvmmduvxnVt2dXQw0TDZD6yEq87eYL6ihox-bG20aWB7YvZ2wAqvzJ8O6GryCpqw3XvHgWmG46baqog7PbPQPmNH7fJutQ0HWyFqng7jObpI8j4SHrothyzyj7_iO8sbAuqUUf8bjG8a55Q"/>
<div>
<h2 class="font-h4 text-h4 font-bold text-on-primary">MI AL-Faizein</h2>
<p class="font-body-sm text-body-sm opacity-80">Sistem Presensi Guru</p>
</div>
</div>
<div class="flex-1 overflow-y-auto py-stack-md px-2 space-y-1">
<!-- Active Tab: Dashboard -->
<a class="bg-on-primary-fixed-variant text-on-primary-container border-l-4 border-white flex items-center gap-3 px-3 py-2.5 rounded-r-lg hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors active:scale-95 duration-150 group" href="#">
<span class="material-symbols-outlined" data-icon="dashboard" data-weight="fill">dashboard</span>
<span class="font-label-mono text-label-mono">Dashboard</span>
</a>
<a class="text-on-primary opacity-80 flex items-center gap-3 px-3 py-2.5 rounded-lg hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors active:scale-95 duration-150 border-l-4 border-transparent" href="#">
<span class="material-symbols-outlined" data-icon="qr_code">qr_code</span>
<span class="font-label-mono text-label-mono">Tampilan QR</span>
</a>
<a class="text-on-primary opacity-80 flex items-center gap-3 px-3 py-2.5 rounded-lg hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors active:scale-95 duration-150 border-l-4 border-transparent" href="#">
<span class="material-symbols-outlined" data-icon="person_check">person_check</span>
<span class="font-label-mono text-label-mono">Data Presensi</span>
</a>
<a class="text-on-primary opacity-80 flex items-center gap-3 px-3 py-2.5 rounded-lg hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors active:scale-95 duration-150 border-l-4 border-transparent" href="#">
<span class="material-symbols-outlined" data-icon="pending_actions">pending_actions</span>
<span class="font-label-mono text-label-mono">Permohonan Izin</span>
</a>
<a class="text-on-primary opacity-80 flex items-center gap-3 px-3 py-2.5 rounded-lg hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors active:scale-95 duration-150 border-l-4 border-transparent" href="#">
<span class="material-symbols-outlined" data-icon="history_edu">history_edu</span>
<span class="font-label-mono text-label-mono">Riwayat Izin</span>
</a>
<a class="text-on-primary opacity-80 flex items-center gap-3 px-3 py-2.5 rounded-lg hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors active:scale-95 duration-150 border-l-4 border-transparent" href="#">
<span class="material-symbols-outlined" data-icon="manage_accounts">manage_accounts</span>
<span class="font-label-mono text-label-mono">Manajemen Akun</span>
</a>
<a class="text-on-primary opacity-80 flex items-center gap-3 px-3 py-2.5 rounded-lg hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors active:scale-95 duration-150 border-l-4 border-transparent" href="#">
<span class="material-symbols-outlined" data-icon="analytics">analytics</span>
<span class="font-label-mono text-label-mono">Laporan</span>
</a>
<a class="text-on-primary opacity-80 flex items-center gap-3 px-3 py-2.5 rounded-lg hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors active:scale-95 duration-150 border-l-4 border-transparent" href="#">
<span class="material-symbols-outlined" data-icon="history">history</span>
<span class="font-label-mono text-label-mono">Log Aktivitas</span>
</a>
<a class="text-on-primary opacity-80 flex items-center gap-3 px-3 py-2.5 rounded-lg hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors active:scale-95 duration-150 border-l-4 border-transparent" href="#">
<span class="material-symbols-outlined" data-icon="settings">settings</span>
<span class="font-label-mono text-label-mono">Pengaturan</span>
</a>
</div>
<div class="mt-auto px-2 pt-4 border-t border-primary-container/30">
<a class="text-on-primary opacity-80 flex items-center gap-3 px-3 py-2.5 rounded-lg hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors active:scale-95 duration-150" href="#">
<span class="material-symbols-outlined" data-icon="account_circle">account_circle</span>
<span class="font-label-mono text-label-mono">Profil Saya</span>
</a>
<a class="text-on-primary opacity-80 flex items-center gap-3 px-3 py-2.5 rounded-lg hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors active:scale-95 duration-150" href="#">
<span class="material-symbols-outlined" data-icon="logout">logout</span>
<span class="font-label-mono text-label-mono">Keluar</span>
</a>
</div>
</nav>
<!-- Main Content Area -->
<main class="flex-1 flex flex-col min-h-screen md:ml-[240px] w-full">
<!-- TopAppBar (Admin) -->
<header class="bg-surface dark:bg-surface-dim border-b border-outline-variant flex justify-between items-center px-gutter py-stack-sm w-full sticky top-0 z-40">
<div class="flex items-center gap-4">
<button class="md:hidden text-on-surface hover:text-primary transition-colors p-2">
<span class="material-symbols-outlined">menu</span>
</button>
<h1 class="font-h3 text-h3 font-bold text-on-surface">Sistem Presensi</h1>
</div>
<div class="flex items-center gap-4">
<button class="text-on-surface-variant hover:text-primary transition-colors p-2 active:opacity-80 rounded-full hover:bg-surface-container-high">
<span class="material-symbols-outlined" data-icon="notifications">notifications</span>
</button>
<img class="w-9 h-9 rounded-full object-cover border border-outline-variant shadow-sm cursor-pointer" data-alt="A small circular avatar of a professional school administrator, male, wearing neat corporate attire, soft bright lighting, modern corporate style." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBZGB7C7_lwJsQZrq7MPOv1hyydPrU7fQl9kmeYrW60fIVrSkZh1yRvl9DFL5P_y13yV2EQAP3d6UEHvsLgCJeA3ganuV64ell2ilF52n4O-qrBhU7DwG07FmvM7nVeR6qOZzKdNZHFN4rVUGkijan5W7IuK6WbD5I2az5yWZaYtZTbZfya1iInyHlNsgt9lWwKrtceNnkl8XS_2sI3B8hhelSOwWZJrdbWn0tLARMwJFHB6AoEHQD6"/>
</div>
</header>
<!-- Dashboard Content -->
<div class="p-gutter flex-1 bg-surface-container-low overflow-y-auto space-y-stack-lg">
<!-- Page Header -->
<div class="flex flex-col md:flex-row md:items-center justify-between gap-4">
<div>
<h2 class="font-h2 text-h2 text-on-surface">Overview Hari Ini</h2>
<p class="text-on-surface-variant font-body-sm mt-1">Selasa, 24 Oktober 2023</p>
</div>
<button class="bg-primary text-on-primary px-4 py-2 rounded-lg font-label-mono text-label-mono shadow-sm hover:bg-primary-container transition-colors flex items-center gap-2 self-start md:self-auto">
<span class="material-symbols-outlined" style="font-size: 18px;">download</span> Unduh Laporan
                </button>
</div>
<!-- Stats Grid -->
<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-4">
<!-- Hadir -->
<div class="bg-surface-container-lowest rounded-xl p-4 border border-outline-variant/30 shadow-sm flex flex-col relative overflow-hidden group hover:shadow-md transition-shadow">
<div class="absolute -right-4 -top-4 w-16 h-16 bg-primary/5 rounded-full group-hover:scale-150 transition-transform duration-500"></div>
<div class="flex items-center justify-between mb-4">
<h3 class="font-body-md text-on-surface-variant font-medium">Total Hadir</h3>
<div class="p-2 bg-primary/10 rounded-lg text-primary">
<span class="material-symbols-outlined" data-icon="check_circle">check_circle</span>
</div>
</div>
<div class="flex items-baseline gap-2">
<span class="font-h2 text-h2 text-on-surface">42</span>
<span class="text-body-sm text-on-surface-variant">/ 45 Guru</span>
</div>
<div class="mt-2 text-primary text-sm flex items-center gap-1 font-medium">
<span class="material-symbols-outlined" style="font-size: 16px;">trending_up</span> +2 dari kemarin
                    </div>
</div>
<!-- Terlambat -->
<div class="bg-surface-container-lowest rounded-xl p-4 border border-outline-variant/30 shadow-sm flex flex-col relative overflow-hidden group hover:shadow-md transition-shadow">
<div class="absolute -right-4 -top-4 w-16 h-16 bg-secondary-container/10 rounded-full group-hover:scale-150 transition-transform duration-500"></div>
<div class="flex items-center justify-between mb-4">
<h3 class="font-body-md text-on-surface-variant font-medium">Terlambat</h3>
<div class="p-2 bg-secondary-container/20 rounded-lg text-secondary">
<span class="material-symbols-outlined" data-icon="schedule">schedule</span>
</div>
</div>
<div class="flex items-baseline gap-2">
<span class="font-h2 text-h2 text-on-surface">2</span>
<span class="text-body-sm text-on-surface-variant">Guru</span>
</div>
<div class="mt-2 text-on-surface-variant text-sm flex items-center gap-1">
                         Rata-rata: 15 menit
                    </div>
</div>
<!-- Izin -->
<div class="bg-surface-container-lowest rounded-xl p-4 border border-outline-variant/30 shadow-sm flex flex-col relative overflow-hidden group hover:shadow-md transition-shadow">
<div class="absolute -right-4 -top-4 w-16 h-16 bg-blue-500/5 rounded-full group-hover:scale-150 transition-transform duration-500"></div>
<div class="flex items-center justify-between mb-4">
<h3 class="font-body-md text-on-surface-variant font-medium">Izin / Sakit</h3>
<div class="p-2 bg-blue-500/10 rounded-lg text-blue-700">
<span class="material-symbols-outlined" data-icon="sick">sick</span>
</div>
</div>
<div class="flex items-baseline gap-2">
<span class="font-h2 text-h2 text-on-surface">1</span>
<span class="text-body-sm text-on-surface-variant">Guru</span>
</div>
<div class="mt-2 text-on-surface-variant text-sm flex items-center gap-1">
                        Disetujui
                    </div>
</div>
<!-- Alpa -->
<div class="bg-surface-container-lowest rounded-xl p-4 border border-outline-variant/30 shadow-sm flex flex-col relative overflow-hidden group hover:shadow-md transition-shadow">
<div class="absolute -right-4 -top-4 w-16 h-16 bg-error/5 rounded-full group-hover:scale-150 transition-transform duration-500"></div>
<div class="flex items-center justify-between mb-4">
<h3 class="font-body-md text-on-surface-variant font-medium">Tanpa Keterangan</h3>
<div class="p-2 bg-error/10 rounded-lg text-error">
<span class="material-symbols-outlined" data-icon="cancel">cancel</span>
</div>
</div>
<div class="flex items-baseline gap-2">
<span class="font-h2 text-h2 text-on-surface">0</span>
<span class="text-body-sm text-on-surface-variant">Guru</span>
</div>
<div class="mt-2 text-primary text-sm flex items-center gap-1 font-medium">
                         Status Aman
                    </div>
</div>
</div>
<!-- Table Section -->
<div class="bg-surface-container-lowest rounded-xl shadow-sm border border-outline-variant/30 overflow-hidden flex flex-col">
<div class="px-6 py-4 border-b border-outline-variant/30 flex justify-between items-center bg-surface-bright">
<h3 class="font-h4 text-h4 font-bold text-on-surface">Presensi Hari Ini</h3>
<div class="flex gap-2">
<div class="relative">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant" style="font-size: 20px;">search</span>
<input class="pl-10 pr-4 py-2 border border-outline-variant rounded-lg text-body-sm focus:border-primary focus:ring-1 focus:ring-primary w-64 bg-surface" placeholder="Cari nama guru..." type="text"/>
</div>
<button class="px-3 py-2 border border-outline-variant rounded-lg text-on-surface flex items-center gap-2 hover:bg-surface-container-high transition-colors">
<span class="material-symbols-outlined" style="font-size: 18px;">filter_list</span> Filter
                        </button>
</div>
</div>
<div class="overflow-x-auto">
<table class="w-full text-left border-collapse">
<thead>
<tr class="bg-surface-container-low text-on-surface-variant font-label-mono text-xs uppercase tracking-wider border-b border-outline-variant/30">
<th class="px-6 py-4 font-medium">Nama Guru</th>
<th class="px-6 py-4 font-medium">Waktu Masuk</th>
<th class="px-6 py-4 font-medium">Waktu Keluar</th>
<th class="px-6 py-4 font-medium">Status</th>
<th class="px-6 py-4 font-medium text-right">Aksi</th>
</tr>
</thead>
<tbody class="divide-y divide-outline-variant/20 text-body-sm text-on-surface">
<!-- Row 1 -->
<tr class="hover:bg-surface-container-lowest/50 transition-colors">
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-primary/10 text-primary flex items-center justify-center font-bold">A</div>
<div>
<p class="font-medium">Ahmad Fauzi, S.Pd</p>
<p class="text-xs text-on-surface-variant">NIP: 198503122010011015</p>
</div>
</div>
</td>
<td class="px-6 py-4 font-label-mono">06:45 WIB</td>
<td class="px-6 py-4 font-label-mono text-on-surface-variant">-</td>
<td class="px-6 py-4">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-primary/10 text-primary text-xs font-medium border border-primary/20">
<span class="w-1.5 h-1.5 rounded-full bg-primary"></span> Tepat Waktu
                                    </span>
</td>
<td class="px-6 py-4 text-right">
<button class="text-on-surface-variant hover:text-primary transition-colors p-1">
<span class="material-symbols-outlined" style="font-size: 20px;">more_vert</span>
</button>
</td>
</tr>
<!-- Row 2 -->
<tr class="hover:bg-surface-container-lowest/50 transition-colors">
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-secondary-container/20 text-secondary flex items-center justify-center font-bold">S</div>
<div>
<p class="font-medium">Siti Aminah, M.Pd</p>
<p class="text-xs text-on-surface-variant">NIP: 198807242014022003</p>
</div>
</div>
</td>
<td class="px-6 py-4 font-label-mono text-secondary">07:15 WIB</td>
<td class="px-6 py-4 font-label-mono text-on-surface-variant">-</td>
<td class="px-6 py-4">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-secondary-container/20 text-secondary text-xs font-medium border border-secondary-container/30">
<span class="w-1.5 h-1.5 rounded-full bg-secondary"></span> Terlambat
                                    </span>
</td>
<td class="px-6 py-4 text-right">
<button class="text-on-surface-variant hover:text-primary transition-colors p-1">
<span class="material-symbols-outlined" style="font-size: 20px;">more_vert</span>
</button>
</td>
</tr>
<!-- Row 3 -->
<tr class="hover:bg-surface-container-lowest/50 transition-colors bg-surface-variant/10">
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-blue-500/10 text-blue-700 flex items-center justify-center font-bold">B</div>
<div>
<p class="font-medium">Budi Santoso, S.Ag</p>
<p class="text-xs text-on-surface-variant">NIP: 197911052005011008</p>
</div>
</div>
</td>
<td class="px-6 py-4 font-label-mono text-on-surface-variant">-</td>
<td class="px-6 py-4 font-label-mono text-on-surface-variant">-</td>
<td class="px-6 py-4">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-blue-500/10 text-blue-700 text-xs font-medium border border-blue-500/20">
<span class="w-1.5 h-1.5 rounded-full bg-blue-500"></span> Izin / Sakit
                                    </span>
</td>
<td class="px-6 py-4 text-right">
<button class="text-on-surface-variant hover:text-primary transition-colors p-1">
<span class="material-symbols-outlined" style="font-size: 20px;">more_vert</span>
</button>
</td>
</tr>
<!-- Row 4 -->
<tr class="hover:bg-surface-container-lowest/50 transition-colors">
<td class="px-6 py-4">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-primary/10 text-primary flex items-center justify-center font-bold">D</div>
<div>
<p class="font-medium">Dewi Lestari, S.Pd</p>
<p class="text-xs text-on-surface-variant">NIP: 199002182019032011</p>
</div>
</div>
</td>
<td class="px-6 py-4 font-label-mono">06:50 WIB</td>
<td class="px-6 py-4 font-label-mono text-on-surface-variant">-</td>
<td class="px-6 py-4">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-primary/10 text-primary text-xs font-medium border border-primary/20">
<span class="w-1.5 h-1.5 rounded-full bg-primary"></span> Tepat Waktu
                                    </span>
</td>
<td class="px-6 py-4 text-right">
<button class="text-on-surface-variant hover:text-primary transition-colors p-1">
<span class="material-symbols-outlined" style="font-size: 20px;">more_vert</span>
</button>
</td>
</tr>
</tbody>
</table>
</div>
<div class="px-6 py-4 border-t border-outline-variant/30 bg-surface-bright flex justify-between items-center text-sm text-on-surface-variant">
<span>Menampilkan 1-4 dari 45 data</span>
<div class="flex items-center gap-1">
<button class="p-1 rounded hover:bg-surface-container-high disabled:opacity-50"><span class="material-symbols-outlined" style="font-size: 20px;">chevron_left</span></button>
<button class="w-8 h-8 rounded bg-primary/10 text-primary font-medium">1</button>
<button class="w-8 h-8 rounded hover:bg-surface-container-high">2</button>
<button class="w-8 h-8 rounded hover:bg-surface-container-high">3</button>
<button class="p-1 rounded hover:bg-surface-container-high"><span class="material-symbols-outlined" style="font-size: 20px;">chevron_right</span></button>
</div>
</div>
</div>
</div>
</main>
</body></html>

```

