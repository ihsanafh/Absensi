# AGENTS.md — Sistem Presensi Guru Berbasis QR Code (MI AL-Faizein)

Dokumen ini adalah instruksi kerja untuk AI Agent (Antigravity) yang membangun project ini.
Baca dokumen ini SEBELUM menulis kode apa pun. Ikuti urutan fase secara berurutan — jangan
meloncat fase, jangan mengerjakan banyak fase sekaligus dalam satu pass tanpa berhenti.

---

## 1. Sumber Kebenaran (Source of Truth)

Ada dua dokumen yang WAJIB dirujuk untuk setiap keputusan implementasi:

| Dokumen | Path | Fungsi |
|---|---|---|
| **SRS** | `docs/SRS.md` | Kebutuhan fungsional (KF-01 s/d KF-30), non-fungsional (KNF-01 s/d KNF-14), definisi istilah, batasan desain (section 2.5). Ini otoritas tertinggi untuk *behavior* sistem. |
| **Design Reference (per layar)** | `docs/design/*.md` (26 file, lihat tabel §3) | Otoritas untuk *tampilan* tiap halaman: layout, komponen, warna, copy teks. |

**Aturan prioritas jika ada konflik:** SRS menang untuk soal *logika/aturan bisnis*. File design menang untuk soal *visual/UI*. Jika keduanya benar-benar kontradiktif (mis. file design menyebut elemen yang tidak ada dasarnya di SRS, seperti fitur lokasi/GPS), **berhenti dan tanyakan ke user** — jangan berasumsi sendiri, karena SRS eksplisit menyatakan sistem ini TIDAK menggunakan geofencing/validasi lokasi (lihat SRS §2.5i).

---

## 2. Ringkasan Sistem (untuk konteks cepat agent)

- **Nama:** Sistem Presensi Guru Berbasis QR Code — MI AL-Faizein
- **Stack:** Laravel (PHP) + MySQL, REST API + JSON, kompatibel shared hosting (bukan VPS)
- **Mekanisme inti:** QR Code dinamis (signed HMAC/JWT, rotasi 15–30 detik) ditampilkan di perangkat Admin/Operator → guru scan pakai kamera → auto redirect ke ambil foto bukti → status Hadir Tepat Waktu/Terlambat dihitung otomatis
- **Dua role:** Admin/Operator (kontrol penuh QR, akun guru, approval izin, laporan) dan Guru (scan presensi, ajukan izin, lihat riwayat)
- **TIDAK ADA:** GPS/geofencing, verifikasi biometrik otomatis atas foto, shared login antar guru
- **Bahasa UI:** Bahasa Indonesia, seluruhnya

---

## 2a. Lingkungan Pengembangan & Tooling

**CSS Framework: Tailwind CSS.** Ini bukan pilihan bebas — seluruh 26 file design di
`docs/design/` menggunakan istilah yang literal adalah nama utility class Tailwind
(`rounded-xl`, `shadow-sm`, dsb, lihat Design System di tiap file). Jangan pakai CSS murni
atau framework lain (Bootstrap, Bulma) karena akan memaksa agent menerjemahkan ulang istilah
tersebut secara manual dan berisiko tidak konsisten antar 26 halaman. Setup via Laravel Vite +
`@tailwindcss/vite` (atau `laravel-mix` kalau versi Laravel project ini masih pakai itu — cek
`composer.json` dulu sebelum setup, jangan asumsi).

Tidak perlu menambah komponen library besar (shadcn dsb) — semua komponen (card, badge, sidebar,
table) dibangun manual dengan Tailwind utility classes + Blade component/partial, mengikuti pola
di file design. Font Poppins & Inter (lihat Design System) di-load via Google Fonts atau
self-hosted, agent boleh pilih salah satu, prioritaskan self-hosted untuk performa produksi
nanti tapi tidak wajib di tahap development ini.

