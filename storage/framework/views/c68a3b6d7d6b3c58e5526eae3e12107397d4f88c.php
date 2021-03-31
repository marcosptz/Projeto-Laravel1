<!-- Navbar Header -->
<nav class="navbar navbar-header navbar-expand-s0" data-background-color="blue">

    <div class="container-fluid">
        <a href="/projeto-laravel-1/public/welcome">
            <img src="<?php echo e(url('assets/img/logo_prefeitura.png')); ?>" alt="Logo Prefeitura" class="img-navbar">
        </a>
        <h2 style="color: white" class="brand-logo nav-title">ESCOLA</h2>
        <a class="nav-item" href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
        document.getElementById('logout-form').submit();" data-toggle="tooltip" data-placement="bottom"
            title="Sair"><span class="fas fa-sign-out-alt" style="color: white; font-size: 22px;"></span></a>

        <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
            <?php echo csrf_field(); ?>
        </form>
    </div>
</nav>
<!-- End Navbar -->
</div>
<?php /**PATH C:\xampp\htdocs\projeto-laravel-1\resources\views/layouts/navbar.blade.php ENDPATH**/ ?>