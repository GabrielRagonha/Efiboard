@extends('layouts.template')

@section('title', 'Efiboard - Landing')

@section('content')
    <section>
        <a href="{{ route('login') }}">Login</a>

        <a href="{{ route('cadastro') }}">Register</a>
    </section>
@endsection
