@extends('layouts.app')

@section('title', 'Efiboard - Login')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/login.css') }}" rel="preload">
@endsection

@section('content')
    <section class="login">
        <figure class="login-left-figure">
            <img class="login-left-image" width="622" height="1024" src="{{ asset('assets/images/authImage.png') }}"
                alt="Imagem cadastro">
        </figure>

        <div class="login-right">
            <div class="login-right-content">
                <figure class="login-right-figure">
                    <img class="login-right-logo" width="324" height="102"
                        src="{{ asset('assets/images/logo.png') }}" alt="Eficaz">
                </figure>

                <div class="login-right-top">
                    <span class="login-title">Faça seu login</span>
                    <span class="login-desc">Área destinada para desenvolvedores e projetos</span>
                </div>

                <form class="login-form" action="{{ route('login.action') }}" method="POST">
                    @csrf

                    @if ($errors->any())
                        <div class="login-error">
                            <ul class="login-error-list">
                                @foreach ($errors->all() as $error)
                                    <li class="login-error-item">{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="login-field">
                        <label class="login-label" for="email">Email</label>
                        <input type="email" class="login-input" id="email" name="email"
                            placeholder="Insira seu email" required>
                    </div>

                    <div class="login-field">
                        <label class="login-label" for="password">Senha</label>
                        <input type="password" class="login-input" id="password" name="password"
                            placeholder="Insira sua senha" required>
                    </div>

                    <div class="login-remember">
                        <input type="checkbox" class="login-checkbox" name="remember" id="remember">
                        <label class="login-label" for="remember">Deseja se manter conectado?</label>
                    </div>

                    <button class="login-submit" type="submit">Entrar</button>
                </form>
            </div>

            <span class="login-copyright">© Eficaz Marketing | 2023</span>
        </div>
    </section>
@endsection
