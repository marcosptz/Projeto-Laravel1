<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Document</title>
</head>
<body>
    <h2>PDF de Alunos Matriculados</h2>
    <p><?php echo e(date('d/m/Y H:i')); ?></p>
    <hr>

    <table class="table table-striped table-responsive table table-hover" border="1">
        <tr>
            <td>Quantidade de alunos matriculados: <?php echo e($count); ?></td>
            <td>Quantidade de vagas restantes: <?php echo e($qtd); ?></td>
        </tr>
    
    
        <tr>
            <td>Número da Turma:</td>
            <td>Descrição:</td>
            <td>Quantidade de Vagas:</td>
            <td>Nome do Professor:</td>
        </tr>
        <tr>
            <td><?php echo e($class->id); ?></td>
            <td><?php echo e($class->description); ?></td>
            <td><?php echo e($class->vacancies); ?></td>
            <td><?php echo e($class->teacher); ?></td>
        </tr>

        <tr>
            <td>Matrícula:</td>
            <td>Nome:</td>
            <td>Sexo:</td>
            <td>Nascimento:</td>
        </tr>

        <?php $__currentLoopData = $student; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($student->id); ?></td>
            <td><?php echo e($student->name); ?></td>
            <td><?php echo e($student->sex); ?></td>
            <td><?php echo e($student->birth_date); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\projeto-laravel-1\resources\views/forms/formpdfRegistrition.blade.php ENDPATH**/ ?>