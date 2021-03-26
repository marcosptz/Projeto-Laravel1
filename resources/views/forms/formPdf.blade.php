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
    <h1>Alunos</h1>
    <p>{{date('d/m/y H:i')}}</p>
    <hr>

    <table class="table table-striped table-responsive table table-hover" border="1">
        <tr>
            <td>Matrícula:</td>
            <td>Nome:</td>
            <td>Sexo:</td>
            <td>Nascimento:</td>
            <td>Cidade</td>
            <td>Bairro:</td>
            <td>Rua:</td>
            <td>Número:</td>
            <td>Ccomplemento:</td>
            <td>Turma:</td>
        </tr>

        @foreach($student as $student)
        <tr>
            <td>{{$student->id}}</td>
            <td>{{$student->name}}</td>
            <td>{{$student->sex}}</td>
            <td>{{$student->birth_date}}</td>
            <td>{{$student->city}}</td>
            <td>{{$student->district}}</td>
            <td>{{$student->street}}</td>
            <td>{{$student->number}}</td>
            <td>{{$student->complement}}</td>
            <td>{{$student->class}}</td>
        </tr>
        @endforeach
    </table>
</body>
</html>
