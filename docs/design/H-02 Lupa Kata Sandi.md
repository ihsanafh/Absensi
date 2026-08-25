# H-02 Lupa Kata Sandi

```html
<!-- H-02 Lupa Kata Sandi -->
<!DOCTYPE html>

<html lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Lupa Kata Sandi - Sistem Presensi MI AL-Faizein</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&amp;family=JetBrains+Mono:wght@500&amp;family=Plus+Jakarta+Sans:wght@600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
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
                        DEFAULT: "0.25rem",
                        lg: "0.5rem",
                        xl: "0.75rem",
                        full: "9999px"
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
                        h2: ["Plus Jakarta Sans"],
                        "body-sm": ["Inter"],
                        "body-md": ["Inter"],
                        h3: ["Plus Jakarta Sans"],
                        "h1-mobile": ["Plus Jakarta Sans"],
                        "body-lg": ["Inter"],
                        h1: ["Plus Jakarta Sans"],
                        h4: ["Plus Jakarta Sans"]
                    },
                    fontSize: {
                        "label-mono": ["14px", { lineHeight: "1", fontWeight: "500" }],
                        h2: ["32px", { lineHeight: "1.2", fontWeight: "600" }],
                        "body-sm": ["14px", { lineHeight: "1.5", fontWeight: "400" }],
                        "body-md": ["16px", { lineHeight: "1.6", fontWeight: "400" }],
                        h3: ["24px", { lineHeight: "1.3", fontWeight: "600" }],
                        "h1-mobile": ["28px", { lineHeight: "1.2", fontWeight: "700" }],
                        "body-lg": ["18px", { lineHeight: "1.6", fontWeight: "400" }],
                        h1: ["40px", { lineHeight: "1.2", fontWeight: "700" }],
                        h4: ["20px", { lineHeight: "1.4", fontWeight: "600" }]
                    }
                }
            }
        }
    </script>
<style>
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>
<body class="bg-surface text-on-surface font-body-md antialiased min-h-screen relative flex items-center justify-center">
<!-- Background Image with Overlay for premium feel -->
<div class="absolute inset-0 z-0 bg-cover bg-center" data-alt="A highly blurred, abstract, and soft-focus background image featuring elements of modern educational architecture. The scene includes expansive windows letting in soft, natural daylight, creating a bright and optimistic light-mode aesthetic. The color palette emphasizes clean whites, gentle light greys, and very subtle, organic touches of primary green and soft gold. The mood is calm, professional, and sophisticated, designed to sit quietly behind a central user interface element." style="background-image: url('https://lh3.googleusercontent.com/aida-public/AB6AXuDtWGWAsnoxMGbCtZ5ux_rqvpo8B8g5Rfn7r5buQ5Ba80Dru9JKtKP8Bn81EWYkAoFhrJeo51lZHzPc3zDNMfKGXq4KwZpMklrQ-DteoJVjHrx-_dlORuY1i9fVbdQ6KRWHtLBwxasvn-THNp8pLf7_4mxHdZxBCUfl8ussmwR8evD05aYgIsiqw_ja377iaWRdYhrXQ-HzA0u8wbcE5_f3pyn3Ljs47Z0Dv4zHdWBlmDqbkmEErhVg')">
<div class="absolute inset-0 bg-surface/80 backdrop-blur-sm"></div>
</div>
<!-- Centered Card Container -->
<main class="relative z-10 w-full max-w-[480px] px-container-padding">
<!-- Brand Header (Above Card) -->
<div class="text-center mb-stack-lg flex flex-col items-center">
<div class="w-16 h-16 bg-primary rounded-xl shadow-sm flex items-center justify-center mb-stack-sm text-on-primary">
<span class="material-symbols-outlined text-4xl" data-weight="fill" style="font-variation-settings: 'FILL' 1;">school</span>
</div>
<h1 class="font-h4 text-h4 font-bold text-primary">MI AL-Faizein</h1>
<p class="font-label-mono text-label-mono text-on-surface-variant uppercase tracking-widest mt-1">Sistem Presensi</p>
</div>
<!-- Main Form Card -->
<div class="bg-surface-container-lowest rounded-xl shadow-lg border border-outline-variant p-stack-lg md:p-[2.5rem]">
<div class="text-center mb-stack-lg">
<h2 class="font-h2 text-h2 font-bold text-on-surface">Lupa Kata Sandi</h2>
<p class="font-body-md text-body-md text-on-surface-variant mt-stack-sm leading-relaxed">
                    Masukkan email akun Anda, kami akan mengirimkan tautan reset kata sandi
                </p>
</div>
<form action="#" class="space-y-stack-md" method="POST">
<!-- Email Field -->
<div>
<label class="block font-body-sm text-body-sm font-medium text-on-surface-variant mb-2" for="email">Alamat Email</label>
<div class="relative">
<div class="absolute inset-y-0 left-0 pl-4 flex items-center pointer-events-none text-outline">
<span class="material-symbols-outlined">mail</span>
</div>
<input class="block w-full pl-12 pr-4 py-3 bg-surface-container-low border border-outline-variant rounded-lg font-body-md text-body-md text-on-surface placeholder:text-outline focus:ring-2 focus:ring-primary focus:border-primary transition-shadow" id="email" name="email" placeholder="guru@mi-alfaizein.sch.id" required="" type="email"/>
</div>
</div>
<!-- Submit Button -->
<div class="pt-stack-sm">
<button class="w-full flex justify-center py-3 px-4 border border-transparent rounded-lg shadow-sm font-body-md text-body-md font-medium text-on-primary bg-primary hover:bg-primary-container focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-primary transition-colors" type="submit">
                        Kirim Tautan Reset
                    </button>
</div>
</form>
</div>
<!-- Secondary Action (Below Card) -->
<div class="text-center mt-stack-lg">
<a class="inline-flex items-center gap-2 font-body-sm text-body-sm text-on-surface-variant hover:text-primary transition-colors font-medium" href="#">
<span class="material-symbols-outlined text-[18px]">arrow_back</span>
                Kembali ke halaman masuk
            </a>
</div>
</main>
</body></html>

```

