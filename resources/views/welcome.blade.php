@extends('layouts.master')
@section('title','WELCOME')
@section('content')

<div class="conteudo">
    @include('forms.formWelcome')
</div>

<div class="conteudo">
    <div class="row d-flex justify-content-around">
        <div class="col-sm-3">
            <div class="card text-center">
                <img class="card-img-top" src="{{ URL::to('/imagens/cadastro1.png') }}" alt="">
                <div class="card-body">
                    <h4 class="card-title">Cadastro de Alunos</h4>
                    <p class="card-text"></p>
                    <a href="{{ route('cadStudent') }}" class="btn btn-primary stretched-link">Link cadastro</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card text-center">
                <img class="card-img-top" src="{{ URL::to('/imagens/lista.png') }}" alt="">
                <div class="card-body">
                    <h4 class="card-title">Lista de Alunos</h4>
                    <p class="card-text"></p>
                    <a href="{{ route('listAll') }}" class="btn btn-primary stretched-link">Link lista</a>
                </div>
            </div>
        </div>
        <div class="col-sm-3">
            <div class="card text-center">
                <img class="card-img-top" src="{{ URL::to('/imagens/pdf.png') }}" alt="">
                <div class="card-body">
                    <h4 class="card-title">Gerar PDF</h4>
                    <p class="card-text"></p>
                    <a href="{{ route('pdfRegistrition') }}" class="btn btn-primary stretched-link">Link PDF</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