**Status proyek saat ini: TAHAP PENGEMBANGAN LOKAL, BELUM DEPLOY.** Database yang dipakai adalah
MySQL bawaan **Laragon** (localhost), bukan environment shared hosting yang disebut sebagai
target akhir di SRS §2.5a. Konsekuensi untuk agent:

- Gunakan konfigurasi `.env` lokal khas Laragon: `DB_CONNECTION=mysql`, `DB_HOST=127.0.0.1`,
  `DB_PORT=3306`, `DB_DATABASE=presensi_guru`, `DB_USERNAME=root`, `DB_PASSWORD=` (kosong,
  default Laragon). Jangan asumsikan kredensial produksi atau tulis config untuk cPanel/shared
  hosting di tahap ini.
- Jangan buat asumsi soal domain, SSL/HTTPS aktual (KNF-04 tetap dicatat sebagai requirement,
  tapi implementasi HTTPS enforcement penuh baru relevan saat deploy — untuk lokal cukup jalan di
  `http://localhost` seperti biasa via Laragon).
- Database `presensi_guru` dibuat manual oleh user via Laragon (HeidiSQL/phpMyAdmin) sebelum
  migration dijalankan — agent TIDAK perlu membuatkan database-nya, cukup pastikan `.env` sudah
  menunjuk ke nama ini, lalu jalankan `php artisan migrate`. Kalau migration gagal dengan error
  "Unknown database", ingatkan user untuk membuat database tersebut dulu, jangan agent yang
  mencoba membuat database via kode aplikasi.
- Migration & seeder harus tetap ditulis portable (tidak hardcode path/host lokal di kode
  aplikasi) — batasan Laragon ini hanya soal `.env`, bukan soal kode.
- Kalau nanti project sudah mau dideploy ke shared hosting sesuai SRS, akan ada instruksi
  terpisah — jangan mulai menyiapkan config produksi sebelum diminta eksplisit.

---

## 3. Peta File Desain → Kode KF → Prioritas Eksekusi

Urutan di bawah **bukan** urutan H-01→H-26 linear, melainkan urutan berdasarkan dependency
teknis (mis. Auth harus lebih dulu dari semua fitur, mesin QR harus ada sebelum flow izin
keluar bisa dibangun karena izin keluar reuse mekanisme QR yang sama).

### FASE 0 — Project Setup & Foundation
Tidak ada file design terkait. Agent mengerjakan:
- Init project Laravel, koneksi MySQL, struktur folder modular (KNF-13)
- Setup role-based access control (Admin/Operator vs Guru) — dasar untuk KF-06, KNF-06
- Setup migration dasar: `users` (dengan kolom role), password hashing (KF-02, KNF-03)
- Setup HTTPS enforcement di config (KNF-04)

**Checkpoint:** jangan lanjut ke Fase 1 sebelum migration `users` + auth scaffolding bisa jalan dan ter-test.

### FASE 1 — Otentikasi & Halaman Publik
| Screen | File Design | KF Terkait |
|---|---|---|
| H-01 | `docs/design/H-01 Login.md` | KF-01, KF-01a, KF-06 |
| H-02 | `docs/design/H-02 Lupa Kata Sandi.md` | KF-05 |
| H-03 | `docs/design/H-03 Reset Kata Sandi.md` | KF-05 |

Catatan penting: KF-01a — satu akun = satu identitas guru, tidak boleh ada mekanisme shared login. Validasi ini di level backend, bukan cuma UI.

**Checkpoint:** login, logout, reset password harus berfungsi end-to-end sebelum lanjut.

### FASE 2 — Shell Dashboard & Manajemen Akun Guru (Admin)
| Screen | File Design | KF Terkait |
|---|---|---|
| H-13 | `docs/design/H-13 Dashboard Admin.md` | KF-24 (shell dulu, data real-time menyusul di Fase 5) |
| H-15 | `docs/design/H-15 Manajemen Akun Guru.md` | KF-03 |
| H-16 | `docs/design/H-16 DetailForm Akun Guru.md` | KF-03, KF-01a |

