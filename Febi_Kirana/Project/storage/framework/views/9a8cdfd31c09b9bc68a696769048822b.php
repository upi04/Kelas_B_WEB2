 
 
<?php $__env->startSection('content'); ?> 
<div class="row mt-5"> 
    <div class="col-lg-12 margin-tb"> 
        <div class="float-start"> 
            <h2>Tambah Buku Baru</h2> 
        </div> 
        <div class="float-end"> 
            <a class="btn btn-primary" href="<?php echo e(route('books.index')); ?>">Kembali</a> 
        </div> 
    </div> 
</div> 
    
<?php if($errors->any()): ?> 
    <div class="alert alert-danger mt-3"> 
        <strong>Error!</strong> Ada masalah dengan input Anda.<br><br> 
        <ul> 
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
                <li><?php echo e($error); ?></li> 
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
        </ul> 
    </div> 
<?php endif; ?> 
    
<form action="<?php echo e(route('books.store')); ?>" method="POST" class="mt-3"> 
    <?php echo csrf_field(); ?> 
   
     <div class="row"> 
        <div class="col-xs-12 col-sm-12 col-md-12 mb-3"> 
            <div class="form-group"> 
                <strong>Judul:</strong> 
                <input type="text" name="judul" class="form-control" 
placeholder="Judul Buku"> 
            </div> 
        </div> 
        <div class="col-xs-12 col-sm-12 col-md-12 mb-3"> 
            <div class="form-group"> 
                <strong>Penulis:</strong> 
                <input type="text" name="nama" class="form-control" 
placeholder="Nama Penulis"> 
            </div> 
        </div> 
        <div class="col-xs-12 col-sm-12 col-md-12 mb-3"> 
            <div class="form-group"> 
                <strong>Tahun:</strong> 
                <input type="number" name="tahun" class="form-control" 
placeholder="Tahun Terbit"> 
            </div> 
        </div> 
        <div class="col-xs-12 col-sm-12 col-md-12 text-center"> 
                <button type="submit" class="btn 
btn-primary">Simpan</button> 
        </div> 
    </div> 
</form> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\laravel-tgs\resources\views/books/create.blade.php ENDPATH**/ ?>