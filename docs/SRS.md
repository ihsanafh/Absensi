**Software Requirements Specification**

**SISTEM PRESENSI GURU BERBASIS QR CODE** **Madrasah Ibtidaiyah AL-Faizein**

**1\. Pendahuluan**

**1.1 Tujuan Penulisan Dokumen**

Dokumen Spesifikasi Kebutuhan Perangkat Lunak (SKPL) ini bertujuan untuk mendefinisikan dan merinci seluruh kebutuhan fungsional dan non-fungsional dari proyek pengembangan "Sistem Presensi Guru Berbasis Web dengan Verifikasi QR Code Dinamis". Dokumen ini menjadi acuan utama bagi tim pengembang dalam proses perancangan, implementasi, dan pengujian sistem, serta berfungsi sebagai kontrak antara pengembang dan pemangku kepentingan agar produk akhir sesuai dengan tujuan dan ruang lingkup yang disepakati bersama.

**1.2 Audien yang Dituju dan Pembaca yang Disarankan**

a. **Pengembang (Developer)** - sebagai panduan teknis utama dalam membangun fitur dan fungsionalitas sistem.

b. **Manajer Proyek** - untuk memantau kemajuan proyek dan memastikan pengembangan sesuai ruang lingkup dan jadwal.

c. **Pihak Sekolah (Klien)** - untuk memahami cara kerja sistem dan memastikan kebutuhan mereka terdokumentasi dengan benar.

**1.3 Ruang Lingkup**

Perangkat lunak yang dikembangkan adalah sistem presensi berbasis web untuk guru, dengan lingkup:

a. Fokus pada pencatatan kehadiran guru melalui pemindaian **QR Code** yang ditampilkan di perangkat Admin/Operator.

b. Dua kali proses pemindaian per hari: **scan masuk** dan **scan keluar**.

c. Deteksi otomatis status **hadir tepat waktu** atau **hadir terlambat**, berdasarkan jam masuk sekolah yang telah ditetapkan.

d. Mekanisme **izin keluar area sekolah** pada jam kerja, yang memerlukan **persetujuan (approval)** dari Admin/Operator sebelum QR izin diterbitkan.

e. Pengambilan foto (selfie) sebagai dokumentasi bukti kehadiran setelah proses scan berhasil - **bukan** sebagai mekanisme verifikasi biometrik otomatis.

f. Setiap Guru memiliki **akun individual** sebagai prasyarat dasar akuntabilitas sistem (lihat KF-01a).

g. Pengembangan dalam bentuk aplikasi web (Web App) menggunakan tumpukan teknologi Laravel (PHP) dengan basis data MySQL, dipilih agar sistem dapat dioperasikan pada shared hosting berbiaya rendah sesuai skala operasional satu madrasah (lihat justifikasi lengkap di 2.5).

h. Pengembangan aplikasi tidak mencakup mekanisme pertahanan lanjut terhadap QR code sharing/screenshot di luar masa berlaku, maupun verifikasi identitas biometrik atas foto bukti kehadiran (lihat justifikasi lengkap di 2.5).

i. Pengembangan aplikasi menggunakan metode Prototyping dengan pengujian sistem dibatasi pada Blackbox Testing dan Usability Testing.

**1.4 Definisi dan Istilah**

a. **SRS/SKPL** - Software Requirements Specification / Spesifikasi Kebutuhan Perangkat Lunak.

b. **Laravel Stack** - PHP (framework Laravel), MySQL, kompatibel dengan lingkungan shared hosting (cPanel).

c. **QR Code (Quick Response Code)** - kode matriks dua dimensi yang dapat dipindai kamera untuk mengodekan data unik, digunakan sebagai token verifikasi kehadiran pada sistem ini.

d. **QR Token Dinamis** - QR Code yang berganti nilai secara berkala (setiap 15-30 detik) untuk mencegah penyalahgunaan melalui screenshot atau pembagian gambar.

e. **Signed Token (HMAC/JWT)** - token yang dihasilkan backend berisi ID sesi presensi dan timestamp, ditandatangani secara digital agar tidak dapat dipalsukan atau dimodifikasi pihak lain.

