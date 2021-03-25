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
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nome completo">
                </div>
            </div>

            

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="tel" class="control-label">Sexo: *</label>
                    <div class="input-group ">
                        <input type="text" class="form-control phone_with_ddd" name="sex" id="sex"
                            placeholder="M/F"/>
                    </div>
                </div>

                

                <div class="form-group col-md-6">
                    <label for="tel2" class="control-label">Data de Nascimento: *</label>
                    <div class="input-group">
                        <input type="date" class="form-control phone_with_ddd" name="birth_date" id="birth_date"
                            placeholder="dd/mm/aaaa" />
                    </div>
                </div>
            </div>

            

            <div class="form-group">
                <label for="endereco" class="control-label">Cidade: *</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="city" name="city"
                        placeholder="Cidade, Estado"/>
                </div>
            </div>

            

            <div class="form-group">
                <label for="endereco" class="control-label">Bairro: *</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="district" name="district"
                        placeholder="Ex: Centro"/>
                </div>
            </div>

            

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="tel" class="control-label">Rua: *</label>
                    <div class="input-group ">
                        <input type="text" class="form-control phone_with_ddd" name="street" id="street"
                            placeholder="Ex: Av. Dom João Becker" />
                    </div>
                </div>

                

                <div class="form-group col-md-6">
                    <label for="tel2" class="control-label">Número: *</label>
                    <div class="input-group">
                        <input type="text" class="form-control phone_with_ddd" name="number" id="number"
                            placeholder="123" />
                    </div>
                </div>
            </div>

            

            <div class="form-group">
                <label for="email" class="control-label">Complemento: </label>
                <div class="input-group">
                    <input type="text" class="form-control" name="complement" id="complement"
                        placeholder="Ex: Rota do sol" />
                </div>
            </div>

            

            <div class="form-group">
                <label for="email" class="control-label">Turma: </label>
                <div class="input-group">
                    <input type="text" class="form-control" name="class" id="class"
                        placeholder="Escreva o número da turma ou poderá adicionar quando quiser" />
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a class="btn btn-secondary" href="#">Cancelar</a>
        </div>
    </div>
</form>
<?php /**PATH C:\xampp\htdocs\projeto-laravel\resources\views/formStudent.blade.php ENDPATH**/ ?>