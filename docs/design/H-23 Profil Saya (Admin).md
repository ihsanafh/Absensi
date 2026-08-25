# H-23 Profil Saya (Admin)

```html
<!-- H-23 Profil Saya (Admin) -->
<!DOCTYPE html>

<html lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Profil Saya - Sistem Presensi Guru MI AL-Faizein</title>
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&amp;family=JetBrains+Mono:wght@400;500&amp;family=Plus+Jakarta+Sans:wght@600;700&amp;display=swap" rel="stylesheet"/>
<!-- Material Symbols -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<!-- Tailwind Config from Brand Anchors -->
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
        /* Custom scrollbar for a cleaner look */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: theme('colors.surface-container-low'); 
        }
        ::-webkit-scrollbar-thumb {
            background: theme('colors.outline-variant'); 
            border-radius: theme('borderRadius.full');
        }
        ::-webkit-scrollbar-thumb:hover {
            background: theme('colors.outline'); 
        }
        
        /* Smooth transition for active states */
        .nav-item {
            transition: all 0.2s ease-in-out;
        }
    </style>
</head>
<body class="bg-background text-on-background font-body-md text-body-md antialiased min-h-screen flex">
<!-- Admin SideNavBar -->
<aside class="w-[240px] h-screen fixed left-0 top-0 bg-primary dark:bg-primary-container shadow-sm flex flex-col h-full py-stack-md z-40">
<!-- Header -->
<div class="px-6 pb-6 mb-2 border-b border-white/10 flex items-center gap-3">
<div class="w-10 h-10 rounded-lg bg-surface flex items-center justify-center overflow-hidden shrink-0">
<img alt="School Logo" class="w-full h-full object-cover" data-alt="A clean, modern geometric logo graphic for a school named MI AL-Faizein. The logo uses a minimalist combination of deep forest green and vibrant gold colors on a pure white background. The style is flat, professional, and corporate." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAKr010Uc6L8HVgATlMgHlBwaXRw3nt61Ydd1I_knNLmzBLEl61kkTq-CfY2usz2uaiUlOx-UbPHv3qjbIKX7hf1u-SOsBFiF8A3-4nAFIExwkXFJ_Hf4mHH82NNjCc51OyKQ4M2XL17zgzWA90s7opAJqGqVmK9ne_IZsrxOzEhZL6iVNSb7UBT4VQ0pEQoVpk5wT0PqUDIRZ-iUzN1RNWcWqxg5dvg-k_U_WfoZXbD3xvHGMZs2ae"/>
</div>
<div>
<h1 class="font-h4 text-h4 font-bold text-on-primary leading-tight truncate">MI AL-Faizein</h1>
<p class="font-body-sm text-body-sm text-on-primary opacity-80 leading-tight">Sistem Presensi Guru</p>
</div>
</div>
<!-- Main Navigation -->
<nav class="flex-1 overflow-y-auto px-3 py-2 space-y-1">
<a class="nav-item flex items-center gap-3 px-3 py-2.5 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined text-[20px]">dashboard</span>
<span class="font-body-md text-body-md">Dashboard</span>
</a>
<a class="nav-item flex items-center gap-3 px-3 py-2.5 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined text-[20px]">qr_code</span>
<span class="font-body-md text-body-md">Tampilan QR</span>
</a>
<a class="nav-item flex items-center gap-3 px-3 py-2.5 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined text-[20px]">person_check</span>
<span class="font-body-md text-body-md">Data Presensi</span>
</a>
<a class="nav-item flex items-center gap-3 px-3 py-2.5 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined text-[20px]">pending_actions</span>
<span class="font-body-md text-body-md">Permohonan Izin</span>
</a>
<a class="nav-item flex items-center gap-3 px-3 py-2.5 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined text-[20px]">history_edu</span>
<span class="font-body-md text-body-md">Riwayat Izin</span>
</a>
<a class="nav-item flex items-center gap-3 px-3 py-2.5 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined text-[20px]">manage_accounts</span>
<span class="font-body-md text-body-md">Manajemen Akun</span>
</a>
<a class="nav-item flex items-center gap-3 px-3 py-2.5 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined text-[20px]">analytics</span>
<span class="font-body-md text-body-md">Laporan</span>
</a>
<a class="nav-item flex items-center gap-3 px-3 py-2.5 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined text-[20px]">history</span>
<span class="font-body-md text-body-md">Log Aktivitas</span>
</a>
<a class="nav-item flex items-center gap-3 px-3 py-2.5 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined text-[20px]">settings</span>
<span class="font-body-md text-body-md">Pengaturan</span>
</a>
</nav>
<!-- Footer Navigation -->
<div class="px-3 pt-4 border-t border-white/10 mt-auto space-y-1">
<!-- Active State on Profil Saya -->
<a class="nav-item flex items-center gap-3 px-3 py-2.5 rounded-lg bg-on-primary-fixed-variant text-on-primary-container border-l-4 border-white transition-colors" href="#">
<span class="material-symbols-outlined text-[20px]" style="font-variation-settings: 'FILL' 1;">account_circle</span>
<span class="font-body-md text-body-md font-medium">Profil Saya</span>
</a>
<a class="nav-item flex items-center gap-3 px-3 py-2.5 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined text-[20px]">logout</span>
<span class="font-body-md text-body-md">Keluar</span>
</a>
</div>
</aside>
<!-- Main Content Wrapper -->
<div class="flex-1 ml-[240px] flex flex-col min-h-screen">
<!-- Admin TopAppBar -->
<header class="bg-surface dark:bg-surface-dim border-b border-outline-variant flex justify-between items-center px-gutter py-stack-sm w-full z-30 sticky top-0">
<div class="flex items-center">
<span class="font-h3 text-h3 font-bold text-on-surface">Sistem Presensi</span>
</div>
<div class="flex items-center gap-4">
<button class="w-10 h-10 rounded-full flex items-center justify-center text-on-surface-variant hover:text-primary hover:bg-surface-container transition-colors relative">
<span class="material-symbols-outlined">notifications</span>
<span class="absolute top-2 right-2 w-2 h-2 bg-error rounded-full border border-surface"></span>
</button>
<div class="flex items-center gap-3 pl-4 border-l border-outline-variant cursor-pointer group">
<div class="text-right hidden md:block">
<p class="font-body-sm text-body-sm font-medium text-on-surface group-hover:text-primary transition-colors">Ahmad Fauzi</p>
<p class="font-body-sm text-body-sm text-on-surface-variant text-[12px]">Administrator</p>
</div>
<div class="w-9 h-9 rounded-full bg-surface-container overflow-hidden ring-2 ring-transparent group-hover:ring-primary transition-all">
<img alt="Admin Avatar" class="w-full h-full object-cover" data-alt="A professional headshot of an Indonesian male school administrator in his late 30s. He is wearing a neat, dark green batik shirt. The background is a soft, blurred bright office interior with a clean, light-mode aesthetic. Soft, natural lighting on his face conveying a friendly but professional mood." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCaSg_AGxma7GD6NF1rn20V_fcGwV9_U9hOiTQC-bkSGLPcFZvxTpZQujefmrn1Rr5IjwxZnF5QXIJCoJ9sMU4JEKkRZdyP_LBO3N_9grAXDGQsmahVlN7E-5eNvgSGynVHUIOcmL0nxIUcUQ1fH4CDACTEKnnsYjdVk1R7XGOBS94TIkds6fyazTTnZoZE2SaTHeBlLGtQEkFzC6HsGM0AAaA2n98hYFiKL_pbjjegMbxFGjBDJZiu"/>
</div>
</div>
</div>
</header>
<!-- Page Canvas -->
<main class="flex-1 p-container-padding bg-background relative overflow-hidden">
<!-- Subtle atmospheric background effect -->
<div class="absolute top-0 right-0 w-96 h-96 bg-primary-fixed/20 rounded-full blur-[100px] pointer-events-none -z-10"></div>
<!-- Page Header -->
<div class="mb-stack-lg">
<h2 class="font-h2 text-h2 text-on-surface mb-2">Pengaturan Profil</h2>
<p class="font-body-md text-body-md text-on-surface-variant">Kelola informasi pribadi dan keamanan akun Anda.</p>
</div>
<!-- Profile Settings Card -->
<div class="max-w-3xl mx-auto bg-surface-container-lowest rounded-xl shadow-sm border border-surface-container-highest overflow-hidden">
<!-- Profile Header / Photo Upload -->
<div class="p-8 border-b border-outline-variant flex flex-col items-center bg-surface-bright relative">
<div class="absolute top-0 left-0 w-full h-32 bg-gradient-to-b from-primary-container/10 to-transparent"></div>
<div class="relative w-28 h-28 rounded-full bg-surface-container shadow-sm mb-4 border-4 border-surface-container-lowest z-10 group cursor-pointer transition-transform hover:scale-105 duration-200">
<img alt="Profile Photo" class="w-full h-full rounded-full object-cover" data-alt="A professional headshot of an Indonesian male school administrator in his late 30s. He is wearing a neat, dark green batik shirt. The background is a soft, blurred bright office interior with a clean, light-mode aesthetic. Soft, natural lighting on his face conveying a friendly but professional mood." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAhQ5JZkV9PdAwvVvmtexgHtDr1eaQbzUnuujnxtz8tgo2hL1J9cuaBq6dbBqXNtXLIoC7u_rzYTqlmtwl1IXRhL0dmAQbrPmH-pYvRoQfSfwwFw86LGsNL9packpIPbX8Vi-cb3BQabl-Tjixf7nz0TKwR9hlu-rnXVCKV2aNDj7UBSgzG4fZtUi9Wi7QqYfijROnIFbh8yCD8V_I1Dx_CMwnQE_HsC7Zr0ZLTH6Ukn8GVaSc1D_H-"/>
<!-- Upload Overlay -->
<div class="absolute inset-0 bg-on-surface/60 rounded-full flex flex-col items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity duration-200">
<span class="material-symbols-outlined text-white mb-1">photo_camera</span>
<span class="text-[10px] font-medium text-white uppercase tracking-wider">Ubah Foto</span>
</div>
<!-- Small edit badge (visible even without hover for clarity) -->
<div class="absolute bottom-0 right-0 w-8 h-8 bg-primary rounded-full flex items-center justify-center border-2 border-surface-container-lowest shadow-sm group-hover:bg-tertiary transition-colors">
<span class="material-symbols-outlined text-on-primary text-[16px]">edit</span>
</div>
</div>
<h3 class="font-h3 text-h3 font-bold text-on-surface z-10">Ahmad Fauzi</h3>
<p class="font-body-sm text-body-sm text-on-surface-variant font-medium flex items-center gap-1 z-10 mt-1">
<span class="material-symbols-outlined text-[16px]">verified_user</span> Administrator Sistem
                    </p>
</div>
<!-- Main Form Area -->
<div class="p-8 space-y-stack-lg bg-surface-container-lowest">
<!-- Informasi Pribadi Section -->
<section>
<h4 class="font-h4 text-h4 font-bold text-on-surface mb-6 flex items-center gap-2">
<span class="material-symbols-outlined text-primary">person</span>
                            Informasi Pribadi
                        </h4>
<div class="grid grid-cols-1 md:grid-cols-2 gap-6">
<div class="space-y-2 md:col-span-2">
<label class="block font-body-sm text-body-sm font-medium text-on-surface-variant" for="nama">Nama Lengkap</label>
<input class="w-full rounded-lg border border-outline-variant px-4 py-3 font-body-md text-body-md text-on-surface focus:border-primary focus:ring-1 focus:ring-primary focus:outline-none transition-colors bg-surface-bright" id="nama" type="text" value="Ahmad Fauzi"/>
</div>
<div class="space-y-2">
<label class="block font-body-sm text-body-sm font-medium text-on-surface-variant" for="email">Alamat Email</label>
<div class="relative">
<div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
<span class="material-symbols-outlined text-on-surface-variant text-[20px]">mail</span>
</div>
<input class="w-full rounded-lg border border-outline-variant pl-10 pr-4 py-3 font-body-md text-body-md text-on-surface focus:border-primary focus:ring-1 focus:ring-primary focus:outline-none transition-colors bg-surface-bright" id="email" type="email" value="ahmad.fauzi@alfaizein.sch.id"/>
</div>
</div>
<div class="space-y-2">
<label class="block font-body-sm text-body-sm font-medium text-on-surface-variant" for="telepon">Nomor Telepon</label>
<div class="relative">
<div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
<span class="material-symbols-outlined text-on-surface-variant text-[20px]">call</span>
</div>
<input class="w-full rounded-lg border border-outline-variant pl-10 pr-4 py-3 font-body-md text-body-md text-on-surface focus:border-primary focus:ring-1 focus:ring-primary focus:outline-none transition-colors bg-surface-bright" id="telepon" type="tel" value="0812-3456-7890"/>
</div>
</div>
</div>
</section>
<!-- Divider -->
<div class="h-px bg-outline-variant/40 w-full rounded-full"></div>
<!-- Keamanan / Ubah Kata Sandi Section -->
<section>
<h4 class="font-h4 text-h4 font-bold text-on-surface mb-6 flex items-center gap-2">
<span class="material-symbols-outlined text-primary">lock</span>
                            Ubah Kata Sandi
                        </h4>
<p class="font-body-sm text-body-sm text-on-surface-variant mb-6">Biarkan kosong jika Anda tidak ingin mengubah kata sandi saat ini.</p>
<div class="space-y-5 max-w-lg">
<div class="space-y-2">
<label class="block font-body-sm text-body-sm font-medium text-on-surface-variant" for="password_lama">Kata Sandi Saat Ini</label>
<div class="relative">
<input class="w-full rounded-lg border border-outline-variant px-4 py-3 font-body-md text-body-md text-on-surface focus:border-primary focus:ring-1 focus:ring-primary focus:outline-none transition-colors bg-surface-bright" id="password_lama" placeholder="Masukkan kata sandi saat ini" type="password"/>
<button class="absolute inset-y-0 right-0 pr-3 flex items-center text-on-surface-variant hover:text-primary transition-colors" type="button">
<span class="material-symbols-outlined text-[20px]">visibility_off</span>
</button>
</div>
</div>
<div class="space-y-2">
<label class="block font-body-sm text-body-sm font-medium text-on-surface-variant" for="password_baru">Kata Sandi Baru</label>
<div class="relative">
<input class="w-full rounded-lg border border-outline-variant px-4 py-3 font-body-md text-body-md text-on-surface focus:border-primary focus:ring-1 focus:ring-primary focus:outline-none transition-colors bg-surface-bright" id="password_baru" placeholder="Minimal 8 karakter" type="password"/>
</div>
</div>
<div class="space-y-2">
<label class="block font-body-sm text-body-sm font-medium text-on-surface-variant" for="konfirmasi_password">Konfirmasi Kata Sandi Baru</label>
<div class="relative">
<input class="w-full rounded-lg border border-outline-variant px-4 py-3 font-body-md text-body-md text-on-surface focus:border-primary focus:ring-1 focus:ring-primary focus:outline-none transition-colors bg-surface-bright" id="konfirmasi_password" placeholder="Ulangi kata sandi baru" type="password"/>
</div>
</div>
</div>
</section>
</div>
<!-- Footer Actions -->
<div class="p-6 bg-surface-container-low border-t border-outline-variant flex justify-end items-center gap-4">
<button class="px-6 py-2.5 rounded-lg font-body-md text-body-md font-medium text-on-surface hover:bg-surface-container-highest transition-colors" type="button">
                        Batal
                    </button>
<button class="px-6 py-2.5 rounded-lg bg-primary text-on-primary font-body-md text-body-md font-medium hover:bg-tertiary shadow-sm hover:shadow transition-all flex items-center gap-2" type="button">
<span class="material-symbols-outlined text-[20px]">save</span>
                        Simpan Perubahan
                    </button>
</div>
</div>
<div class="h-8"></div> <!-- Bottom padding -->
</main>
</div>
</body></html>

```

