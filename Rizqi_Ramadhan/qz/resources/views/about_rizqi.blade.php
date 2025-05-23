<!DOCTYPE html>
<html>
<head>
    <title>About Me</title>
    <link rel="stylesheet" href="{{ asset('css/style_about.css') }}">
</head>
<body>

    @section('header-image')
        <img src="{{ asset('about_foto.png') }}" alt="About Logo" style="height: 60px;">
    @endsection

    @include('header')

    <main>
        <p>
            Halo! Saya <strong>Rizqi Ramadhan</strong>, seorang mahasiswa Teknik Informatika di UIN Alauddin Makassar yang memiliki ketertarikan besar di bidang teknologi, terutama <strong>pemrograman</strong>, <strong>IoT</strong>, dan <strong>pengembangan sistem berbasis web</strong>.
        </p>
        <p>
            Saya percaya bahwa teknologi bisa memberikan manfaat besar jika digunakan dengan tepat. Oleh karena itu, saya berusaha mengembangkan proyek-proyek sederhana tapi berdampak, mulai dari sistem absensi berbasis NFC hingga prototype Smart Mirror.
        </p>
        <p>
            Di waktu luang, saya suka belajar hal-hal baru, menulis ide proyek, dan mengasah softskill melalui kegiatan organisasi. Saya percaya setiap langkah kecil adalah bagian dari perjalanan besar menuju impian.
        </p>
        <p style="margin-top: 30px; font-weight: bold; font-size: 16px;">
            Let’s connect and build something impactful together!
        </p>
    </main>

</body>
</html>
