<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program</title>
</head>
<body>
    <h1>Bahasa Pemrograman</h1>
    <ul>
    <?php $__currentLoopData = $bahasa; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <li><?php echo e($item); ?></li>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>

    <h1>PHP</h1>
    <p>PHP adalah bahasa pemrograman yang digunakan untuk membuat aplikasi web dinamis.</p>
    <br>
    <h1>Java</h1>
    <p>Java adalah bahasa pemrograman yang digunakan untuk membuat aplikasi desktop.</p>

</body>
</html><?php /**PATH C:\laragon\www\biodata\resources\views/bahasa_program.blade.php ENDPATH**/ ?>