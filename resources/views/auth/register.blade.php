@extends('layouts.app')

@section('title', 'Efiboard - Faça seu cadastro')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/register.css') }}" rel="preload">
@endsection

@section('content')
    <section class="register">
        <figure class="register-left-figure">
            <img class="register-left-image" width="622" height="1024" src="{{ asset('assets/images/authImage.png') }}" alt="Imagem cadastro">
        </figure>

        <div class="register-right">
            <div class="register-right-content">
                <figure class="register-right-figure">
                    <img class="register-right-logo" width="324" height="102" src="{{ asset('assets/images/logo.png') }}" alt="Eficaz">
                </figure>

                <div class="register-right-top">
                    <span class="register-title">Faça seu cadastro</span>
                    <span class="register-desc">Área destinada para desenvolvedores e projetos</span>
                </div>

                <form class="register-form" action="{{ route('register.save') }}" method="POST">
                    @csrf
                    <div class="register-field">
                        <label class="register-label" for="name">Nome</label>
                        <input type="text" class="register-input @error('name') invalid @enderror" id="name"
                            name="name" placeholder="Insira seu nome" required>

                        @error('name')
                            <span class="register-error" role="alert">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="register-field">
                        <label class="register-label" for="email">Email</label>
                        <input type="email" class="register-input @error('email') invalid @enderror" id="email"
                            name="email" placeholder="Insira seu email" required>

                        @error('email')
                            <span class="register-error" role="alert">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="register-field">
                        <label class="register-label" for="password">Senha</label>
                        <input type="password" class="register-input @error('password') invalid @enderror"
                            id="password" name="password" placeholder="Insira sua senha" required>

                        @error('password')
                            <span class="register-error" role="alert">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="register-field">
                        <label class="register-label" for="password-confirmation">Senha</label>
                        <input type="password" class="register-input @error('password_confirmation') invalid @enderror"
                            id="password-confirmation" name="password_confirmation" placeholder="Confirme sua senha"
                            required>

                        @error('password_confirmation')
                            <span class="register-error" role="alert">{{ $message }}</span>
                        @enderror
                    </div>

                    <button class="register-submit" type="submit">Cadastrar conta</button>
                </form>
            </div>

            <span class="register-copyright">© Eficaz Marketing | 2023</span>
        </div>
    </section>
@endsection

