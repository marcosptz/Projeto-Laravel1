<form action="<?php echo e(route('cadastrarTurma.store')); ?>" method="post" class="form-horizontal" id="formProduto">
    <?php echo csrf_field(); ?>
    <div class="card">
        <div class="card-header">
            <h4 class="col-12 modal-title text-center">Cadastrar Turma</h5>
        </div>
        <h6 class="col-12 modal-title text-center">Campos com * são obrigatorios</h6>
        <div class="container col-11">
            <input type="hidden" id="id" class="form-control">

            

            <div class="form-group">
                <label for="nome" class="control-label">Descrição da Turma: *</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="description" name="description" placeholder="Ex: 1ª Série">
                </div>
            </div>

            
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="tel" class="control-label">Quantidade de Vagas: *</label>
                    <div class="input-group ">
                        <input type="number" class="form-control phone_with_ddd" name="vacancies" id="vacancies"
                            placeholder="Ex: 1,2,3"/>
                    </div>
                </div>

                

                <div class="form-group col-md-6">
                    <label for="tel2" class="control-label">Nome do Professor: *</label>
                    <div class="input-group">
                        <input type="text" class="form-control phone_with_ddd" name="teacher" id="teacher"
                            placeholder="Professor" />
                    </div>
                </div>

        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a class="btn btn-secondary" href="#">Cancelar</a>
        </div>
    </div>
</form>
<?php /**PATH C:\xampp\htdocs\projeto-laravel\resources\views/formClass.blade.php ENDPATH**/ ?>