f. **Grace Period** - jeda toleransi waktu tambahan (mis. 5 detik) di mana token QR yang baru saja kedaluwarsa secara tampilan masih diterima server, untuk mengakomodasi jeda jaringan antara proses scan dan validasi.

g. **Replay Protection** - mekanisme yang mencegah satu token QR digunakan lebih dari satu kali (single-use).

h. **Approval** - proses persetujuan oleh pihak berwenang (Admin/Operator) sebelum suatu aksi (izin keluar) dapat dieksekusi oleh sistem.

i. **API** - Application Programming Interface. j. **UML** - Unified Modeling Language.

**2\. Deskripsi Keseluruhan**

**2.1 Deskripsi Produk**

Sistem yang dikembangkan adalah aplikasi presensi berbasis web yang dirancang untuk mengatasi inefisiensi dan kerentanan sistem presensi manual di sekolah. Proses manual yang ada saat ini membuka celah manipulasi data seperti "titip absen" serta membebani administrasi.

Untuk mengatasi hal tersebut, sistem ini mengusulkan pendekatan presensi berbasis **QR Code yang dikendalikan oleh Admin/Operator di lapangan**. Berbeda dengan pendekatan kiosk QR statis yang rawan disalahgunakan dari jarak jauh, pada sistem ini QR ditampilkan pada perangkat Admin/Operator yang hadir secara fisik di lokasi, sehingga terdapat pengawasan langsung terhadap proses presensi. QR Code juga bersifat dinamis (berganti setiap 15-30 detik, berbasis _signed token_) untuk mencegah penyalahgunaan gambar QR yang telah diambil sebelumnya.

Sebagai lapisan dokumentasi tambahan, setelah pemindaian berhasil, guru diarahkan ke halaman pengambilan foto (selfie) sebagai bukti kehadiran. Foto ini berfungsi sebagai log visual manual dan **bukan** merupakan mekanisme verifikasi identitas otomatis.

Sistem juga menyediakan mekanisme **izin keluar area sekolah** pada jam kerja: guru mengajukan permohonan izin melalui aplikasi, yang harus **disetujui** oleh Admin/Operator sebelum QR izin khusus diterbitkan dan dapat dipindai oleh guru yang bersangkutan.

Setiap guru wajib memiliki **akun individual** - sistem tidak menyediakan mekanisme akun bersama (_shared login_), karena hal ini menjadi prasyarat dasar agar seluruh mekanisme anti-titip-absen memiliki nilai keamanan.

Sistem dikembangkan menggunakan tumpukan teknologi Laravel (PHP) dengan basis data MySQL, memungkinkan aksesibilitas tinggi melalui peramban web tanpa instalasi tambahan. Pemilihan stack ini didasarkan pada mekanisme QR dinamis yang bersifat stateless (dapat dihitung ulang di setiap permintaan tanpa proses server yang berjalan terus-menerus), sehingga sistem dapat dioperasikan pada shared hosting berbiaya rendah tanpa memerlukan Virtual Private Server (VPS), sesuai dengan skala operasional satu madrasah.

**2.2 Fungsi Produk**

a. Memfasilitasi Admin/Operator untuk menampilkan dan mengelola QR Code presensi (masuk dan keluar) yang bersifat dinamis.

b. Memfasilitasi guru untuk melakukan pencatatan kehadiran melalui pemindaian QR Code yang ditampilkan langsung oleh Admin/Operator di lokasi.

c. Mendeteksi secara otomatis status kehadiran (Hadir / Hadir Terlambat) berdasarkan jam masuk sekolah yang ditetapkan.

d. Menyediakan fitur pengambilan foto sebagai dokumentasi bukti kehadiran setelah proses scan berhasil.

e. Memungkinkan guru mengajukan permohonan izin keluar area sekolah, serta memungkinkan Admin/Operator meninjau, menyetujui, atau menolak permohonan tersebut.

f. Menerbitkan QR Code khusus untuk izin keluar yang telah disetujui, serta mencatat waktu keluar dan waktu kembali guru.

