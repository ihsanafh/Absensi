# H-20 Pengaturan Sistem

```html
<!-- H-20 Pengaturan Sistem -->
<!DOCTYPE html>

<html lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Pengaturan Sistem - MI AL-Faizein</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@600;700&amp;family=Inter:wght@400;500&amp;family=JetBrains+Mono:wght@500&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 1;
        }
    </style>
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
</head>
<body class="bg-surface text-on-surface font-body-md flex min-h-screen">
<!-- Admin SideNavBar -->
<nav class="w-[240px] h-screen fixed left-0 top-0 bg-primary shadow-sm flex flex-col py-stack-md z-50">
<div class="px-gutter mb-stack-lg flex items-center gap-3">
<div class="w-10 h-10 bg-surface-container-lowest rounded-full flex items-center justify-center shrink-0">
<span class="material-symbols-outlined text-primary text-[24px]">school</span>
</div>
<div>
<h1 class="font-h4 text-h4 font-bold text-on-primary">MI AL-Faizein</h1>
<p class="font-body-sm text-body-sm text-on-primary opacity-80">Sistem Presensi Guru</p>
</div>
</div>
<div class="flex-1 flex flex-col gap-1 px-3 overflow-y-auto">
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined">dashboard</span>
<span class="font-body-md text-body-md">Dashboard</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined">qr_code</span>
<span class="font-body-md text-body-md">Tampilan QR</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined">person_check</span>
<span class="font-body-md text-body-md">Data Presensi</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined">pending_actions</span>
<span class="font-body-md text-body-md">Permohonan Izin</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined">history_edu</span>
<span class="font-body-md text-body-md">Riwayat Izin</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined">manage_accounts</span>
<span class="font-body-md text-body-md">Manajemen Akun</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined">analytics</span>
<span class="font-body-md text-body-md">Laporan</span>
</a>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined">history</span>
<span class="font-body-md text-body-md">Log Aktivitas</span>
</a>
<!-- ACTIVE TAB -->
<a class="flex items-center gap-3 px-3 py-2 rounded-lg bg-on-primary-fixed-variant text-on-primary-container border-l-4 border-white transition-colors scale-95 duration-150" href="#">
<span class="material-symbols-outlined">settings</span>
<span class="font-body-md text-body-md">Pengaturan</span>
</a>
</div>
<div class="mt-auto px-3 pt-4 border-t border-on-primary/20 flex flex-col gap-1">
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
<!-- Main Content Wrapper -->
<div class="flex-1 ml-[240px] flex flex-col min-h-screen">
<!-- Admin TopAppBar -->
<header class="flex justify-between items-center px-gutter py-stack-sm bg-surface border-b border-outline-variant sticky top-0 z-40">
<div>
<h2 class="font-h3 text-h3 font-bold text-on-surface">Sistem Presensi</h2>
</div>
<div class="flex items-center gap-4">
<button class="text-on-surface-variant hover:text-primary transition-colors p-2 rounded-full hover:bg-surface-container">
<span class="material-symbols-outlined">notifications</span>
</button>
<div class="w-10 h-10 rounded-full bg-surface-container-high border border-outline-variant overflow-hidden shrink-0">
<img class="w-full h-full object-cover" data-alt="A small circular avatar placeholder image showing a solid dark green background with a white capital letter A in the center, representing an admin user profile picture." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDQXAWDUEB6VewSTjNDTNlPVrC3mFQuW-AfNQuFVT4d7Uz7BpjMIICZMAikjcFqPwgzpLdG35YJIWt55MR-wxDCQTA0pUPQygtiQjhvHUY45MXT0BuO2OTILrxtxiGKqEv6zdTM4xZlNK-3A5GGov3lG9-2J698_wMF0iXmGTk4XSL70jhdsMXHNNPx3HR2hOqwSbMkindfxuGx43DBqH9vEvBoL5t_tBZVljMaxjCMqTP45v5hag9J"/>
</div>
</div>
</header>
<!-- Canvas -->
<main class="flex-1 p-container-padding bg-background">
<div class="mb-stack-lg">
<h1 class="font-h2 text-h2 text-on-surface mb-2">Pengaturan Sistem</h1>
<p class="font-body-md text-body-md text-on-surface-variant">Konfigurasi parameter utama untuk sistem presensi harian.</p>
</div>
<div class="grid grid-cols-1 md:grid-cols-2 gap-stack-lg items-start">
<!-- Card 1: Jam Operasional -->
<div class="bg-surface-container-lowest rounded-xl shadow-sm border border-outline-variant overflow-hidden">
<div class="p-stack-md border-b border-outline-variant">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-primary text-[28px]">schedule</span>
<h3 class="font-h4 text-h4 text-on-surface">Jam Operasional</h3>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-1 ml-10">Atur waktu masuk dan batas toleransi keterlambatan.</p>
</div>
<div class="p-stack-md flex flex-col gap-stack-md">
<div>
<label class="block font-body-sm text-body-sm text-on-surface-variant font-medium mb-1" for="jamMasuk">Jam Masuk</label>
<div class="relative">
<input class="w-full border border-outline-variant rounded-lg p-2 pl-3 font-label-mono text-label-mono text-on-surface bg-surface focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-shadow" id="jamMasuk" type="time" value="07:00"/>
</div>
<p class="text-xs text-on-surface-variant mt-1">Waktu standar guru diwajibkan hadir.</p>
</div>
<div>
<label class="block font-body-sm text-body-sm text-on-surface-variant font-medium mb-1" for="toleransi">Toleransi Keterlambatan (Menit)</label>
<div class="relative">
<input class="w-full border border-outline-variant rounded-lg p-2 pl-3 font-label-mono text-label-mono text-on-surface bg-surface focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-shadow" id="toleransi" max="60" min="0" type="number" value="15"/>
</div>
<p class="text-xs text-on-surface-variant mt-1">Batas waktu sebelum status berubah menjadi 'Terlambat'.</p>
</div>
</div>
<div class="p-stack-md bg-surface-container-low border-t border-outline-variant flex justify-end">
<button class="bg-primary text-on-primary font-body-md text-body-md font-medium py-2 px-6 rounded-lg hover:bg-primary-container transition-colors shadow-sm">
                            Simpan Pengaturan Waktu
                        </button>
</div>
</div>
<!-- Card 2: QR Code Settings -->
<div class="bg-surface-container-lowest rounded-xl shadow-sm border border-outline-variant overflow-hidden">
<div class="p-stack-md border-b border-outline-variant">
<div class="flex items-center gap-3">
<span class="material-symbols-outlined text-secondary-container text-[28px]">qr_code_2</span>
<h3 class="font-h4 text-h4 text-on-surface">Keamanan QR Code</h3>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-1 ml-10">Konfigurasi interval pembaruan kode QR untuk mencegah kecurangan.</p>
</div>
<div class="p-stack-md flex flex-col gap-stack-md">
<div>
<label class="block font-body-sm text-body-sm text-on-surface-variant font-medium mb-2">Interval Rotasi QR</label>
<div class="grid grid-cols-3 gap-3">
<label class="relative cursor-pointer">
<input class="peer sr-only" name="qr_interval" type="radio" value="15"/>
<div class="w-full border border-outline-variant rounded-lg p-3 text-center peer-checked:bg-primary/10 peer-checked:border-primary peer-checked:text-primary transition-all hover:bg-surface-container">
<span class="font-h4 text-h4 block mb-1">15</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">Detik</span>
</div>
<span class="absolute top-2 right-2 material-symbols-outlined text-primary text-[18px] opacity-0 peer-checked:opacity-100 transition-opacity">check_circle</span>
</label>
<label class="relative cursor-pointer">
<input checked="" class="peer sr-only" name="qr_interval" type="radio" value="30"/>
<div class="w-full border border-outline-variant rounded-lg p-3 text-center peer-checked:bg-primary/10 peer-checked:border-primary peer-checked:text-primary transition-all hover:bg-surface-container">
<span class="font-h4 text-h4 block mb-1">30</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">Detik</span>
</div>
<span class="absolute top-2 right-2 material-symbols-outlined text-primary text-[18px] opacity-0 peer-checked:opacity-100 transition-opacity">check_circle</span>
</label>
<label class="relative cursor-pointer">
<input class="peer sr-only" name="qr_interval" type="radio" value="60"/>
<div class="w-full border border-outline-variant rounded-lg p-3 text-center peer-checked:bg-primary/10 peer-checked:border-primary peer-checked:text-primary transition-all hover:bg-surface-container">
<span class="font-h4 text-h4 block mb-1">60</span>
<span class="font-body-sm text-body-sm text-on-surface-variant">Detik</span>
</div>
<span class="absolute top-2 right-2 material-symbols-outlined text-primary text-[18px] opacity-0 peer-checked:opacity-100 transition-opacity">check_circle</span>
</label>
</div>
<p class="text-xs text-on-surface-variant mt-3 bg-surface-container p-2 rounded flex items-start gap-2">
<span class="material-symbols-outlined text-[16px] text-secondary">info</span>
                                Interval lebih singkat meningkatkan keamanan namun membutuhkan koneksi internet stabil pada perangkat guru.
                            </p>
</div>
</div>
<div class="p-stack-md bg-surface-container-low border-t border-outline-variant flex justify-end mt-auto">
<button class="bg-primary text-on-primary font-body-md text-body-md font-medium py-2 px-6 rounded-lg hover:bg-primary-container transition-colors shadow-sm">
                            Simpan Pengaturan QR
                        </button>
</div>
</div>
</div>
</main>
</div>
</body></html>

```