Kenapa fase ini duluan: guru tidak bisa login (Fase 1 sudah siap) kalau akunnya belum bisa dibuat Admin. Bangun sidebar Admin (§ Navigation Structure di file design) di sini karena dipakai semua halaman Admin berikutnya.

**Checkpoint:** Admin bisa CRUD akun guru, guru baru bisa login dengan akun yang dibuat.

### FASE 3 — Mesin QR & Presensi Masuk/Keluar (inti sistem)
| Screen | File Design | KF Terkait |
|---|---|---|
| H-14 | `docs/design/H-14 Tampilan QR Presensi.md` | KF-07, KF-08 |
| H-04 | `docs/design/H-04 Dashboard Guru.md` | shell dulu, KF-15/KF-23 menyusul |
| H-05 | `docs/design/H-05 Scan QR Presensi.md` | KF-09, KF-10 |
| H-06 | `docs/design/H-06 Ambil Foto Bukti Kehadiran.md` | KF-11, KF-12 |
| H-07 | `docs/design/H-07 Konfirmasi Presensi Berhasil.md` | KF-13, KF-15 |

Ini fase paling kritis. Backend token generation (signed HMAC/JWT, stateless, grace period, replay protection) harus solid dan dites terpisah sebelum dihubungkan ke UI. Rujuk SRS §2.5a dan §1.4 (definisi Grace Period, Replay Protection) sebelum implementasi endpoint validasi token. Terapkan juga KF-16 (cegah scan ganda per sesi/hari) dan KNF-01 (validasi scan ≤3 detik), KNF-05 (rate limiting validasi token).

**Checkpoint:** siklus penuh scan masuk → foto → status tercatat benar (tepat waktu/terlambat) harus jalan sebelum lanjut. Ini fondasi untuk Fase 4.

### FASE 4 — Izin Keluar Area Sekolah
| Screen | File Design | KF Terkait |
|---|---|---|
| H-08 | `docs/design/H-08 Pengajuan Izin Keluar.md` | KF-17 |
| H-09 | `docs/design/H-09 Status Permohonan Izin.md` | KF-23 |
| H-18 | `docs/design/H-18 Peninjauan Permohonan Izin.md` | KF-18, KF-19, KF-20 |
| H-10 | `docs/design/H-10 Scan QR Izin Keluar.md` | KF-20, KF-21, KF-22 |
| H-19 | `docs/design/H-19 Riwayat Izin Keluar.md` | KF-21, KF-22 |

Reuse mesin QR dari Fase 3 (KF-20 menerbitkan QR khusus izin memakai mekanisme signed token yang sama). Jangan bangun ulang dari nol.

**Checkpoint:** alur ajukan → approve → QR izin terbit → scan keluar → scan kembali tercatat, jalan end-to-end.

### FASE 5 — Data Presensi, Dashboard Real-time, Riwayat
| Screen | File Design | KF Terkait |
|---|---|---|
| H-17 | `docs/design/H-17 Data Presensi Harian.md` | KF-25, KF-26 |
| H-11 | `docs/design/H-11 Riwayat & Statistik Kehadiran.md` | KF-28 |
| (update) H-13 | — | KF-24, KNF-02 (real-time ≤5 detik, pakai polling AJAX sesuai SRS §3.4, bukan WebSocket) |
| (update) H-04 | — | KF-15, KF-23 (tampilkan status live + status izin) |

### FASE 6 — Laporan & Audit Log
| Screen | File Design | KF Terkait |
|---|---|---|
| H-21 | `docs/design/H-21 Laporan & Rekapitulasi.md` | KF-29, KF-30 |
| H-22 | `docs/design/H-22 Log Aktivitas.md` | KNF-10 |

### FASE 7 — Pengaturan Sistem
| Screen | File Design | KF Terkait |
|---|---|---|
| H-20 | `docs/design/H-20 Pengaturan Sistem.md` | KF-27 |