g. Menyediakan sistem otentikasi dan manajemen akun individual terpisah untuk peran Admin/Operator dan Guru.

h. Memungkinkan Admin/Operator memantau kehadiran secara real-time, mengelola data guru, serta mengelola keterangan absensi (sakit, izin, alpa) melalui dashboard.

i. Menyediakan fitur untuk menghasilkan laporan kehadiran yang akurat dan dapat diekspor untuk keperluan evaluasi dan administrasi.

**2.3 Penggolongan Karakteristik Pengguna**

| **Kategori Pengguna** | **Tugas**                                                                                                                                                                                         | **Hak Akses ke Aplikasi**                                                                                            | **Kemampuan yang Harus Dimiliki**                                                                                    |
| --------------------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- | -------------------------------------------------------------------------------------------------------------------- |
| **Admin/Operator**    | Menampilkan & mengelola QR presensi, mengelola akun guru, meninjau dan menyetujui/menolak permohonan izin keluar, menerbitkan QR izin, memantau presensi real-time, membuat laporan rekapitulasi. | Create, Read, Update, Delete (CRUD) pada data guru, presensi, dan permohonan izin. Kontrol penuh atas penerbitan QR. | Mampu mengoperasikan aplikasi web untuk manajemen data, memahami prosedur penerbitan QR, dan membuat laporan.        |
| **Guru**              | Melakukan presensi (scan QR masuk/keluar), mengajukan izin keluar, memindai QR izin setelah disetujui, mengelola profil pribadi, melihat riwayat kehadiran.                                       | Create pada data presensi & permohonan izin. Read, Update pada profil pribadi.                                       | Mampu mengoperasikan peramban web di perangkat (PC/smartphone), menggunakan kamera untuk scan QR dan mengambil foto. |

**2.4 Lingkungan Operasi**

Sistem dirancang untuk beroperasi di lingkungan berbasis web modern. Di sisi klien, aplikasi memerlukan perangkat (PC, laptop, atau smartphone) dengan peramban web modern (Chrome, Firefox, Safari) yang mendukung Web API untuk akses kamera (pemindaian QR dan pengambilan foto). Perangkat Admin/Operator memerlukan layar yang dapat menampilkan QR Code dengan jelas (monitor komputer atau layar smartphone). Di sisi server, aplikasi berjalan pada lingkungan eksekusi PHP dengan framework Laravel dan sistem manajemen basis data MySQL, yang kompatibel dengan lingkungan shared hosting (cPanel) sehingga tidak mensyaratkan Virtual Private Server (VPS).

**2.5 Batasan Desain dan Implementasi**

a. Sistem dikembangkan menggunakan tech stack Laravel (PHP) dan MySQL. Stack ini dipilih agar aplikasi dapat dioperasikan pada shared hosting berbiaya rendah, bukan Virtual Private Server (VPS), karena mekanisme QR dinamis pada sistem ini bersifat stateless (nilai token dihitung ulang dari signed HMAC berbasis timestamp pada setiap permintaan) sehingga tidak memerlukan proses background, WebSocket, maupun kontrol server tingkat lanjut yang hanya tersedia di VPS. Pembaruan tampilan QR secara berkala di sisi klien cukup diakomodasi melalui polling AJAX singkat, sehingga kebutuhan performa sistem tetap terpenuhi pada skala operasional satu madrasah dengan biaya infrastruktur yang jauh lebih efisien.

b. Pengguna harus memiliki koneksi internet aktif untuk mengakses sistem dan melakukan presensi.

c. Fungsionalitas pemindaian QR bergantung pada izin akses kamera yang diberikan pengguna melalui peramban.

d. QR Code presensi bersifat dinamis, berbasis _signed token_ dengan masa berlaku terbatas (termasuk _grace period_ singkat) untuk mengurangi risiko penyalahgunaan melalui screenshot atau pembagian gambar QR.

e. Kata sandi pengguna disimpan dan dienkripsi (hashed) di basis data.

