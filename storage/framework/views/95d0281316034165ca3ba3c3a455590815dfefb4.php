<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <title>Document</title>
</head>
<body>
    <h1>Alunos</h1>
    <p><?php echo e(date('d/m/y H:i')); ?></p>
    <hr>

    <table class="table table-striped table-responsive table table-hover" border="1">
        <tr>
            <td>Matrícula:</td>
            <td>Nome:</td>
            <td>Sexo:</td>
            <td>Nascimento:</td>
            <td>Cidade</td>
            <td>Bairro:</td>
            <td>Rua:</td>
            <td>Número:</td>
            <td>Ccomplemento:</td>
            <td>Turma:</td>
        </tr>

        <?php $__currentLoopData = $student; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $student): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($student->id); ?></td>
            <td><?php echo e($student->name); ?></td>
            <td><?php echo e($student->sex); ?></td>
            <td><?php echo e($student->birth_date); ?></td>
            <td><?php echo e($student->city); ?></td>
            <td><?php echo e($student->district); ?></td>
            <td><?php echo e($student->street); ?></td>
            <td><?php echo e($student->number); ?></td>
            <td><?php echo e($student->complement); ?></td>
            <td><?php echo e($student->class); ?></td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\projeto-laravel-1\resources\views/formPdf.blade.php ENDPATH**/ ?>