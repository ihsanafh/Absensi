# H-14 Tampilan QR Presensi

```html
<!-- H-14 Tampilan QR Presensi -->
<!DOCTYPE html>

<html lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Tampilan QR Presensi</title>
<!-- Material Symbols -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&amp;family=JetBrains+Mono:wght@500&amp;family=Plus+Jakarta+Sans:wght@600;700&amp;display=swap" rel="stylesheet"/>
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
        
        /* QR Ring Animation */
        @keyframes countdown {
            from { stroke-dashoffset: 0; }
            to { stroke-dashoffset: 301.59; /* 2 * PI * 48 */ }
        }
        .animate-ring {
            stroke-dasharray: 301.59;
            animation: countdown 18s linear infinite;
        }
    </style>
</head>
<body class="bg-primary h-screen w-screen overflow-hidden relative flex flex-col items-center justify-center">
<!-- Atmospheric Background glow -->
<div class="absolute inset-0 pointer-events-none opacity-30 z-0">
<div class="absolute top-0 left-1/4 w-[500px] h-[500px] bg-primary-container rounded-full blur-[120px] mix-blend-screen"></div>
<div class="absolute bottom-0 right-1/4 w-[600px] h-[600px] bg-tertiary-container rounded-full blur-[150px] mix-blend-screen"></div>
</div>
<!-- Top Action Bar (Absolute) -->
<div class="absolute top-0 left-0 w-full p-container-padding z-20 flex justify-between items-start">
<a class="inline-flex items-center gap-2 font-body-md text-body-md text-on-primary hover:opacity-80 transition-opacity bg-primary-container/30 px-4 py-2 rounded-full backdrop-blur-sm border border-on-primary/10" href="#">
<span class="material-symbols-outlined text-[20px]">arrow_back</span>
            Kembali ke Dashboard
        </a>
</div>
<!-- Main Kiosk Content -->
<div class="z-10 flex flex-col items-center w-full max-w-lg px-container-padding">
<!-- Header / Logo -->
<div class="text-center mb-stack-lg flex flex-col items-center">
<div class="w-20 h-20 bg-surface-container-lowest rounded-2xl shadow-lg flex items-center justify-center p-2 mb-stack-md border border-on-primary/10">
<img class="w-full h-full object-contain rounded-xl" data-alt="A small, stylized crest or logo designed for an Islamic primary school (Madrasah Ibtidaiyah). The logo features a minimalist book and geometric star motif, colored in deep forest green and subtle gold accents. The design is rendered in a flat, modern vector style against a pure white background, ensuring it looks professional, academic, and trustworthy for an educational institution's digital interface." src="https://lh3.googleusercontent.com/aida-public/AB6AXuCgms5Co3iVlB8Xz8zSBWFXR-gsnCEppySCyoYUu34z3VTGmYVyFBrAIFbzW_dNh5r35U0GluZhFCCdWTLsZ-T30481UTJq6nc1Pss2KmMzmoqMQZmy97Afueguj6ka365NrNRh1Eo2pmhJ8mwVbZrx667OdmANEy6DevPxHuc-_Q1BYA8TwBSlgNVa-y97RwfuJTqNL4vxA5XpqU7MJaKG5QvEo7wmAvl3myxo4Z7PtXxom4m-7oO5"/>
</div>
<h1 class="font-h2 text-h2 text-on-primary mb-2 tracking-tight">Tampilan QR Presensi</h1>
<p class="font-body-lg text-body-lg text-on-primary/80">MI AL-Faizein</p>
</div>
<!-- The White Card -->
<div class="bg-surface-container-lowest w-full rounded-[32px] shadow-2xl p-stack-lg flex flex-col items-center relative overflow-hidden">
<!-- Toggle Switch -->
<div class="w-full bg-surface-container rounded-full p-1.5 flex relative mb-stack-lg shadow-inner">
<!-- Active background pill -->
<div class="absolute w-[calc(50%-6px)] h-[calc(100%-12px)] bg-primary rounded-full top-1.5 left-1.5 shadow-sm transition-transform duration-300"></div>
<button class="flex-1 py-3 text-center relative z-10 font-body-md text-body-md text-on-primary font-medium tracking-wide">
                    Scan Masuk
                </button>
<button class="flex-1 py-3 text-center relative z-10 font-body-md text-body-md text-on-surface-variant font-medium tracking-wide hover:text-primary transition-colors">
                    Scan Keluar
                </button>
</div>
<!-- QR Code Display Area -->
<div class="relative w-80 h-80 mb-stack-lg flex items-center justify-center">
<!-- Gold Ring Timer SVG -->
<svg class="absolute inset-0 w-full h-full -rotate-90 transform" viewbox="0 0 100 100">
<!-- Background Track -->
<circle class="stroke-surface-container-high" cx="50" cy="50" fill="none" r="48" stroke-width="2"></circle>
<!-- Animated Progress Ring -->
<circle class="stroke-secondary-container animate-ring drop-shadow-sm" cx="50" cy="50" fill="none" r="48" stroke-linecap="round" stroke-width="3"></circle>
</svg>
<!-- Inner QR Container -->
<div class="w-64 h-64 bg-white rounded-2xl shadow-sm border border-outline-variant p-4 relative z-10 flex items-center justify-center">
<img class="w-full h-full object-contain opacity-90" data-alt="A crisp, high-contrast, black and white matrix barcode, commonly known as a QR code, designed for immediate digital scanning. The pattern is complex and dense, featuring distinct square position markers at three corners. The image is perfectly square, with sharp, unblurred edges, set against a pristine white background to ensure maximum legibility for a mobile device's camera viewfinder in an attendance system context." src="https://lh3.googleusercontent.com/aida-public/AB6AXuA6dtlgR9zUJVcS-oUx3cpfLeMINBKfyE1qQG1A2JJeMkLIqGSk0SEG6K59SaeAmxaFFrp3qxZJRC9u7M0AtZO9Z36Q_PBdaDsaaOjNOs8iQX8d1VgYPa1d7jtKSheMsk1fdKA8g0b6dZmuVojYP9fzFZCOEhK0fzre04rZdkXFdkA2RYQ96mpVFXWlxkQVU8xqxkEYtyWlDBf6fE2-lMzr3Wc5NJyDIFLV9FLQX3fcJhH91ro9XZxn"/>
<!-- Scanning aesthetic overlay (optional subtle line) -->
<div class="absolute top-0 left-0 w-full h-1 bg-primary/20 animate-pulse rounded-t-2xl"></div>
</div>
</div>
<!-- Timer Status Text -->
<div class="flex items-center gap-3 bg-surface-container-low px-6 py-3 rounded-full border border-surface-variant">
<span class="material-symbols-outlined text-secondary-container text-[20px] fill">timer</span>
<span class="font-label-mono text-label-mono text-on-surface-variant uppercase tracking-wider">
                    QR berganti dalam <strong class="text-primary text-[16px]">18</strong> detik
                </span>
</div>
</div>
</div>
<!-- Bottom aesthetic anchor -->
<div class="absolute bottom-8 text-center w-full z-10">
<p class="font-body-sm text-body-sm text-on-primary/50">Gunakan perangkat guru untuk melakukan scan</p>
</div>
</body></html>

```

