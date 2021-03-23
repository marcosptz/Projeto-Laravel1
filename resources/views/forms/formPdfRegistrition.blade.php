<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"> --}}
    <title>Document</title>
</head>
<body>
    <h2>PDF de Alunos Matriculados</h2>
    <p>{{date('d/m/Y H:i')}}</p>
    <hr>

    <table class="table table-striped table-responsive table table-hover" border="1">
        <tr>
            <td>Quantidade de alunos matriculados: {{$count}}</td>
            <td>Quantidade de vagas restantes: {{$qtd}}</td>
        </tr>
    {{-- </table> --}}
    {{-- <table class="table table-striped table-responsive table table-hover" border="1"> --}}
        <tr>
            <td>Número da Turma:</td>
            <td>Descrição:</td>
            <td>Quantidade de Vagas:</td>
            <td>Nome do Professor:</td>
        </tr>
        <tr>
            <td>{{$class->id}}</td>
            <td>{{$class->description}}</td>
            <td>{{$class->vacancies}}</td>
            <td>{{$class->teacher}}</td>
        </tr>

        <tr>
            <td>Matrícula:</td>
            <td>Nome:</td>
            <td>Sexo:</td>
            <td>Nascimento:</td>
        </tr>

        @foreach($student as $student)
        <tr>
            <td>{{$student->id}}</td>
            <td>{{$student->name}}</td>
            <td>{{$student->sex}}</td>
            <td>{{$student->birth_date}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
