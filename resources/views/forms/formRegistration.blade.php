<form action="{{route('resultRegistration')}}" method="post" class="form-horizontal" id="formProduto">
    @csrf
    @method('put')
    <div class="card">
        <div class="card-header">
            <h4 class="col-12 modal-title text-center">Matricular Aluno</h4>
        </div>
        <h6 class="col-12 modal-title text-center">Campos com * são obrigatorios</h6>
        <div class="container col-11">
            <input type="hidden" id="id" class="form-control"><br><br>

            <div class="form-row">
                <p>Matricule um aluno em uma turma</p>
            </div><br>

            {{-- <div class="input-group">
                <table class="table table-striped table-responsive table table-hover">
                    <tr>
                        <td>Matrícula:</td>
                        <td>Nome:</td>
                        <td>Turma:</td>
                    </tr>
                    <tr>
                        <td>{{$student->id}}</td>
                        <td>{{$student->name}}</td>
                        <td><select name="class" class="form-group col-md-12" aria-label="Default select example">
                            <option selected>Selecione a turma</option>
                            @foreach ($class as $class)
                                <option value={{ $class->id }}>Turma {{ $class->id }} - {{ $class->description }}</option>
                            @endforeach
                        </select></td>
                </table>
            </div> --}}

            {{--- Formulario Nome ---}}

            <div class="form-group">
                <label for="nome" class="control-label">Nome:</label>
                <div class="input-group">
                    <input type="text" class="form-control" id="name" readonly="true" name="name" value="{{ $student->name }}">
                </div>
            </div>

            {{--- Formulario Matrícula Aluno ---}}

                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="tel" class="control-label">Matrícula do Aluno:</label>
                        <div class="input-group ">
                            <input type="number" class="form-control phone_with_ddd" readonly="true" name="id" id="id"
                                value="{{ $student->id }}"/>
                        </div>
                    </div>

                    {{--- Formulario  Número da Turma---}}

                    <div class="form-group col-md-6">
                        @if($errors->all())
                            @foreach($errors->all() as $error)
                                <div class="alert alert-danger" role="alert">
                                    {{ $error }}
                                </div>
                            @endforeach
                        @endif

                        <label for="tel2" class="control-label">Número da Turma: *</label>
                        <div class="input-group">
                            <select name="class" class="form-group col-md-12" aria-label="Default select example" required>
                                <option value="" selected>Selecione a turma</option>
                                @foreach ($class as $class)
                                    <option value={{ $class->id }}>Turma {{ $class->id }} - {{ $class->description }}</option>
                                @endforeach
                            </select>
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