Catatan: hanya dua parameter — jam masuk sekolah & interval rotasi QR (+ toleransi keterlambatan). **Jangan tambahkan field geofencing/radius** meski pernah muncul di draft desain lama — SRS §2.5i eksplisit menolak fitur ini.

### FASE 8 — Profil Pengguna
| Screen | File Design | KF Terkait |
|---|---|---|
| H-12 | `docs/design/H-12 Profil Saya (Guru).md` | KF-04, KF-05 |
| H-23 | `docs/design/H-23 Profil Saya (Admin).md` | KF-04, KF-05 |

### FASE 9 — Halaman Error/Sistem
| Screen | File Design | Terkait |
|---|---|---|
| H-24–26 | `docs/design/H-24-26 Error Pages.md` | 403, 404, 500, KNF-08 (pesan error informatif) |

### FASE 10 — Pengerasan Non-Fungsional (lintas fase)
Tidak spesifik satu halaman — cek ulang di akhir terhadap seluruh KNF:
- KNF-06: RBAC ketat (guru tidak bisa akses route Admin dan sebaliknya)
- KNF-09: uptime, error handling graceful
- KNF-11: responsive check di viewport mobile (build tetap desktop-first, tapi verifikasi tidak rusak di mobile)
- KNF-12: uji dengan data dummy skala ~100 guru
- KNF-14: pastikan akses foto/password guru dibatasi sesuai role

---

## 4. Aturan Kerja untuk Agent

1. **Satu fase, satu pass.** Setelah menyelesaikan satu fase, berhenti dan laporkan ringkas: apa yang selesai, file apa yang dibuat/diubah, apakah checkpoint fase tersebut lulus. Jangan otomatis lanjut ke fase berikutnya tanpa konfirmasi, kecuali user secara eksplisit minta "lanjutkan semua fase tanpa berhenti."
2. **Selalu rujuk kode KF/KNF** di komentar/commit message saat mengimplementasikan requirement terkait, agar mudah ditelusuri balik ke SRS.
3. **Ambil desain literal dari file `.md` terkait**, jangan mengarang ulang layout. Kalau ada detail yang tidak disebutkan di file itu, gunakan Navigation Structure & Design System global yang berlaku di semua file (sidebar, palet warna, tipografi) sebagai default.
4. **Jangan implementasikan apa pun yang bertentangan dengan batasan SRS §2.5**, khususnya: tidak ada geofencing, foto bukti bukan verifikasi biometrik otomatis, tidak ada shared login.
5. Semua teks UI dalam **Bahasa Indonesia**, sesuai copy yang ada di masing-masing file design.
6. Setelah tiap fase, jalankan build/test dasar (migration jalan, route tidak 500, minimal smoke test) sebelum melapor selesai.
7. Jika satu file design ternyata belum ada isinya / tidak ditemukan di path yang diharapkan, **berhenti dan tanyakan**, jangan menebak isinya.

---

## 5. Urutan Eksekusi Ringkas (checklist)

- [ ] Fase 0 — Setup project & auth foundation
- [ ] Fase 1 — H-01, H-02, H-03 (Auth)
- [ ] Fase 2 — H-13 (shell), H-15, H-16 (Manajemen Akun Guru)
- [ ] Fase 3 — H-14, H-04 (shell), H-05, H-06, H-07 (Mesin QR & Presensi)
- [ ] Fase 4 — H-08, H-09, H-18, H-10, H-19 (Izin Keluar)
- [ ] Fase 5 — H-17, H-11, update H-13 & H-04 (Data & Real-time)
- [ ] Fase 6 — H-21, H-22 (Laporan & Log)
- [ ] Fase 7 — H-20 (Pengaturan)
- [ ] Fase 8 — H-12, H-23 (Profil)
- [ ] Fase 9 — H-24–26 (Error Pages)
- [ ] Fase 10 — Pengerasan KNF lintas fase
