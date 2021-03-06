<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'Laravel')); ?></title>

    <link rel="icon" href="<?php echo e(asset('assets/img/logo_prefeitura.ico')); ?>" type="image/x-icon" />

    <!-- Scripts -->
    <script src="<?php echo e(asset('js/app.js')); ?>" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">

    <!-- Styles -->
    <link href="<?php echo e(asset('css/main.css')); ?>" rel="stylesheet">
</head>

<body>
    <header>
        <nav class="navbar navbar-expand-md shadow-sm">
            <div class="img">
                <a href="/">
                    <img src="<?php echo e(asset('assets/img/logo_prefeitura.png')); ?>" alt="Logo Prefeitura" class="img-navbar">
                </a>
            </div>

            <div class="span">
                <span>NOME PROJETO</span>
            </div>

        </nav>
    </header>
    <main class="main">
        <?php echo $__env->yieldContent('content'); ?>
    </main>

    <footer>
        <div>
            <ul>
                <li><?php echo e(date('Y')); ?> &copy; Setor de Desenvolvimento - Prefeitura</li>
            </ul>
        </div>

        <script src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo=" crossorigin="anonymous"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"
            integrity="sha256-Kg2zTcFO9LXOc7IwcBx1YeUBJmekycsnTsq2RuFHSZU=" crossorigin="anonymous"></script>

        <script>
            $(document).ready(function ($) {
                $('#rg').mask('00.000.000-00');
                $('#cpf').mask('000.000.000-00', {
                    reverse: true
                });
                $('.cnpj').mask('00.000.000/0000-00', {
                    reverse: true
                });
            });

        </script>
    </footer>
</body>

</html><?php /**PATH C:\xampp\htdocs\modeloLeiaute-master\resources\views/layouts/app.blade.php ENDPATH**/ ?>