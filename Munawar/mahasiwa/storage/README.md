
Nama : Munawar
NIM  : 60200123067
Kelas : B





1. Judul Proyek 
    (Sistem Informasi Pemesanan Kopi Online)
     Sebuah aplikasi pemesanan kopi secara daring untuk kedai kopi lokal yang ingin memperluas layanan ke pelanggan secara digital.

2. Latar Belakang
    Kedai kopi konvensional sering mengalami kendala dalam mengelola pemesanan, terutama saat jam sibuk. Pelanggan juga kesulitan mengetahui ketersediaan menu tanpa harus datang langsung. Oleh karena itu, dibutuhkan sistem yang memudahkan proses pemesanan sekaligus meningkatkan efisiensi layanan.

3. Tujuan Sitem 
    - Memberikan platform bagi pelanggan untuk memesan kopi secara online.
    - Mempermudah pemilik kedai dalam mengelola data menu, pemesanan, dan laporan.
    - Meningkatkan kepuasan pelanggan dengan layanan yang cepat dan transparan.

4. Pengguna Utama
    - Admin: Mengelola menu, melihat laporan, mengatur pesanan.
    - User (Pelanggan): Menlihat menu, pemesanan kopi, melihat status pemesanan

5. Spesifikasi Kebutuhan
    a. Autentikasi pengguna (register, login, logout).
        CRUD data menu kopi.
        Pemesanan produk oleh pengguna.
        Lihat status pesanan.
        Riwayat pemesanan pengguna.
        Peran pengguna (admin dan user).
        Fitur ekspor laporan ke PDF.
        Dashboard statistik (Chart.js).
        otifikasi pesanan selesai.

    b.  Sistem aman dengan autentikasi dan middleware.
        Performa cepat dengan eager loading dan query efisien.
        Desain UI responsif (Bootstrap/Tailwind).
        Navigasi mudah dan konsisten.
        Skalabilitas untuk pengembangan fitur ke depan.

6. Flowchart Sistem

        [User] → [Login] → [Lihat Menu] → [Tambah ke Keranjang] → [Checkout] → [Admin Verifikasi] → [Pesanan Dikirim]

7. Diagram konteks

+------------------+           +--------------------------+
|     Pelanggan    |---------> |     Sistem SIPKO         |
| (melihat & pesan)| <-------- | (pengelolaan & notifikasi)|
+------------------+           +--------------------------+
                                      |
                                      |
                           +----------v----------+
                           |        Admin        |
                           | kelola menu, pesanan|
                           +---------------------+


8. ![alt text](<Diagram ERD-1.png>)
