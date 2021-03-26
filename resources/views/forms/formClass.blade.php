<form action="{{route('cadastrarTurma.store')}}" method="post" class="form-horizontal" id="formProduto">
    @csrf
    <div class="card">
        <div class="card-header">
            <h4 class="col-12 modal-title text-center">Cadastrar Turma</h5>
        </div>
        <h6 class="col-12 modal-title text-center">Campos com * são obrigatorios</h6>
        <div class="container col-11">
            <input type="hidden" id="id" class="form-control">

            {{--- Formulario Turma ---}}

            <div class="form-group">
                <label for="nome" class="control-label">Descrição da Turma: *</label>
                <div class="input-group">
                    <input id="description" type="text" class="form-control @error('description') is-invalid @enderror" name="description"
                    value="{{ old('description') }}" autocomplete="description" autofocus placeholder="Ex: 1ª Série">

                    @error('description')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            {{--- Formulario Vagas ---}}
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="tel" class="control-label">Quantidade de Vagas: *</label>
                    <div class="input-group ">
                        <input id="vacancies" type="number" class="form-control @error('vacancies') is-invalid @enderror" name="vacancies"
                        value="{{ old('vacancies') }}" autocomplete="vacancies" autofocus placeholder="Ex: 123...">

                        @error('vacancies')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                {{--- Formulario Data de Professor ---}}

                <div class="form-group col-md-6">
                    <label for="tel2" class="control-label">Nome do Professor: *</label>
                    <div class="input-group">
                        <input id="teacher" type="text" class="form-control @error('teacher') is-invalid @enderror" name="teacher"
                        value="{{ old('teacher') }}" autocomplete="teacher" autofocus placeholder="Professor">

                        @error('teacher')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary">Salvar</button>
            <a class="btn btn-secondary" href="#">Cancelar</a>
        </div>
    </div>
</form>
