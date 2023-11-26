<?php $__env->startSection('title', 'Create Product Page'); ?>

<?php $__env->startSection('main'); ?>
    <div class="alert alert-primary text-center py-3 my-5 container w-50 fs-4">
        Create New Product
    </div>
    <div class="container my-5 w-50 mx-auto">
        <form action="store" method="POST">
            <?php echo csrf_field(); ?>
            <div class="form-group my-3"><label for="title">Product Title</label><input type="text" class="form-control" id="title" name="title"></div>
            <div class="form-group my-3"><label for="price">Product Price</label><input type="text" class="form-control" id="price" name="price"></div>
            <div class="form-group my-3"><label for="desc">Product Description</label><textarea type="text" class="form-control" id="desc" name="desc"></textarea></div>
            <input type="submit" value="Add Product" class="btn btn-dark my2">
        </form>
    </div>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\FCIS\Summer Training\Session 8\laravel-demo\resources\views/pages/create.blade.php ENDPATH**/ ?>