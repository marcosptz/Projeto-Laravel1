<form action="{{route('updateClass')}}" method="post" class="form-horizontal" id="formProduto">
    @csrf
    @method('put')
    <div class="card">
        <div class="card-header">
            <h4 class="col-12 modal-title text-center">Editar Turma</h5>
        </div>
        <h6 class="col-12 modal-title text-center">Edite os campos que deseja alterar</h6>
        <div class="container col-11">
            <input type="hidden" id="id" class="form-control">

            {{--- Formulario Número da Turma ---}}

            <div class="form-group">
                <label for="nome" class="control-label">Número da Turma: (Não pode ser editado)</label>
                <div class="input-group">
                    <input type="number" class="form-control" readonly="true" id="id" name="id" value="{{ $class->id }}"/>
                </div>
            </div>

            {{--- Formulario Turma ---}}

            <div class="form-group">
                <label for="nome" class="control-label">Descrição da Turma:</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="description" name="description" value="{{ $class->description }}"/>
                </div>
            </div>

            {{--- Formulario Vagas ---}}
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="tel" class="control-label">Quantidade de Vagas:</label>
                    <div class="input-group ">
                        <input type="number" class="form-control phone_with_ddd" name="vacancies" id="vacancies"
                            value="{{ $class->vacancies }}"/>
                    </div>
                </div>

                {{--- Formulario Data de Professor ---}}

                <div class="form-group col-md-6">
                    <label for="tel2" class="control-label">Nome do Professor:</label>
                    <div class="input-group">
                        <input type="text" class="form-control phone_with_ddd" name="teacher" id="teacher"
                            value="{{ $class->teacher }}" />
                    </div>
                </div>

            </div>
            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Salvar</button>
                <a class="btn btn-secondary" href="#">Cancelar</a>
            </div>
        </div>
    </div>
</form>
