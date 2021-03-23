<form action="{{route('updateStudent')}}" method="post" class="form-horizontal" id="formProduto">
    @csrf
    @method('put')
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

            {{--- Formulario Nome ---}}

            <div class="form-group">
                <label for="nome" class="control-label">Nome: *</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="name" name="name" value="{{ $student->name }}">
                </div>
            </div>

            {{--- Formulario Sexo ---}}
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="tel" class="control-label">Sexo: *</label>
                    <div class="input-group ">
                        <input type="text" class="form-control phone_with_ddd" name="sex" id="sex"
                            value="{{ $student->sex }}"/>
                    </div>
                </div>

                {{--- Formulario Data de Nascimento ---}}

                <div class="form-group col-md-6">
                    <label for="tel2" class="control-label">Data de Nascimento: *</label>
                    <div class="input-group">
                        <input type="date" class="form-control phone_with_ddd" name="birth_date" id="birth_date"
                            value="{{ $student->birth_date }}" />
                    </div>
                </div>
            </div>

            {{--- Formulario Cidade ---}}

            <div class="form-group">
                <label for="endereco" class="control-label">Cidade: *</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="city" name="city"
                        value="{{ $student->city }}"/>
                </div>
            </div>

            {{--- Formulario Bairro ---}}

            <div class="form-group">
                <label for="endereco" class="control-label">Bairro: *</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="district" name="district"
                        value="{{ $student->district }}"/>
                </div>
            </div>

            {{--- Formulario Rua ---}}
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="tel" class="control-label">Rua: *</label>
                    <div class="input-group ">
                        <input type="text" class="form-control phone_with_ddd" name="street" id="street"
                            value="{{ $student->street }}" />
                    </div>
                </div>

                {{--- Formulario Número ---}}

                <div class="form-group col-md-6">
                    <label for="tel2" class="control-label">Número: *</label>
                    <div class="input-group">
                        <input type="text" class="form-control phone_with_ddd" name="number" id="number"
                            value="{{ $student->number }}" />
                    </div>
                </div>
            </div>
            {{--- Formulario Complemento ---}}

            <div class="form-group">
                <label for="email" class="control-label">Complemento: </label>
                <div class="input-group">
                    <input type="text" class="form-control" name="complement" id="complement"
                        value="{{ $student->complement }}" />
                </div>
            </div>

            {{--- Formulario Matrícula Aluno ---}}

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="tel" class="control-label">Matrícula do Aluno: (Não pode ser alterada)</label>
                        <div class="input-group ">
                            <input type="number" class="form-control phone_with_ddd"  readonly="true" name="id" id="id"
                                value="{{ $student->id }}"/>
                        </div>
                    </div>

                    {{--- Formulario  Número da Turma---}}

                    <div class="form-group col-md-6">
                        <label for="tel2" class="control-label">Número da Turma: *</label>
                        <div class="input-group">
                            <input type="number" class="form-control phone_with_ddd" name="class" id="class"
                                value="{{ $student->class }}" />
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
