# H-06 Ambil Foto Bukti Kehadiran

```html
<!-- H-06 Ambil Foto Bukti Kehadiran -->
<!DOCTYPE html>

<html class="light" lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Sistem Presensi Guru - Ambil Foto</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;family=JetBrains+Mono:wght@400;500;700&amp;family=Plus+Jakarta+Sans:wght@400;500;600;700;800&amp;display=swap" rel="stylesheet"/>
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
        .camera-viewfinder-overlay {
            background: radial-gradient(circle at center, transparent 35%, rgba(0, 0, 0, 0.7) 36%);
        }
        .shutter-btn {
            box-shadow: 0 0 0 4px white inset, 0 0 0 6px #F2A900 inset;
            transition: transform 0.1s ease;
        }
        .shutter-btn:active {
            transform: scale(0.95);
        }
    </style>
</head>
<body class="bg-surface text-on-surface font-body-md antialiased overflow-hidden">
<!-- Mobile Navigation Suppressed on Desktop -->
<div class="flex h-screen w-full">
<!-- SideNavBar - Guru -->
<nav class="hidden md:flex w-[220px] h-screen fixed left-0 top-0 bg-primary dark:bg-primary-container text-on-primary dark:text-on-primary-container flex-col py-stack-md shadow-sm z-50">
<!-- Header -->
<div class="px-gutter mb-stack-lg flex flex-col items-center text-center">
<div class="w-16 h-16 rounded-full bg-white mb-stack-sm flex items-center justify-center overflow-hidden">
<img alt="School Logo Small" class="object-cover w-full h-full" data-alt="A small, stylized school logo featuring an academic shield with a book and star, rendered in green and gold on a white background, representing MI AL-Faizein. Clean, modern, vector style." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBsIdh8p-IYPnQxHsbnBO-UeehVRyO7RAyjtm1FzS8Nd51Jcd7c0q1W9WvZOFAS5PD5BjaCyrL8EWS2we4P4vii_n3w-B3kVsoa9jRD2MpWuFA9ioX4jQCIl7DSPKmbswzbfQNABx468XtsVHeMnuo4V41WFoJf48oVyijxB0Am8EtgT4suQ6g1dLR6ZuuC6su4T4f2np46ELBjRegt0PXy22vhPgKU_aocc99dS0vgVO6_hvjqsI0c"/>
</div>
<h2 class="font-h4 text-h4 font-bold text-on-primary">Presensi Guru</h2>
<p class="font-body-sm text-body-sm text-on-primary opacity-80 mt-1">MI AL-Faizein</p>
</div>
<!-- Tabs -->
<div class="flex-1 flex flex-col gap-2 px-4">
<a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors font-body-md text-body-md group" href="#">
<span class="material-symbols-outlined">home</span>
<span>Beranda</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-lg bg-on-primary-fixed-variant text-on-primary-container border-l-4 border-secondary-fixed transition-transform duration-200 translate-x-1 font-body-md text-body-md shadow-sm" href="#">
<span class="material-symbols-outlined font-bold" style="font-variation-settings: 'FILL' 1;">qr_code_scanner</span>
<span class="font-semibold">Scan Presensi</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors font-body-md text-body-md group" href="#">
<span class="material-symbols-outlined">assignment_return</span>
<span>Izin Keluar</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors font-body-md text-body-md group" href="#">
<span class="material-symbols-outlined">history</span>
<span>Riwayat</span>
</a>
</div>
<!-- Footer Tabs -->
<div class="mt-auto flex flex-col gap-2 px-4 pt-4 border-t border-on-primary/20">
<a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors font-body-md text-body-md" href="#">
<span class="material-symbols-outlined">person</span>
<span>Profil Saya</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors font-body-md text-body-md" href="#">
<span class="material-symbols-outlined">logout</span>
<span>Keluar</span>
</a>
</div>
</nav>
<!-- Main Content Area -->
<main class="flex-1 flex flex-col w-full md:ml-[220px] bg-background min-h-screen">
<!-- TopAppBar -->
<header class="hidden md:flex justify-between items-center px-gutter py-stack-sm w-full bg-surface dark:bg-surface-dim border-b border-outline-variant z-40 sticky top-0">
<h1 class="font-h3 text-h3 font-bold text-on-surface tracking-tight">Dashboard Guru</h1>
<div class="flex items-center gap-4">
<button class="text-on-surface-variant hover:text-primary transition-colors p-2 rounded-full hover:bg-surface-variant/50">
<span class="material-symbols-outlined">notifications</span>
</button>
<div class="w-10 h-10 rounded-full bg-surface-variant overflow-hidden border border-outline-variant cursor-pointer hover:opacity-80 transition-opacity">
<img alt="Teacher Avatar" class="w-full h-full object-cover" data-alt="A professional portrait of a teacher in a neat uniform, smiling subtly, brightly lit against a neutral background. High quality photography." src="https://lh3.googleusercontent.com/aida-public/AB6AXuBah9BRcIEA7irPjnabY8Ry5TPelQ0s9ISAu73Fnyop1ctsPGlI8FN2vc7w-x2TWNkriS7keANOYN8yivxKQZFTDwDeeuJ6yVm_1K8aY982tRNQE2CaKSFqSrvA09cgdTW8D3FD3WsKuiVXJzC_bHVt4pG3rk0NAzIjNYbzHWQWAwEwkNTUKxTHVd9fiEdQpqaSSdDYFvj2BagdNUO5UqzGwlvuwFIXTTozzdyWM9-mbP17d3VL3YHs"/>
</div>
</div>
</header>
<!-- Canvas -->
<div class="flex-1 p-container-padding flex items-center justify-center relative overflow-hidden bg-surface-container-low">
<!-- Background Decoration (Subtle pattern) -->
<div class="absolute inset-0 opacity-5 pointer-events-none" style="background-image: radial-gradient(var(--tw-colors-primary) 1px, transparent 1px); background-size: 24px 24px;"></div>
<!-- Camera Card -->
<div class="bg-surface-container-lowest rounded-xl shadow-sm border border-outline-variant w-full max-w-2xl flex flex-col overflow-hidden relative z-10 animate-fade-in-up">
<!-- Card Header -->
<div class="p-stack-md text-center border-b border-outline-variant/50 bg-white">
<h2 class="font-h3 text-h3 text-on-surface mb-1">Ambil Foto Bukti Kehadiran</h2>
<p class="font-body-md text-body-md text-on-surface-variant">Pastikan wajah terlihat jelas di dalam area lingkaran</p>
</div>
<!-- Viewfinder Area -->
<div class="relative w-full aspect-video md:aspect-[4/3] bg-black overflow-hidden flex items-center justify-center">
<!-- Simulated Camera Feed -->
<img alt="Camera Feed" class="absolute inset-0 w-full h-full object-cover opacity-80" data-alt="A view from a smartphone front camera showing a female teacher in uniform standing in a well-lit school hallway. The framing is a medium close-up, ready for a portrait shot. Soft, natural daylight." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDCjszq1RItgj8ITCrg4UblDaR1h84t65fw8ZN2TBFIYiVsY8DU5qlUQ14ge34YuEaaakupq5xm2CF028s7TSQwcZuXIbtzq-1P1GHjyYtS932_qTiU7ytzKl2gPzig6SPkEC6GSZiCnbPF-ebhu9tcc7Bp_-jwhJKSi0t7Ywj4r5NXfGMJgiAm4NR365g0mKdqn_5hHU8_L471jf1RWrkVFRt6NpiE2a49AEUlppQMh8CU0-8SE75L"/>
<!-- Overlay & Guide -->
<div class="absolute inset-0 camera-viewfinder-overlay pointer-events-none flex items-center justify-center">
<!-- Gold Guide Ring -->
<div class="w-[60%] md:w-[50%] aspect-square rounded-full border-4 border-dashed border-[#F2A900] shadow-[0_0_15px_rgba(242,169,0,0.5)]"></div>
</div>
<!-- Instruction Text Overlay -->
<div class="absolute bottom-6 w-full text-center px-4">
<span class="inline-block bg-black/60 backdrop-blur-sm text-white px-4 py-2 rounded-full font-body-sm text-body-sm shadow-md border border-white/10">
                                Posisikan wajah Anda dalam kotak
                            </span>
</div>
</div>
<!-- Actions Area -->
<div class="p-stack-lg bg-surface-container-lowest flex items-center justify-center gap-8 border-t border-outline-variant/30">
<!-- Secondary Action (Retake) -->
<button aria-label="Ambil Ulang" class="w-14 h-14 rounded-full bg-surface-container-high hover:bg-surface-variant border border-outline-variant flex items-center justify-center text-on-surface-variant transition-colors group">
<span class="material-symbols-outlined group-hover:-rotate-90 transition-transform duration-300">refresh</span>
</button>
<!-- Primary Shutter -->
<button aria-label="Ambil Foto" class="w-20 h-20 rounded-full bg-[#F2A900] shutter-btn flex items-center justify-center shadow-md focus:outline-none focus:ring-4 focus:ring-secondary-container/50">
<!-- Inner visual for shutter button -->
</button>
<!-- Spacer to balance the layout if needed, or another action -->
<div class="w-14 h-14"></div>
</div>
</div>
</div>
</main>
</div>
</body></html>

```