f. Foto bukti kehadiran disimpan sebagai dokumentasi log, tanpa proses verifikasi biometrik otomatis.

g. Sistem tidak dapat sepenuhnya mencegah praktik "titip perangkat" (guru menitipkan ponsel ke pihak lain untuk melakukan scan). Risiko ini dimitigasi melalui kombinasi kontrol berlapis (_defense in depth_): QR dinamis bermasa berlaku pendek, keharusan hadir fisik di lokasi Admin/Operator saat scan, akun individual per guru, serta foto bukti kehadiran sebagai catatan visual yang dapat ditinjau manual jika terjadi kejanggalan.

h. Setiap Guru wajib memiliki akun individual (satu akun = satu identitas Guru); sistem tidak menyediakan mekanisme _shared login_ atau akun generik (lihat KF-01a).

i. Karena sistem tidak menggunakan validasi lokasi (geofencing), keabsahan presensi sepenuhnya bertumpu pada kombinasi: QR dinamis bermasa berlaku singkat, kehadiran fisik Admin/Operator yang mengontrol dan mengawasi langsung proses scan, akun individual per guru, dan foto bukti kehadiran sebagai jejak audit. Pendekatan ini dipilih karena untuk skala satu madrasah, pengawasan fisik langsung oleh Admin/Operator dinilai sudah menjadi kontrol utama yang efektif, sehingga lapisan validasi lokasi tambahan tidak sebanding dengan kompleksitas dan biaya implementasinya (lihat juga poin g).

**2.6 Dokumentasi Pengguna**

- **Panduan Pengguna untuk Admin/Operator**: manajemen akun guru; prosedur menampilkan & mengelola QR presensi; meninjau dan menyetujui/menolak permohonan izin keluar; menerbitkan QR izin; memantau data presensi harian; membuat dan mengekspor laporan.
- **Panduan Pengguna untuk Guru**: cara login; langkah melakukan presensi (scan QR masuk/keluar + foto bukti); cara mengajukan izin keluar; cara memindai QR izin; cara melihat riwayat dan statistik kehadiran pribadi.
- **Instruksi Halaman Presensi**: instruksi singkat langsung pada antarmuka halaman scan QR dan pengambilan foto untuk memandu guru.

**3\. Kebutuhan Antarmuka Eksternal**

**3.1 Antarmuka Pengguna**

a. **Portal Admin/Operator**: antarmuka bersih dan profesional, menampilkan dashboard statistik, panel QR Code presensi (masuk/keluar) yang dapat ditampilkan penuh layar, panel peninjauan permohonan izin keluar, tabel data presensi guru, dan menu pembuatan laporan.

b. **Portal Guru**: antarmuka sederhana berfokus pada aksi presensi, mencakup halaman profil, halaman pengajuan izin keluar, serta halaman riwayat dan statistik presensi.

c. **Halaman Scan QR (Presensi)**: desain minimalis dengan fokus utama pada tampilan kamera untuk memindai QR, dilanjutkan otomatis ke halaman pengambilan foto bukti, dan umpan balik jelas mengenai status keberhasilan/kegagalan (termasuk status "Tepat Waktu" atau "Terlambat").

d. **Halaman Tampilan QR (Operator)**: tampilan QR Code besar dan jelas untuk dipindai guru, dengan indikator sisa waktu sebelum QR berganti.

**3.2 Antarmuka Perangkat Keras**

a. **Kamera**: diperlukan pada perangkat guru untuk memindai QR dan mengambil foto bukti kehadiran.

b. **Layar Tampilan QR**: diperlukan pada perangkat Admin/Operator (monitor/smartphone) untuk menampilkan QR Code yang akan dipindai guru.

c. **Perangkat Pengguna**: PC, laptop, atau ponsel dengan peramban web.

**3.3 Antarmuka Perangkat Lunak**

a. **Peramban Web**: mendukung API Kamera.

b. **PHP (Laravel)**: lingkungan eksekusi backend, kompatibel dengan shared hosting.

c. **MySQL**: sistem manajemen basis data, tersedia luas pada paket shared hosting.

**3.4 Antarmuka Komunikasi**

