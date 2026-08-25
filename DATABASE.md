# DATABASE.md — Skema Database Sistem Presensi Guru (MI AL-Faizein)

Rujukan skema database untuk AI Agent. Dokumen ini turunan langsung dari `docs/SRS.md`
(khususnya section 4.1 KF-01 s/d KF-30, section 3.4 Antarmuka Komunikasi, dan section 1.4
definisi istilah). Buat migration Laravel berdasarkan tabel-tabel di bawah, urutannya sudah
memperhatikan dependency foreign key.

**Konvensi umum:**
- Engine: InnoDB, charset `utf8mb4`, collation `utf8mb4_unicode_ci`
- Primary key: `id` (bigint unsigned, auto increment) di semua tabel kecuali disebutkan lain
- Semua tabel punya `created_at` / `updated_at` (Laravel timestamps) kecuali disebutkan lain
- Status/enum disimpan sebagai slug bahasa Inggris di database (`on_time`, `late`, dst) — bukan teks Indonesia langsung — supaya tidak fragile kalau copy UI berubah. Mapping ke label Bahasa Indonesia dilakukan di layer Resource/Presenter, bukan di database.
- Foreign key ke `users.id` selalu `onDelete('restrict')` untuk data transaksional (presensi, izin, log) — jangan cascade delete, karena data ini harus tetap ada untuk audit (KNF-10) walau akun guru dinonaktifkan.

---

## 1. `users`

Menyimpan akun Admin/Operator dan Guru dalam satu tabel dengan pembeda `role`. Satu akun = satu identitas (KF-01a) — tidak ada mekanisme akun bersama.

| Kolom | Tipe | Keterangan |
|---|---|---|
| `id` | bigint unsigned, PK | |
| `role` | enum('admin','guru') | Menentukan hak akses (KF-06, KNF-06) |
| `nama_lengkap` | varchar(150) | |
| `username` | varchar(50), unique | Dipakai untuk login (KF-01) |
| `email` | varchar(150), unique | |
| `password` | varchar(255) | Di-hash dengan bcrypt/argon2 (KF-02, KNF-03) |
| `nip` | varchar(30), nullable, unique | Hanya diisi untuk role guru |
| `kelas` | varchar(50), nullable | Hanya untuk role guru, mis. "Kelas 3" — tampil di H-12 |
| `no_telepon` | varchar(20), nullable | |
| `foto_profil` | varchar(255), nullable | Path/URL file |
| `status_akun` | enum('aktif','nonaktif'), default 'aktif' | Untuk fitur nonaktifkan di KF-03 — beda dari hapus akun |
| `deleted_at` | timestamp, nullable | Soft delete — untuk fitur "hapus akun" (KF-03) tanpa kehilangan histori presensi guru terkait |
| `created_at`, `updated_at` | timestamp | |

**Index:** `username`, `email`, `nip` (unique), `role`.

---

## 2. `password_reset_tokens`

Tabel default Laravel untuk fitur lupa kata sandi (KF-05, H-02, H-03). Tidak perlu migration custom — gunakan struktur bawaan Laravel (`email`, `token`, `created_at`).

---

## 3. `settings`

Key-value store untuk parameter sistem yang dikonfigurasi Admin di H-20 (KF-27). Singleton per key, bukan per user.

| Kolom | Tipe | Keterangan |
|---|---|---|
| `id` | bigint unsigned, PK | |
| `key` | varchar(100), unique | mis. `jam_masuk_sekolah`, `toleransi_keterlambatan_menit`, `interval_rotasi_qr_detik` |
| `value` | varchar(255) | Disimpan sebagai string, di-cast sesuai kebutuhan di kode |
| `updated_at` | timestamp | |

**Seed default:**
- `jam_masuk_sekolah` = `07:00`
- `toleransi_keterlambatan_menit` = `15`
- `interval_rotasi_qr_detik` = `20`

Catatan: tabel ini SENGAJA tidak menyimpan field lokasi/radius apa pun — SRS §2.5i menegaskan sistem tidak memakai geofencing.

---

## 4. `attendances` (Presensi Harian)

Satu baris per guru per hari, mencakup sesi masuk dan keluar (KF-13, KF-14). Ini tabel inti sistem.

| Kolom | Tipe | Keterangan |
|---|---|---|
| `id` | bigint unsigned, PK | |
| `user_id` | bigint unsigned, FK → `users.id` | Guru pemilik record |
| `tanggal` | date | Untuk constraint unique per hari |
| `waktu_masuk` | datetime, nullable | Diisi saat scan masuk berhasil |
| `status_masuk` | enum('on_time','late'), nullable | Dihitung otomatis dari `waktu_masuk` vs `settings.jam_masuk_sekolah` + toleransi (KF-13) |
| `foto_masuk` | varchar(255), nullable | Path foto bukti kehadiran saat masuk (KF-12) |
| `waktu_keluar` | datetime, nullable | Diisi saat scan keluar berhasil (KF-14) |
| `foto_keluar` | varchar(255), nullable | Path foto bukti saat keluar |
| `keterangan` | enum('hadir','sakit','izin','alpa'), default 'alpa' | Diisi otomatis 'hadir' saat scan berhasil, atau diubah manual oleh Admin (KF-26) |
| `diedit_manual` | boolean, default false | Menampilkan tag "Diedit Manual" di H-17 |
| `edited_by` | bigint unsigned, FK → `users.id`, nullable | Admin yang mengedit manual, untuk audit |
| `created_at`, `updated_at` | timestamp | |

