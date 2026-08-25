# H-01 Login

```html
<!-- H-01 Login -->
<!DOCTYPE html>

<html class="light" lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Sistem Presensi Guru - Login</title>
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com" rel="preconnect"/>
<link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect"/>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&amp;family=JetBrains+Mono:wght@500&amp;family=Plus+Jakarta+Sans:wght@600;700&amp;display=swap" rel="stylesheet"/>
<!-- Material Symbols -->
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
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
</head>
<body class="min-h-screen flex flex-col justify-center items-center bg-surface-container-low p-container-padding font-body-md text-body-md text-on-surface">
<!-- Main Card Container -->
<main class="w-full max-w-[420px] bg-surface-container-lowest rounded-xl shadow-sm overflow-hidden flex flex-col">
<!-- Header Strip -->
<header class="bg-primary px-stack-md py-stack-md flex items-center justify-center gap-stack-sm border-b border-primary-container">
<!-- Placeholder Logo Icon -->
<span class="material-symbols-outlined text-on-primary text-[28px]" style="font-variation-settings: 'FILL' 1;">local_library</span>
<h1 class="font-h4 text-h4 font-bold text-on-primary tracking-tight">Sistem Presensi Guru</h1>
</header>
<!-- Login Form Section -->
<div class="p-stack-lg flex flex-col gap-stack-lg">
<!-- Heading & Subtext -->
<div class="flex flex-col gap-1 text-center">
<h2 class="font-h3 text-h3 text-on-surface">Masuk ke Akun</h2>
<p class="font-body-sm text-body-sm text-on-surface-variant">Gunakan akun yang diberikan oleh admin sekolah</p>
</div>
<!-- Form -->
<form action="#" class="flex flex-col gap-stack-md" method="POST">
<!-- Input Group: Email/Username -->
<div class="flex flex-col gap-1">
<label class="font-body-sm text-body-sm font-semibold text-on-surface" for="username">Email atau Username</label>
<div class="relative">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline-variant select-none pointer-events-none">person</span>
<input class="w-full pl-10 pr-4 py-3 bg-surface border border-outline-variant rounded-lg font-body-md text-body-md text-on-surface focus:border-primary focus:ring-1 focus:ring-primary focus:outline-none transition-colors placeholder:text-outline" id="username" name="username" placeholder="Masukkan email atau username" required="" type="text"/>
</div>
</div>
<!-- Input Group: Password -->
<div class="flex flex-col gap-1">
<label class="font-body-sm text-body-sm font-semibold text-on-surface" for="password">Kata Sandi</label>
<div class="relative">
<span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-outline-variant select-none pointer-events-none">lock</span>
<input class="w-full pl-10 pr-10 py-3 bg-surface border border-outline-variant rounded-lg font-body-md text-body-md text-on-surface focus:border-primary focus:ring-1 focus:ring-primary focus:outline-none transition-colors placeholder:text-outline" id="password" name="password" placeholder="Masukkan kata sandi" required="" type="password"/>
<button aria-label="Toggle password visibility" class="absolute right-3 top-1/2 -translate-y-1/2 text-outline-variant hover:text-on-surface focus:outline-none transition-colors" type="button">
<span class="material-symbols-outlined text-[20px]">visibility_off</span>
</button>
</div>
</div>
<!-- Forgot Password Link -->
<div class="flex justify-end">
<a class="font-body-sm text-body-sm font-medium text-secondary hover:text-secondary-container transition-colors focus:outline-none focus:underline" href="#">Lupa kata sandi?</a>
</div>
<!-- Submit Button -->
<button class="w-full mt-2 py-3 bg-primary text-on-primary rounded-xl font-h4 text-[16px] font-semibold tracking-wide hover:bg-primary-container focus:ring-2 focus:ring-offset-2 focus:ring-primary transition-all active:scale-[0.98] shadow-sm" type="submit">
                    Masuk
                </button>
</form>
</div>
</main>
<!-- Footer -->
<footer class="mt-stack-lg font-body-sm text-body-sm text-on-surface-variant opacity-80">
        © 2026 MI AL-Faizein
    </footer>
</body></html>

```

