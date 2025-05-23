<!-- resources/views/home.blade.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Beranda</title>
</head>
<body>
    <h1>Selamat Datang di Halaman Beranda</h1>
    
    <p>Ini adalah halaman utama dari website Anda.</p>

    <p>
        Anda dapat mengunjungi halaman lain seperti:
        <ul>
            <li><a href="{{ route('about') }}">Tentang</a></li>
            <li><a href="{{ route('contact') }}">Kontak</a></li>
            <li><a href="{{ route('projects') }}">Proyek</a></li>
            <li><a href="{{ route('skills') }}">Keahlian</a></li>
            <li><a href="{{ route('about') }}">Data Diri</a></li>
        </ul>
    </p>

    <a href="{{ url('/') }}">← Kembali ke Daftar Halaman</a>
</body>
</html>
