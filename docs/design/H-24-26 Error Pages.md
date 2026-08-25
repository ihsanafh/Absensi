# H-24-26 Error Pages

```html
<!-- H-24-26 Error Pages -->
<!DOCTYPE html>

<html lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Error Pages Set - MI AL-Faizein</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&amp;family=JetBrains+Mono:wght@500&amp;family=Plus+Jakarta+Sans:wght@600;700&amp;display=swap" rel="stylesheet"/>
<link href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap" rel="stylesheet"/>
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
            }
          }
        }
    </script>
<style>
        body {
            background-color: theme('colors.surface-container');
        }
        .icon-lg {
            font-size: 64px;
        }
    </style>
</head>
<body class="min-h-screen flex items-center justify-center p-gutter">
<!-- Container for the set of screens (presented as a grid for review) -->
<main class="w-full max-w-7xl grid grid-cols-1 md:grid-cols-3 gap-stack-lg items-stretch">
<!-- Screen 1: 403 Akses Ditolak -->
<article class="bg-surface-container-lowest rounded-xl shadow-sm p-12 flex flex-col items-center justify-center text-center border-t-4 border-secondary-container transition-transform duration-300 hover:-translate-y-1">
<div class="mb-stack-lg relative">
<div class="absolute inset-0 bg-secondary-container/20 rounded-full blur-xl"></div>
<span class="material-symbols-outlined icon-lg text-secondary-container relative z-10" style="font-variation-settings: 'FILL' 1;">lock</span>
</div>
<h1 class="font-h1 text-h1 text-primary mb-stack-sm">403</h1>
<h2 class="font-h3 text-h3 text-on-surface mb-stack-md">Akses Ditolak</h2>
<p class="font-body-md text-body-md text-on-surface-variant mb-stack-lg max-w-[280px]">
                Anda tidak memiliki kredensial yang valid untuk melihat halaman ini.
            </p>
<button class="mt-auto bg-primary text-on-primary px-8 py-3 rounded-lg font-body-md text-body-md font-semibold hover:bg-on-primary-fixed-variant transition-colors shadow-sm focus:outline-none focus:ring-2 focus:ring-primary-fixed focus:ring-offset-2" type="button">
                Kembali ke Beranda
            </button>
</article>
<!-- Screen 2: 404 Halaman Tidak Ditemukan -->
<article class="bg-surface-container-lowest rounded-xl shadow-sm p-12 flex flex-col items-center justify-center text-center border-t-4 border-primary transition-transform duration-300 hover:-translate-y-1">
<div class="mb-stack-lg relative">
<div class="absolute inset-0 bg-primary/10 rounded-full blur-xl"></div>
<span class="material-symbols-outlined icon-lg text-primary relative z-10" style="font-variation-settings: 'FILL' 0;">explore</span>
</div>
<h1 class="font-h1 text-h1 text-primary mb-stack-sm">404</h1>
<h2 class="font-h3 text-h3 text-on-surface mb-stack-md">Halaman Tidak Ditemukan</h2>
<p class="font-body-md text-body-md text-on-surface-variant mb-stack-lg max-w-[280px]">
                Tautan yang Anda tuju mungkin rusak, atau halaman telah dipindahkan.
            </p>
<button class="mt-auto bg-primary text-on-primary px-8 py-3 rounded-lg font-body-md text-body-md font-semibold hover:bg-on-primary-fixed-variant transition-colors shadow-sm focus:outline-none focus:ring-2 focus:ring-primary-fixed focus:ring-offset-2" type="button">
                Kembali ke Beranda
            </button>
</article>
<!-- Screen 3: 500 Kesalahan Server -->
<article class="bg-surface-container-lowest rounded-xl shadow-sm p-12 flex flex-col items-center justify-center text-center border-t-4 border-error transition-transform duration-300 hover:-translate-y-1">
<div class="mb-stack-lg relative">
<div class="absolute inset-0 bg-error/10 rounded-full blur-xl"></div>
<span class="material-symbols-outlined icon-lg text-error relative z-10" style="font-variation-settings: 'FILL' 1;">warning</span>
</div>
<h1 class="font-h1 text-h1 text-error mb-stack-sm">500</h1>
<h2 class="font-h3 text-h3 text-on-surface mb-stack-md">Kesalahan Server</h2>
<p class="font-body-md text-body-md text-on-surface-variant mb-stack-lg max-w-[280px]">
                Sistem kami sedang mengalami masalah teknis. Tim kami sedang menanganinya.
            </p>
<button class="mt-auto bg-primary text-on-primary px-8 py-3 rounded-lg font-body-md text-body-md font-semibold hover:bg-on-primary-fixed-variant transition-colors shadow-sm focus:outline-none focus:ring-2 focus:ring-primary-fixed focus:ring-offset-2 flex items-center justify-center gap-2" type="button">
<span class="material-symbols-outlined text-[18px]">refresh</span>
                Muat Ulang
            </button>
</article>
</main>
</body></html>
```
