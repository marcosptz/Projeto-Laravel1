<?php $__env->startSection('title','EXEMPLO'); ?>
<?php $__env->startSection('content'); ?>

<div class="conteudo">
    <?php echo $__env->make('formWelcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>

<div class="conteudo">
    <div class="row d-flex justify-content-around">
        <div class="col-sm-3">
            <div class="card text-center">
                <img class="card-img-top" src="<?php echo e(URL::to('/imagens/images.png')); ?>" alt="">
                <div class="card-body">
                    <h4 class="card-title">Cadastro Exemplo</h4>
                    <p class="card-text"></p>
                    <a href="<?php echo e(route('cadStudent')); ?>" class="btn btn-primary stretched-link">Link cadastro</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card text-center">
                <img class="card-img-top" src="<?php echo e(URL::to('/imagens/images.png')); ?>" alt="">
                <div class="card-body">
                    <h4 class="card-title">Lista Exemplo</h4>
                    <p class="card-text"></p>
                    <a href="<?php echo e(route('listAll')); ?>" class="btn btn-primary stretched-link">Link lista</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card text-center">
                <img class="card-img-top" src="<?php echo e(URL::to('/imagens/images.png')); ?>" alt="">
                <div class="card-body">
                    <h4 class="card-title">PDF Exemplo</h4>
                    <p class="card-text"></p>
                    <a href="<?php echo e(route('pdf')); ?>" class="btn btn-primary stretched-link">Link lista</a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\modeloLeiaute-master\resources\views/welcome.blade.php ENDPATH**/ ?>