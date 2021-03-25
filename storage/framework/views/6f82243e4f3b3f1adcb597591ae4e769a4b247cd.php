<form action="<?php echo e(route('updateStudent')); ?>" method="post" class="form-horizontal" id="formProduto">
    <?php echo csrf_field(); ?>
    <?php echo method_field('put'); ?>
    <div class="card">
        <div class="card-header">
            <h4 class="col-12 modal-title text-center">Cadastro de Aluno</h4>
        </div>
        <h6 class="col-12 modal-title text-center">Campos com * são obrigatorios</h6>
        <div class="container col-11">
            <input type="hidden" id="id" class="form-control"><br><br>


            <div class="form-row">
                <p>Altere os dados de um aluno</p>
            </div><br><br>

            

            <div class="form-group">
                <label for="nome" class="control-label">Nome: *</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="name" name="name" value="<?php echo e($student->name); ?>">
                </div>
            </div>

            
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="tel" class="control-label">Sexo: *</label>
                    <div class="input-group ">
                        <input type="text" class="form-control phone_with_ddd" name="sex" id="sex"
                            value="<?php echo e($student->sex); ?>"/>
                    </div>
                </div>

                

                <div class="form-group col-md-6">
                    <label for="tel2" class="control-label">Data de Nascimento: *</label>
                    <div class="input-group">
                        <input type="date" class="form-control phone_with_ddd" name="birth_date" id="birth_date"
                            value="<?php echo e($student->birth_date); ?>" />
                    </div>
                </div>
            </div>

            

            <div class="form-group">
                <label for="endereco" class="control-label">Cidade: *</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="city" name="city"
                        value="<?php echo e($student->city); ?>"/>
                </div>
            </div>

            

            <div class="form-group">
                <label for="endereco" class="control-label">Bairro: *</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="district" name="district"
                        value="<?php echo e($student->district); ?>"/>
                </div>
            </div>

            
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="tel" class="control-label">Rua: *</label>
                    <div class="input-group ">
                        <input type="text" class="form-control phone_with_ddd" name="street" id="street"
                            value="<?php echo e($student->street); ?>" />
                    </div>
                </div>

                

                <div class="form-group col-md-6">
                    <label for="tel2" class="control-label">Número: *</label>
                    <div class="input-group">
                        <input type="text" class="form-control phone_with_ddd" name="number" id="number"
                            value="<?php echo e($student->number); ?>" />
                    </div>
                </div>
            </div>
            

            <div class="form-group">
                <label for="email" class="control-label">Complemento: </label>
                <div class="input-group">
                    <input type="text" class="form-control" name="complement" id="complement"
                        value="<?php echo e($student->complement); ?>" />
                </div>
            </div>

            

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="tel" class="control-label">Matrícula do Aluno: (Não pode ser alterada)</label>
                        <div class="input-group ">
                            <input type="number" class="form-control phone_with_ddd"  readonly="true" name="id" id="id"
                                value="<?php echo e($student->id); ?>"/>
                        </div>
                    </div>

                    

                    <div class="form-group col-md-6">
                        <label for="tel2" class="control-label">Número da Turma: *</label>
                        <div class="input-group">
                            <input type="number" class="form-control phone_with_ddd" name="class" id="class"
                                value="<?php echo e($student->class); ?>" />
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
<?php /**PATH C:\xampp\htdocs\projeto-laravel-1\resources\views/formEdit.blade.php ENDPATH**/ ?>