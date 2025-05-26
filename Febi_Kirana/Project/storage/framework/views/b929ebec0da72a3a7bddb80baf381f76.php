 
 
<?php $__env->startSection('content'); ?> 
    <div class="row mt-5"> 
        <div class="col-lg-12 margin-tb"> 
            <div class="float-start"> 
                <h2>List  Peminjaman  Buku</h2> 
            </div> 
            <div class="float-end"> 
                <a class="btn btn-success" href="<?php echo e(route('books.create')); ?>">Tambah Buku</a> 
            </div> 
        </div> 
    </div> 
    
    <?php if($message = Session::get('success')): ?> 
        <div class="alert alert-success mt-3"> 
            <p><?php echo e($message); ?></p> 
        </div> 
    <?php endif; ?> 
    
    <table class="table table-bordered mt-3"> 
        <tr> 
            <th>ID</th> 
            <th>Judul</th> 
            <th>Penulis</th> 
            <th>Tahun</th> 
            <th width="280px">Aksi</th> 
        </tr> 
        <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $book): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?> 
        <tr> 
            <td><?php echo e($book->id); ?></td> 
            <td><?php echo e($book->judul); ?></td> 
            <td><?php echo e($book->nama); ?></td> 
            <td><?php echo e($book->tahun); ?></td> 
            <td> 
                <form action="<?php echo e(route('books.destroy',$book->id)); ?>" 
method="POST"> 
                    <a class="btn btn-info" href="<?php echo e(route('books.show',$book->id)); ?>">Detail</a> 
                    <a class="btn btn-primary" href="<?php echo e(route('books.edit',$book->id)); ?>">Edit</a> 
                    <?php echo csrf_field(); ?> 
                    <?php echo method_field('DELETE'); ?> 
                    <button type="submit" class="btn 
btn-danger">Hapus</button> 
                </form> 
            </td> 
        </tr> 
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?> 
    </table> 
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\laravel-tgs\resources\views/books/index.blade.php ENDPATH**/ ?>