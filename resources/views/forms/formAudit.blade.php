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
    <h1>Aditoria</h1>
    <p>{{date('d/m/y H:i')}}</p>
    <hr>

    <div class="conteudo">
        <h1>Consulta</h1>

        <form action="{{ route('auditShow') }}" method="post" class="form-inline">
            @csrf

            @if($errors->all())
                    @foreach($errors->all() as $error)
                        <div class="alert alert-danger" role="alert">
                            {{ $error }}
                        </div>
                    @endforeach
            @endif

            <div class="form-group mx-sm-3 mb-2">
                <label for="" class="sr-only">Senha</label>
                <input type="number" class="form-control" id="inputPassword2" name="id" placeholder="Id do Usuário">
            </div>
            <button type="submit" class="btn btn-primary mb-2">Consultar</button>
        </form>
    </div><br>

    <table class="table table-striped table-responsive table table-hover">
        <tr>
            <th>Modelo</th>
            <th>Ação</th>
            <th>Usuário</th>
            <th>Data</th>
            <th>Url</th>
            <th>Ip_adrress</th>
            <th>Navegador</th>
            <th>valores Antigos</th>
            <th>Valores Novos</th>
        </tr>

        @foreach($audits as $audit)
        <tr>
            <td>{{$audit->auditable_type }} (id: {{ $audit->auditable_id}})</td>
            <td>{{$audit->event}}</td>
            <td>{{$audit->user->name}}</td>
            <td>{{$audit->created_at}}</td>
            <td>{{$audit->url}}</td>
            <td>{{$audit->ip_adrress}}</td>
            <td>{{$audit->user_agent}}</td>
            <td>
                <table class="table table-bordered table-hover" style="width:100%">
                    @foreach($audit->old_values as $attribute  => $value)
                        <tr>
                            <td><b>{{ $attribute  }}</b></td>
                            <td>{{ $value }}</td>
                        </tr>
                    @endforeach
                </table>
            </td>
            <td>
                <table class="table table-bordered table-hover" style="width:100%">
                    @foreach($audit->new_values as  $attribute  => $data)
                        <tr>
                            <td><b>{{  $attribute  }}</b></td>
                            <td>{{ $data }}</td>
                        </tr>
                    @endforeach
                </table>
            </td>
        </tr>
        @endforeach
    </table>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
