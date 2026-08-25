# Sistem Presensi Guru Berbasis QR Code - MI AL-Faizein

Sebuah sistem presensi modern dan manajemen izin keluar untuk tenaga pengajar (guru) di MI AL-Faizein. Dibangun dengan mengedepankan performa tinggi, keamanan, dan UX yang responsif.

## 🚀 Fitur Utama

- **Otentikasi & Manajemen Akun**: Sistem otentikasi aman dengan pemisahan hak akses (Role-Based Access Control) antara **Admin/Operator** dan **Guru**.
- **Presensi via QR Code Dinamis**: Menggunakan token terenkripsi (HMAC/JWT) yang dirotasi secara dinamis untuk mencegah kecurangan (*replay-attack*). Pemindaian dilakukan langsung melalui kamera web perangkat guru.
- **Sistem Izin Keluar Terpadu**: Pengajuan izin keluar area sekolah yang terintegrasi dengan alur persetujuan Admin serta penerbitan tiket QR izin khusus.
- **Notifikasi & UX Interaktif**: Pengalaman pengguna yang elegan dengan modal Alpine.js dan notifikasi terpusat menggunakan SweetAlert2.
- **Desain Bento-Card Modern**: Antarmuka bersih dengan standarisasi tipografi (Poppins) dan komponen UI menggunakan **Tailwind CSS v4**.

## 🛠️ Tech Stack

- **Backend**: Laravel 11 (PHP 8.2+)
- **Database**: MySQL
- **Frontend**: Tailwind CSS v4, Alpine.js, Blade Components
- **Bundler**: Vite
- **Integrasi Pihak Ketiga**: SweetAlert2 (Alert & Toast), HTML5-QRCode (Scanner)

## 📋 Prasyarat Sistem

Pastikan environment Anda memiliki:
- PHP >= 8.2
- Composer
- Node.js & NPM
- Database MySQL (misal: Laragon, XAMPP)

## ⚙️ Instalasi & Setup Lokal

1. **Kloning Repository**
   ```bash
   git clone <repository-url>
   cd Absensi
   ```

2. **Instalasi Dependensi**
   ```bash
   composer install
   npm install
   ```

3. **Konfigurasi Environment (`.env`)**
   Copy file `.env.example` menjadi `.env`, lalu buat database kosong bernama `presensi_guru` di MySQL Anda. Sesuaikan `.env`:
   ```env
   APP_URL=http://localhost:8000
   
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=presensi_guru
   DB_USERNAME=root
   DB_PASSWORD=
   ```

4. **Generate Key & Migrasi Data**
   ```bash
   php artisan key:generate
   php artisan migrate --seed
   ```

5. **Jalankan Aplikasi**
   Buka dua jendela terminal untuk menjalankan server PHP dan kompilator aset Vite:
   ```bash
   php artisan serve
   ```
   ```bash
   npm run dev
   ```

## 🔒 Arsitektur & Kebijakan "Zero Bloatware"

Sistem ini didesain sesuai panduan SRS (Software Requirements Specification) dengan batasan performa yang ketat:
- **Performa Tinggi**: Penulisan kode dioptimalkan untuk mempertahankan skor PageSpeed di atas 87 (Mobile) dan 95 (Desktop).
- **Anti Bloatware**: Dilarang keras menggunakan *package* PHP berat seperti DomPDF atau Maatwebsite Excel. Fitur ekspor harus menggunakan pustaka/fungsi *native* PHP.
- **DOM Culling**: Skrip kamera hanya dimuat (diinisialisasi) pada saat halaman scan aktif, dan akan dihancurkan total dari DOM begitu proses usai untuk mencegah kebocoran memori (*memory leak*).
- **Tanpa GPS/Geofencing**: Sistem 100% bergantung pada kedekatan fisik guru memindai layar admin, tanpa melibatkan pembacaan lokasi GPS perangkat klien.

## 📄 Hak Cipta & Lisensi

Proyek ini dikembangkan secara eksklusif untuk kebutuhan presensi dan manajemen internal **MI AL-Faizein**.
