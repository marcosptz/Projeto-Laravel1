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
    <h1>Alunos</h1>
    <p><?php echo e(date('d/m/y H:i')); ?></p>
    <hr>

    <div class="form-group col-md-6">
        <?php if($errors->all()): ?>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="alert alert-success" role="alert">
                    <?php echo e($error); ?>

                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </div>

    <table class="table table-striped table-responsive table table-hover">
        <tr>
            <td>Id:</td>
            <td>Nome:</td>
            <td>Email:</td>
            <td>Perfil:</td>
            <td>Data de Criação:</td>
        </tr>

        <?php $__currentLoopData = $user; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <tr>
            <td><?php echo e($user->id); ?></td>
            <td><?php echo e($user->name); ?></td>
            <td><?php echo e($user->email); ?></td>
            <td><?php echo e($user->profile); ?></td>
            <td><?php echo e($user->created_at); ?></td>
            <td>
                <a href="/projeto-laravel-1/public/editingUser/<?php echo e($user->id); ?>" style="color: #3490dc; text-decoration: none; background-color: transparent;">
                        Editar
                </a>
            </td>
            <td>
                <a href="/projeto-laravel-1/public/deletingUser/<?php echo e($user->id); ?>" style="color: #3490dc; text-decoration: none; background-color: transparent;">
                        Excluir
                </a>
            </td>
        </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\projeto-laravel-1\resources\views/forms/formUsers.blade.php ENDPATH**/ ?>