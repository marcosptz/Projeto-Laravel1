<form action="<?php echo e(route('cadastrarTurma.store')); ?>" method="post" class="form-horizontal" id="formProduto">
    <?php echo csrf_field(); ?>
    <div class="card">
        <div class="card-header">
            <h4 class="col-12 modal-title text-center">Cadastrar Turma</h5>
        </div>
        <h6 class="col-12 modal-title text-center">Campos com * são obrigatorios</h6>
        <div class="container col-11">
            <input type="hidden" id="id" class="form-control" >

            

            <div class="form-group">
                <label for="nome" class="control-label">Descrição da Turma: *</label>
                <div class="input-group">
                    <input id="description" type="text" class="form-control <?php if ($errors->has('description')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('description'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="description"
                    value="<?php echo e(old('description')); ?>" autocomplete="description" autofocus placeholder="Ex: 1ª Série" required>

                    <?php if ($errors->has('description')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('description'); ?>
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
                    <label for="tel" class="control-label">Quantidade de Vagas: *</label>
                    <div class="input-group ">
                        <input id="vacancies" type="number" class="form-control <?php if ($errors->has('vacancies')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('vacancies'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="vacancies"
                        value="<?php echo e(old('vacancies')); ?>" autocomplete="vacancies" autofocus placeholder="Ex: 123..." required>

                        <?php if ($errors->has('vacancies')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('vacancies'); ?>
                        <span class="invalid-feedback" role="alert">
                            <strong><?php echo e($message); ?></strong>
                        </span>
                        <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>
                    </div>
                </div>

                

                <div class="form-group col-md-6">
                    <label for="tel2" class="control-label">Nome do Professor: *</label>
                    <div class="input-group">
                        <input id="teacher" type="text" class="form-control <?php if ($errors->has('teacher')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('teacher'); ?> is-invalid <?php unset($message);
if (isset($messageCache)) { $message = $messageCache; }
endif; ?>" name="teacher"
                        value="<?php echo e(old('teacher')); ?>" autocomplete="teacher" autofocus placeholder="Professor" required>

                        <?php if ($errors->has('teacher')) :
if (isset($message)) { $messageCache = $message; }
$message = $errors->first('teacher'); ?>
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
<?php /**PATH C:\xampp\htdocs\projeto-laravel-1\resources\views/forms/formClass.blade.php ENDPATH**/ ?>