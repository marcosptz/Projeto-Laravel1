<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <h1>Consulta de Turmas</h1>
    <p>{{date('d/m/Y H:i')}}</p>
    <hr>

    <div class="form-group col-md-6">
        @if($errors->all())
            @foreach($errors->all() as $error)
                <div class="alert alert-success" role="alert">
                    {{ $error }}
                </div>
            @endforeach
        @endif
    </div>

    <table class="table table-striped table-responsive table table-hover">
        <tr>
            <td>Número da Turma:</td>
            <td>Descrição:</td>
            <td>Quantidade de Vagas:</td>
            <td>Nome do Professor:</td>
        </tr>

        @foreach($class as $class)
        <tr>
            <td>{{$class->id}}</td>
            <td>{{$class->description}}</td>
            <td>{{$class->vacancies}}</td>
            <td>{{$class->teacher}}</td>
            <td>
                <a href="/projeto-laravel-1/public/editingClass/{{$class->id}}" style="color: #3490dc; text-decoration: none; background-color: transparent;">
                        Editar
                        <i class="fas fa-pencil-alt" aria-hidden="true"></i>
                </a>
            </td>
            <td>
                <a href="/projeto-laravel-1/public/deletingClass/{{$class->id}}" style="color: #3490dc; text-decoration: none; background-color: transparent;">
                        Excluir
                        <i class="fa fa-trash" aria-hidden="true"></i>
                </a>
            </td>
        </tr>
        @endforeach
    </table>


    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
