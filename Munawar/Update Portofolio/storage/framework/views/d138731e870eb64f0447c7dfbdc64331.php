

<?php $__env->startSection('title', 'About'); ?>

<?php $__env->startSection('content'); ?>
    <h1>Tentang</h1>
    <table>
           <!-- <th align="left"> -->
        <tr>
            <td>Nama</td>
        
            <td><?php echo e($items["nama"]); ?></td>

        </tr>
        <tr>
            <td>Nim</td>
            
            <td><?php echo e($items["nim"]); ?></td>
        </tr>
        <tr>
            <td>Kelas</td>
            
            <td><?php echo e($items["kelas"]); ?></td>
        </tr>
        <tr>
            <td>Hobi</td>
            
            <td><?php echo e($items["hobi"]); ?></td>
        </tr>
        <tr>
            <td>TTL</td>
           
            <td><?php echo e($items["tempat"]); ?></td>
        </tr>
        <tr>
            <td>Cita-Cita</td>
            
            <td><?php echo e($items["cita_cita"]); ?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            
            <td><?php echo e($items["alamat"]); ?></td>
        <tr>
            <td>Email</td>
            
            <td><?php echo e($items["email"]); ?></td>
        </tr>
        <tr>
            <td>Telepon</td>
            
            <td><?php echo e($items["telepon"]); ?></td>
        </tr>
        <tr>
            <td>Pendidikan</td>
            
            <td><?php echo e($items["pendidikan"]); ?></td>
        </tr>
        <tr>
            <td>Keahlian</td>
            
            <td><?php echo e($items["keahlian"]); ?></td>
        </tr>
        <tr>
            <td>Pengalaman</td>
            
            <td><?php echo e($items["pengalaman"]); ?></td>
        </tr>
    </tr>
    </table>
    <br>
    <br>
    <a class="nav-link" href="produk">Klik Sini Untuk Liat pruduk</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('index', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\biodata\resources\views/about.blade.php ENDPATH**/ ?>