Komunikasi antara frontend dan backend menggunakan REST API dengan format data JSON. Token QR Code dinamis dihasilkan secara stateless (signed HMAC berbasis timestamp) sehingga dapat dihitung ulang pada setiap permintaan tanpa proses server yang berjalan terus-menerus. Pembaruan tampilan QR di sisi Operator memanfaatkan mekanisme polling AJAX berkala (bukan WebSocket), agar sepenuhnya kompatibel dengan lingkungan shared hosting yang umumnya tidak mendukung koneksi persisten.

**4\. Kebutuhan Fungsional dan Non-Fungsional**

**4.1 Kebutuhan Fungsional (KF)**

**A. Otentikasi dan Manajemen Akun**

| **Kode** | **Deskripsi**                                                                                                                                                                                                                   |
| -------- | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| KF-01    | Sistem harus menyediakan halaman login terpisah untuk Admin/Operator dan Guru menggunakan username/email dan kata sandi.                                                                                                        |
| KF-01a   | Setiap Guru wajib memiliki akun individual (satu akun = satu identitas Guru) yang tidak dapat dibagikan atau digunakan bersama oleh lebih dari satu orang. Sistem tidak menyediakan mekanisme _shared login_ atau akun generik. |
| KF-02    | Sistem harus melakukan enkripsi (hashing) terhadap kata sandi pengguna sebelum disimpan ke basis data.                                                                                                                          |
| KF-03    | Sistem harus menyediakan fitur bagi Admin/Operator untuk menambah, mengubah, menonaktifkan, dan menghapus akun Guru.                                                                                                            |
| KF-04    | Sistem harus mengizinkan Guru untuk melihat dan memperbarui data profil pribadinya (nama, foto profil, kontak).                                                                                                                 |
| KF-05    | Sistem harus mengizinkan pengguna untuk mengubah kata sandi akunnya sendiri.                                                                                                                                                    |
| KF-06    | Sistem harus membatasi akses fitur sesuai peran (role-based access control): Admin/Operator dan Guru memiliki menu dan hak akses yang berbeda.                                                                                  |

**B. Presensi - Scan Masuk & Scan Keluar**

| **Kode** | **Deskripsi**                                                                                                                                                                                                    |
| -------- | ---------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| KF-07    | Sistem harus menghasilkan QR Code presensi berbasis _signed token_ (HMAC/JWT) yang berganti nilai setiap 15-30 detik, dan ditampilkan pada perangkat Admin/Operator.                                             |
| KF-08    | Sistem harus menyediakan indikator sisa waktu sebelum QR Code berganti pada tampilan Operator.                                                                                                                   |
| KF-09    | Sistem harus menyediakan halaman pemindaian QR bagi Guru menggunakan kamera perangkat.                                                                                                                           |
| KF-10    | Sistem harus menolak proses scan apabila token QR sudah kedaluwarsa (melewati masa berlaku beserta _grace period_\-nya) atau sudah pernah digunakan sebelumnya (_replay protection_).                            |
| KF-11    | Sistem harus secara otomatis mengarahkan Guru ke halaman pengambilan foto (selfie) setelah proses scan QR berhasil divalidasi.                                                                                   |
| KF-12    | Sistem harus menyimpan foto bukti kehadiran beserta stempel waktu (timestamp) saat scan.                                                                                                                         |
| KF-13    | Sistem harus mendeteksi dan mencatat status kehadiran secara otomatis sebagai "Hadir Tepat Waktu" atau "Hadir Terlambat", berdasarkan perbandingan waktu scan dengan jam masuk sekolah yang telah dikonfigurasi. |
| KF-14    | Sistem harus mencatat waktu scan keluar Guru pada sesi presensi pulang, terpisah dari sesi presensi masuk.                                                                                                       |
| KF-15    | Sistem harus menampilkan umpan balik (notifikasi) yang jelas kepada Guru mengenai keberhasilan atau kegagalan proses presensi beserta alasannya (mis. "QR kedaluwarsa", "Token tidak valid").                    |
| KF-16    | Sistem harus mencegah Guru melakukan scan masuk lebih dari satu kali dalam sesi presensi masuk yang sama pada hari yang sama (begitu juga untuk scan keluar).                                                    |

