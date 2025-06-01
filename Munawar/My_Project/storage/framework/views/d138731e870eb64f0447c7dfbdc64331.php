

<?php $__env->startSection('title', 'About'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Tentang</h1>
    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><?php echo e($items["nama"]); ?></td>

        </tr>
        <tr>
            <td>Nim</td>
            <td>:</td>
            <td><?php echo e($items["nim"]); ?></td>
        </tr>
        <tr>
            <td>Kelas</td>
            <td>:</td>
            <td><?php echo e($items["kelas"]); ?></td>
        </tr>
        <tr>
            <td>Hobi</td>
            <td>:</td>
            <td><?php echo e($items["hobi"]); ?></td>
        </tr>
        <tr>
            <td>TTL</td>
            <td>:</td>
            <td><?php echo e($items["tempat"]); ?></td>
        </tr>
        <tr>
            <td>Cita-Cita</td>
            <td>:</td>
            <td><?php echo e($items["cita_cita"]); ?></td>
        </tr>
    </table>
    <br>
    <br>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('index', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\biodata\resources\views/about.blade.php ENDPATH**/ ?>