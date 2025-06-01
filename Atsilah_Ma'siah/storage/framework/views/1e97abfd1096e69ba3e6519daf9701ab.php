 
 
<?php $__env->startSection('content'); ?> 
    <div class="row mt-5"> 
        <div class="col-lg-12 margin-tb"> 
            <div class="float-start"> 
                <h2>Detail Buku</h2> 
            </div> 
            <div class="float-end"> 
                <a class="btn btn-primary" href="<?php echo e(route('books.index')); ?>">Kembali</a> 
            </div> 
        </div> 
    </div> 
    
    <div class="row mt-3"> 
        <div class="col-xs-12 col-sm-12 col-md-12 mb-3"> 
            <div class="form-group"> 
                <strong>Judul:</strong> 
                <?php echo e($book->title); ?> 
            </div> 
        </div> 
        <div class="col-xs-12 col-sm-12 col-md-12 mb-3"> 
            <div class="form-group"> 
                <strong>Penulis:</strong> 
                <?php echo e($book->author); ?> 
            </div> 
        </div> 
        <div class="col-xs-12 col-sm-12 col-md-12 mb-3"> 
            <div class="form-group"> 
                <strong>Tahun:</strong> 
                <?php echo e($book->year); ?> 
            </div> 
        </div> 
    </div> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\laravel-crud\resources\views/books/edit.blade.php ENDPATH**/ ?>