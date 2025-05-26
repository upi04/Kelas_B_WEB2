
<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
</head>
<body>
    <div id="particles-js"></div>
    <h1>Selamat Datang di Potofolio Saya </h1>

    <img src="<?php echo e(asset('img/ft1.jpeg')); ?>" alt="Foto Saya" style="display:block; margin:24px auto 16px auto; width:180px; border-radius:50%; box-shadow:0 2px 12px rgba(44,108,223,0.15);">

    <nav>
        <a href="/about">About</a> |
        <a href="/projects">Projects</a> |
        <a href="/skills">Skills</a> |
        <a href="/contact">Contact</a>
    </nav>
    <script>
    particlesJS.load('particles-js', 'particles.json', function() {
      // Particles loaded
    });
    </script>
</body>
</html><?php /**PATH C:\Users\ACER\belajar\resources\views/home.blade.php ENDPATH**/ ?>