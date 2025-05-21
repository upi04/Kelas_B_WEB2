<!DOCTYPE html>
<html>
<head>
    <title>Laravel Blade Template</title>
</head>
<body>
    <div>
        <a href="/home">Home</a> |
        <a href="/about">About</a> |
        <a href="/projects">Projects</a> |
        <a href="/skills">Skills</a> |
        <a href="/contact">Contact</a> 
    </div>
    <hr>
    <?php echo $__env->yieldContent('content'); ?>
</body>
</html><?php /**PATH C:\Laporan_2\resources\views/layout.blade.php ENDPATH**/ ?>