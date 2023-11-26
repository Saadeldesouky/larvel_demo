<nav class="navbar navbar-expand-lg py-4 px-4 bg-body-tertiary">
    <div class="container">
        <a class="navbar-brand" href="<?php echo e(url('/')); ?>"><i class="fa-brands fa-laravel"></i>  <?php echo e(env('APP_NAME')); ?></a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ms-auto">
                <a class="nav-link mx-1" href="<?php echo e(url('/')); ?>">Home</a>
                <a class="nav-link mx-1" href="<?php echo e(url('/events')); ?>">Products</a>
                <a class="nav-link mx-1" href="<?php echo e(url('/create')); ?>">Create Product</a>
            </div>
        </div>
    </div>
</nav>
<?php /**PATH D:\FCIS\Summer Training\Session 8\laravel-demo\resources\views/includes/navbar.blade.php ENDPATH**/ ?>