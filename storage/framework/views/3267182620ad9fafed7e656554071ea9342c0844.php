<form action="<?php echo e(route('resultRegistration')); ?>" method="post" class="form-horizontal" id="formProduto">
    <?php echo csrf_field(); ?>
    <?php echo method_field('put'); ?>
    <div class="card">
        <div class="card-header">
            <h4 class="col-12 modal-title text-center">Matricular de Alunos</h4>
        </div>
        <h6 class="col-12 modal-title text-center">Digite o número da turma que deseja matricular o aluno</h6>
        <div class="container col-11">
            <input type="hidden" id="id" class="form-control"><br><br>


            <div class="form-row">
                <p>Cadastre um aluno em uma turma</p>
            </div><br><br>

            

            <div class="form-group">
                <label for="nome" class="control-label">Nome:</label>
                <div class="input-group">
                    <input type="text" class="form-control" readonly="true" id="name" name="name" value="<?php echo e($student->name); ?>">
                </div>
            </div>

            
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="tel" class="control-label">Sexo:</label>
                    <div class="input-group ">
                        <input type="text" class="form-control phone_with_ddd" readonly="true" name="sex" id="sex"
                            value="<?php echo e($student->sex); ?>"/>
                    </div>
                </div>

                

                <div class="form-group col-md-6">
                    <label for="tel2" class="control-label">Data de Nascimento:</label>
                    <div class="input-group">
                        <input type="date" class="form-control phone_with_ddd" readonly="true" name="birth_date" id="birth_date"
                            value="<?php echo e($student->birth_date); ?>" />
                    </div>
                </div>
            </div>

            

            <div class="form-group">
                <label for="endereco" class="control-label">Cidade:</label>
                <div class="input-group">
                    <input type="text" class="form-control" readonly="true" id="city" name="city"
                        value="<?php echo e($student->city); ?>"/>
                </div>
            </div>

            

            <div class="form-group">
                <label for="endereco" class="control-label">Bairro:</label>
                <div class="input-group">
                    <input type="text" class="form-control" readonly="true" id="district" name="district"
                        value="<?php echo e($student->district); ?>"/>
                </div>
            </div>

            
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="tel" class="control-label">Rua:</label>
                    <div class="input-group ">
                        <input type="text" class="form-control phone_with_ddd" readonly="true" name="street" id="street"
                            value="<?php echo e($student->street); ?>" />
                    </div>
                </div>

                

                <div class="form-group col-md-6">
                    <label for="tel2" class="control-label">Número:</label>
                    <div class="input-group">
                        <input type="text" class="form-control phone_with_ddd" readonly="true" name="number" id="number"
                            value="<?php echo e($student->number); ?>" />
                    </div>
                </div>
            </div>
            

            <div class="form-group">
                <label for="email" class="control-label">Complemento:</label>
                <div class="input-group">
                    <input type="text" class="form-control" readonly="true" name="complement" id="complement"
                        value="<?php echo e($student->complement); ?>" />
                </div>
            </div><br><br>

            <div class="form-row">
                <p>Digite o número da turma que você deseja cadastrar o aluno</p>
            </div><br><br>

            

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="tel" class="control-label">Matrícula do Aluno:</label>
                        <div class="input-group ">
                            <input type="number" class="form-control phone_with_ddd" readonly="true" name="id" id="id"
                                value="<?php echo e($student->id); ?>"/>
                        </div>
                    </div>

                    

                    <div class="form-group col-md-6">
                        <?php if($errors->all()): ?>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <div class="alert alert-danger" role="alert">
                                    <?php echo e($error); ?>

                                </div>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        <?php endif; ?>

                        <label for="tel2" class="control-label">Número da Turma:</label>
                        <div class="input-group">
                            <input type="number" class="form-control phone_with_ddd" name="class" id="class"
                                placeholder="Digite o número da turma" />
                        </div>
                    </div>
                </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Salvar</button>
                <a class="btn btn-secondary" href="#">Cancelar</a>
            </div>
        </div>
    </div>
</form><br><br>

<?php /**PATH C:\xampp\htdocs\projeto-laravel-1\resources\views/forms/formRegistration.blade.php ENDPATH**/ ?>