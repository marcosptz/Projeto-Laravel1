<?php $__env->startSection('title','ALUNOS'); ?>
<?php $__env->startSection('content'); ?>

<div class="conteudo">
    <?php echo $__env->make('forms.consultAlunos', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projeto-laravel-1\resources\views/consulta.blade.php ENDPATH**/ ?>