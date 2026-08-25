# H-03 Reset Kata Sandi

```html
<!-- H-03 Reset Kata Sandi -->
<!DOCTYPE html>

<html lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Buat Kata Sandi Baru - Sistem Presensi MI AL-Faizein</title>
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
</head>
<body class="bg-surface-container-low min-h-screen flex items-center justify-center p-container-padding font-body-md text-on-surface antialiased">
<!-- Main Transactional Card -->
<main class="bg-surface-container-lowest w-full max-w-md rounded-xl shadow-sm p-stack-lg border border-outline-variant/40 relative overflow-hidden">
<!-- Subtle Top Accent -->
<div class="absolute top-0 left-0 w-full h-1.5 bg-primary"></div>
<!-- Header / Identity -->
<header class="flex flex-col items-center mb-stack-lg mt-stack-sm text-center">
<div class="w-14 h-14 bg-primary-container/10 rounded-xl flex items-center justify-center mb-stack-sm shadow-sm ring-1 ring-primary-container/20">
<span class="material-symbols-outlined text-primary text-3xl" style="font-variation-settings: 'FILL' 1;">lock_reset</span>
</div>
<h1 class="font-h3 text-h3 text-on-surface mb-2">Buat Kata Sandi Baru</h1>
<p class="font-body-sm text-body-sm text-on-surface-variant max-w-[280px]">
                Silakan masukkan kata sandi baru Anda yang kuat dan mudah diingat.
            </p>
</header>
<!-- Reset Password Form -->
<form class="flex flex-col gap-stack-md" onsubmit="event.preventDefault(); window.location.href='#';">
<!-- Input: New Password -->
<div class="flex flex-col gap-2">
<label class="font-body-sm text-body-sm font-semibold text-on-surface" for="new_password">Kata Sandi Baru</label>
<div class="relative">
<span class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
<span class="material-symbols-outlined text-on-surface-variant text-[20px]">key</span>
</span>
<input class="w-full pl-11 pr-11 py-3 bg-surface border border-outline-variant rounded-lg focus:ring-2 focus:ring-primary focus:border-primary font-body-md text-body-md text-on-surface outline-none transition-all placeholder:text-outline/70" id="new_password" placeholder="Masukkan kata sandi" required="" type="password"/>
<button aria-label="Toggle password visibility" class="absolute inset-y-0 right-0 flex items-center pr-3.5 text-on-surface-variant hover:text-primary transition-colors focus:outline-none" onclick="toggleVisibility('new_password', 'icon_new')" type="button">
<span class="material-symbols-outlined text-[20px]" id="icon_new">visibility_off</span>
</button>
</div>
<!-- Password Strength Indicator -->
<div class="flex flex-col gap-1.5 mt-2">
<div class="flex h-1.5 w-full gap-1 rounded-full overflow-hidden bg-surface-variant/50">
<div class="h-full flex-1 bg-surface-variant transition-colors duration-300" id="strength-bar-1"></div>
<div class="h-full flex-1 bg-surface-variant transition-colors duration-300" id="strength-bar-2"></div>
<div class="h-full flex-1 bg-surface-variant transition-colors duration-300" id="strength-bar-3"></div>
</div>
<div class="flex justify-between items-center mt-0.5 px-1">
<span class="font-label-mono text-label-mono text-[12px] text-on-surface-variant transition-colors duration-300" id="strength-text">Belum diisi</span>
</div>
</div>
</div>
<!-- Input: Confirm Password -->
<div class="flex flex-col gap-2">
<label class="font-body-sm text-body-sm font-semibold text-on-surface" for="confirm_password">Konfirmasi Kata Sandi Baru</label>
<div class="relative">
<span class="absolute inset-y-0 left-0 flex items-center pl-3.5 pointer-events-none">
<span class="material-symbols-outlined text-on-surface-variant text-[20px]">lock_clock</span>
</span>
<input class="w-full pl-11 pr-11 py-3 bg-surface border border-outline-variant rounded-lg focus:ring-2 focus:ring-primary focus:border-primary font-body-md text-body-md text-on-surface outline-none transition-all placeholder:text-outline/70" id="confirm_password" placeholder="Ulangi kata sandi" required="" type="password"/>
<button aria-label="Toggle confirm password visibility" class="absolute inset-y-0 right-0 flex items-center pr-3.5 text-on-surface-variant hover:text-primary transition-colors focus:outline-none" onclick="toggleVisibility('confirm_password', 'icon_confirm')" type="button">
<span class="material-symbols-outlined text-[20px]" id="icon_confirm">visibility_off</span>
</button>
</div>
</div>
<!-- Actions -->
<div class="mt-stack-sm pt-2">
<button class="w-full py-3.5 px-4 bg-primary text-on-primary font-body-md text-body-md font-semibold rounded-lg hover:bg-primary-container hover:text-on-primary-container focus:ring-4 focus:ring-primary/20 transition-all flex justify-center items-center gap-2 shadow-sm" type="submit">
                    Simpan Kata Sandi Baru
                    <span class="material-symbols-outlined text-[20px]">check_circle</span>
</button>
</div>
<!-- Back Link -->
<div class="text-center mt-2">
<a class="font-body-sm text-body-sm text-on-surface-variant hover:text-primary transition-colors font-medium inline-flex items-center gap-1.5 py-2" href="#">
<span class="material-symbols-outlined text-[18px]">arrow_back</span>
                    Kembali ke halaman Masuk
                </a>
</div>
</form>
</main>
<!-- Interactive Logic Script -->
<script>
        // Toggle Password Visibility
        function toggleVisibility(inputId, iconId) {
            const input = document.getElementById(inputId);
            const icon = document.getElementById(iconId);
            if (input.type === 'password') {
                input.type = 'text';
                icon.textContent = 'visibility';
            } else {
                input.type = 'password';
                icon.textContent = 'visibility_off';
            }
        }

        // Password Strength Logic
        const passInput = document.getElementById('new_password');
        const b1 = document.getElementById('strength-bar-1');
        const b2 = document.getElementById('strength-bar-2');
        const b3 = document.getElementById('strength-bar-3');
        const sText = document.getElementById('strength-text');

        passInput.addEventListener('input', function(e) {
            const val = e.target.value;
            const len = val.length;

            // Base Reset
            const defaultBg = 'bg-surface-variant';
            const defaultText = 'text-on-surface-variant';

            b1.className = `h-full flex-1 transition-colors duration-300 ${defaultBg}`;
            b2.className = `h-full flex-1 transition-colors duration-300 ${defaultBg}`;
            b3.className = `h-full flex-1 transition-colors duration-300 ${defaultBg}`;
            sText.className = `font-label-mono text-label-mono text-[12px] transition-colors duration-300 ${defaultText}`;

            if (len === 0) {
                sText.textContent = 'Belum diisi';
            } else if (len > 0 && len < 6) {
                b1.classList.replace(defaultBg, 'bg-error');
                sText.textContent = 'Lemah';
                sText.classList.replace(defaultText, 'text-error');
            } else if (len >= 6 && len < 10) {
                b1.classList.replace(defaultBg, 'bg-secondary-container');
                b2.classList.replace(defaultBg, 'bg-secondary-container');
                sText.textContent = 'Sedang';
                sText.classList.replace(defaultText, 'text-on-secondary-container');
            } else if (len >= 10) {
                // Assuming >= 10 chars is strong for this visual demo
                b1.classList.replace(defaultBg, 'bg-primary');
                b2.classList.replace(defaultBg, 'bg-primary');
                b3.classList.replace(defaultBg, 'bg-primary');
                sText.textContent = 'Kuat';
                sText.classList.replace(defaultText, 'text-primary');
            }
        });
    </script>

</body></html>

```

