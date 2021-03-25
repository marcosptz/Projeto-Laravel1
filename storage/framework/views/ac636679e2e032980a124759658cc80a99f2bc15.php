<div class="main-panel">
    <div class="content">
        <div class="page-inner">
            <div class="page-category">

                <?php echo $__env->yieldContent('content'); ?>

            </div>
        </div>
    </div>
    <?php echo $__env->make('layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div><?php /**PATH C:\xampp\htdocs\projeto-laravel\resources\views/layouts/main.blade.php ENDPATH**/ ?>