**C. Izin Keluar Area Sekolah**

| **Kode** | **Deskripsi**                                                                                                               |
| -------- | --------------------------------------------------------------------------------------------------------------------------- |
| KF-17    | Sistem harus menyediakan formulir pengajuan izin keluar area sekolah bagi Guru, mencakup alasan dan estimasi waktu kembali. |
| KF-18    | Sistem harus mengirimkan notifikasi permohonan izin baru kepada Admin/Operator.                                             |
| KF-19    | Sistem harus menyediakan fitur bagi Admin/Operator untuk meninjau, menyetujui, atau menolak permohonan izin keluar.         |
| KF-20    | Sistem harus menerbitkan QR Code khusus izin keluar hanya setelah permohonan disetujui oleh Admin/Operator.                 |
| KF-21    | Sistem harus mencatat waktu keluar Guru saat QR izin dipindai oleh Guru yang bersangkutan.                                  |
| KF-22    | Sistem harus mencatat waktu kembali Guru ke area sekolah melalui scan ulang QR saat kembali.                                |
| KF-23    | Sistem harus menampilkan status permohonan izin (Menunggu / Disetujui / Ditolak) kepada Guru yang mengajukan.               |

**D. Dashboard dan Pemantauan (Admin/Operator)**

| **Kode** | **Deskripsi**                                                                                                                                                  |
| -------- | -------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| KF-24    | Sistem harus menyediakan dashboard yang menampilkan ringkasan kehadiran Guru secara real-time (jumlah hadir, terlambat, izin, alpa pada hari berjalan).        |
| KF-25    | Sistem harus menyediakan tabel data presensi harian yang dapat difilter berdasarkan tanggal, nama Guru, dan status kehadiran.                                  |
| KF-26    | Sistem harus mengizinkan Admin/Operator untuk menginput atau mengubah keterangan absensi (sakit, izin, alpa) secara manual untuk kasus di luar mekanisme scan. |
| KF-27    | Sistem harus mengizinkan Admin/Operator mengonfigurasi parameter sistem, seperti jam masuk sekolah dan interval rotasi QR.                                     |

**E. Riwayat dan Pelaporan**

| **Kode** | **Deskripsi**                                                                                                                              |
| -------- | ------------------------------------------------------------------------------------------------------------------------------------------ |
| KF-28    | Sistem harus mengizinkan Guru melihat riwayat dan statistik kehadiran pribadinya (harian, mingguan, bulanan).                              |
| KF-29    | Sistem harus menyediakan fitur bagi Admin/Operator untuk menghasilkan laporan rekapitulasi kehadiran berdasarkan rentang tanggal tertentu. |
| KF-30    | Sistem harus mengizinkan laporan kehadiran diekspor ke format file yang umum digunakan (mis. PDF dan/atau Excel).                          |

**4.2 Kebutuhan Non-Fungsional (KNF)**

