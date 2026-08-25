# H-18 Peninjauan Permohonan Izin

```html
<!-- H-18 Peninjauan Permohonan Izin -->
<!DOCTYPE html>

<html lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Peninjauan Permohonan Izin - MI AL-Faizein</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=JetBrains+Mono:wght@400;500&amp;family=Plus+Jakarta+Sans:wght@500;600;700;800&amp;display=swap" rel="stylesheet"/>
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
        .material-symbols-outlined.fill {
            font-variation-settings: 'FILL' 1, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .qr-ring {
            stroke-dasharray: 283;
            stroke-dashoffset: 283;
            transition: stroke-dashoffset 1s linear;
        }
    </style>
</head>
<body class="bg-surface text-on-surface font-body-md min-h-screen flex">
<!-- Admin SideNavBar -->
<nav class="hidden md:flex w-[240px] h-screen fixed left-0 top-0 bg-primary flex-col py-stack-md z-40 shadow-sm">
<div class="px-gutter mb-stack-lg flex items-center gap-3">
<div class="w-10 h-10 rounded-full bg-surface/20 flex items-center justify-center shrink-0">
<span class="material-symbols-outlined text-on-primary fill">school</span>
</div>
<div>
<h1 class="font-h4 text-h4 font-bold text-on-primary leading-tight">MI AL-Faizein</h1>
<p class="font-body-sm text-body-sm text-on-primary/80">Sistem Presensi Guru</p>
</div>
</div>
<div class="flex-1 overflow-y-auto">
<ul class="flex flex-col gap-1 px-3">
<li>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined">dashboard</span>
<span class="font-body-md text-body-md">Dashboard</span>
</a>
</li>
<li>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined">qr_code</span>
<span class="font-body-md text-body-md">Tampilan QR</span>
</a>
</li>
<li>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined">person_check</span>
<span class="font-body-md text-body-md">Data Presensi</span>
</a>
</li>
<!-- ACTIVE TAB: Permohonan Izin -->
<li>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg bg-on-primary-fixed-variant text-on-primary-container border-l-4 border-white transition-all duration-150 scale-95 origin-left" href="#">
<span class="material-symbols-outlined fill">pending_actions</span>
<span class="font-body-md text-body-md font-bold">Permohonan Izin</span>
</a>
</li>
<li>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined">history_edu</span>
<span class="font-body-md text-body-md">Riwayat Izin</span>
</a>
</li>
<li>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined">manage_accounts</span>
<span class="font-body-md text-body-md">Manajemen Akun</span>
</a>
</li>
<li>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined">analytics</span>
<span class="font-body-md text-body-md">Laporan</span>
</a>
</li>
<li>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined">history</span>
<span class="font-body-md text-body-md">Log Aktivitas</span>
</a>
</li>
<li>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined">settings</span>
<span class="font-body-md text-body-md">Pengaturan</span>
</a>
</li>
</ul>
</div>
<div class="mt-auto px-3 flex flex-col gap-1">
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined">account_circle</span>
<span class="font-body-md text-body-md">Profil Saya</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined">logout</span>
<span class="font-body-md text-body-md">Keluar</span>
</a>
</div>
</nav>
<!-- Main Content Area -->
<div class="flex-1 md:ml-[240px] flex flex-col min-h-screen">
<!-- TopAppBar -->
<header class="bg-surface border-b border-outline-variant flex justify-between items-center px-gutter py-stack-sm sticky top-0 z-30 w-full h-[72px]">
<div class="flex items-center gap-4">
<button class="md:hidden text-primary hover:text-primary transition-colors">
<span class="material-symbols-outlined text-[28px]">menu</span>
</button>
<h2 class="font-h3 text-h3 font-bold text-on-surface">Sistem Presensi</h2>
</div>
<div class="flex items-center gap-4">
<button class="relative w-10 h-10 rounded-full flex items-center justify-center text-on-surface-variant hover:text-primary hover:bg-surface-variant transition-colors group active:opacity-80">
<span class="material-symbols-outlined group-hover:fill">notifications</span>
<span class="absolute top-2 right-2 w-2 h-2 bg-error rounded-full"></span>
</button>
<div class="w-10 h-10 rounded-full bg-primary-container/10 border border-outline-variant overflow-hidden shrink-0">
<img alt="Admin Avatar" class="w-full h-full object-cover" data-alt="A close up portrait of an Indonesian school administrator in professional attire, lit by soft natural daylight. The background is slightly blurred indicating a modern office environment. Professional, trustworthy, modern corporate aesthetic. 50 words" src="https://lh3.googleusercontent.com/aida-public/AB6AXuDxIc7VDpz1r0nkuLLyqXkmG90bofu8InqOQreSZr_zjBzISoPYrMZKuTu8IP_rS4lVrIKM8ffihY0t4zsgwRPU3WhCVKEenHTNhFU8IPTO02BjHaiyhADAgv4hEP_hB_lA6iDEb966byAi6cXFFHqlNUCnhzgUTfTBtCJhrjbcUE0R7MwBjjLX6aysMb9EkooAZinrWNhUCn9SDW46vq0Kho4VqmSfN2nQEi-XfI5bsc_Ni9xTDNYy"/>
</div>
</div>
</header>
<!-- Canvas -->
<main class="flex-1 p-gutter bg-surface-container-low overflow-x-hidden">
<div class="max-w-5xl mx-auto space-y-stack-md">
<!-- Page Header & Tabs -->
<div class="flex flex-col sm:flex-row sm:items-end justify-between gap-4 mb-stack-md">
<div>
<h1 class="font-h2 text-h2 text-on-surface mb-2">Peninjauan Permohonan Izin</h1>
<p class="font-body-md text-body-md text-on-surface-variant">Kelola permintaan izin keluar guru selama jam kerja.</p>
</div>
<div class="flex bg-surface-variant p-1 rounded-lg w-fit">
<button class="px-4 py-2 rounded-md bg-surface shadow-sm text-primary font-bold font-body-sm text-body-sm transition-all">Menunggu (3)</button>
<button class="px-4 py-2 rounded-md text-on-surface-variant hover:text-primary font-body-sm text-body-sm transition-all">Riwayat</button>
</div>
</div>
<!-- Card List: Bento style layout for requests -->
<div class="grid grid-cols-1 lg:grid-cols-2 gap-gutter">
<!-- Request Card 1 (Pending) -->
<div class="bg-surface rounded-xl shadow-sm border border-outline-variant overflow-hidden flex flex-col hover:shadow-md transition-shadow">
<div class="p-4 border-b border-outline-variant flex justify-between items-start">
<div class="flex gap-3 items-center">
<div class="w-12 h-12 rounded-full overflow-hidden shrink-0 border border-outline-variant">
<img class="w-full h-full object-cover" data-alt="A professional headshot of a female Indonesian teacher wearing a hijab, looking friendly and trustworthy. Soft natural light, neutral modern office background. Modern corporate photography style, high quality, 50 words." src="https://lh3.googleusercontent.com/aida-public/AB6AXuD_XeCCXvnXsWzrXmL4wrY2Cmzk2M6R1QnfU5C8_BQwBMXKDKA7YttAjSV3d9oUUVGNP-HFCacnthpphd7aHcyXnOZnwDUaEjmSO6eukoEWPruhlFe18DFmg6REHHmINXEgOfZBgpNYriXzUh4_kvXE2xyyj_f9vbV1Nw2kv3H_FwySKLjh24OmYEdJnOdfBTyMWuZZ-DwMS132EA85FyrYzN96BPL_ie0lXfE3gt1fES_j31qxFkHw"/>
</div>
<div>
<h3 class="font-h4 text-h4 text-on-surface">Siti Nurhaliza, S.Pd</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">Guru Matematika Kelas 5</p>
</div>
</div>
<span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-secondary-container/20 text-on-secondary-container font-label-mono text-label-mono text-[12px]">
<span class="w-1.5 h-1.5 rounded-full bg-secondary"></span> Menunggu
                            </span>
</div>
<div class="p-4 flex-1 space-y-4">
<div class="grid grid-cols-2 gap-4">
<div class="bg-surface-container-low p-3 rounded-lg">
<span class="block font-label-mono text-label-mono text-on-surface-variant mb-1">JAM KELUAR</span>
<span class="font-body-md text-body-md text-on-surface font-semibold">10:30 WIB</span>
</div>
<div class="bg-surface-container-low p-3 rounded-lg">
<span class="block font-label-mono text-label-mono text-on-surface-variant mb-1">KEMBALI</span>
<span class="font-body-md text-body-md text-on-surface font-semibold">12:00 WIB</span>
</div>
</div>
<div>
<span class="block font-label-mono text-label-mono text-on-surface-variant mb-1">ALASAN IZIN</span>
<p class="font-body-md text-body-md text-on-surface bg-surface-container-low p-3 rounded-lg border-l-4 border-primary">
                                    Menghadiri rapat komite sekolah di dinas pendidikan setempat mewakili kepala sekolah.
                                </p>
</div>
</div>
<div class="p-4 bg-surface-container-lowest border-t border-outline-variant flex gap-3">
<button class="flex-1 py-2 px-4 rounded-lg border border-error text-error hover:bg-error-container hover:text-on-error-container font-body-md text-body-md font-semibold transition-colors flex items-center justify-center gap-2">
<span class="material-symbols-outlined text-[20px]">close</span> Tolak
                            </button>
<button class="flex-1 py-2 px-4 rounded-lg bg-primary text-on-primary hover:bg-primary-container hover:text-on-primary-container font-body-md text-body-md font-semibold transition-colors flex items-center justify-center gap-2" onclick="showModal()">
<span class="material-symbols-outlined text-[20px]">check</span> Setujui
                            </button>
</div>
</div>
<!-- Request Card 2 (Pending) -->
<div class="bg-surface rounded-xl shadow-sm border border-outline-variant overflow-hidden flex flex-col hover:shadow-md transition-shadow">
<div class="p-4 border-b border-outline-variant flex justify-between items-start">
<div class="flex gap-3 items-center">
<div class="w-12 h-12 rounded-full overflow-hidden shrink-0 border border-outline-variant">
<img class="w-full h-full object-cover" data-alt="A professional headshot of a male Indonesian teacher in his 40s wearing standard civil servant uniform. Friendly expression, clear natural lighting. Modern corporate photography style, trustworthy aesthetic, 50 words." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCBRfrOkr8v1XkeQO5v0m6AV-TsF1kky-sWlaedABPvfn45F-L81X1mxJqwRR8TaZ3m3zw5tUGkRSg-9I1CdWi3P64sMz8ZuD3hH-A_GpVPMRuT2MNC3BEdqG6xNjL2NOCwepNU6ZHRYwCvHw1qC_bxWCT1m_CIU-WTpzt9INycGg71hvEnHAuaHh-6CxzmP9w-lJ1f31xFPDgsWePDJjkYyaTdEWuEe2Ll9QtethHS42lTpAxOxntg"/>
</div>
<div>
<h3 class="font-h4 text-h4 text-on-surface">Budi Santoso, S.Ag</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">Guru PAI Kelas 6</p>
</div>
</div>
<span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-secondary-container/20 text-on-secondary-container font-label-mono text-label-mono text-[12px]">
<span class="w-1.5 h-1.5 rounded-full bg-secondary"></span> Menunggu
                            </span>
</div>
<div class="p-4 flex-1 space-y-4">
<div class="grid grid-cols-2 gap-4">
<div class="bg-surface-container-low p-3 rounded-lg">
<span class="block font-label-mono text-label-mono text-on-surface-variant mb-1">JAM KELUAR</span>
<span class="font-body-md text-body-md text-on-surface font-semibold">13:00 WIB</span>
</div>
<div class="bg-surface-container-low p-3 rounded-lg">
<span class="block font-label-mono text-label-mono text-on-surface-variant mb-1">KEMBALI</span>
<span class="font-body-md text-body-md text-on-surface font-semibold">Tidak Kembali</span>
</div>
</div>
<div>
<span class="block font-label-mono text-label-mono text-on-surface-variant mb-1">ALASAN IZIN</span>
<p class="font-body-md text-body-md text-on-surface bg-surface-container-low p-3 rounded-lg border-l-4 border-primary">
                                    Menjenguk keluarga yang sedang sakit di rumah sakit daerah. Izin setengah hari.
                                </p>
</div>
</div>
<div class="p-4 bg-surface-container-lowest border-t border-outline-variant flex gap-3">
<button class="flex-1 py-2 px-4 rounded-lg border border-error text-error hover:bg-error-container hover:text-on-error-container font-body-md text-body-md font-semibold transition-colors flex items-center justify-center gap-2">
<span class="material-symbols-outlined text-[20px]">close</span> Tolak
                            </button>
<button class="flex-1 py-2 px-4 rounded-lg bg-primary text-on-primary hover:bg-primary-container hover:text-on-primary-container font-body-md text-body-md font-semibold transition-colors flex items-center justify-center gap-2">
<span class="material-symbols-outlined text-[20px]">check</span> Setujui
                            </button>
</div>
</div>
<!-- Request Card 3 (Approved - Showing QR Button state) -->
<div class="bg-surface rounded-xl shadow-sm border border-primary/20 overflow-hidden flex flex-col hover:shadow-md transition-shadow relative">
<div class="absolute top-0 left-0 w-full h-1 bg-secondary-container"></div>
<div class="p-4 border-b border-outline-variant flex justify-between items-start">
<div class="flex gap-3 items-center">
<div class="w-12 h-12 rounded-full overflow-hidden shrink-0 border border-outline-variant bg-surface-variant flex items-center justify-center">
<span class="material-symbols-outlined text-on-surface-variant">person</span>
</div>
<div>
<h3 class="font-h4 text-h4 text-on-surface">Ahmad Fauzi, S.Kom</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant">Operator Sekolah</p>
</div>
</div>
<span class="inline-flex items-center gap-1 px-2.5 py-1 rounded-full bg-primary/10 text-primary font-label-mono text-label-mono text-[12px]">
<span class="w-1.5 h-1.5 rounded-full bg-primary"></span> Disetujui
                            </span>
</div>
<div class="p-4 flex-1 space-y-4">
<div class="grid grid-cols-2 gap-4">
<div class="bg-surface-container-low p-3 rounded-lg opacity-70">
<span class="block font-label-mono text-label-mono text-on-surface-variant mb-1">JAM KELUAR</span>
<span class="font-body-md text-body-md text-on-surface font-semibold">09:00 WIB</span>
</div>
<div class="bg-surface-container-low p-3 rounded-lg opacity-70">
<span class="block font-label-mono text-label-mono text-on-surface-variant mb-1">KEMBALI</span>
<span class="font-body-md text-body-md text-on-surface font-semibold">11:00 WIB</span>
</div>
</div>
<div>
<span class="block font-label-mono text-label-mono text-on-surface-variant mb-1">ALASAN IZIN</span>
<p class="font-body-md text-body-md text-on-surface bg-surface-container-low p-3 rounded-lg border-l-4 border-outline-variant opacity-70">
                                    Mengurus administrasi BOS di Bank.
                                </p>
</div>
</div>
<div class="p-4 bg-surface-container-lowest border-t border-outline-variant flex">
<button class="w-full py-3 px-4 rounded-lg bg-secondary-container text-on-secondary-container hover:bg-secondary hover:text-on-secondary font-body-md text-body-md font-bold transition-colors flex items-center justify-center gap-2 shadow-sm" onclick="showModal()">
<span class="material-symbols-outlined text-[20px]">qr_code_2</span> Tampilkan QR Izin
                            </button>
</div>
</div>
</div>
</div>
</main>
</div>
<!-- Modal: QR Code & Timer (Hidden by default) -->
<div class="fixed inset-0 z-50 flex items-center justify-center bg-on-background/50 backdrop-blur-sm opacity-0 pointer-events-none transition-opacity duration-300" id="qrModal">
<div class="bg-surface w-full max-w-sm rounded-xl shadow-lg border border-outline-variant overflow-hidden transform scale-95 transition-transform duration-300 flex flex-col" id="qrModalContent">
<div class="p-4 border-b border-outline-variant flex justify-between items-center bg-primary-container text-on-primary">
<h3 class="font-h4 text-h4 font-bold flex items-center gap-2">
<span class="material-symbols-outlined">qr_code_scanner</span>
                    Scan Izin Keluar
                </h3>
<button class="text-on-primary/80 hover:text-on-primary transition-colors" onclick="hideModal()">
<span class="material-symbols-outlined">close</span>
</button>
</div>
<div class="p-6 flex flex-col items-center gap-6 bg-surface-bright">
<div class="text-center">
<p class="font-body-md text-body-md text-on-surface-variant mb-1">Izin untuk:</p>
<p class="font-h3 text-h3 text-on-surface font-bold">Siti Nurhaliza, S.Pd</p>
</div>
<!-- QR Ring Timer Container -->
<div class="relative w-48 h-48 flex items-center justify-center">
<!-- Timer Ring SVG -->
<svg class="absolute inset-0 w-full h-full -rotate-90 pointer-events-none" viewbox="0 0 100 100">
<circle cx="50" cy="50" fill="none" r="45" stroke="#e5e2e1" stroke-width="4"></circle>
<circle class="qr-ring" cx="50" cy="50" fill="none" id="timerRing" r="45" stroke="#F2A900" stroke-linecap="round" stroke-width="4"></circle>
</svg>
<!-- QR Code Placeholder (Using generic grid visual) -->
<div class="w-32 h-32 bg-white p-2 rounded-lg border border-outline-variant flex items-center justify-center shadow-sm z-10">
<span class="material-symbols-outlined text-[80px] text-on-surface">qr_code_2</span>
</div>
</div>
<!-- Countdown Text -->
<div class="text-center">
<p class="font-body-sm text-body-sm text-on-surface-variant mb-1">QR Berlaku selama:</p>
<p class="font-label-mono text-label-mono text-h2 font-bold text-primary tracking-widest" id="countdownText">03:00</p>
</div>
</div>
<div class="p-4 border-t border-outline-variant bg-surface-container-low">
<button class="w-full py-2 px-4 rounded-lg border border-outline text-on-surface hover:bg-surface-variant font-body-md text-body-md font-semibold transition-colors" onclick="hideModal()">
                    Tutup
                </button>
</div>
</div>
</div>
<script>
        // Simple Modal Logic
        const modal = document.getElementById('qrModal');
        const modalContent = document.getElementById('qrModalContent');
        const timerRing = document.getElementById('timerRing');
        const countdownText = document.getElementById('countdownText');
        
        let timerInterval;
        const totalTime = 180; // 3 minutes in seconds
        let timeLeft = totalTime;

        function showModal() {
            modal.classList.remove('opacity-0', 'pointer-events-none');
            modalContent.classList.remove('scale-95');
            startTimer();
        }

        function hideModal() {
            modal.classList.add('opacity-0', 'pointer-events-none');
            modalContent.classList.add('scale-95');
            clearInterval(timerInterval);
            // Reset timer visuals
            timeLeft = totalTime;
            updateTimerDisplay();
        }

        function updateTimerDisplay() {
            const minutes = Math.floor(timeLeft / 60);
            const seconds = timeLeft % 60;
            countdownText.textContent = `${minutes.toString().padStart(2, '0')}:${seconds.toString().padStart(2, '0')}`;

            // Calculate ring dash offset
            const rawPercentage = (timeLeft / totalTime);
            // The stroke-dasharray is ~283 (2 * pi * 45)
            timerRing.style.strokeDashoffset = 283 - (283 * rawPercentage);

            // Color warning if time is low
            if(timeLeft < 60) {
                 timerRing.style.stroke = "#ba1a1a"; // error color
                 countdownText.classList.remove('text-primary');
                 countdownText.classList.add('text-error');
            } else {
                 timerRing.style.stroke = "#F2A900"; // gold color
                 countdownText.classList.add('text-primary');
                 countdownText.classList.remove('text-error');
            }
        }

        function startTimer() {
            clearInterval(timerInterval);
            timeLeft = totalTime;
            updateTimerDisplay();

            timerInterval = setInterval(() => {
                timeLeft--;
                updateTimerDisplay();

                if (timeLeft <= 0) {
                    clearInterval(timerInterval);
                    countdownText.textContent = "00:00";
                    // Handle expiration logic here if needed
                }
            }, 1000);
        }
    </script>

</body></html>

```

