<?php $__env->startSection('content'); ?>
<div class="container">
    <div class="card">
        <div class="card-header"><?php echo e(__('Resetar Senha')); ?></div>
        <div class="form">
            <form method="POST" action="<?php echo e(route('password.email')); ?>">
                <?php echo csrf_field(); ?>

                <div class="input">
                    <input id="email" type="email" class="form-control <?php if ($errors->has('email')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('email'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>"
                        name="email" value="<?php echo e(old('email')); ?>" required autocomplete="email" autofocus
                        placeholder="Email">


                    <button type="submit">
                        <?php echo e(__('Enviar link para meu email')); ?>

                    </button>
                </div>

            </form>
        </div>
    </div>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\modeloLeiaute-master\resources\views/auth/passwords/email.blade.php ENDPATH**/ ?>