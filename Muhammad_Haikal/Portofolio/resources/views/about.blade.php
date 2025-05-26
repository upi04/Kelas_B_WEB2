
<!DOCTYPE html>
<html>
<head>
    <title>About Me</title>
    <meta name="description" content="Profil Muhammad Haikal - Mahasiswa Teknik Informatika UIN Alauddin Makassar">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <div id="particles-js"></div>
    <h1 class="animated-text">Tentang Diri Saya</h1>
    <img src="{{ asset('img/ft2.jpeg') }}" alt="Foto Muhammad Haikal" class="profile-img">
    <p class="about-desc">
        Saya adalah mahasiswa Teknik Informatika di UIN Alauddin Makassar yang memiliki minat di bidang mobile development dan teknologi.<br>
        Saya senang belajar hal baru, berkolaborasi, dan mengembangkan solusi digital yang bermanfaat.
    </p>
    <ul>
        <li><strong>Nama:</strong> Muhammad Haikal</li>
        <li><strong>Tempat, Tanggal Lahir:</strong> Enrekang, 06 Juli 2004</li>
        <li><strong>Alamat:</strong> Kab. Gowa, Maccanda</li>
        <li><strong>Jenis Kelamin:</strong> Laki-laki</li>
        <li><strong>Agama:</strong> Islam</li>
        <li><strong>Status:</strong> Mahasiswa</li>
        <li><strong>Hobi:</strong> Nonton anime, membaca, coding</li>
        <li><strong>Cita-cita:</strong> Mobile Developer di perusahaan besar</li>
        <li><strong>Universitas:</strong> UIN Alauddin Makassar</li>
        <li><strong>Prodi:</strong> Teknik Informatika</li>
        <li><strong>Makanan Kesukaan:</strong> Nasi Goreng, Ayam Bakar</li>
    </ul>
    @include('nav')
    <a href="/" class="back-link">Kembali ke Home</a>
    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
    <script>
    particlesJS.load('particles-js', 'particles.json', function() {
      // Particles loaded
    });
    </script>
</body>
</html>