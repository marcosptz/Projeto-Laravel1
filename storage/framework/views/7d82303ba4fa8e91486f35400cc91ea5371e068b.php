<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="card">
        <div class="card-header"><?php echo e(__('Criar Conta')); ?></div>
        <div class="form">
            <form method="POST" action="<?php echo e(route('storeUser')); ?>">
                <?php echo csrf_field(); ?>
                <div class="input">

                    <select name="profile" class="form-select" <?php if ($errors->has('profile')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('profile'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" aria-label=" Default select example" required>
                        <option value="" selected>Selecione o tipo de usuário</option>
                        <option value="admin_ti">Administrador TI</option>
                        <option value="admin_sis">Administrador do Sistema</option>
                        <option value="operador">Operador</option>
                    </select><br>

                    <?php if ($errors->has('profile')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('profile'); ?>
                    <span class="invalid-feedback" role="alert">
                        <?php echo e($message); ?>

                    </span>
                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>

                    <input id="name" type="text" class="form-control <?php if ($errors->has('name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('name'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="name"
                        value="<?php echo e(old('name')); ?>" autocomplete="name" autofocus placeholder="Nome" required>

                    <?php if ($errors->has('name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('name'); ?>
                    <span class="invalid-feedback" role="alert">
                        <?php echo e($message); ?>

                    </span>
                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>

                    <input id="email" type="email" class="form-control <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"
                        name="email" value="<?php echo e(old('email')); ?>" autocomplete="email" autofocus placeholder="Email" required>

                    <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?>
                    <span class="invalid-feedback" role="alert">
                        <?php echo e($message); ?>

                    </span>
                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>

                    

                    <input id="password" type="password" class="form-control <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"
                        name="password" required autocomplete="current-password" placeholder="Senha">

                    <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?>
                    <span class="invalid-feedback" role="alert">
                        <?php echo e($message); ?>

                    </span>
                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>

                    <input id="password_confirmation" type="password" class="form-control" <?php if ($errors->has('password')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"
                    name="password_confirmation" required autocomplete="new-password" placeholder="Confirmar senha">

                    <?php if ($errors->has('password_confirmation')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('password_confirmation'); ?>
                    <span class="invalid-feedback" role="alert">
                        <?php echo e($message); ?>

                    </span>
                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>

                    <button type="submit">
                        <?php echo e(__('Registrar')); ?>

                    </button>
                </div>
                <div class="details">
                    <p class="register text-center">Deseja retornar? <a href="<?php echo e(route('home')); ?>">Retornar</a></p>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projeto-laravel-1\resources\views/auth/register.blade.php ENDPATH**/ ?>