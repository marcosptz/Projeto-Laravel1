<form action="<?php echo e(route('cadStudent.store')); ?>" method="post" class="form-horizontal" id="formProduto">
    <?php echo csrf_field(); ?>
    <div class="card">
        <div class="card-header">
            <h4 class="col-12 modal-title text-center">Cadastro de Aluno</h5>
        </div>
        <h6 class="col-12 modal-title text-center">Campos com * são obrigatorios</h6>
        <div class="container col-11">
            <input type="hidden" id="id" class="form-control">

            

            <div class="form-group">
                <label for="nome" class="control-label">Nome: *</label>
                <div class="input-group">
                    <input id="name" type="text" class="form-control <?php if ($errors->has('name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('name'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="name"
                    value="<?php echo e(old('name')); ?>" autocomplete="name" autofocus placeholder="Nome completo">

                    <?php if ($errors->has('name')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('name'); ?>
                    <span class="invalid-feedback" role="alert">
                        <?php echo e($message); ?>

                    </span>
                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                </div>
            </div>

            

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="tel" class="control-label">Sexo: *</label>
                    <div class="input-group ">
                        <input id="sex" type="text" class="form-control <?php if ($errors->has('sex')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('sex'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="sex"
                        value="<?php echo e(old('sex')); ?>" autocomplete="sex" autofocus placeholder="M/F">

                         <?php if ($errors->has('sex')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('sex'); ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                        <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                    </div>
                </div>

                

                <div class="form-group col-md-6">
                    <label for="tel2" class="control-label">Data de Nascimento: *</label>
                    <div class="input-group">
                        <input id="birth_date" type="date" class="form-control <?php if ($errors->has('birth_date')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('birth_date'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="birth_date"
                        value="<?php echo e(old('birth_date')); ?>" autocomplete="birth_date" autofocus placeholder="M/F">

                        <?php if ($errors->has('birth_date')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('birth_date'); ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                        <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                    </div>
                </div>
            </div>

            

            <div class="form-group">
                <label for="endereco" class="control-label">Cidade: *</label>
                <div class="input-group">
                    <input id="city" type="text" class="form-control <?php if ($errors->has('city')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('city'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="city"
                    value="<?php echo e(old('city')); ?>" autocomplete="city" autofocus placeholder="cidade, Estado">

                    <?php if ($errors->has('city')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('city'); ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($message); ?></strong>
                    </span>
                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                </div>
            </div>

            

            <div class="form-group">
                <label for="endereco" class="control-label">Bairro: *</label>
                <div class="input-group">
                    <input id="district" type="text" class="form-control <?php if ($errors->has('district')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('district'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="district"
                    value="<?php echo e(old('district')); ?>" autocomplete="district" autofocus placeholder="Ex: Centro">

                    <?php if ($errors->has('district')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('district'); ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($message); ?></strong>
                    </span>
                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                </div>
            </div>

            

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="tel" class="control-label">Rua: *</label>
                    <div class="input-group ">
                        <input id="street" type="text" class="form-control <?php if ($errors->has('street')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('street'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="street"
                        value="<?php echo e(old('street')); ?>" autocomplete="street" autofocus placeholder="Ex: Av. Dom João Becker">

                        <?php if ($errors->has('street')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('street'); ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                        <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                    </div>
                </div>

                

                <div class="form-group col-md-6">
                    <label for="tel2" class="control-label">Número: *</label>
                    <div class="input-group">
                        <input id="number" type="number" class="form-control <?php if ($errors->has('number')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('number'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="number"
                        value="<?php echo e(old('number')); ?>" autocomplete="number" autofocus placeholder="123...">

                        <?php if ($errors->has('number')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('number'); ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                        <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                    </div>
                </div>
            </div>

            

            <div class="form-group">
                <label for="email" class="control-label">Complemento: </label>
                <div class="input-group">
                    <input id="complement" type="text" class="form-control <?php if ($errors->has('complement')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('complement'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="complement"
                    value="<?php echo e(old('complement')); ?>" autocomplete="complement" autofocus placeholder="Ex: Rota do sol">

                    <?php if ($errors->has('complement')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('complement'); ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($message); ?></strong>
                    </span>
                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                </div>
            </div>

            

            <div class="form-group">
                <label for="email" class="control-label">Número da Turma: (Poderá ser adicionado em outro momento)</label>
                <div class="input-group">
                    <input id="class" type="number" class="form-control <?php if ($errors->has('class')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('class'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="class"
                    value="<?php echo e(old('class')); ?>" autocomplete="class" autofocus placeholder="123...">

                    <?php if ($errors->has('class')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('class'); ?>
                    <span class="invalid-feedback" role="alert">
                        <strong><?php echo e($message); ?></strong>
                    </span>
                    <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a class="btn btn-secondary" href="#">Cancelar</a>
        </div>
    </div>
</form>
<?php /**PATH C:\xampp\htdocs\projeto-laravel-1\resources\views/forms/formStudent.blade.php ENDPATH**/ ?>