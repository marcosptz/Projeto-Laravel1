@extends('layouts.app')

@section('content')
<div class="container">
    <div class="card">
        <div class="card-header">{{ __('Criar Conta') }}</div>
        <div class="form">
            <form method="POST" action="{{ route('storeUser') }}">
                @csrf
                <div class="input">

                    <input id="profile" type="text" readonly="true" class="form-control @error('profile') is-invalid @enderror" name="profile"
                        value="operador" autocomplete="Operador" autofocus placeholder="Operador">

                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
                        value="{{ old('name') }}" autocomplete="name" autofocus placeholder="Nome">

                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                    @enderror

                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" autocomplete="email" autofocus placeholder="Email">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                    @enderror

                    {{-- <input type="string" name="cpf" id="cpf" class="form-control @error('cpf') is-invalid @enderror"
                        placeholder="CPF" maxlength="14" data-mask="000.000.000-00">

                    @error('cpf')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                    @enderror --}}

                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" required autocomplete="current-password" placeholder="Senha">

                    @error('password')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                    @enderror

                    <input id="password_confirmation" type="password" class="form-control @error('password_confirmation') is-invalid @enderror"
                        name="password_confirmation" required autocomplete="current-password" placeholder="Confirmar Senha">

                    @error('password_confirmation')
                    <span class="invalid-feedback" role="alert">
                        {{ $message }}
                    </span>
                    @enderror

                    <button type="submit">
                        {{ __('Registrar') }}
                    </button>
                </div>
                <div class="details">
                    <p class="register text-center">Deseja retornar? <a href="{{ route('home') }}">Voltar</a></p>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
