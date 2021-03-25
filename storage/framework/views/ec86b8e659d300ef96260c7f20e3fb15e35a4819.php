<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1>Alunos Matriculados</h1>
    <p><?php echo e(date('d/m/y H:i')); ?></p>
    <hr>

    

    <table class="table table-striped table-responsive table table-hover">
        <tr>
            <td>Quantidade de alunos matriculados:</td>
            <td>Quantidade de vagas restantes:</td>
        </tr>
        <tr>
            <td><?php echo e($count); ?></td>
            <td><?php echo e($qtd); ?></td>
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


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\modeloLeiaute-master\resources\views/formResultRegister.blade.php ENDPATH**/ ?>