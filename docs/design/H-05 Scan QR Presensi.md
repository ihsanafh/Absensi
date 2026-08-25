# H-05 Scan QR Presensi

```html
<!-- H-05 Scan QR Presensi -->
<!DOCTYPE html>

<html lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Scan QR Presensi Masuk - Sistem Presensi Guru</title>
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&amp;family=JetBrains+Mono:wght@500&amp;family=Plus+Jakarta+Sans:wght@600;700&amp;display=swap" rel="stylesheet"/>
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
                      "label-mono": ["14px", {"lineHeight": "1", "fontWeight": "500"}],
                      "h2": ["32px", {"lineHeight": "1.2", "fontWeight": "600"}],
                      "body-sm": ["14px", {"lineHeight": "1.5", "fontWeight": "400"}],
                      "body-md": ["16px", {"lineHeight": "1.6", "fontWeight": "400"}],
                      "h3": ["24px", {"lineHeight": "1.3", "fontWeight": "600"}],
                      "h1-mobile": ["28px", {"lineHeight": "1.2", "fontWeight": "700"}],
                      "body-lg": ["18px", {"lineHeight": "1.6", "fontWeight": "400"}],
                      "h1": ["40px", {"lineHeight": "1.2", "fontWeight": "700"}],
                      "h4": ["20px", {"lineHeight": "1.4", "fontWeight": "600"}]
              }
            },
          }
        }
    </script>
<style>
        /* Custom animation for the scanning line */
        @keyframes scan-line {
            0% { transform: translateY(0); opacity: 0; }
            10% { opacity: 1; }
            90% { opacity: 1; }
            100% { transform: translateY(240px); opacity: 0; }
        }
        
        .animate-scan {
            animation: scan-line 2.5s cubic-bezier(0.4, 0, 0.2, 1) infinite;
        }
    </style>
</head>
<body class="bg-background text-on-surface font-body-md text-body-md antialiased min-h-screen flex">
<!-- Shared Component: SideNavBar (Guru) -->
<nav class="w-[220px] h-screen fixed left-0 top-0 bg-primary dark:bg-primary-container text-on-primary dark:text-on-primary-container font-body-md text-body-md shadow-sm flex flex-col h-full py-stack-md z-40">
<!-- Header -->
<div class="px-gutter mb-stack-lg flex items-center gap-3">
<div class="w-10 h-10 rounded-full bg-surface-container-lowest overflow-hidden flex-shrink-0 flex items-center justify-center">
<img class="w-8 h-8 object-contain" data-alt="A minimalist, professional academic logo for an Islamic school (Madrasah Ibtidaiyah). It features subtle geometric Islamic patterns in gold and dark green, set against a pure white background. The style is modern corporate, clean, and highly legible, suitable for a digital dashboard avatar." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCGy7VO-xu6qlNcohmktJ7N_E4VbCgNRNzCOaGNA6onjZDYmxRQaSuZwQp0NlsjIz4S-9l5lbyhfL5XDUMpVBOhr9092Vz8g_fAm99GIFmwLjaAIy5gyISJTB2MtYguoqJXiEaj3dQWXr5tgYw1AQfpu_xMPBGkoXnhH123LIsJw0LbHgP4xRORAtcuv0tMGeeLJPGXTnpvSyL_XWRCzWhAD4Xj256yU-NP3ZS0KeerbNco9ttGRk5w"/>
</div>
<div>
<h2 class="font-h4 text-h4 font-bold text-on-primary">Presensi Guru</h2>
<p class="font-body-sm text-body-sm opacity-80">MI AL-Faizein</p>
</div>
</div>
<!-- Navigation Links -->
<div class="flex-1 flex flex-col gap-1 px-3">
<!-- Inactive: Beranda -->
<a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined">home</span>
<span>Beranda</span>
</a>
<!-- Active: Scan Presensi -->
<a class="flex items-center gap-3 px-4 py-3 rounded-lg bg-on-primary-fixed-variant text-on-primary-container border-l-4 border-secondary-fixed transition-colors translate-x-1 duration-200" href="#">
<span class="material-symbols-outlined" style="font-variation-settings: 'FILL' 1;">qr_code_scanner</span>
<span class="font-medium">Scan Presensi</span>
</a>
<!-- Inactive: Izin Keluar -->
<a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined">assignment_return</span>
<span>Izin Keluar</span>
</a>
<!-- Inactive: Riwayat -->
<a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined">history</span>
<span>Riwayat</span>
</a>
</div>
<!-- Footer Links -->
<div class="px-3 pt-stack-md border-t border-on-primary/20 mt-auto flex flex-col gap-1">
<a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined">person</span>
<span>Profil Saya</span>
</a>
<a class="flex items-center gap-3 px-4 py-3 rounded-lg text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#">
<span class="material-symbols-outlined">logout</span>
<span>Keluar</span>
</a>
</div>
</nav>
<!-- Main Content Wrapper -->
<div class="flex-1 flex flex-col w-[calc(100%-220px)] ml-[220px]">
<!-- Shared Component: TopAppBar (Guru) -->
<header class="flex justify-between items-center px-gutter py-stack-sm w-full bg-surface dark:bg-surface-dim text-primary dark:text-primary-fixed font-h3 text-h3 font-body-md text-body-md border-b border-outline-variant sticky top-0 z-30">
<div class="flex items-center">
<h1 class="font-h3 text-h3 font-bold text-on-surface">Dashboard Guru</h1>
</div>
<div class="flex items-center gap-4">
<button class="p-2 rounded-full text-on-surface-variant hover:text-primary hover:bg-surface-container transition-colors flex items-center justify-center">
<span class="material-symbols-outlined">notifications</span>
</button>
<div class="w-10 h-10 rounded-full border border-outline-variant overflow-hidden cursor-pointer hover:opacity-80 transition-opacity">
<img class="w-full h-full object-cover" data-alt="A professional portrait of an Indonesian teacher, subtly lit in a modern bright classroom setting. The teacher is wearing neat, professional attire suitable for a modern educational institution. The color palette emphasizes warm, trustworthy tones, seamlessly integrating with a clean, high-end corporate application interface." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDVPi_HN7g6345ivk6SdjntC3-hJr56r5lsnNxN_Ou_VkWFAj-XcbOvH6HyYJsBcqCwHi3_XRaWEM4bbLjh9h5jI4u6oKz7MZs16XJkRlBthPTauBN8Brra0JecT_-kkvmJJ7g43Q64nvw-BXYD5peMTF4X1UeICNrWtidr1xJczV8JcH-RGM4ViBGwAw9SUGobDxb5Jsli1g_NOMNg0dN6t_8OkoO_oT8yCBvU6O7fxqZwD8K3kcoC"/>
</div>
</div>
</header>
<!-- Page Canvas -->
<main class="flex-1 p-container-padding flex flex-col">
<div class="mb-stack-lg">
<h1 class="font-h2 text-h2 text-on-surface">Scan QR Presensi Masuk</h1>
<p class="font-body-md text-body-md text-on-surface-variant mt-1">Siapkan kamera Anda untuk melakukan absensi kehadiran.</p>
</div>
<!-- Main Scanner Card -->
<div class="bg-surface-container-lowest rounded-xl shadow-sm border border-outline-variant w-full max-w-3xl mx-auto flex flex-col items-center p-stack-lg flex-1 mb-stack-lg">
<!-- Viewfinder Container -->
<div class="relative w-[480px] h-[480px] bg-inverse-surface rounded-xl overflow-hidden shadow-inner mb-stack-lg flex justify-center items-center group">
<!-- Simulated Camera Feed Background (Dark/Blurry to indicate active camera without real image) -->
<div class="absolute inset-0 opacity-30 mix-blend-screen" data-alt="A very dark, out-of-focus background simulating an active but unfocused mobile camera feed. It features subtle, blurry suggestions of a modern office or classroom environment with soft, diffused ambient lighting. The overall tone is almost black with very faint hints of grey and muted primary green to maintain brand consistency. No sharp objects or faces are visible." style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuCjNY9mGpNbQWtAaFzslFfZCJto2iCMIlVMdjxZd5ozNwtDdofKhgsouwrDO8e1XTbLfBXcKdQGuidRe2MYolPgIbXEdDxFYwTaMbU36oSNcS8_VvHcgWGjqcUF-WYM-ukS6fpsFRLMr3BT6x6k8enNurqviH1HOfUq80mSPJNPjfEWf2mnwHhGIA2MlQCWjtmeHrHrso0uflNMwyWGR91i8vwICUbHMmUKe9Cc4MhmObx8e29uosyT')"></div>
<!-- Dark Overlay for contrast outside the scan area -->
<div class="absolute inset-0 bg-inverse-surface/60 pointer-events-none"></div>
<!-- Clear Scan Area (Creates the 'hole' effect) -->
<div class="absolute w-[280px] h-[280px] bg-inverse-surface/0 shadow-[0_0_0_9999px_rgba(49,48,48,0.7)] pointer-events-none"></div>
<!-- Target Frame (Gold) -->
<div class="relative w-[280px] h-[280px] pointer-events-none">
<!-- Corner Accents -->
<div class="absolute top-0 left-0 w-8 h-8 border-t-4 border-l-4 border-secondary-container rounded-tl-lg"></div>
<div class="absolute top-0 right-0 w-8 h-8 border-t-4 border-r-4 border-secondary-container rounded-tr-lg"></div>
<div class="absolute bottom-0 left-0 w-8 h-8 border-b-4 border-l-4 border-secondary-container rounded-bl-lg"></div>
<div class="absolute bottom-0 right-0 w-8 h-8 border-b-4 border-r-4 border-secondary-container rounded-br-lg"></div>
<!-- Scanning Line Animation -->
<div class="absolute top-0 left-0 w-full h-[2px] bg-secondary-container shadow-[0_0_12px_3px_rgba(254,179,22,0.6)] animate-scan"></div>
</div>
<!-- Guidance Text Overlay inside Viewfinder -->
<div class="absolute bottom-8 w-full text-center pointer-events-none">
<span class="inline-block bg-inverse-surface/80 text-on-secondary font-body-sm text-body-sm px-4 py-2 rounded-full backdrop-blur-sm border border-outline/30">
                            Posisikan wajah Anda dalam kotak
                        </span>
</div>
</div>
<!-- Status & Helper Text Area -->
<div class="flex flex-col items-center text-center max-w-md">
<!-- Status Row -->
<div class="flex items-center gap-2 mb-stack-sm bg-primary/5 px-4 py-2 rounded-full border border-primary/20">
<span class="material-symbols-outlined text-primary" style="font-variation-settings: 'FILL' 1;">check_circle</span>
<span class="font-h4 text-h4 text-primary">Kamera aktif</span>
</div>
<!-- Helper Text -->
<p class="font-body-lg text-body-lg text-on-surface-variant">
                        Arahkan kamera ke QR Code yang ditampilkan operator.
                    </p>
</div>
</div>
</main>
</div>
</body></html>

```

