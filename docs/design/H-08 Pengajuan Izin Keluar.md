# H-08 Pengajuan Izin Keluar

```html
<!-- H-08 Pengajuan Izin Keluar -->
<!DOCTYPE html>

<html class="light" lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Pengajuan Izin Keluar - Sistem Presensi Guru</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&amp;family=JetBrains+Mono:wght@500&amp;family=Plus+Jakarta+Sans:wght@600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<style>
        .material-symbols-outlined {
            font-family: 'Material Symbols Outlined';
            font-weight: normal;
            font-style: normal;
            font-size: 24px;
            line-height: 1;
            letter-spacing: normal;
            text-transform: none;
            display: inline-block;
            white-space: nowrap;
            word-wrap: normal;
            direction: ltr;
            -webkit-font-smoothing: antialiased;
        }
    </style>
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
</head>
<body class="bg-background text-on-background font-body-md text-body-md antialiased min-h-screen flex">
<!-- SideNavBar (Guru) -->
<nav class="w-[220px] h-screen fixed left-0 top-0 bg-primary dark:bg-primary-container text-on-primary dark:text-on-primary-container shadow-sm flex flex-col h-full py-stack-md z-50">
<!-- Header -->
<div class="px-gutter mb-stack-lg flex items-center gap-3">
<div class="w-10 h-10 rounded-full bg-white flex items-center justify-center overflow-hidden shrink-0">
<img alt="School Logo Small" class="w-full h-full object-cover" data-alt="A clean, minimalist logo of a modern school or educational institution featuring a subtle green and gold geometric crest. The background is pure white. High contrast, professional academic aesthetic, sharp focus." src="https://lh3.googleusercontent.com/aida-public/AB6AXuA6rykImO4U2Gd6Utrz0wx97mvnHf8oKrbiPX7nY0KwKEvUm5fqSGhnjMUESgnGDeCJLU2YjzDUVTz5MZcOh5vd7jl0OLV0oT5YS9SKehkeiLp5stoJvHWAvp-L8_MVhVtcJk_VBNkXnTVd3z8yaqsaDIC4TMmZDtx3uiS7FpzwiUmXX41HP0RAqnWeL0HWC2YRNQSTszR9BiJkQLykxyTopi0R7PIDkqFHtXQUXoMygZpJ4Mw9rglJ"/>
</div>
<div>
<h1 class="font-h4 text-h4 font-bold text-on-primary leading-tight">Presensi Guru</h1>
<p class="font-body-sm text-body-sm opacity-80 leading-tight">MI AL-Faizein</p>
</div>
</div>
<!-- Main Nav -->
<ul class="flex flex-col flex-grow w-full space-y-1 px-3">
<li>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined">home</span>
<span class="font-body-md text-body-md">Beranda</span>
</a>
</li>
<li>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined">qr_code_scanner</span>
<span class="font-body-md text-body-md">Scan Presensi</span>
</a>
</li>
<!-- ACTIVE ITEM -->
<li>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg bg-on-primary-fixed-variant text-on-primary-container border-l-4 border-secondary-fixed transition-all translate-x-1 duration-200" href="#">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">assignment_return</span>
<span class="font-body-md text-body-md font-medium">Izin Keluar</span>
</a>
</li>
<li>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined">history</span>
<span class="font-body-md text-body-md">Riwayat</span>
</a>
</li>
</ul>
<!-- Footer Nav -->
<ul class="flex flex-col mt-auto w-full px-3 pt-stack-md border-t border-primary-container/50 space-y-1">
<li>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined">person</span>
<span class="font-body-md text-body-md">Profil Saya</span>
</a>
</li>
<li>
<a class="flex items-center gap-3 px-3 py-2 rounded-lg text-error-container hover:bg-error hover:text-on-error transition-colors" href="#">
<span class="material-symbols-outlined">logout</span>
<span class="font-body-md text-body-md">Keluar</span>
</a>
</li>
</ul>
</nav>
<!-- Main Content Area -->
<div class="flex-grow ml-[220px] flex flex-col min-h-screen">
<!-- TopAppBar (Guru) -->
<header class="flex justify-between items-center px-gutter py-stack-sm w-full bg-surface dark:bg-surface-dim border-b border-outline-variant h-16 shrink-0 sticky top-0 z-40">
<h2 class="font-h3 text-h3 font-bold text-on-surface tracking-tight">Dashboard Guru</h2>
<div class="flex items-center gap-4">
<button aria-label="Notifications" class="p-2 text-on-surface-variant hover:text-primary transition-colors rounded-full hover:bg-surface-container-high">
<span class="material-symbols-outlined">notifications</span>
</button>
<div class="w-9 h-9 rounded-full overflow-hidden border-2 border-surface-container-high cursor-pointer hover:border-primary transition-colors">
<img alt="Teacher Avatar" class="w-full h-full object-cover" data-alt="A professional headshot of an Indonesian teacher, medium close up, warm studio lighting, modern clean corporate style, light neutral background, high resolution." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBOL0JVjPims0p6zk945xHHtbz29asNOUjJGC5BmmTEYzc0hBuN7o0235mXT6RtDo5ZaUYfvbhUvJhMALpRjEkDJqtoKVI42CINU59YzVGtwz_WjWyNHCo1aecQ5KrDibM7A_AGgEH13XgUI6NcgQv_-Y5OlHTowC3pEtmUpD8Xah8T3H79rqNRIRrIPRnEoS-f2_Jd7GWwh1BPlMK84f2PZqAbkZaMPbKkFJZe3dqKLcXnx5VCKmlk"/>
</div>
</div>
</header>
<!-- Page Content -->
<main class="flex-grow p-container-padding">
<!-- Page Title -->
<div class="mb-stack-lg max-w-[560px] mx-auto">
<h2 class="font-h2 text-h2 font-bold text-on-background">Pengajuan Izin Keluar</h2>
<p class="font-body-md text-body-md text-on-surface-variant mt-1">Isi formulir di bawah ini untuk mengajukan izin meninggalkan lingkungan sekolah pada jam kerja.</p>
</div>
<!-- Form Card -->
<div class="bg-surface-container-lowest shadow-sm rounded-xl w-full max-w-[560px] mx-auto border border-surface-container-high overflow-hidden">
<form action="#" class="p-stack-lg flex flex-col gap-stack-md" method="POST">
<!-- Dropdown: Alasan Keluar -->
<div class="flex flex-col gap-2">
<label class="font-body-md text-body-md font-medium text-on-surface" for="alasan">Alasan Keluar</label>
<div class="relative">
<select class="w-full appearance-none bg-surface border border-outline-variant rounded-lg px-4 py-3 font-body-md text-body-md text-on-surface focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-shadow cursor-pointer" id="alasan" name="alasan">
<option disabled="" selected="" value="">Pilih alasan...</option>
<option value="tugas_luar">Tugas Luar Dinas</option>
<option value="kepentingan_keluarga">Kepentingan Keluarga Mendesak</option>
<option value="berobat">Keperluan Medis / Berobat</option>
<option value="lainnya">Lainnya</option>
</select>
<div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-on-surface-variant">
<span class="material-symbols-outlined">expand_more</span>
</div>
</div>
</div>
<!-- Textarea: Keterangan Tambahan -->
<div class="flex flex-col gap-2">
<label class="font-body-md text-body-md font-medium text-on-surface" for="keterangan">Keterangan Tambahan</label>
<textarea class="w-full bg-surface border border-outline-variant rounded-lg px-4 py-3 font-body-md text-body-md text-on-surface placeholder:text-on-surface-variant/50 focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-shadow resize-y" id="keterangan" name="keterangan" placeholder="Jelaskan secara singkat keperluan Anda..." rows="4"></textarea>
</div>
<!-- Time-picker: Estimasi Waktu Kembali -->
<div class="flex flex-col gap-2">
<label class="font-body-md text-body-md font-medium text-on-surface" for="waktu_kembali">Estimasi Waktu Kembali</label>
<div class="relative">
<input class="w-full bg-surface border border-outline-variant rounded-lg px-4 py-3 font-body-md text-body-md text-on-surface focus:outline-none focus:ring-2 focus:ring-primary focus:border-transparent transition-shadow cursor-pointer [color-scheme:light]" id="waktu_kembali" name="waktu_kembali" type="time"/>
<div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-4 text-on-surface-variant">
<span class="material-symbols-outlined">schedule</span>
</div>
</div>
<p class="font-body-sm text-body-sm text-on-surface-variant mt-1 text-sm">Pastikan untuk kembali tepat waktu atau konfirmasi ulang jika terlambat.</p>
</div>
<!-- Action Button -->
<div class="pt-stack-sm mt-2 border-t border-surface-container-high flex justify-end">
<button class="w-full md:w-auto bg-primary text-on-primary font-body-md text-body-md font-semibold py-3 px-8 rounded-lg hover:bg-primary-container focus:ring-4 focus:ring-primary/20 transition-all active:scale-95 flex items-center justify-center gap-2" type="submit">
<span>Ajukan Izin</span>
<span class="material-symbols-outlined text-sm">send</span>
</button>
</div>
</form>
</div>
</main>
</div>
</body></html>

```

