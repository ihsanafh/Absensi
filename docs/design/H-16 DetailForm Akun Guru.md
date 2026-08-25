# H-16 Detail/Form Akun Guru

```html
<!-- H-16 Detail/Form Akun Guru -->
<!DOCTYPE html>

<html class="light" lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Sistem Presensi - Form Akun Guru</title>
<!-- Material Symbols -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<!-- Tailwind Configuration -->
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
                        "label-mono": ["JetBrains Mono", "monospace"],
                        "h2": ["Plus Jakarta Sans", "sans-serif"],
                        "body-sm": ["Inter", "sans-serif"],
                        "body-md": ["Inter", "sans-serif"],
                        "h3": ["Plus Jakarta Sans", "sans-serif"],
                        "h1-mobile": ["Plus Jakarta Sans", "sans-serif"],
                        "body-lg": ["Inter", "sans-serif"],
                        "h1": ["Plus Jakarta Sans", "sans-serif"],
                        "h4": ["Plus Jakarta Sans", "sans-serif"]
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
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&family=JetBrains+Mono:wght@500&family=Plus+Jakarta+Sans:wght@600;700&display=swap');
        
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
        .material-symbols-outlined.fill {
            font-variation-settings: 'FILL' 1;
        }
        
        /* Custom Scrollbar for modal if needed */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: transparent;
        }
        ::-webkit-scrollbar-thumb {
            background: #bec9be;
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #6f7a6f;
        }
    </style>
</head>
<body class="bg-surface font-body-md text-on-surface antialiased overflow-hidden">
<!-- Admin SideNavBar (Background Context) -->
<nav aria-label="Sidebar Navigation" class="hidden md:flex flex-col h-full py-stack-md bg-primary text-on-primary w-[240px] h-screen fixed left-0 top-0 shadow-sm z-10">
<div class="px-gutter mb-stack-lg">
<h1 class="font-h4 text-h4 font-bold text-on-primary">MI AL-Faizein</h1>
<p class="font-body-sm text-body-sm opacity-80 mt-1">Sistem Presensi Guru</p>
</div>
<ul class="flex flex-col flex-grow font-body-md text-body-md">
<li>
<a class="flex items-center px-gutter py-3 text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined mr-3">dashboard</span>
                    Dashboard
                </a>
</li>
<li>
<a class="flex items-center px-gutter py-3 text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined mr-3">qr_code</span>
                    Tampilan QR
                </a>
</li>
<li>
<a class="flex items-center px-gutter py-3 text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined mr-3">person_check</span>
                    Data Presensi
                </a>
</li>
<li>
<a class="flex items-center px-gutter py-3 text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined mr-3">pending_actions</span>
                    Permohonan Izin
                </a>
</li>
<li>
<a class="flex items-center px-gutter py-3 text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined mr-3">history_edu</span>
                    Riwayat Izin
                </a>
</li>
<!-- Active State: Manajemen Akun -->
<li>
<a class="flex items-center px-gutter py-3 bg-on-primary-fixed-variant text-on-primary-container border-l-4 border-white transition-colors" href="#">
<span class="material-symbols-outlined mr-3">manage_accounts</span>
                    Manajemen Akun
                </a>
</li>
<li>
<a class="flex items-center px-gutter py-3 text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined mr-3">analytics</span>
                    Laporan
                </a>
</li>
<li>
<a class="flex items-center px-gutter py-3 text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined mr-3">history</span>
                    Log Aktivitas
                </a>
</li>
<li>
<a class="flex items-center px-gutter py-3 text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined mr-3">settings</span>
                    Pengaturan
                </a>
</li>
</ul>
<div class="mt-auto pt-stack-md">
<ul class="flex flex-col font-body-md text-body-md">
<li>
<a class="flex items-center px-gutter py-3 text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined mr-3">account_circle</span>
                        Profil Saya
                    </a>
</li>
<li>
<a class="flex items-center px-gutter py-3 text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined mr-3">logout</span>
                        Keluar
                    </a>
</li>
</ul>
</div>
</nav>
<!-- Admin TopAppBar (Background Context) -->
<header class="hidden md:flex justify-between items-center px-gutter py-stack-sm w-[calc(100%-240px)] ml-[240px] bg-surface border-b border-outline-variant fixed top-0 right-0 z-10">
<div>
<h2 class="font-h3 text-h3 font-bold text-on-surface">Sistem Presensi</h2>
</div>
<div class="flex items-center gap-4">
<button class="text-on-surface-variant hover:text-primary transition-colors p-2 rounded-full hover:bg-surface-container">
<span class="material-symbols-outlined">notifications</span>
</button>
<div class="w-10 h-10 rounded-full bg-surface-container-high border border-outline-variant overflow-hidden flex-shrink-0">
<img alt="Admin Avatar" class="w-full h-full object-cover" data-alt="A small circular avatar portrait of an Indonesian school administrator wearing a formal green uniform, warm lighting, professional setting." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCm0E1EYwwxAfT3isHOXr9TMrSz9FeJkNQDm0O9VcVwEbGmJ07OftRZ1vgSoLhFXF_lUYK-y-mVVeW0RQIIm-7LGS2T29--a3gRWt51rj7IFLGyDEpZQmf-yvrML2zP2Af6GQohLABluv9Fxyh0Q6q5CYp2BJuqdjrViDOE8MSypjUWVHq1PH2uessvcgOWS-BOzSnM4LxjrgDtKgFbaIcArvRr8criUyMgEZb7HaM7x1ml2ohLPxDv"/>
</div>
</div>
</header>
<!-- Dummy Main Content (Blurred/Dimmed by Modal) -->
<main class="ml-[240px] mt-[73px] p-container-padding opacity-20 filter blur-sm transition-all duration-300">
<div class="flex justify-between items-center mb-stack-lg">
<h2 class="font-h2 text-h2 text-on-surface">Manajemen Akun Guru</h2>
<button class="bg-primary text-on-primary px-6 py-2 rounded-lg font-body-md shadow-sm">Tambah Akun</button>
</div>
<!-- Dummy table outline -->
<div class="bg-surface-container-lowest rounded-xl shadow-sm border border-outline-variant h-[500px]"></div>
</main>
<!-- MODAL OVERLAY -->
<div class="fixed inset-0 z-50 flex items-center justify-center bg-on-background/40 backdrop-blur-sm p-4 sm:p-gutter">
<!-- Modal Container -->
<div class="bg-surface-container-lowest w-full max-w-4xl rounded-xl shadow-lg flex flex-col max-h-[972px] overflow-hidden relative">
<!-- Header -->
<div class="flex justify-between items-start p-stack-md border-b border-outline-variant/50">
<div>
<h2 class="font-h3 text-h3 text-on-surface mb-1">Detail Akun Guru</h2>
<p class="font-body-sm text-body-sm text-on-surface-variant flex items-center gap-1">
<span class="material-symbols-outlined text-[18px]">info</span>
                        Satu akun hanya untuk satu guru dan terikat pada NIP yang bersangkutan.
                    </p>
</div>
<button class="text-on-surface-variant hover:text-error transition-colors p-1 rounded-full hover:bg-error-container/20">
<span class="material-symbols-outlined">close</span>
</button>
</div>
<!-- Scrollable Form Body -->
<div class="overflow-y-auto p-stack-md flex-grow custom-scrollbar">
<form class="grid grid-cols-1 md:grid-cols-2 gap-x-stack-lg gap-y-6" id="guruForm">
<!-- LEFT COLUMN: Personal Info -->
<div class="flex flex-col gap-4">
<h3 class="font-h4 text-h4 text-primary border-b border-outline-variant pb-2 mb-2">Informasi Pribadi</h3>
<!-- Nama Lengkap -->
<div>
<label class="block font-body-sm font-medium text-on-surface mb-1" for="nama">Nama Lengkap beserta Gelar</label>
<input class="w-full rounded-lg border-outline-variant bg-surface focus:border-primary focus:ring focus:ring-primary/20 text-on-surface placeholder:text-on-surface-variant/50 transition-shadow" id="nama" name="nama" placeholder="Contoh: Ahmad Hidayat, S.Pd." type="text"/>
</div>
<!-- NIP -->
<div>
<label class="block font-body-sm font-medium text-on-surface mb-1" for="nip">NIP (Nomor Induk Pegawai)</label>
<input class="w-full rounded-lg border-outline-variant bg-surface focus:border-primary focus:ring focus:ring-primary/20 text-on-surface placeholder:text-on-surface-variant/50 transition-shadow font-label-mono" id="nip" name="nip" placeholder="Masukkan 18 digit NIP" type="text"/>
</div>
<!-- Email -->
<div>
<label class="block font-body-sm font-medium text-on-surface mb-1" for="email">Alamat Email Aktif</label>
<input class="w-full rounded-lg border-outline-variant bg-surface focus:border-primary focus:ring focus:ring-primary/20 text-on-surface placeholder:text-on-surface-variant/50 transition-shadow" id="email" name="email" placeholder="guru@alfaizein.sch.id" type="email"/>
</div>
<!-- Telepon -->
<div>
<label class="block font-body-sm font-medium text-on-surface mb-1" for="telepon">Nomor Telepon / WhatsApp</label>
<input class="w-full rounded-lg border-outline-variant bg-surface focus:border-primary focus:ring focus:ring-primary/20 text-on-surface placeholder:text-on-surface-variant/50 transition-shadow font-label-mono" id="telepon" name="telepon" placeholder="08..." type="tel"/>
</div>
</div>
<!-- RIGHT COLUMN: Account Settings -->
<div class="flex flex-col gap-4">
<h3 class="font-h4 text-h4 text-primary border-b border-outline-variant pb-2 mb-2">Pengaturan Akses</h3>
<!-- Username -->
<div>
<label class="block font-body-sm font-medium text-on-surface mb-1" for="username">Username Aplikasi</label>
<input class="w-full rounded-lg border-outline-variant bg-surface focus:border-primary focus:ring focus:ring-primary/20 text-on-surface placeholder:text-on-surface-variant/50 transition-shadow" id="username" name="username" placeholder="Gunakan format pendek" type="text"/>
</div>
<!-- Password -->
<div>
<label class="block font-body-sm font-medium text-on-surface mb-1" for="password">Password Sementara</label>
<div class="relative">
<input class="w-full rounded-lg border-outline-variant bg-surface focus:border-primary focus:ring focus:ring-primary/20 text-on-surface placeholder:text-on-surface-variant/50 pr-10 transition-shadow" id="password" name="password" placeholder="Minimal 8 karakter" type="password"/>
<button class="absolute inset-y-0 right-0 px-3 flex items-center text-on-surface-variant hover:text-primary" type="button">
<span class="material-symbols-outlined text-[20px]">visibility</span>
</button>
</div>
</div>
<!-- Upload Foto (Drag & Drop) -->
<div>
<label class="block font-body-sm font-medium text-on-surface mb-1">Pas Foto Resmi</label>
<div class="border-2 border-dashed border-outline-variant rounded-lg p-6 bg-surface flex flex-col items-center justify-center text-center hover:bg-surface-container hover:border-primary transition-colors cursor-pointer group">
<span class="material-symbols-outlined text-4xl text-outline group-hover:text-primary mb-2 transition-colors">cloud_upload</span>
<p class="font-body-sm text-on-surface">Tarik &amp; lepas foto di sini, atau <span class="text-primary font-medium">klik untuk memilih</span></p>
<p class="font-body-sm text-on-surface-variant text-[12px] mt-1">Maks 2MB, Format JPG/PNG</p>
</div>
</div>
<!-- Status Toggle -->
<div class="mt-2 flex items-center justify-between p-4 rounded-lg bg-surface-container-low border border-outline-variant/30">
<div>
<span class="block font-medium text-on-surface">Status Akun</span>
<span class="text-[12px] text-on-surface-variant">Akun dapat digunakan untuk login</span>
</div>
<label class="relative inline-flex items-center cursor-pointer">
<input checked="" class="sr-only peer" type="checkbox" value=""/>
<div class="w-11 h-6 bg-surface-variant rounded-full peer peer-focus:ring-2 peer-focus:ring-primary/30 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-0.5 after:left-[2px] after:bg-white after:border-outline-variant after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-primary"></div>
</label>
</div>
</div>
</form>
</div>
<!-- Footer / Actions -->
<div class="p-stack-md border-t border-outline-variant/50 bg-surface-container-lowest flex justify-end gap-3 rounded-b-xl">
<button class="px-6 py-2.5 rounded-lg font-body-md font-medium text-on-surface-variant bg-surface hover:bg-surface-container-high border border-outline-variant transition-colors focus:ring-2 focus:ring-outline/20" type="button">
                    Batal
                </button>
<button class="px-6 py-2.5 rounded-lg font-body-md font-medium text-on-primary bg-primary hover:bg-primary-container hover:shadow-md transition-all focus:ring-2 focus:ring-primary/40 flex items-center gap-2" type="button">
<span class="material-symbols-outlined text-[20px]">save</span>
                    Simpan Data
                </button>
</div>
</div>
</div>
</body></html>

```

