<?php $__env->startSection('title', 'Details Page'); ?>

<?php $__env->startSection('main'); ?>
    <div class="alert alert-dark text-center py-3 my-5 container w-50 fs-4">
        Event Details
    </div>
    <section class="container w-50 mx-uto bg-light shadow rounded text-center my-5 p-5">
        <h2>Product Title: <?php echo e($product->title); ?></h2>
        <hr>
        <p>Event Price: <?php echo e($product->price); ?> $ <br> <?php echo e($product->desc); ?></p>
        <div class="bg-secondary rounded text-center py-3 my-3">
            Created at <?php echo e($product->created_at); ?>

        </div>
        <hr>
        <a href="/events">Return to Products Page</a>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\FCIS\Summer Training\Session 8\laravel-demo\resources\views/pages/show.blade.php ENDPATH**/ ?>