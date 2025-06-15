<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        table { border-collapse: collapse; width: 80%; margin-bottom: 30px; }
        th, td { border: 1px solid #000; padding: 8px 12px; text-align: left; }
        th { background-color: #f2f2f2; }
        nav a { margin-right: 10px; }
        h2 { margin-top: 30px; }
    </style>
</head>
<body>
    <h1>Dashboard</h1>
    <nav>
        <a href="/">Home</a> |
        <a href="/blog">Blog</a> |
        <a href="/skills">Skills</a> |
        <a href="/messages">Messages</a> |
        <a href="/biodata/pribadi">Biodata</a>
    </nav>
    <hr>

    
<?php if(isset($title) && isset($deskripsi)): ?>
    <h2><?php echo e($title); ?></h2>
    <p><?php echo e($deskripsi); ?></p>
    <?php if(!empty($fitur)): ?>
        <table>
            <tr>
                <th>Label</th>
                <th>Isi</th>
            </tr>
            <?php $__currentLoopData = $fitur; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $label => $isi): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($label); ?></td>
                    <td><?php echo e($isi); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    <?php endif; ?>
<?php endif; ?>

    
    <?php if(isset($posts)): ?>
        <h2>Daftar Artikel</h2>
        <table>
            <tr><th>Judul</th></tr>
            <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><a href="/blog/<?php echo e($id); ?>"><?php echo e($post['title']); ?></a></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    <?php elseif(isset($post)): ?>
        <h2><?php echo e($post['title']); ?></h2>
        <p><?php echo e($post['content']); ?></p>
        <a href="/blog">← Kembali ke Blog</a>
    <?php endif; ?>

    
    <?php if(isset($skills)): ?>
        <h2>Daftar Skill</h2>
        <table>
            <tr><th>Nama</th><th>Level</th></tr>
            <?php $__currentLoopData = $skills; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $skill): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><a href="/skills/<?php echo e($id); ?>"><?php echo e($skill['name']); ?></a></td>
                    <td><?php echo e($skill['level']); ?></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    <?php elseif(isset($skill)): ?>
        <h2><?php echo e($skill['name']); ?></h2>
        <p>Tingkat: <?php echo e($skill['level']); ?></p>
        <a href="/skills">← Kembali ke Skill</a>
    <?php endif; ?>

    
    <?php if(isset($messages)): ?>
        <h2>Daftar Pesan</h2>
        <table>
            <tr><th>Pengirim</th><th>Isi (ringkas)</th></tr>
            <?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $id => $msg): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <tr>
                    <td><?php echo e($msg['sender']); ?></td>
                    <td><a href="/messages/<?php echo e($id); ?>"><?php echo e(\Illuminate\Support\Str::limit($msg['content'], 30)); ?></a></td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </table>
    <?php elseif(isset($message)): ?>
        <h2>Pesan dari <?php echo e($message['sender']); ?></h2>
        <p><?php echo e($message['content']); ?></p>
        <a href="/messages">← Kembali ke Pesan</a>
    <?php endif; ?>
</body>
</html><?php /**PATH C:\laragon\www\laravel-tgs\resources\views/dashboard.blade.php ENDPATH**/ ?>