| **Kode** | **Kategori**                   | **Deskripsi**                                                                                                                                                                                                                                                 |
| -------- | ------------------------------ | ------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------------- |
| KNF-01   | Kinerja (Performance)          | Sistem harus mampu memproses dan memvalidasi satu transaksi scan QR dalam waktu maksimal 3 detik pada kondisi jaringan normal.                                                                                                                                |
| KNF-02   | Kinerja (Performance)          | Dashboard Admin/Operator harus mampu memperbarui data kehadiran secara real-time dengan jeda maksimal 5 detik setelah suatu presensi tercatat.                                                                                                                |
| KNF-03   | Keamanan (Security)            | Seluruh kata sandi pengguna harus disimpan dalam bentuk terenkripsi (hashed), tidak dalam bentuk teks polos (plain text).                                                                                                                                     |
| KNF-04   | Keamanan (Security)            | Komunikasi antara klien dan server harus menggunakan protokol HTTPS.                                                                                                                                                                                          |
| KNF-05   | Keamanan (Security)            | Token QR harus berupa _signed token_ (HMAC/JWT), memiliki masa berlaku terbatas dengan _grace period_ singkat, bersifat _single-use_ (_replay protection_), dan validasi token harus dibatasi laju percobaannya (_rate limiting_) untuk mencegah brute-force. |
| KNF-06   | Keamanan (Security)            | Sistem harus menerapkan pembatasan akses berbasis peran (role-based access control) agar Guru tidak dapat mengakses fitur milik Admin/Operator, dan sebaliknya.                                                                                               |
| KNF-07   | Kegunaan (Usability)           | Antarmuka halaman scan QR harus dapat dioperasikan oleh pengguna awam tanpa pelatihan khusus, dengan alur maksimal 3 langkah dari membuka halaman hingga presensi tercatat.                                                                                   |
| KNF-08   | Kegunaan (Usability)           | Sistem harus memberikan pesan kesalahan (error message) yang informatif dan mudah dipahami, bukan pesan teknis mentah (mis. kode error server).                                                                                                               |
| KNF-09   | Keandalan (Reliability)        | Sistem harus memiliki ketersediaan (uptime) minimal 99% selama jam operasional sekolah.                                                                                                                                                                       |
| KNF-10   | Keandalan (Reliability)        | Sistem harus melakukan pencatatan log (log activity) untuk setiap transaksi presensi, validasi token (berhasil/gagal), dan persetujuan izin, guna keperluan audit.                                                                                            |
| KNF-11   | Portabilitas (Portability)     | Aplikasi web harus dapat diakses dan berfungsi dengan baik pada peramban modern (Chrome, Firefox, Safari) di perangkat desktop maupun mobile (responsive design).                                                                                             |
| KNF-12   | Skalabilitas (Scalability)     | Arsitektur sistem harus mampu menangani penambahan jumlah data Guru dan riwayat presensi tanpa penurunan kinerja yang signifikan, minimal untuk skala satu sekolah (hingga ±100 pengguna aktif).                                                              |
| KNF-13   | Pemeliharaan (Maintainability) | Kode program harus mengikuti struktur modular (pemisahan frontend, backend, dan basis data) agar mudah dipelihara dan dikembangkan lebih lanjut.                                                                                                              |
| KNF-14   | Kepatuhan Data (Data Privacy)  | Data pribadi Guru (foto, kata sandi) hanya dapat diakses oleh pihak yang berwenang (Guru pemilik data dan Admin/Operator), sesuai dengan hak akses masing-masing peran.                                                                                       |

**5\. Daftar Halaman Aplikasi (Site Map)**

**5.1 Halaman Publik / Umum**

| **Kode** | **Nama Halaman** | **Deskripsi Singkat**                                                                                                                  | **Referensi KF** |
| -------- | ---------------- | -------------------------------------------------------------------------------------------------------------------------------------- | ---------------- |
| H-01     | Login            | Formulir login tunggal yang mendeteksi peran (Admin/Operator atau Guru) berdasarkan akun, lalu mengarahkan ke dashboard masing-masing. | KF-01, KF-01a    |
| H-02     | Lupa Kata Sandi  | Formulir permintaan reset kata sandi (via email).                                                                                      | KF-05            |
| H-03     | Reset Kata Sandi | Halaman input kata sandi baru setelah verifikasi tautan reset.                                                                         | KF-05            |

**5.2 Halaman Guru**

