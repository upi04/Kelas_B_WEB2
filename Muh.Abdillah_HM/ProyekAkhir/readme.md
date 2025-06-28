# Sistem Informasi Manajemen Pasien - Klinik An-Nur

Dokumentasi proyek untuk pengembangan Sistem Informasi Manajemen Pasien (SIMPas) di Klinik An-Nur. Proyek ini bertujuan untuk mendigitalisasi alur kerja klinik mulai dari pendaftaran pasien hingga pelaporan.

## 1. Perencanaan dan Dokumentasi

### Latar Belakang
Di banyak fasilitas kesehatan, proses manajemen pasien yang masih manual sering kali menyebabkan berbagai kendala. Masalah yang sering muncul antara lain antrian yang panjang dan tidak teratur, kesulitan dalam pencarian dan pengelolaan rekam medis pasien, serta proses rekapitulasi laporan harian atau bulanan yang memakan waktu dan rentan terhadap kesalahan. Hal ini dapat menurunkan efisiensi operasional klinik dan mempengaruhi kualitas pelayanan kepada pasien.

### Ide dan Tujuan Aplikasi
Ide utama dari proyek ini adalah membangun sebuah Sistem Informasi Manajemen Pasien (SIMPas) berbasis web untuk Klinik An-Nur. Tujuan utamanya adalah untuk mengatasi permasalahan yang ada dengan menyediakan platform terpusat yang dapat:
* Mempercepat proses pendaftaran pasien baru maupun lama.
* Mengelola alur antrian pasien secara digital dan transparan.
* Memudahkan dokter dalam mengakses riwayat dan menginput rekam medis pasien.
* Menyediakan fitur pelaporan otomatis untuk manajemen klinik.
* Meningkatkan efisiensi, akurasi data, dan kualitas pelayanan secara keseluruhan.

### Pengguna Sistem
Sistem ini dirancang untuk digunakan oleh tiga jenis pengguna utama dengan peran dan hak akses yang berbeda:
1.  **Admin**: Bertanggung jawab mengelola data master seperti data user, dokter, dan poli, serta melihat laporan keseluruhan.
2.  **Resepsionis**: Bertugas untuk mengelola pendaftaran pasien, mengatur antrian, dan melihat jadwal dokter.
3.  **Dokter**: Fokus pada pemeriksaan pasien, melihat antrian yang ditujukan kepadanya, serta mengisi dan melihat riwayat rekam medis elektronik pasien.

## 2. Spesifikasi Kebutuhan

### Kebutuhan Fungsional
Berikut adalah fitur-fitur utama yang tersedia untuk setiap pengguna:

**A. Admin**
* **Manajemen User**: Dapat menambah, mengubah, dan menghapus data pengguna (admin, dokter, resepsionis).
* **Manajemen Dokter**: Mengelola data dokter dan spesialisasinya.
* **Manajemen Pasien**: Mengakses dan mengelola seluruh data pasien yang terdaftar di klinik.
* **Melihat Laporan**: Dapat membuat dan melihat laporan kunjungan pasien dalam rentang waktu harian, mingguan, atau bulanan.

**B. Resepsionis**
* **Login**: Masuk ke sistem menggunakan akun yang telah terdaftar.
* **Dashboard**: Melihat ringkasan jumlah pasien dan status antrian yang sedang berlangsung.
* **Pendaftaran Pasien**: Mendaftarkan pasien baru dengan menginput data diri lengkap.
* **Manajemen Antrian**: Menambahkan pasien yang sudah terdaftar ke dalam antrian dokter dan poli yang dituju.
* **Manajemen Pasien**: Melihat daftar pasien yang sudah terdaftar dan melakukan pencarian.
* **Melihat Rekam Medis**: Dapat melihat riwayat rekam medis pasien.
* **Melihat Jadwal Dokter**: Mengakses informasi jadwal praktik dokter.

**C. Dokter**
* **Login**: Masuk ke sistem menggunakan akun yang telah terdaftar.
* **Dashboard**: Melihat jumlah pasien dalam antriannya dan jadwal praktik pribadi.
* **Pemeriksaan Pasien**: Memanggil pasien sesuai urutan antrian untuk memulai pemeriksaan.
* **Manajemen Rekam Medis**: Mengisi data rekam medis elektronik pasien, mencakup keluhan, diagnosa, tindakan, dan resep obat.
* **Melihat Jadwal Praktik**: Melihat detail jadwal praktiknya sendiri.

### Kebutuhan Non-Fungsional
* **Keamanan**: Sistem dilengkapi dengan sistem login berbasis peran (*role-based*) untuk memastikan bahwa setiap pengguna hanya dapat mengakses data dan fitur sesuai dengan hak aksesnya.
* **Kemudahan Penggunaan (*Usability*)**: Antarmuka pengguna dirancang agar intuitif dan mudah digunakan oleh setiap peran, dengan menu navigasi yang jelas dan alur kerja yang sederhana.
* **Performa**: Sistem harus dapat merespons dengan cepat, terutama pada proses pendaftaran dan pengambilan data rekam medis untuk menghindari waktu tunggu yang lama bagi pasien dan staf.

## 3. Diagram Alur Sistem (*Flowchart*)

Alur kerja sistem secara umum, mulai dari pendaftaran pasien oleh resepsionis hingga pemeriksaan oleh dokter dan penyimpanan rekam medis, digambarkan dalam *flowchart* berikut:
![Dlowchart](https://github.com/user-attachments/assets/4e885828-343c-4715-9f68-41e03370b3b6)


## 4. Entity Relationship Diagram (ERD)
![ERD](https://github.com/user-attachments/assets/a5996ae7-54dc-40c3-8a60-0c3b84cc7386)


Desain database sistem didasarkan pada ERD yang mencakup entitas-entitas utama dan relasinya. Berikut adalah penjelasan untuk setiap tabel:

* **1. `users`**: Menyimpan data pengguna sistem seperti admin, resepsionis, dan dokter. Tabel ini memiliki relasi *one-to-one* dengan tabel `dokter` (jika user adalah dokter) dan *one-to-many* ke `log_aktivitas`.
* **2. `dokter`**: Berisi informasi spesifik mengenai dokter. Setiap dokter bisa memiliki banyak jadwal, menangani banyak antrian, dan memiliki banyak rekam medis. Relasinya adalah *one-to-many* ke tabel `jadwal_dokter`, `antrian`, dan `rekam_medis`.
* **3. `pasien`**: Menyimpan data identitas pasien. Setiap pasien dapat memiliki banyak entri di tabel `antrian` dan `rekam_medis`.
* **4. `jadwal_dokter`**: Mencatat jadwal praktik dokter berdasarkan hari dan jam. Tabel ini memiliki relasi *many-to-one* ke tabel `dokter`.
* **5. `antrian`**: Mencatat data antrian pasien yang akan berobat ke dokter tertentu. Tabel ini memiliki relasi *many-to-one* ke tabel `pasien` dan `dokter`.
* **6. `rekam_medis`**: Berisi riwayat hasil pemeriksaan pasien. Tabel ini memiliki relasi *many-to-one* ke tabel `pasien` dan `dokter`.
* **7. `poli`**: Menyimpan informasi mengenai poli yang tersedia di klinik.
* **8. `log_aktivitas`**: Mencatat semua aktivitas yang dilakukan oleh pengguna di dalam sistem. Tabel ini memiliki relasi *many-to-one* ke tabel `users`.
