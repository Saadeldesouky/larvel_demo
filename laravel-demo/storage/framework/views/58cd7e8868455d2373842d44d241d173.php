<?php $__env->startSection('title', 'Edit Product Page'); ?>

<?php $__env->startSection('main'); ?>
    <div class="alert alert-success text-center py-3 my-5 container w-50 fs-4">
         Edit Product
    </div>
    <div class="container my-5 w-50 mx-auto">
        <form action="<?php echo e('/events/' . $product->id . '/update'); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PUT'); ?>
            <div class="form-group my-3"><label for="title">Product Title</label><input type="text" class="form-control" id="title" name="title" value="<?php echo e($product->title); ?>"></div>
            <div class="form-group my-3"><label for="price">Product Price</label><input type="text" class="form-control" id="price" name="price" value="<?php echo e($product->price); ?>"></div>
            <div class="form-group my-3"><label for="desc">Product Description</label><textarea type="text" class="form-control" id="desc" name="desc" <?php echo e($product->desc); ?>></textarea></div>
            <input type="submit" value="Edit Product" class="btn btn-success my2">
        </form>
    </div>
<?php $__env->stopSection(); ?>




<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\FCIS\Summer Training\Session 8\laravel-demo\resources\views/pages/edit.blade.php ENDPATH**/ ?>