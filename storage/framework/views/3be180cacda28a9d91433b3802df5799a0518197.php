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
    <div class="conteudo">
        <hr>
        <div class="conteudo">
            <p><?php echo e(date('d/m/y - H:i')); ?></p>
        </div>

        <div class="conteudo">
            <h4>Clique na ação desejada</h4>
            <a href="<?php echo e(route('welcome')); ?>" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Iniciar Seção</a>
            <a href="<?php echo e(route('registerUser')); ?>" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Registrar usuário</a>
            <a href="<?php echo e(route('listUser')); ?>" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Listar usuários</a>
        </div>
        <div class="conteudo">
            <hr>
            <a href="<?php echo e(route('editConsUser')); ?>" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Editar usuários</a>
            <a href="<?php echo e(route('deleteUser')); ?>" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Excluir usuários</a>
            <a href="<?php echo e(route('auditStudent')); ?>" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Auditar usuários</a>
            
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\projeto-laravel-1\resources\views/formHome.blade.php ENDPATH**/ ?>