**Constraint:** unique (`user_id`, `tanggal`) — satu guru hanya satu record presensi per hari, mencegah scan masuk/keluar dobel (KF-16) di level database, bukan cuma validasi aplikasi.

**Index:** (`tanggal`, `status_masuk`) untuk query dashboard/laporan cepat (KF-24, KF-29).

---

## 5. `leave_requests` (Izin Keluar Area Sekolah)

Menangani seluruh alur KF-17 s/d KF-23.

| Kolom | Tipe | Keterangan |
|---|---|---|
| `id` | bigint unsigned, PK | |
| `user_id` | bigint unsigned, FK → `users.id` | Guru pengaju |
| `alasan` | varchar(100) | Dari dropdown "Alasan Keluar" (KF-17) |
| `keterangan_tambahan` | text, nullable | |
| `estimasi_waktu_kembali` | time | |
| `status` | enum('pending','approved','rejected'), default 'pending' | Ditampilkan sebagai Menunggu/Disetujui/Ditolak (KF-23) |
| `catatan_admin` | varchar(255), nullable | Catatan saat approve/reject (disebut di H-18) |
| `approved_by` | bigint unsigned, FK → `users.id`, nullable | Admin yang memproses (KF-19) |
| `approved_at` | datetime, nullable | |
| `waktu_keluar_aktual` | datetime, nullable | Diisi saat guru scan QR izin keluar (KF-21) |
| `waktu_kembali_aktual` | datetime, nullable | Diisi saat guru scan ulang QR saat kembali (KF-22) |
| `created_at`, `updated_at` | timestamp | |

**Index:** (`user_id`, `status`), (`status`, `created_at`) untuk tab "Menunggu" di H-18.

**Catatan penting:** QR izin keluar (KF-20) dibangkitkan dari `id` record ini + tipe aksi (keluar/kembali), ditandatangani HMAC — TIDAK butuh tabel token terpisah karena state-nya sudah tercermin dari `waktu_keluar_aktual`/`waktu_kembali_aktual` yang null atau tidak (stateless check).

---

## 6. `qr_scan_logs`

Mencatat setiap penggunaan token QR presensi (bukan izin — izin sudah tercatat via kolom di `leave_requests`) untuk replay protection dan audit (KF-10, KNF-05, KNF-10). Karena token QR presensi bersifat umum (satu QR yang sama bisa dipindai banyak guru dalam window rotasinya), replay protection diterapkan **per kombinasi token+user**, bukan per token saja.

| Kolom | Tipe | Keterangan |
|---|---|---|
| `id` | bigint unsigned, PK | |
| `token_jti` | varchar(64) | ID unik token (klaim `jti` di JWT/HMAC payload) |
| `user_id` | bigint unsigned, FK → `users.id` | Guru yang melakukan scan |
| `purpose` | enum('presensi_masuk','presensi_keluar') | |
| `is_valid` | boolean | true jika lolos validasi, false jika ditolak (expired/replay) — dicatat juga percobaan gagal untuk audit |
| `rejection_reason` | varchar(100), nullable | mis. "token_expired", "replay_detected" — dipakai untuk pesan error di KF-15 |
| `scanned_at` | timestamp | |

**Constraint:** unique (`token_jti`, `user_id`) — mencegah satu guru pakai frame QR yang sama dua kali (replay protection KF-10), sekaligus baris ini otomatis jadi audit trail granular untuk KNF-10.

**Index:** `token_jti`, `scanned_at`.

---

## 7. `activity_logs` (Audit Trail — H-22)

Log umum lintas aktivitas sistem selain scan QR (yang sudah punya log sendiri di tabel 6), untuk memenuhi KNF-10: transaksi presensi, approval izin, perubahan akun, dll.

| Kolom | Tipe | Keterangan |
|---|---|---|
| `id` | bigint unsigned, PK | |
| `user_id` | bigint unsigned, FK → `users.id`, nullable | Aktor; nullable untuk aktivitas sistem otomatis |
| `action` | varchar(100) | mis. `login`, `approve_leave_request`, `deactivate_account`, `manual_edit_attendance` |
| `description` | text | Teks deskriptif untuk ditampilkan di H-22, mis. "Permohonan izin disetujui" |
| `ip_address` | varchar(45), nullable | |
| `device_info` | varchar(255), nullable | User-agent ringkas |
| `created_at` | timestamp | |

**Index:** (`action`, `created_at`), `user_id`.

---

## 8. Relasi Antar Tabel (ringkasan)

```
users (1) ───< attendances (banyak, per tanggal)
users (1) ───< leave_requests (sebagai pengaju)
users (1) ───< leave_requests.approved_by (sebagai admin penyetuju)
users (1) ───< qr_scan_logs
users (1) ───< activity_logs
users (1) ───< attendances.edited_by (sebagai admin pengedit manual)
settings — tabel independen, dibaca oleh logic attendance & QR generation
```

Tidak ada tabel lokasi/koordinat, tidak ada tabel biometrik — sesuai batasan SRS §2.5.

---

## 9. Urutan Migration (untuk Fase 0 di AGENTS.md)

1. `create_users_table` (+ default Laravel `password_reset_tokens`, `sessions`)
2. `create_settings_table` (+ seeder nilai default)
3. `create_attendances_table`
4. `create_leave_requests_table`
5. `create_qr_scan_logs_table`
6. `create_activity_logs_table`

Jalankan seeder awal: 1 akun Admin/Operator default + isi `settings` dengan nilai default di §3, supaya Fase 1 (Auth) langsung bisa dites.
