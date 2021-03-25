<!DOCTYPE html>
<html>

<head>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta charset="utf-8">
    <title>PDF EXEMPLO</title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" type="text/css"
        rel="stylesheet" />
</head>
<style>
    .table-condensed {
        font-size: 13px;
    }

    div {
        margin-top: 10px;
    }
</style>

<body>
    <header>
        <div align="center">
            <img width="100" src="<?php echo e(public_path('imagens/logo.png')); ?>"
                style="width:100px;height:120px;float: left;z-index:10000" />
            <center>
                <h4 style="margin-top: 30px">Prefeitura Municipal de São Leopoldo<br /></h4>
                <h4>Secretária Municipal de Desenvolvimento Social</h4>
                <h4>Nome Sistema</h4>
        </div>
    </header>
    <div align="center">
        <h4 style="margin-top: 50px"><strong></strong><br /></h4>
    </div>
    <table class="table">
        <thead align="center">
            <tr>
                <th>ID</th>
                <th>Nome</th>
                <th>Sobrenome</th>
                <th>Idade</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $cadastros; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cadastro): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($cadastro->id); ?></td>
                <td><?php echo e($cadastro->name); ?></td>
                <td><?php echo e($cadastro->surname); ?></td>
                <td><?php echo e($cadastro->age); ?></td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </tbody>
    </table>
</body>

</html><?php /**PATH C:\xampp\htdocs\modeloLeiaute-master\resources\views/pdf.blade.php ENDPATH**/ ?>