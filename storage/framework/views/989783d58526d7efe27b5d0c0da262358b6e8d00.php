<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    <?php if(session('status')): ?>
                        <div class="alert alert-success" role="alert">
                            <?php echo e(session('status')); ?>

                        </div>
                    <?php endif; ?>

                    Você esta logado!
                    <p>Perfil: <?php echo e(Auth::user()->profile); ?></p>
                    <p>Usuário: <?php echo e(Auth::user()->name); ?></p>
                    

                    <div class="conteudo">
                        <?php if(Auth::user()->profile == 'admin_ti'): ?>
                            <?php echo $__env->make('formHome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php endif; ?>
                        <?php if(Auth::user()->profile == 'admin_sis'): ?>
                            <?php echo $__env->make('formHomeUser', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php endif; ?>
                        <?php if(Auth::user()->profile == 'operador'): ?>
                            <?php echo $__env->make('formHomeOperator', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <?php endif; ?>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projeto-laravel\resources\views/home.blade.php ENDPATH**/ ?>