| **Kode** | **Nama Halaman**              | **Deskripsi Singkat**                                                                                          | **Referensi KF**    |
| -------- | ----------------------------- | -------------------------------------------------------------------------------------------------------------- | ------------------- |
| H-04     | Dashboard Guru                | Ringkasan status presensi hari ini (sudah/belum masuk-pulang), notifikasi status izin, akses cepat ke scan QR. | KF-15, KF-23        |
| H-05     | Scan QR Presensi              | Tampilan kamera untuk memindai QR masuk/keluar; menampilkan status validasi token secara real-time.            | KF-09, KF-10, KF-15 |
| H-06     | Ambil Foto Bukti Kehadiran    | Halaman kamera selfie yang otomatis terbuka setelah scan berhasil; tombol ambil ulang jika foto tidak jelas.   | KF-11, KF-12        |
| H-07     | Konfirmasi Presensi Berhasil  | Halaman ringkasan hasil presensi: waktu, status (Tepat Waktu/Terlambat).                                       | KF-13, KF-15        |
| H-08     | Pengajuan Izin Keluar         | Formulir input alasan dan estimasi waktu kembali untuk izin keluar area sekolah.                               | KF-17               |
| H-09     | Status Permohonan Izin        | Daftar riwayat pengajuan izin beserta status (Menunggu/Disetujui/Ditolak).                                     | KF-23               |
| H-10     | Scan QR Izin Keluar           | Halaman kamera khusus untuk memindai QR izin yang telah disetujui, mencatat waktu keluar dan waktu kembali.    | KF-20, KF-21, KF-22 |
| H-11     | Riwayat & Statistik Kehadiran | Kalender/tabel riwayat kehadiran pribadi (harian, mingguan, bulanan) beserta grafik ringkas.                   | KF-28               |
| H-12     | Profil Saya                   | Lihat dan ubah data profil pribadi (nama, foto, kontak) serta ubah kata sandi.                                 | KF-04, KF-05        |

**5.3 Halaman Admin/Operator**

| **Kode** | **Nama Halaman**                   | **Deskripsi Singkat**                                                                              | **Referensi KF** |
| -------- | ---------------------------------- | -------------------------------------------------------------------------------------------------- | ---------------- |
| H-13     | Dashboard Admin/Operator           | Ringkasan statistik kehadiran real-time (hadir, terlambat, izin, alpa) hari berjalan.              | KF-24            |
| H-14     | Tampilan QR Presensi (Layar Besar) | Tampilan QR Code full-screen (mode masuk/keluar dapat dipilih) dengan indikator sisa waktu rotasi. | KF-07, KF-08     |
| H-15     | Manajemen Akun Guru                | Tabel daftar guru dengan aksi tambah, ubah, nonaktifkan, hapus akun.                               | KF-03            |
| H-16     | Detail/Form Akun Guru              | Formulir tambah/ubah data akun dan profil guru.                                                    | KF-03, KF-01a    |
| H-17     | Data Presensi Harian               | Tabel presensi dengan filter tanggal, nama guru, dan status; opsi edit keterangan manual.          | KF-25, KF-26     |
| H-18     | Peninjauan Permohonan Izin         | Daftar permohonan izin masuk, dengan aksi setujui/tolak beserta catatan.                           | KF-18, KF-19     |
| H-19     | Riwayat Izin Keluar                | Log lengkap izin keluar yang telah diproses beserta waktu keluar-kembali.                          | KF-21, KF-22     |
| H-20     | Pengaturan Sistem                  | Konfigurasi jam masuk sekolah dan interval rotasi QR.                                              | KF-27            |
| H-21     | Laporan & Rekapitulasi             | Form pemilihan rentang tanggal dan filter, tombol ekspor ke PDF/Excel.                             | KF-29, KF-30     |
| H-22     | Log Aktivitas (Audit Trail)        | Daftar log transaksi presensi dan validasi token untuk keperluan audit.                            | KNF-10           |
| H-23     | Profil Saya (Admin)                | Lihat/ubah data profil dan kata sandi Admin/Operator.                                              | KF-04, KF-05     |

**5.4 Halaman Error / Sistem**

| **Kode** | **Nama Halaman**              | **Deskripsi Singkat**                                                             |
| -------- | ----------------------------- | --------------------------------------------------------------------------------- |
| H-24     | 403 - Akses Ditolak           | Ditampilkan saat peran mencoba mengakses halaman di luar hak aksesnya.            |
| H-25     | 404 - Halaman Tidak Ditemukan | Halaman fallback untuk rute yang tidak valid.                                     |
| H-26     | 500 - Kesalahan Server        | Halaman fallback saat terjadi error server, dengan pesan ramah pengguna (KNF-08). |