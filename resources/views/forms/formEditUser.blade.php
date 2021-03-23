<form method="POST" action="{{ route('updateUser') }}">
    @csrf
    @method('put')

    <div class="card">
        <div class="card-header">
            <h4 class="col-12 modal-title text-center">Editar Usuário</h5>
        </div>
        <h6 class="col-12 modal-title text-center">Edite os campos que deseja alterar</h6>
        <div class="container col-11">
            <input type="hidden" id="id" class="form-control">

            {{--- Formulario Id ---}}

            <div class="form-group">
                <label for="nome" class="control-label">Id do usuário: (Não pode ser editado)</label>
                <div class="input-group">
                    <input type="text" class="form-control" readonly="true" id="id" name="id" value="{{ $user->id }}"/>
                </div>
            </div>

            {{--- Formulario Número da Perfil ---}}

            @if(Auth::user()->profile == 'admin_sis')
                <div class="form-group">
                    <label for="nome" class="control-label">Perfil do usuário: (Não pode ser editado)</label>
                    <div class="input-group">
                        <input type="text" class="form-control" readonly="true" id="profile" name="profile" value="{{ $user->profile }}"/>
                    </div>
                </div>
            @endif
            <div class="form-group">
                <label for="nome" class="control-label">Perfil do usuário: </label>
                <div class="input-group">
                    <input type="text" class="form-control" id="profile" name="profile" value="{{ $user->profile }}"/>
                </div>
            </div>

            {{--- Formulario Nome ---}}

            <div class="form-group">
                <label for="nome" class="control-label">Nome do usuário: </label>
                <div class="input-group">
                    <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}"/>
                </div>
            </div>

            {{--- Formulario Turma ---}}

            <div class="form-group">
                <label for="nome" class="control-label">Email do usuário: </label>
                <div class="input-group">
                    <input type="text" class="form-control" id="email" name="email" value="{{ $user->email }}"/>
                </div>
            </div>
        </div>
    </div>

    <div class="card-footer">
        <button type="submit" class="btn btn-primary">Salvar</button>
        <a class="btn btn-secondary" href="#">Cancelar</a>
    </div>
</form>
