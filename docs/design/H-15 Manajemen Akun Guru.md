# H-15 Manajemen Akun Guru

```html
<!-- H-15 Manajemen Akun Guru -->
<!DOCTYPE html>

<html lang="id"><head>
<meta charset="utf-8"/>
<meta content="width=device-width, initial-scale=1.0" name="viewport"/>
<title>Manajemen Akun Guru - Sistem Presensi</title>
<script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&amp;family=JetBrains+Mono:wght@400;500&amp;family=Plus+Jakarta+Sans:wght@600;700&amp;display=swap" rel="stylesheet"/>
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
        .material-symbols-outlined {
            font-variation-settings: 'FILL' 0, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
    </style>
</head>
<body class="bg-background text-on-background font-body-md min-h-screen flex">
<!-- SideNavBar -->
<nav class="hidden md:flex bg-primary dark:bg-primary-container text-on-primary dark:text-on-primary-container w-[240px] h-screen fixed left-0 top-0 shadow-sm flex-col py-stack-md z-20">
<div class="px-gutter mb-stack-lg">
<div class="flex items-center gap-stack-sm mb-stack-md">
<img alt="School Logo" class="w-10 h-10 rounded-full bg-white p-1" data-alt="A clean, professional school logo for MI AL-Faizein. Modern corporate style, primarily white and primary green colors. Sharp, crisp vector style graphic suitable for a top navigation bar." src="https://lh3.googleusercontent.com/aida-public/AB6AXuD24my30rmcLrBDFpynxb0I8Apu1watbUthzB_6yAOzgPDETUA17KwuohSt-6sw_iD3HoSEhAO7Q54lQeSJo8GvAaiFC0MOpfTkLSb8ZXaxX2PJP_tneIBfEMq_faja7pMc_P2PPLF23KxABhz4yr8oEwAD449_Lg02LI5Y9ol2p7TRqSruwThysTEtNnL5xlX78Uefqf3x5EBkl9cY9pKka8rQbuIilYgwbYw2NeK12y5fihWFFLla"/>
<div>
<h1 class="font-h4 text-h4 font-bold text-on-primary">MI AL-Faizein</h1>
<p class="font-body-sm text-body-sm opacity-80">Sistem Presensi Guru</p>
</div>
</div>
</div>
<div class="flex-1 overflow-y-auto font-body-md text-body-md">
<ul class="flex flex-col">
<li><a class="flex items-center px-gutter py-3 text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#"><span class="material-symbols-outlined mr-3" data-icon="dashboard">dashboard</span> Dashboard</a></li>
<li><a class="flex items-center px-gutter py-3 text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#"><span class="material-symbols-outlined mr-3" data-icon="qr_code">qr_code</span> Tampilan QR</a></li>
<li><a class="flex items-center px-gutter py-3 text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#"><span class="material-symbols-outlined mr-3" data-icon="person_check">person_check</span> Data Presensi</a></li>
<li><a class="flex items-center px-gutter py-3 text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#"><span class="material-symbols-outlined mr-3" data-icon="pending_actions">pending_actions</span> Permohonan Izin</a></li>
<li><a class="flex items-center px-gutter py-3 text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#"><span class="material-symbols-outlined mr-3" data-icon="history_edu">history_edu</span> Riwayat Izin</a></li>
<li><a class="flex items-center px-gutter py-3 bg-on-primary-fixed-variant text-on-primary-container border-l-4 border-white transition-colors duration-150 transform scale-95 origin-left" href="#"><span class="material-symbols-outlined mr-3" data-icon="manage_accounts">manage_accounts</span> Manajemen Akun</a></li>
<li><a class="flex items-center px-gutter py-3 text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#"><span class="material-symbols-outlined mr-3" data-icon="analytics">analytics</span> Laporan</a></li>
<li><a class="flex items-center px-gutter py-3 text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#"><span class="material-symbols-outlined mr-3" data-icon="history">history</span> Log Aktivitas</a></li>
<li><a class="flex items-center px-gutter py-3 text-on-primary opacity-80 hover:bg-on-primary-fixed-variant hover:opacity-100 transition-colors" href="#"><span class="material-symbols-outlined mr-3" data-icon="settings">settings</span> Pengaturan</a></li>
</ul>
</div>
<div class="mt-auto px-gutter pt-stack-md font-body-md text-body-md">
<ul class="flex flex-col">
<li><a class="flex items-center py-2 text-on-primary opacity-80 hover:opacity-100 transition-colors" href="#"><span class="material-symbols-outlined mr-3" data-icon="account_circle">account_circle</span> Profil Saya</a></li>
<li><a class="flex items-center py-2 text-on-primary opacity-80 hover:opacity-100 transition-colors" href="#"><span class="material-symbols-outlined mr-3" data-icon="logout">logout</span> Keluar</a></li>
</ul>
</div>
</nav>
<!-- Main Content Area -->
<div class="flex-1 ml-0 md:ml-[240px] flex flex-col min-h-screen">
<!-- TopAppBar -->
<header class="bg-surface dark:bg-surface-dim border-b border-outline-variant flex justify-between items-center px-gutter py-stack-sm w-full z-10 sticky top-0">
<div class="flex items-center md:hidden">
<button class="text-on-surface-variant hover:text-primary p-2">
<span class="material-symbols-outlined" data-icon="menu">menu</span>
</button>
</div>
<div class="font-h3 text-h3 font-bold text-on-surface">
                Sistem Presensi
            </div>
<div class="flex items-center gap-stack-md">
<button class="text-on-surface-variant hover:text-primary transition-colors p-2 rounded-full hover:bg-surface-variant">
<span class="material-symbols-outlined" data-icon="notifications">notifications</span>
</button>
<img alt="Admin Avatar" class="w-10 h-10 rounded-full border border-outline-variant object-cover" data-alt="A small circular avatar image of a professional school administrator. The avatar is set against a clean, light background, reflecting a modern corporate aesthetic suitable for an enterprise web application." src="https://lh3.googleusercontent.com/aida-public/AB6AXuAk-b7SZvoUgb71KhD2awZl0DjKyX06-QZeYJr5on6rz_tE5G2rrtOOAs2mM__ffOEMSb_tZ4tvZJACF_JItFFbgPY_rF3Zk1yF_0p-E83LhmpArmxcz7FXiZJh50Wi9-Zpxs3A2oc6ON8YuRP9U74V308xnI51rlpfY6QBI3tezJ4N96rRV3Tzc5qEFfaCU-FEXB7FsVM23EZs7ALDqObigPDnijRytTmjOgNOTqf8y79YBZa6hu3t"/>
</div>
</header>
<!-- Canvas -->
<main class="flex-1 p-container-padding bg-surface-container-low">
<!-- Header Section -->
<div class="flex flex-col md:flex-row md:items-center justify-between mb-stack-lg gap-stack-md">
<div>
<h2 class="font-h2 text-h2 font-semibold text-on-surface mb-1">Manajemen Akun Guru</h2>
<p class="font-body-sm text-body-sm text-on-surface-variant">Kelola data dan akses akun seluruh guru MI AL-Faizein.</p>
</div>
<button class="bg-primary hover:bg-primary-container text-on-primary px-6 py-2.5 rounded-lg shadow-sm flex items-center justify-center gap-2 font-body-md text-body-md font-medium transition-colors w-full md:w-auto">
<span class="material-symbols-outlined" data-icon="add">add</span>
                    Tambah Guru
                </button>
</div>
<!-- Controls Section -->
<div class="bg-surface rounded-xl shadow-sm border border-outline-variant p-4 mb-stack-md flex flex-col sm:flex-row gap-4 items-center justify-between">
<div class="relative w-full sm:w-96">
<div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
<span class="material-symbols-outlined text-outline" data-icon="search">search</span>
</div>
<input class="pl-10 pr-4 py-2 w-full border border-outline-variant rounded-lg focus:ring-2 focus:ring-primary focus:border-primary font-body-md text-body-md bg-surface text-on-surface placeholder-on-surface-variant/60 transition-all" placeholder="Cari nama atau NIP..." type="text"/>
</div>
<div class="flex gap-2 w-full sm:w-auto">
<button class="px-4 py-2 border border-outline-variant rounded-lg text-on-surface font-body-sm text-body-sm hover:bg-surface-variant transition-colors flex items-center gap-2">
<span class="material-symbols-outlined text-[18px]" data-icon="filter_list">filter_list</span> Filter
                    </button>
</div>
</div>
<!-- Data Table Card -->
<div class="bg-surface rounded-xl shadow-sm border border-outline-variant overflow-hidden">
<div class="overflow-x-auto">
<table class="w-full text-left border-collapse">
<thead>
<tr class="border-b border-outline-variant bg-surface-container-lowest">
<th class="py-4 px-6 font-body-sm text-body-sm font-semibold text-on-surface-variant">Profil</th>
<th class="py-4 px-6 font-body-sm text-body-sm font-semibold text-on-surface-variant">NIP</th>
<th class="py-4 px-6 font-body-sm text-body-sm font-semibold text-on-surface-variant">Kontak</th>
<th class="py-4 px-6 font-body-sm text-body-sm font-semibold text-on-surface-variant text-center">Status Akun</th>
<th class="py-4 px-6 font-body-sm text-body-sm font-semibold text-on-surface-variant text-right">Aksi</th>
</tr>
</thead>
<tbody class="font-body-sm text-body-sm text-on-surface">
<tr class="border-b border-outline-variant hover:bg-surface-container-low transition-colors">
<td class="py-3 px-6 flex items-center gap-3">
<img alt="Guru" class="w-10 h-10 rounded-full object-cover border border-outline-variant" data-alt="Portrait of a female teacher wearing professional attire and a hijab, soft natural lighting, set against a neutral, light-mode corporate background. Clean and trustworthy." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDjoLNvUH1Pxo12fDo1RzaIvkxT_gnlOpiYEZd23KBwY300nFipEFTXLXQ4Ygh8xLEvlSaELNNi9er0S1e0uhAzkNUjWUy5Rip8loXnYf4_zIBcyZKYQRS2CjSnplEpEbaJo944IdytHuiQFNvy-KnyPxtMSoEx2KidGy63lF425M2XhTWUqyzLrIjd2J39D-i48jioa0ww7AF1xhpluEgWolF7Lfxt8MuseUWa7JbLeSnn8VW3YMaX"/>
<div>
<p class="font-medium text-on-surface">Siti Aminah, S.Pd</p>
<p class="text-[12px] text-on-surface-variant">Guru Kelas 1</p>
</div>
</td>
<td class="py-3 px-6 font-label-mono text-label-mono text-on-surface-variant">198503122010012005</td>
<td class="py-3 px-6">siti.aminah@alfaizein.sch.id</td>
<td class="py-3 px-6 text-center">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-primary-fixed text-on-primary-fixed-variant">Aktif</span>
</td>
<td class="py-3 px-6 text-right">
<div class="flex items-center justify-end gap-2">
<button class="text-on-surface-variant hover:text-primary p-1 rounded hover:bg-surface-variant transition-colors" title="Edit">
<span class="material-symbols-outlined text-[20px]" data-icon="edit">edit</span>
</button>
<button class="text-on-surface-variant hover:text-error p-1 rounded hover:bg-surface-variant transition-colors" title="Hapus">
<span class="material-symbols-outlined text-[20px]" data-icon="delete">delete</span>
</button>
</div>
</td>
</tr>
<tr class="border-b border-outline-variant hover:bg-surface-container-low transition-colors">
<td class="py-3 px-6 flex items-center gap-3">
<img alt="Guru" class="w-10 h-10 rounded-full object-cover border border-outline-variant" data-alt="Portrait of a male teacher in a neat batik shirt, looking approachable, bright indoor lighting, clean corporate setting suitable for a school administration system." src="https://lh3.googleusercontent.com/aida-public/AB6AXuDpggidvFOFB5d3xFe7p-Lb_d4RdwYvc9olofybqL76AXk-NuyuGh5CoULlPfa3u7FTP53A0Zm4m9pRaiAYIsTCxLrW37gSPSZveJqEc7X7xhk9GySuB2Cu69r_0ChRLua0KxNOsRvw-INpp0zkdWwmcJ_0rvMPzF5aew0SYT7nB7a0bHbUVN3RSL_JF8mRBl_Rxwl_0jCRkAwWsiYtTLFcD6kAdShv-XhBN1UJiuJw__g0nad7zMcd"/>
<div>
<p class="font-medium text-on-surface">Budi Santoso, M.Pd</p>
<p class="text-[12px] text-on-surface-variant">Guru Olahraga</p>
</div>
</td>
<td class="py-3 px-6 font-label-mono text-label-mono text-on-surface-variant">197811252005011002</td>
<td class="py-3 px-6">budi.santoso@alfaizein.sch.id</td>
<td class="py-3 px-6 text-center">
<span class="inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium bg-primary-fixed text-on-primary-fixed-variant">Aktif</span>
</td>
<td class="py-3 px-6 text-right">
<div class="flex items-center justify-end gap-2">
<button class="text-on-surface-variant hover:text-primary p-1 rounded hover:bg-surface-variant transition-colors" title="Edit">
<span class="material-symbols-outlined text-[20px]" data-icon="edit">edit</span>
</button>
<button class="text-on-surface-variant hover:text-error p-1 rounded hover:bg-surface-variant transition-colors" title="Hapus">
<span class="material-symbols-outlined text-[20px]" data-icon="delete">delete</span>
</button>
</div>
</td>
</tr>
</tbody>
</table>
</div>
<!-- Pagination -->
<div class="bg-surface-container-lowest px-6 py-4 border-t border-outline-variant flex items-center justify-between sm:px-6">
<div class="hidden sm:flex-1 sm:flex sm:items-center sm:justify-between">
<div>
<p class="text-sm text-on-surface-variant font-body-sm text-body-sm">
                                Menampilkan <span class="font-medium text-on-surface">1</span> hingga <span class="font-medium text-on-surface">10</span> dari <span class="font-medium text-on-surface">45</span> guru
                            </p>
</div>
<div>
<nav aria-label="Pagination" class="relative z-0 inline-flex rounded-md shadow-sm -space-x-px">
<a class="relative inline-flex items-center px-2 py-2 rounded-l-md border border-outline-variant bg-surface text-sm font-medium text-on-surface-variant hover:bg-surface-variant" href="#">
<span class="sr-only">Previous</span>
<span class="material-symbols-outlined text-[20px]" data-icon="chevron_left">chevron_left</span>
</a>
<a aria-current="page" class="z-10 bg-primary-fixed text-on-primary-fixed-variant relative inline-flex items-center px-4 py-2 border border-outline-variant text-sm font-medium" href="#">1</a>
<a class="bg-surface border-outline-variant text-on-surface-variant hover:bg-surface-variant relative inline-flex items-center px-4 py-2 border text-sm font-medium" href="#">2</a>
<a class="bg-surface border-outline-variant text-on-surface-variant hover:bg-surface-variant relative inline-flex items-center px-4 py-2 border text-sm font-medium" href="#">3</a>
<a class="relative inline-flex items-center px-2 py-2 rounded-r-md border border-outline-variant bg-surface text-sm font-medium text-on-surface-variant hover:bg-surface-variant" href="#">
<span class="sr-only">Next</span>
<span class="material-symbols-outlined text-[20px]" data-icon="chevron_right">chevron_right</span>
</a>
</nav>
</div>
</div>
</div>
</div>
</main>
</div>
</body></html>

```

