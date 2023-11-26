<?php $__env->startSection('title', 'Products Page'); ?>

<?php $__env->startSection('main'); ?>
    <div class="alert alert-info text-center py-3 my-5 container w-50 fs-4">
        All Products
    </div>
    <div class="container my-5">
        <?php if(count($products) > 0): ?>
            <div class="row">
                <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="col-lg-4 col-md-6 col-sm-12 my-2">
                        <div class="card text-bg-light mb-3" style="max-width: 25rem">
                            <div class="card-header"><?php echo e($product->title); ?></div>
                            <div class="card-body">
                                <h5 class="card-title">Product Price <?php echo e($product->price); ?></h5>
                                <hr>
                                <p class="card-text"><?php echo e($product->desc); ?></p>
                                <hr>
                                <div class="bg-secondary rounded text-center py-3 my-3">
                                    Created at <?php echo e($product->created_at); ?>

                                </div>
                                <hr>
                                <a href="<?php echo e('/events/' . $product->id); ?>" class="btn btn-md btn-primary my-2 mx-1">Show</a>
                                <a href="<?php echo e('/events/' . $product->id . '/edit'); ?>" class="btn btn-md btn-success my-2 mx-1">Edit</a>

                                <form action="<?php echo e(route('destroy', ['id' => $product->id])); ?>" method="POST">
                                    <?php echo method_field('DELETE'); ?>
                                    <?php echo csrf_field(); ?>
                                    <button type="submit" class="btn btn-danger">Delete</button>
                                </form>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        <?php endif; ?>
        <div class="row my-4 d-flex justify-content-center">
            <?php echo e($products->links()); ?>

        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\FCIS\Summer Training\Session 8\laravel-demo\resources\views/pages/events.blade.php ENDPATH**/ ?>