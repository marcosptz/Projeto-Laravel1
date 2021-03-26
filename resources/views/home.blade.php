@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    Você esta logado!
                    <p>Perfil: {{ Auth::user()->profile }}</p>
                    <p>Usuário: {{ Auth::user()->name }}</p>
                    {{-- <p> Qtd {{ Auth::user()->count() }}</p> --}}

                    <div class="conteudo">
                        @if(Auth::user()->profile == 'admin_ti')
                            @include('forms.formHome')
                        @endif
                        @if(Auth::user()->profile == 'admin_sis')
                            @include('forms.formHomeUser')
                        @endif
                        @if(Auth::user()->profile == 'operador')
                            @include('forms.formHomeOperator')
                        @endif
                        {{-- @include('forms.formHomeUser') --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
