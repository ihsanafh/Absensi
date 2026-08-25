# H-21 Laporan & Rekapitulasi

```html
<!-- H-21 Laporan & Rekapitulasi -->
<!DOCTYPE html>

<html lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Sistem Presensi - Laporan</title>
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
        .material-symbols-outlined.fill {
            font-variation-settings: 'FILL' 1, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        /* Custom scrollbar for table container */
        .custom-scrollbar::-webkit-scrollbar {
            height: 8px;
            width: 8px;
        }
        .custom-scrollbar::-webkit-scrollbar-track {
            background: theme('colors.surface-container-low');
            border-radius: 4px;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb {
            background: theme('colors.outline-variant');
            border-radius: 4px;
        }
        .custom-scrollbar::-webkit-scrollbar-thumb:hover {
            background: theme('colors.outline');
        }
    </style>
</head>
<body class="bg-background text-on-background font-body-md text-body-md antialiased h-screen overflow-hidden flex">
<!-- SideNavBar (Admin) -->
<nav class="bg-primary w-[240px] h-screen fixed left-0 top-0 shadow-sm flex flex-col h-full py-stack-md z-20">
<!-- Header -->
<div class="px-6 mb-8 flex items-center gap-3">
<div class="w-10 h-10 rounded-full bg-white flex items-center justify-center overflow-hidden flex-shrink-0">
<img alt="School Logo" class="w-full h-full object-cover" data-alt="A clean, professional school logo for MI AL-Faizein, featuring an open book and abstract geometric shapes in vibrant green and gold tones, conveying education and trust. Light mode aesthetic, high contrast." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDLyZJ_8Z5oJiZeT5C0bDC5G-UkxB5JhBOltrppIA_i5YIT3c3KVoks4PEjJmT7uX8e_LXWjwlOJ9UvrD5sCwUJpVde0SwxnYDdQjTPpqu1eaI4WtT-58jZMxfG-n10s4wbO7MJu8p6CekMv0sDZ6G9lywSofFWGf_bVY_H7dAL8lVuTg04bBWPcOHG8Q22QnNP9na7pkI_fVIYZXlN0v4XrNEtawsccZxqwldaMtMxS4hWU7YeptwL"/>
</div>
<div>
<h1 class="font-h4 text-h4 font-bold text-on-primary">MI AL-Faizein</h1>
<p class="text-on-primary opacity-80 font-body-sm text-body-sm">Sistem Presensi Guru</p>
</div>
</div>
<!-- Main Navigation -->
<div class="flex-1 overflow-y-auto px-3 custom-scrollbar flex flex-col gap-1">
<a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined">dashboard</span>
<span>Dashboard</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined">qr_code</span>
<span>Tampilan QR</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined">person_check</span>
<span>Data Presensi</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined">pending_actions</span>
<span>Permohonan Izin</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined">history_edu</span>
<span>Riwayat Izin</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined">manage_accounts</span>
<span>Manajemen Akun</span>
</a>
<!-- Active Tab: Laporan -->
<a class="flex items-center gap-3 px-4 py-3 rounded-lg bg-on-primary-fixed-variant text-on-primary-container border-l-4 border-white transition-colors duration-150 transform hover:scale-95" href="#">
<span class="material-symbols-outlined fill">analytics</span>
<span class="font-medium">Laporan</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined">history</span>
<span>Log Aktivitas</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined">settings</span>
<span>Pengaturan</span>
</a>
</div>
<!-- Footer Navigation -->
<div class="mt-auto pt-4 px-3 border-t border-on-primary-fixed-variant flex flex-col gap-1">
<a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined">account_circle</span>
<span>Profil Saya</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined">logout</span>
<span>Keluar</span>
</a>
</div>
</nav>
<!-- Main Content Wrapper -->
<div class="flex-1 flex flex-col ml-[240px] w-[calc(100%-240px)] h-screen overflow-hidden">
<!-- TopAppBar (Admin) -->
<header class="bg-surface border-b border-outline-variant flex justify-between items-center px-gutter py-stack-sm w-full z-10 shrink-0 h-[72px]">
<div class="flex items-center gap-4">
<span class="font-h3 text-h3 font-bold text-on-surface">Sistem Presensi</span>
</div>
<div class="flex items-center gap-4">
<button class="p-2 rounded-full text-on-surface-variant hover:text-primary transition-colors hover:bg-surface-container-high focus:outline-none focus:ring-2 focus:ring-primary">
<span class="material-symbols-outlined">notifications</span>
</button>
<div class="w-10 h-10 rounded-full border-2 border-outline-variant overflow-hidden cursor-pointer hover:border-primary transition-colors">
<img alt="Admin Avatar" class="w-full h-full object-cover" data-alt="A professional headshot of an Indonesian school administrator, wearing a neat uniform, smiling gently against a bright, neutral light-mode background. High quality photography." src="https://lh3.googleusercontent.com/aida-public/AB6AXuD9KfFnB1EpagmP0gbxUYFFz54in8RhQ5_lFh_o_UV6pZIBleckSjEm4sJeA71dZeQTggQgxjOvheCAh6r3QrMipNkSGuY2RlpJxD40Hus1KxaZkfnqHHaaJjgXH2UtAINkZWwIQ94z3yLY3tNJT4XQn6C2lc_v_tZ5dzFRNry2kGxlJHx5LG3bgW0SfH5v_QU89JBT2G46kLCm6XpzWrXj7lZNNMqe5P5uZSSw88usBS5cy4y8m8YL"/>
</div>
</div>
</header>
<!-- Canvas -->
<main class="flex-1 overflow-y-auto p-container-padding bg-background custom-scrollbar">
<div class="max-w-7xl mx-auto flex flex-col gap-stack-lg">
<!-- Page Title -->
<div>
<h2 class="font-h2 text-h2 text-on-background">Laporan &amp; Rekapitulasi</h2>
<p class="text-on-surface-variant mt-1">Kelola dan unduh laporan kehadiran guru secara menyeluruh.</p>
</div>
<!-- Filter Card -->
<section class="bg-surface rounded-xl shadow-sm border border-outline-variant p-6">
<h3 class="font-h4 text-h4 font-bold text-on-surface mb-4 pb-3 border-b border-outline-variant/50">Filter Laporan</h3>
<div class="flex flex-col lg:flex-row gap-6 items-end">
<div class="w-full lg:w-1/3 flex gap-4">
<div class="flex-1">
<label class="block text-body-sm font-medium text-on-surface-variant mb-1.5">Tanggal Mulai</label>
<div class="relative">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline">calendar_today</span>
<input class="w-full pl-10 pr-3 py-2 bg-surface-container-lowest border border-outline-variant rounded-lg focus:ring-2 focus:ring-primary focus:border-primary text-on-surface transition-colors shadow-sm font-body-md" type="date" value="2023-10-01"/>
</div>
</div>
<div class="flex-1">
<label class="block text-body-sm font-medium text-on-surface-variant mb-1.5">Tanggal Akhir</label>
<div class="relative">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline">calendar_today</span>
<input class="w-full pl-10 pr-3 py-2 bg-surface-container-lowest border border-outline-variant rounded-lg focus:ring-2 focus:ring-primary focus:border-primary text-on-surface transition-colors shadow-sm font-body-md" type="date" value="2023-10-31"/>
</div>
</div>
</div>
<div class="w-full lg:w-1/3">
<label class="block text-body-sm font-medium text-on-surface-variant mb-1.5">Pilih Guru</label>
<div class="relative">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline">person</span>
<select class="w-full pl-10 pr-10 py-2 bg-surface-container-lowest border border-outline-variant rounded-lg focus:ring-2 focus:ring-primary focus:border-primary text-on-surface appearance-none transition-colors shadow-sm font-body-md">
<option value="all">Semua Guru</option>
<option value="1">Ahmad Dahlan, S.Pd</option>
<option value="2">Siti Aminah, M.Pd</option>
<option value="3">Budi Santoso, S.Kom</option>
</select>
<span class="material-symbols-outlined absolute right-3 top-1/2 -translate-y-1/2 text-outline pointer-events-none">expand_more</span>
</div>
</div>
<div class="w-full lg:w-auto flex gap-3 ml-auto">
<button class="flex items-center gap-2 bg-primary hover:bg-primary-container text-on-primary px-5 py-2.5 rounded-lg font-medium transition-colors shadow-sm focus:ring-2 focus:ring-offset-2 focus:ring-primary">
<span class="material-symbols-outlined text-[20px]">table_view</span>
                                Export Excel
                            </button>
<button class="flex items-center gap-2 bg-error hover:bg-[#93000a] text-on-error px-5 py-2.5 rounded-lg font-medium transition-colors shadow-sm focus:ring-2 focus:ring-offset-2 focus:ring-error">
<span class="material-symbols-outlined text-[20px]">picture_as_pdf</span>
                                Export PDF
                            </button>
</div>
</div>
</section>
<!-- Data Table Card -->
<section class="bg-surface rounded-xl shadow-sm border border-outline-variant overflow-hidden flex flex-col">
<div class="p-6 border-b border-outline-variant/50 flex justify-between items-center bg-surface-container-low">
<h3 class="font-h4 text-h4 font-bold text-on-surface">Rekapitulasi Kehadiran</h3>
<span class="px-3 py-1 bg-surface-container border border-outline-variant rounded-full text-body-sm font-medium text-on-surface-variant">Periode: 01 Okt - 31 Okt 2023</span>
</div>
<div class="overflow-x-auto">
<table class="w-full text-left border-collapse">
<thead>
<tr class="bg-surface-container-lowest border-b border-outline-variant">
<th class="py-4 px-6 font-semibold text-on-surface-variant text-body-sm whitespace-nowrap">Nama Guru</th>
<th class="py-4 px-6 font-semibold text-on-surface-variant text-body-sm text-center">Hadir</th>
<th class="py-4 px-6 font-semibold text-on-surface-variant text-body-sm text-center">Terlambat</th>
<th class="py-4 px-6 font-semibold text-on-surface-variant text-body-sm text-center">Izin</th>
<th class="py-4 px-6 font-semibold text-on-surface-variant text-body-sm text-center">Alpa</th>
<th class="py-4 px-6 font-semibold text-on-surface-variant text-body-sm w-64">Persentase Kehadiran</th>
</tr>
</thead>
<tbody class="divide-y divide-outline-variant/30">
<!-- Row 1 -->
<tr class="hover:bg-surface-container-low transition-colors">
<td class="py-4 px-6">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-primary-container text-on-primary-container flex items-center justify-center font-bold text-body-sm">
                                                AD
                                            </div>
<div>
<div class="font-medium text-on-surface">Ahmad Dahlan, S.Pd</div>
<div class="text-body-sm text-on-surface-variant">NIP: 198001012005011001</div>
</div>
</div>
</td>
<td class="py-4 px-6 text-center font-label-mono text-label-mono text-primary">22</td>
<td class="py-4 px-6 text-center font-label-mono text-label-mono text-secondary-container">1</td>
<td class="py-4 px-6 text-center font-label-mono text-label-mono text-outline">0</td>
<td class="py-4 px-6 text-center font-label-mono text-label-mono text-error">0</td>
<td class="py-4 px-6">
<div class="flex items-center gap-3">
<span class="font-label-mono text-label-mono font-bold text-on-surface">95.6%</span>
<div class="w-full bg-surface-container-high rounded-full h-2 overflow-hidden">
<div class="bg-primary h-2 rounded-full" style="width: 95.6%"></div>
</div>
</div>
</td>
</tr>
<!-- Row 2 -->
<tr class="hover:bg-surface-container-low transition-colors">
<td class="py-4 px-6">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-secondary-container text-on-secondary-container flex items-center justify-center font-bold text-body-sm">
                                                SA
                                            </div>
<div>
<div class="font-medium text-on-surface">Siti Aminah, M.Pd</div>
<div class="text-body-sm text-on-surface-variant">NIP: 198502152010012003</div>
</div>
</div>
</td>
<td class="py-4 px-6 text-center font-label-mono text-label-mono text-primary">20</td>
<td class="py-4 px-6 text-center font-label-mono text-label-mono text-secondary-container">2</td>
<td class="py-4 px-6 text-center font-label-mono text-label-mono text-outline">1</td>
<td class="py-4 px-6 text-center font-label-mono text-label-mono text-error">0</td>
<td class="py-4 px-6">
<div class="flex items-center gap-3">
<span class="font-label-mono text-label-mono font-bold text-on-surface">86.9%</span>
<div class="w-full bg-surface-container-high rounded-full h-2 overflow-hidden">
<div class="bg-secondary-container h-2 rounded-full" style="width: 86.9%"></div>
</div>
</div>
</td>
</tr>
<!-- Row 3 -->
<tr class="hover:bg-surface-container-low transition-colors">
<td class="py-4 px-6">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-surface-variant text-on-surface-variant flex items-center justify-center font-bold text-body-sm">
                                                BS
                                            </div>
<div>
<div class="font-medium text-on-surface">Budi Santoso, S.Kom</div>
<div class="text-body-sm text-on-surface-variant">NIP: 199005202015041002</div>
</div>
</div>
</td>
<td class="py-4 px-6 text-center font-label-mono text-label-mono text-primary">18</td>
<td class="py-4 px-6 text-center font-label-mono text-label-mono text-secondary-container">3</td>
<td class="py-4 px-6 text-center font-label-mono text-label-mono text-outline">0</td>
<td class="py-4 px-6 text-center font-label-mono text-label-mono text-error">2</td>
<td class="py-4 px-6">
<div class="flex items-center gap-3">
<span class="font-label-mono text-label-mono font-bold text-error">78.2%</span>
<div class="w-full bg-surface-container-high rounded-full h-2 overflow-hidden">
<div class="bg-error h-2 rounded-full" style="width: 78.2%"></div>
</div>
</div>
</td>
</tr>
<!-- Row 4 -->
<tr class="hover:bg-surface-container-low transition-colors">
<td class="py-4 px-6">
<div class="flex items-center gap-3">
<div class="w-8 h-8 rounded-full bg-tertiary-container text-on-tertiary-container flex items-center justify-center font-bold text-body-sm">
                                                RN
                                            </div>
<div>
<div class="font-medium text-on-surface">Rina Nurhayati, S.Ag</div>
<div class="text-body-sm text-on-surface-variant">NIP: 197811222003122001</div>
</div>
</div>
</td>
<td class="py-4 px-6 text-center font-label-mono text-label-mono text-primary">23</td>
<td class="py-4 px-6 text-center font-label-mono text-label-mono text-secondary-container">0</td>
<td class="py-4 px-6 text-center font-label-mono text-label-mono text-outline">0</td>
<td class="py-4 px-6 text-center font-label-mono text-label-mono text-error">0</td>
<td class="py-4 px-6">
<div class="flex items-center gap-3">
<span class="font-label-mono text-label-mono font-bold text-on-surface">100%</span>
<div class="w-full bg-surface-container-high rounded-full h-2 overflow-hidden">
<div class="bg-primary h-2 rounded-full" style="width: 100%"></div>
</div>
</div>
</td>
</tr>
</tbody>
</table>
</div>
<!-- Pagination (simplified) -->
<div class="p-4 border-t border-outline-variant/50 flex justify-between items-center bg-surface-container-lowest">
<span class="text-body-sm text-on-surface-variant">Menampilkan 1-4 dari 24 guru</span>
<div class="flex gap-1">
<button class="w-8 h-8 flex items-center justify-center rounded-md text-on-surface-variant hover:bg-surface-container hover:text-on-surface disabled:opacity-50" disabled="">
<span class="material-symbols-outlined text-[20px]">chevron_left</span>
</button>
<button class="w-8 h-8 flex items-center justify-center rounded-md bg-primary text-on-primary font-medium text-body-sm">1</button>
<button class="w-8 h-8 flex items-center justify-center rounded-md text-on-surface hover:bg-surface-container font-medium text-body-sm">2</button>
<button class="w-8 h-8 flex items-center justify-center rounded-md text-on-surface hover:bg-surface-container font-medium text-body-sm">3</button>
<button class="w-8 h-8 flex items-center justify-center rounded-md text-on-surface-variant hover:bg-surface-container hover:text-on-surface">
<span class="material-symbols-outlined text-[20px]">chevron_right</span>
</button>
</div>
</div>
</section>
</div>
</main>
</div>
</body></html>

```

