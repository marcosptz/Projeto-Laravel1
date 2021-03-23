<form action="{{route('cadStudent.store')}}" method="post" class="form-horizontal" id="formProduto">
    @csrf
    <div class="card">
        <div class="card-header">
            <h4 class="col-12 modal-title text-center">Cadastro de Aluno</h5>
        </div>
        <h6 class="col-12 modal-title text-center">Campos com * são obrigatorios</h6>
        <div class="container col-11">
            <input type="hidden" id="id" class="form-control">

            {{--- Formulario Nome ---}}

            <div class="form-group">
                <label for="nome" class="control-label">Nome: *</label>
                <div class="input-group">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                    value="{{ old('name') }}" autocomplete="name" autofocus placeholder="Nome completo">

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                    @enderror
                </div>
            </div>

            {{--- Formulario Sexo ---}}

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="tel" class="control-label">Sexo: *</label>
                    <div class="input-group ">
                        <input id="sex" type="text" class="form-control @error('sex') is-invalid @enderror" name="sex"
                        value="{{ old('sex') }}" autocomplete="sex" autofocus placeholder="M/F">

                         @error('sex')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                {{--- Formulario Data de Nascimento ---}}

                <div class="form-group col-md-6">
                    <label for="tel2" class="control-label">Data de Nascimento: *</label>
                    <div class="input-group">
                        <input id="birth_date" type="date" class="form-control @error('birth_date') is-invalid @enderror" name="birth_date"
                        value="{{ old('birth_date') }}" autocomplete="birth_date" autofocus placeholder="M/F">

                        @error('birth_date')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>

            {{--- Formulario Cidade ---}}

            <div class="form-group">
                <label for="endereco" class="control-label">Cidade: *</label>
                <div class="input-group">
                    <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city"
                    value="{{ old('city') }}" autocomplete="city" autofocus placeholder="cidade, Estado">

                    @error('city')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            {{--- Formulario Bairro ---}}

            <div class="form-group">
                <label for="endereco" class="control-label">Bairro: *</label>
                <div class="input-group">
                    <input id="district" type="text" class="form-control @error('district') is-invalid @enderror" name="district"
                    value="{{ old('district') }}" autocomplete="district" autofocus placeholder="Ex: Centro">

                    @error('district')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            {{--- Formulario Rua ---}}

            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="tel" class="control-label">Rua: *</label>
                    <div class="input-group ">
                        <input id="street" type="text" class="form-control @error('street') is-invalid @enderror" name="street"
                        value="{{ old('street') }}" autocomplete="street" autofocus placeholder="Ex: Av. Dom João Becker">

                        @error('street')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>

                {{--- Formulario Número ---}}

                <div class="form-group col-md-6">
                    <label for="tel2" class="control-label">Número: *</label>
                    <div class="input-group">
                        <input id="number" type="number" class="form-control @error('number') is-invalid @enderror" name="number"
                        value="{{ old('number') }}" autocomplete="number" autofocus placeholder="123...">

                        @error('number')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
            </div>

            {{--- Formulario Complemento ---}}

            <div class="form-group">
                <label for="email" class="control-label">Complemento: </label>
                <div class="input-group">
                    <input id="complement" type="text" class="form-control @error('complement') is-invalid @enderror" name="complement"
                    value="{{ old('complement') }}" autocomplete="complement" autofocus placeholder="Ex: Rota do sol">

                    @error('complement')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                </div>
            </div>

            {{--- Formulario Turma ---}}

            <div class="form-group">
                <label for="email" class="control-label">Número da Turma: (Poderá ser adicionado em outro momento)</label>
                <div class="input-group">
                    <input id="class" type="number" class="form-control @error('class') is-invalid @enderror" name="class"
                    value="{{ old('class') }}" autocomplete="class" autofocus placeholder="123...">

                    @error('class')
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
