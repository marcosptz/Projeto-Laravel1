<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="card">
        <div class="card-header"><?php echo e(__('Login')); ?></div>
        <div class="form">
            <form method="POST" action="<?php echo e(route('login')); ?>">
                <?php echo csrf_field(); ?>
                <div class="input">
                    <input id="email" type="email" class="form-control <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"
                        name="email" value="<?php echo e(old('email')); ?>" autocomplete="email" autofocus placeholder="Email">

                    <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($message); ?></strong>
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
                        <strong><?php echo e($message); ?></strong>
                    </span>
                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>

                    <div class="remember-password">
                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                            <?php echo e(old('remember') ? 'checked' : ''); ?>>

                        <label class="form-check-label" for="remember">
                            <?php echo e(__('Lembrar senha')); ?>

                        </label>
                    </div>
                    <button type="submit">
                        <?php echo e(__('Entrar')); ?>

                    </button>
                </div>
                <div class="details">
                    <?php if(Route::has('password.request')): ?>
                    <a class="forgot-password btn btn-link " href="<?php echo e(route('password.request')); ?>">
                        <?php echo e(__('Esqueceu a senha?')); ?>

                    </a>
                    <?php endif; ?>
                    
                    <?php if(App\User::count() < 1): ?>
                        <p class="register text-center">Não possui conta? <a href="<?php echo e(route('registerUser')); ?>">Registrar</a></p>
                    <?php endif; ?>
                </div>
            </form>
        </div>
    </div>
    
</div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\projeto-laravel-1\resources\views/auth/login.blade.php ENDPATH**/ ?>