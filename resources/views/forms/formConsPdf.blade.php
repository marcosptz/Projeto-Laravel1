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
    <p>{{date('d/m/y H:i')}}</p>
    <hr><br><br>

    <div class="conteudo">
        <h1>Gerar PDF</h1>

        <div class="form-group mx-sm-3 mb-2">
            <a href="{{ route('pdfStudents') }}" class="btn btn-primary stretched-link">Link PDF Alunos</a>
            <a href="{{ route('pdfClass') }}" class="btn btn-primary stretched-link">Link PDF Turma</a>
        </div>

        <form action="{{ route('pdfTeste') }}" method="post" class="form-inline">
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
              <input type="number" class="form-control" id="inputPassword2" name="id" placeholder="Número da Turma">
            </div>
            <button type="submit" class="btn btn-primary mb-2">Gerar PDF</button>
          </form>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
</body>
</html>
