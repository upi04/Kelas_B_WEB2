<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Lengkap <?php echo e($biodata['nama']); ?></title>
    <link rel="stylesheet" href="../css/style1.css">
</head>
<body>
    <nav>
        <a href="../home">Home</a>
    </nav>
    <div class="container">
        <h1>Biodata Lengkap</h1>

        <table>
            <tr>
                <th>Nama</th>
                <td><?php echo e($biodata['nama']); ?> </td>
            </tr>
            <tr>
                <th>Tempat, Tanggal Lahir</th>
                <td><?php echo e($biodata['tempat_tanggal_lahir']); ?></td>
            </tr>
            <tr>
                <th>Jenis Kelamin</th>
                <td><?php echo e($biodata['jenis_kelamin']); ?></td>
            </tr>
            <tr>
                <th>Alamat</th>
                <td><?php echo e($biodata['alamat']); ?></td>
            </tr>
            <tr>
                <th>Email</th>
                <td><?php echo e($biodata['email']); ?></td>
            </tr>
            <tr>
                <th>Telepon</th>
                <td><?php echo e($biodata['telepon']); ?></td>
            </tr>
            <tr>
                <th>Pendidikan</th>
                <td>
                    <?php if(isset($biodata['pendidikan']) && is_array($biodata['pendidikan'])): ?>
                        <ul>
                            <?php $__currentLoopData = $biodata['pendidikan']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tingkat => $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><strong><?php echo e($tingkat); ?>:</strong> <?php echo e($detail); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    <?php else: ?>
                        -
                    <?php endif; ?>
                </td>
            </tr>
            <tr>
                <th>Hobi</th>
                <td>
                    <?php if(isset($biodata['hobi']) && is_array($biodata['hobi'])): ?>
                        <ul>
                            <?php $__currentLoopData = $biodata['hobi']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $hobi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($hobi); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    <?php else: ?>
                        -
                    <?php endif; ?>
                </td>
            </tr>
            <tr>
                <th>Cita-cita</th>
                <td><?php echo e($biodata['cita_cita']); ?></td>
            </tr>
            <tr>
                <th>Keahlian</th>
                <td>
                    <?php if(isset($biodata['keahlian']) && is_array($biodata['keahlian'])): ?>
                        <ul>
                            <?php $__currentLoopData = $biodata['keahlian']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($skill); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    <?php else: ?>
                        -
                    <?php endif; ?>
                </td>
            </tr>
            <tr>
                <th>Pengalaman Organisasi</th>
                <td>
                    <?php if(isset($biodata['pengalaman_organisasi']) && is_array($biodata['pengalaman_organisasi'])): ?>
                        <ul>
                            <?php $__currentLoopData = $biodata['pengalaman_organisasi']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $organisasi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($organisasi); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    <?php else: ?>
                        -
                    <?php endif; ?>
                </td>
            </tr>
            
            <?php if(isset($biodata['bahasa_asing'])): ?>
            <tr>
                <th>Bahasa Asing</th>
                <td>
                    <?php if(is_array($biodata['bahasa_asing'])): ?>
                        <ul>
                            <?php $__currentLoopData = $biodata['bahasa_asing']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $bahasa): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($bahasa); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    <?php else: ?>
                        <?php echo e($biodata['bahasa_asing']); ?>

                    <?php endif; ?>
                </td>
            </tr>
            <?php endif; ?>
            <?php if(isset($biodata['penghargaan'])): ?>
            <tr>
                <th>Penghargaan</th>
                <td>
                    <?php if(is_array($biodata['penghargaan'])): ?>
                        <ul>
                            <?php $__currentLoopData = $biodata['penghargaan']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $penghargaan): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($penghargaan); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    <?php else: ?>
                        <?php echo e($biodata['penghargaan']); ?>

                    <?php endif; ?>
                </td>
            </tr>
            <?php endif; ?>
            <?php if(isset($biodata['project_pribadi'])): ?>
            <tr>
                <th>Project Pribadi</th>
                <td>
                    <?php if(is_array($biodata['project_pribadi'])): ?>
                        <ul>
                            <?php $__currentLoopData = $biodata['project_pribadi']; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($project); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    <?php else: ?>
                        <?php echo e($biodata['project_pribadi']); ?>

                    <?php endif; ?>
                </td>
            </tr>
            <?php endif; ?>
        </table>
    </div>
    
</body>
</html><?php /**PATH E:\laragon\Projek\LaravelPart2\resources\views/biodata/index.blade.php ENDPATH**/ ?>