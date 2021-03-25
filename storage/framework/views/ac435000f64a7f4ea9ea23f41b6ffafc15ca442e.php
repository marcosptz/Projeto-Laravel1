<?php $__env->startSection('title','WELCOME'); ?>
<?php $__env->startSection('content'); ?>

<div class="conteudo">
    <?php echo $__env->make('forms.formWelcome', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>

<div class="conteudo">
    <div class="row d-flex justify-content-around">
        <div class="col-sm-3">
            <div class="card text-center">
                <img class="card-img-top" src="<?php echo e(URL::to('/imagens/cadastro1.png')); ?>" alt="">
                <div class="card-body">
                    <h4 class="card-title">Cadastro de Alunos</h4>
                    <p class="card-text"></p>
                    <a href="<?php echo e(route('cadStudent')); ?>" class="btn btn-primary stretched-link">Link cadastro</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card text-center">
                <img class="card-img-top" src="<?php echo e(URL::to('/imagens/lista.png')); ?>" alt="">
                <div class="card-body">
                    <h4 class="card-title">Lista de Alunos</h4>
                    <p class="card-text"></p>
                    <a href="<?php echo e(route('listAll')); ?>" class="btn btn-primary stretched-link">Link lista</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card text-center">
                <img class="card-img-top" src="<?php echo e(URL::to('/imagens/pdf.png')); ?>" alt="">
                <div class="card-body">
                    <h4 class="card-title">Gerar PDF</h4>
                    <p class="card-text"></p>
                    <a href="<?php echo e(route('pdfRegistrition')); ?>" class="btn btn-primary stretched-link">Link PDF</a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projeto-laravel-1\resources\views/welcome.blade.php ENDPATH**/ ?>