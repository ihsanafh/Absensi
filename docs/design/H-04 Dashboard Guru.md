# H-04 Dashboard Guru

```html
<!-- H-04 Dashboard Guru -->
<!DOCTYPE html>

<html lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Dashboard Guru - Sistem Presensi</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@600;700&amp;family=Inter:wght@400;500;600&amp;family=JetBrains+Mono:wght@500&amp;display=swap" rel="stylesheet"/>
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
          }
        }
    </script>
</head>
<body class="bg-background text-on-background font-body-md min-h-screen flex">
<!-- Sidebar Guru -->
<nav class="hidden md:flex flex-col h-screen fixed left-0 top-0 w-[220px] bg-primary shadow-sm py-stack-md z-20">
<!-- Brand/Header -->
<div class="px-gutter mb-stack-lg flex items-center gap-3">
<div class="w-10 h-10 rounded-full bg-surface flex items-center justify-center overflow-hidden shrink-0">
<img alt="School Logo Small" class="w-full h-full object-cover" data-alt="A small, stylized educational institution logo for MI AL-Faizein. Professional, flat vector style with academic themes, featuring an open book and abstract geometric shapes in primary green and gold, set against a pristine white background. Clean, simple, modern corporate identity aesthetic." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAoMFN4PeQiQc14Lk11auhQKP40POTHC8RJiidhuKejSgr_9dA4jlvJddx9BOKAPjxbXrhoiU63jhXzywZqg4Y40nGVi9uMTQ68sh2FMc1YLjY56DtdbYDCDd5FPPbiIZ2LfxzN1pAfMgqLCG3rAWisdU-SSy4CwqSG4T9AgcjfsyAyjqjBIYinXbISc9e97On8EvIy9vv82DVQhycX8iUHnITWx6oFuXxOFFt28T76fC2SO0skSM6I"/>
</div>
<div>
<h2 class="font-h4 text-h4 font-bold text-on-primary">Presensi Guru</h2>
<p class="font-body-sm text-body-sm text-on-primary opacity-80">MI AL-Faizein</p>
</div>
</div>
<!-- Navigation Links -->
<ul class="flex-1 px-stack-sm flex flex-col gap-1">
<!-- Active Tab: Beranda -->
<li>
<a class="flex items-center gap-3 px-4 py-3 bg-on-primary-fixed-variant text-on-primary-container border-l-4 border-secondary-fixed rounded-r-lg font-body-md text-body-md translate-x-1 duration-200" href="#">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">home</span>
<span>Beranda</span>
</a>
</li>
<!-- Inactive Tabs -->
<li>
<a class="flex items-center gap-3 px-4 py-3 text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 rounded-lg font-body-md text-body-md transition-colors" href="#">
<span class="material-symbols-outlined">qr_code_scanner</span>
<span>Scan Presensi</span>
</a>
</li>
<li>
<a class="flex items-center gap-3 px-4 py-3 text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 rounded-lg font-body-md text-body-md transition-colors" href="#">
<span class="material-symbols-outlined">assignment_return</span>
<span>Izin Keluar</span>
</a>
</li>
<li>
<a class="flex items-center gap-3 px-4 py-3 text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 rounded-lg font-body-md text-body-md transition-colors" href="#">
<span class="material-symbols-outlined">history</span>
<span>Riwayat</span>
</a>
</li>
</ul>
<!-- Footer Links -->
<div class="px-stack-sm mt-auto pt-stack-md border-t border-on-primary/20">
<ul class="flex flex-col gap-1">
<li>
<a class="flex items-center gap-3 px-4 py-3 text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 rounded-lg font-body-md text-body-md transition-colors" href="#">
<span class="material-symbols-outlined">person</span>
<span>Profil Saya</span>
</a>
</li>
<li>
<a class="flex items-center gap-3 px-4 py-3 text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 rounded-lg font-body-md text-body-md transition-colors" href="#">
<span class="material-symbols-outlined">logout</span>
<span>Keluar</span>
</a>
</li>
</ul>
</div>
</nav>
<!-- Main Content Area -->
<div class="flex-1 flex flex-col min-h-screen md:ml-[220px] w-full md:w-[calc(100%-220px)] bg-surface-container-low">
<!-- TopAppBar Guru -->
<header class="flex justify-between items-center px-gutter py-stack-sm bg-surface border-b border-outline-variant sticky top-0 z-10">
<div class="flex items-center gap-4">
<button class="md:hidden text-on-surface p-2 hover:bg-surface-variant rounded-full transition-colors">
<span class="material-symbols-outlined">menu</span>
</button>
<h1 class="font-h3 text-h3 font-bold text-on-surface">Dashboard Guru</h1>
</div>
<div class="flex items-center gap-4">
<button class="text-on-surface-variant hover:text-primary transition-colors p-2 rounded-full hover:bg-surface-variant relative">
<span class="material-symbols-outlined">notifications</span>
<span class="absolute top-1 right-1 w-2.5 h-2.5 bg-error rounded-full border-2 border-surface"></span>
</button>
<div class="w-10 h-10 rounded-full bg-surface-variant overflow-hidden border border-outline-variant">
<img alt="Teacher Avatar" class="w-full h-full object-cover" data-alt="A professional headshot of an Indonesian male teacher in his mid-30s. He is wearing a neat, light-colored collared shirt, smiling warmly. The background is a soft, blurred classroom setting with natural daylight. Professional, corporate academic portrait style." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBgxt9Sx-X4FGcpBQsumZFX5JFJEizEWijCCG-Bm0dy9m0fxg3F6hyCcG9UJ6m1r4A1ub_0_pa6I1A8DmmjzXQ8OyvgjpvrCZG49xw6qKzzk4T_Sv8C_xqznBss_TGZd8sLMnsYKjXrfmAn_UQRmQA8d7iSYfBpFttBP-WTTRqLttdc-7pZi-Y6A6IvC8rrTZ_75ziv_S0Ec2bv48ugUwQkEA_zK4jeDqI186pCRTPirCMCCABd8LX6"/>
</div>
</div>
</header>
<!-- Main Dashboard Canvas -->
<main class="flex-1 p-container-padding">
<!-- Greeting Section -->
<div class="mb-stack-lg">
<h2 class="font-h2 text-h2 text-on-surface mb-2">Selamat Pagi, Bpk. Budi Santoso</h2>
<p class="font-body-lg text-body-lg text-on-surface-variant">Senin, 23 Oktober 2023</p>
</div>
<!-- Bento Grid Layout -->
<div class="grid grid-cols-1 lg:grid-cols-12 gap-gutter">
<!-- Main Status & Action Card (Spans 8 cols) -->
<div class="lg:col-span-8 bg-surface rounded-xl shadow-sm border border-outline-variant/30 flex flex-col overflow-hidden relative">
<!-- Subtle background pattern for premium feel -->
<div class="absolute inset-0 opacity-[0.03] pointer-events-none" style="background-image: radial-gradient(var(--tw-colors-primary) 1px, transparent 1px); background-size: 20px 20px;"></div>
<div class="p-gutter border-b border-outline-variant/50 relative z-10 flex justify-between items-center">
<h3 class="font-h4 text-h4 text-on-surface">Status Presensi Hari Ini</h3>
<span class="font-label-mono text-label-mono bg-surface-container-high px-3 py-1 rounded-full text-on-surface-variant">Sistem Berjalan</span>
</div>
<div class="p-gutter flex-1 flex flex-col gap-stack-md relative z-10">
<!-- Status Rows -->
<div class="flex flex-col md:flex-row gap-4 bg-surface-container-lowest rounded-lg border border-outline-variant/50 p-4 items-center justify-between">
<div class="flex items-center gap-4">
<div class="w-12 h-12 rounded-full bg-tertiary-container/10 flex items-center justify-center text-tertiary-container">
<span class="material-symbols-outlined text-3xl">login</span>
</div>
<div>
<h4 class="font-body-lg text-body-lg font-semibold text-on-surface">Scan Masuk</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant">Batas waktu: 07:00</p>
</div>
</div>
<div class="flex items-center gap-3">
<span class="px-4 py-2 rounded-full bg-tertiary-container/20 text-tertiary-container font-label-mono text-label-mono font-bold flex items-center gap-2">
<span class="material-symbols-outlined text-sm">check_circle</span>
                                    Sudah - 06:45
                                </span>
</div>
</div>
<div class="flex flex-col md:flex-row gap-4 bg-surface-container-lowest rounded-lg border border-outline-variant/50 p-4 items-center justify-between">
<div class="flex items-center gap-4">
<div class="w-12 h-12 rounded-full bg-surface-variant/50 flex items-center justify-center text-on-surface-variant">
<span class="material-symbols-outlined text-3xl">logout</span>
</div>
<div>
<h4 class="font-body-lg text-body-lg font-semibold text-on-surface">Scan Keluar</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant">Mulai pukul: 15:00</p>
</div>
</div>
<div class="flex items-center gap-3">
<span class="px-4 py-2 rounded-full bg-surface-variant text-on-surface-variant font-label-mono text-label-mono flex items-center gap-2">
<span class="material-symbols-outlined text-sm">schedule</span>
                                    Belum
                                </span>
</div>
</div>
<!-- Prominent Action Button -->
<div class="mt-auto pt-4 flex justify-end">
<button class="bg-secondary-container hover:bg-secondary-fixed text-on-secondary-container px-8 py-4 rounded-lg font-body-lg text-body-lg font-bold shadow-sm transition-all hover:-translate-y-0.5 hover:shadow-md flex items-center gap-3">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">qr_code_scanner</span>
                                Scan QR Sekarang
                            </button>
</div>
</div>
</div>
<!-- Secondary Info Panel (Spans 4 cols) -->
<div class="lg:col-span-4 flex flex-col gap-gutter">
<!-- Izin Keluar Card -->
<div class="bg-surface rounded-xl shadow-sm border border-outline-variant/30 flex flex-col">
<div class="p-4 border-b border-outline-variant/50 flex items-center gap-2">
<span class="material-symbols-outlined text-primary">assignment_return</span>
<h3 class="font-body-lg text-body-lg font-semibold text-on-surface">Status Izin Keluar</h3>
</div>
<div class="p-4 flex-1 flex flex-col justify-center items-center text-center gap-3">
<!-- State: Menunggu Persetujuan -->
<div class="w-16 h-16 rounded-full bg-blue-50 flex items-center justify-center text-blue-600 mb-2">
<span class="material-symbols-outlined text-4xl">hourglass_empty</span>
</div>
<h4 class="font-body-md text-body-md font-semibold text-on-surface">Izin Sedang Diproses</h4>
<p class="font-body-sm text-body-sm text-on-surface-variant mb-3">Keperluan rapat dinas di Kemenag</p>
<span class="px-3 py-1.5 rounded-full bg-blue-100 text-blue-800 font-label-mono text-[12px] font-semibold border border-blue-200">
                                Menunggu Persetujuan
                            </span>
</div>
</div>
<!-- Quick Stats Mini Card -->
<div class="bg-primary-container text-on-primary-container rounded-xl shadow-sm p-4 relative overflow-hidden">
<div class="absolute -right-6 -top-6 opacity-10">
<span class="material-symbols-outlined text-9xl">event_available</span>
</div>
<h4 class="font-body-sm text-body-sm opacity-80 mb-1 relative z-10">Kehadiran Bulan Ini</h4>
<div class="flex items-end gap-2 relative z-10">
<span class="font-h2 text-h2 font-bold text-on-primary">95%</span>
<span class="font-body-sm text-body-sm opacity-80 mb-1">Tepat Waktu</span>
</div>
</div>
</div>
</div>
</main>
</div>
</body></html>

```

