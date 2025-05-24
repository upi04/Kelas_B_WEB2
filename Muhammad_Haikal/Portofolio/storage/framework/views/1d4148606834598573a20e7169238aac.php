
<!DOCTYPE html>
<html>
<head>
    <title>Contact</title>
    <link rel="stylesheet" href="<?php echo e(asset('css/style.css')); ?>">
    <script src="https://cdn.jsdelivr.net/npm/particles.js@2.0.0/particles.min.js"></script>
</head>
<body>
    <div id="particles-js"></div>
    <h1>Contact Me</h1>
    <div class="contact-icons">
        <a href="mailto:Haikal@gmail.com" target="_blank" title="Email">
            <img src="<?php echo e(asset('img/gmail.jpeg')); ?>" alt="Gmail" />
        </a>
        <a href="https://wa.me/6282155217480" target="_blank" title="WhatsApp">
            <img src="<?php echo e(asset('img/wa.jpeg')); ?>" alt="WhatsApp" />
        </a>
        <a href="https://instagram.com/muhammadhaikal_529" target="_blank" title="Instagram">
            <img src="<?php echo e(asset('img/ig.jpeg')); ?>" alt="Instagram" />
        </a>
    </div>

    <div class="contact-box">
        <p><strong>Email:</strong> Haikal@gmail.com</p>
        <p><strong>WhatsApp:</strong> 082155217480</p>
        <p><strong>Instagram:</strong> <a href="https://instagram.com/muhammadhaikal_529">@muhammadhaikal_529</a></p>
    </div>
    <?php echo $__env->make('nav', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <div style="text-align:center; margin-top:20px;">
        <a href="/">Kembali ke Home</a>
    </div>
    <script>
    particlesJS.load('particles-js', 'particles.json', function() {
      // Particles loaded
    });
    </script>
</body>
</html><?php /**PATH C:\Users\ACER\belajar\resources\views/contact.blade.php ENDPATH**/ ?>