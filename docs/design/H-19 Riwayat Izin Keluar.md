# H-19 Riwayat Izin Keluar

```html
<!-- H-19 Riwayat Izin Keluar -->
<!DOCTYPE html>

<html lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Riwayat Izin Keluar - Sistem Presensi</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&amp;family=JetBrains+Mono:wght@500&amp;family=Plus+Jakarta+Sans:wght@600;700&amp;display=swap" rel="stylesheet"/>
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
        .icon-fill {
            font-variation-settings: 'FILL' 1, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        body { background-color: #fcf9f8; }
    </style>
</head>
<body class="bg-background text-on-background font-body-md min-h-screen flex">
<!-- Admin SideNavBar -->
<nav class="w-[240px] h-screen fixed left-0 top-0 bg-primary shadow-sm flex flex-col h-full py-stack-md z-50">
<!-- Header -->
<div class="px-6 pb-6 border-b border-white/10 mb-4">
<div class="flex items-center gap-3 mb-2">
<div class="w-10 h-10 rounded-full bg-white/20 flex items-center justify-center">
<img alt="School Logo" class="w-8 h-8 object-contain" data-alt="A clean, minimalist circular logo featuring abstract green leaves and a book, suitable for an academic institution, set against a transparent background." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDuAB9iVBG520wIef7vKBz0aVKKRxw-nB3LjwYzv_6iLv_Sk8UOjEAjFGen-KH3FnKxP1tyl3Hg1Z3SBz4pIgjxs68Ih4BAqOMXw8YCtEbiB2Kb57ruWvhC36qy8ZIejCif16NVBeSbbwbRZ16jkkAj7AS-lVCWrmcjEqnNuNc4fbkMD4_OHYfOOhOpnc2OfNtMpwVAJSMzW-OVOX7LQuavQinpr8zv8E6i6C_YWL3TfaylQyRWSxL4"/>
</div>
<div>
<h1 class="font-h4 text-h4 font-bold text-on-primary">MI AL-Faizein</h1>
<p class="font-body-sm text-body-sm text-on-primary opacity-80">Sistem Presensi Guru</p>
</div>
</div>
</div>
<!-- Navigation Links -->
<div class="flex-1 overflow-y-auto px-3 space-y-1">
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined text-[20px]" data-icon="dashboard">dashboard</span>
<span class="font-body-md text-body-md">Dashboard</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined text-[20px]" data-icon="qr_code">qr_code</span>
<span class="font-body-md text-body-md">Tampilan QR</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined text-[20px]" data-icon="person_check">person_check</span>
<span class="font-body-md text-body-md">Data Presensi</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined text-[20px]" data-icon="pending_actions">pending_actions</span>
<span class="font-body-md text-body-md">Permohonan Izin</span>
</a>
<!-- Active Tab -->
<a class="flex items-center gap-3 px-3 py-2 rounded-lg bg-on-primary-fixed-variant text-on-primary-container border-l-4 border-white transition-colors scale-95 duration-150" href="#">
<span class="material-symbols-outlined text-[20px] icon-fill" data-icon="history_edu">history_edu</span>
<span class="font-body-md text-body-md font-medium">Riwayat Izin</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined text-[20px]" data-icon="manage_accounts">manage_accounts</span>
<span class="font-body-md text-body-md">Manajemen Akun</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined text-[20px]" data-icon="analytics">analytics</span>
<span class="font-body-md text-body-md">Laporan</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined text-[20px]" data-icon="history">history</span>
<span class="font-body-md text-body-md">Log Aktivitas</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined text-[20px]" data-icon="settings">settings</span>
<span class="font-body-md text-body-md">Pengaturan</span>
</a>
</div>
<!-- Footer Links -->
<div class="px-3 pt-4 border-t border-white/10 mt-auto">
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined text-[20px]" data-icon="account_circle">account_circle</span>
<span class="font-body-md text-body-md">Profil Saya</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined text-[20px]" data-icon="logout">logout</span>
<span class="font-body-md text-body-md">Keluar</span>
</a>
</div>
</nav>
<!-- Main Content Wrapper -->
<div class="flex-1 flex flex-col ml-[240px] min-h-screen">
<!-- Admin TopAppBar -->
<header class="bg-surface flex justify-between items-center px-gutter py-stack-sm w-full border-b border-outline-variant h-[72px] sticky top-0 z-40">
<div class="flex items-center gap-4">
<h2 class="font-h3 text-h3 font-bold text-on-surface tracking-tight">Sistem Presensi</h2>
</div>
<div class="flex items-center gap-4">
<button class="p-2 rounded-full text-on-surface-variant hover:text-primary transition-colors hover:bg-surface-variant/50">
<span class="material-symbols-outlined" data-icon="notifications">notifications</span>
</button>
<div class="w-10 h-10 rounded-full bg-surface-variant overflow-hidden border border-outline-variant">
<img alt="Admin Avatar" class="w-full h-full object-cover" data-alt="A professional headshot of a school administrator in a modern office, soft lighting, sharp focus, corporate aesthetic." src="https://lh3.googleusercontent.com/aida-public/AB6AXuB-lmzbyTGmM9Y-D9XaHX0Vk2Gs9qi4hXniJrqDDbXTn60blI6H_HVhmrcq_eIuCQfk0w8DZ_sJmixlKuN0Cr673KisCqSnDLx_f2fv4IcW-1D3eDPJzc44Pi4-iVuIHH6SYsgDBfTpr95muUFPkQcvJgMk2uEMNutNm7wEi5LnO8jn93iGYJ7JCw0xFGTZspMEoLiGYKVmscSFzYDcN4Co_h_KvGaAEHfyNwQeAURm7O6QTUz-3wJp"/>
</div>
</div>
</header>
<!-- Main Content Area -->
<main class="flex-1 p-container-padding overflow-x-hidden">
<!-- Page Header -->
<div class="mb-stack-lg">
<h1 class="font-h2 text-h2 text-on-surface mb-2">Riwayat Izin Keluar</h1>
<p class="font-body-lg text-body-lg text-on-surface-variant">Arsip riwayat permohonan izin keluar guru beserta status persetujuannya.</p>
</div>
<!-- Filters Section -->
<div class="bg-surface-container-lowest rounded-xl shadow-sm border border-outline-variant p-4 mb-stack-lg flex flex-wrap gap-4 items-end">
<div class="flex-1 min-w-[200px]">
<label class="block font-body-sm text-body-sm text-on-surface-variant mb-1">Cari Guru</label>
<div class="relative">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline-variant text-[20px]">search</span>
<input class="w-full pl-10 pr-4 py-2 bg-surface border border-outline-variant rounded-lg font-body-md text-body-md text-on-surface focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary transition-colors" placeholder="Nama guru..." type="text"/>
</div>
</div>
<div class="min-w-[180px]">
<label class="block font-body-sm text-body-sm text-on-surface-variant mb-1">Rentang Waktu</label>
<div class="relative">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline-variant text-[20px]">calendar_today</span>
<select class="w-full pl-10 pr-8 py-2 bg-surface border border-outline-variant rounded-lg font-body-md text-body-md text-on-surface focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary appearance-none transition-colors">
<option>Bulan Ini</option>
<option>Bulan Lalu</option>
<option>Tahun Ini</option>
</select>
</div>
</div>
<div class="min-w-[180px]">
<label class="block font-body-sm text-body-sm text-on-surface-variant mb-1">Status</label>
<select class="w-full px-4 py-2 bg-surface border border-outline-variant rounded-lg font-body-md text-body-md text-on-surface focus:outline-none focus:border-primary focus:ring-1 focus:ring-primary appearance-none transition-colors">
<option>Semua Status</option>
<option>Disetujui</option>
<option>Ditolak</option>
</select>
</div>
<button class="px-6 py-2 bg-primary text-on-primary rounded-lg font-body-md text-body-md font-medium hover:bg-primary-container hover:text-on-primary-container transition-colors shadow-sm flex items-center gap-2">
<span class="material-symbols-outlined text-[20px]">filter_list</span>
                    Terapkan
                </button>
</div>
<!-- Table Card -->
<div class="bg-surface-container-lowest rounded-xl shadow-sm border border-outline-variant overflow-hidden">
<div class="overflow-x-auto">
<table class="w-full text-left border-collapse">
<thead>
<tr class="bg-surface-container-low border-b border-outline-variant">
<th class="py-4 px-6 font-body-sm text-body-sm font-semibold text-on-surface-variant uppercase tracking-wider">Nama Guru</th>
<th class="py-4 px-6 font-body-sm text-body-sm font-semibold text-on-surface-variant uppercase tracking-wider">Tanggal</th>
<th class="py-4 px-6 font-body-sm text-body-sm font-semibold text-on-surface-variant uppercase tracking-wider">Alasan</th>
<th class="py-4 px-6 font-body-sm text-body-sm font-semibold text-on-surface-variant uppercase tracking-wider">Waktu Keluar</th>
<th class="py-4 px-6 font-body-sm text-body-sm font-semibold text-on-surface-variant uppercase tracking-wider">Waktu Kembali</th>
<th class="py-4 px-6 font-body-sm text-body-sm font-semibold text-on-surface-variant uppercase tracking-wider">Status</th>
<th class="py-4 px-6 font-body-sm text-body-sm font-semibold text-on-surface-variant uppercase tracking-wider">Disetujui Oleh</th>
</tr>
</thead>
<tbody class="divide-y divide-outline-variant/50">
<!-- Row 1 -->
<tr class="hover:bg-surface-container-low/50 transition-colors">
<td class="py-4 px-6">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-primary/10 text-primary flex items-center justify-center font-bold font-body-sm">AR</div>
<span class="font-body-md text-body-md font-medium text-on-surface">Ahmad Rifai, S.Pd</span>
</div>
</td>
<td class="py-4 px-6 font-body-md text-body-md text-on-surface-variant">12 Okt 2023</td>
<td class="py-4 px-6 font-body-md text-body-md text-on-surface-variant max-w-[200px] truncate" title="Urusan keluarga mendadak">Urusan keluarga mendadak</td>
<td class="py-4 px-6 font-label-mono text-label-mono text-on-surface">09:30</td>
<td class="py-4 px-6 font-label-mono text-label-mono text-on-surface">11:45</td>
<td class="py-4 px-6">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-tertiary-container/20 text-tertiary font-body-sm text-body-sm font-medium border border-tertiary-container/30">
<span class="w-1.5 h-1.5 rounded-full bg-tertiary"></span>
                                        Disetujui
                                    </span>
</td>
<td class="py-4 px-6 font-body-md text-body-md text-on-surface-variant">Kepala Sekolah</td>
</tr>
<!-- Row 2 -->
<tr class="hover:bg-surface-container-low/50 transition-colors">
<td class="py-4 px-6">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-secondary-container/20 text-secondary flex items-center justify-center font-bold font-body-sm">SA</div>
<span class="font-body-md text-body-md font-medium text-on-surface">Siti Aminah, M.Pd</span>
</div>
</td>
<td class="py-4 px-6 font-body-md text-body-md text-on-surface-variant">10 Okt 2023</td>
<td class="py-4 px-6 font-body-md text-body-md text-on-surface-variant max-w-[200px] truncate" title="Rapat dinas luar kota">Rapat dinas luar kota</td>
<td class="py-4 px-6 font-label-mono text-label-mono text-on-surface">08:00</td>
<td class="py-4 px-6 font-label-mono text-label-mono text-on-surface text-outline-variant italic">Belum kembali</td>
<td class="py-4 px-6">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-tertiary-container/20 text-tertiary font-body-sm text-body-sm font-medium border border-tertiary-container/30">
<span class="w-1.5 h-1.5 rounded-full bg-tertiary"></span>
                                        Disetujui
                                    </span>
</td>
<td class="py-4 px-6 font-body-md text-body-md text-on-surface-variant">Wakasek Kurikulum</td>
</tr>
<!-- Row 3 -->
<tr class="hover:bg-surface-container-low/50 transition-colors">
<td class="py-4 px-6">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-primary/10 text-primary flex items-center justify-center font-bold font-body-sm">BS</div>
<span class="font-body-md text-body-md font-medium text-on-surface">Budi Santoso, S.Ag</span>
</div>
</td>
<td class="py-4 px-6 font-body-md text-body-md text-on-surface-variant">08 Okt 2023</td>
<td class="py-4 px-6 font-body-md text-body-md text-on-surface-variant max-w-[200px] truncate" title="Keperluan pribadi">Keperluan pribadi</td>
<td class="py-4 px-6 font-label-mono text-label-mono text-outline-variant">-</td>
<td class="py-4 px-6 font-label-mono text-label-mono text-outline-variant">-</td>
<td class="py-4 px-6">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-error-container text-on-error-container font-body-sm text-body-sm font-medium border border-error-container/50">
<span class="w-1.5 h-1.5 rounded-full bg-error"></span>
                                        Ditolak
                                    </span>
</td>
<td class="py-4 px-6 font-body-md text-body-md text-on-surface-variant">Kepala Sekolah</td>
</tr>
<!-- Row 4 -->
<tr class="hover:bg-surface-container-low/50 transition-colors">
<td class="py-4 px-6">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-primary/10 text-primary flex items-center justify-center font-bold font-body-sm">DA</div>
<span class="font-body-md text-body-md font-medium text-on-surface">Dian Anggraeni, S.Kom</span>
</div>
</td>
<td class="py-4 px-6 font-body-md text-body-md text-on-surface-variant">05 Okt 2023</td>
<td class="py-4 px-6 font-body-md text-body-md text-on-surface-variant max-w-[200px] truncate" title="Mengantar siswa lomba">Mengantar siswa lomba</td>
<td class="py-4 px-6 font-label-mono text-label-mono text-on-surface">07:30</td>
<td class="py-4 px-6 font-label-mono text-label-mono text-on-surface">14:00</td>
<td class="py-4 px-6">
<span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-tertiary-container/20 text-tertiary font-body-sm text-body-sm font-medium border border-tertiary-container/30">
<span class="w-1.5 h-1.5 rounded-full bg-tertiary"></span>
                                        Disetujui
                                    </span>
</td>
<td class="py-4 px-6 font-body-md text-body-md text-on-surface-variant">Wakasek Kesiswaan</td>
</tr>
</tbody>
</table>
</div>
<!-- Pagination -->
<div class="px-6 py-4 border-t border-outline-variant flex items-center justify-between bg-surface-container-lowest">
<span class="font-body-sm text-body-sm text-on-surface-variant">Menampilkan 1-4 dari 45 data</span>
<div class="flex gap-2">
<button class="w-8 h-8 rounded border border-outline-variant flex items-center justify-center text-on-surface-variant hover:bg-surface-container-low transition-colors disabled:opacity-50" disabled="">
<span class="material-symbols-outlined text-[18px]">chevron_left</span>
</button>
<button class="w-8 h-8 rounded bg-primary text-on-primary flex items-center justify-center font-body-sm font-medium">1</button>
<button class="w-8 h-8 rounded border border-outline-variant flex items-center justify-center text-on-surface hover:bg-surface-container-low transition-colors font-body-sm font-medium">2</button>
<button class="w-8 h-8 rounded border border-outline-variant flex items-center justify-center text-on-surface hover:bg-surface-container-low transition-colors font-body-sm font-medium">3</button>
<button class="w-8 h-8 rounded border border-outline-variant flex items-center justify-center text-on-surface-variant hover:bg-surface-container-low transition-colors">
<span class="material-symbols-outlined text-[18px]">chevron_right</span>
</button>
</div>
</div>
</div>
</main>
</div>
</body></html>

```

