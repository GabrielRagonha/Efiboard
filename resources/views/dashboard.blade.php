@extends('layouts.template')

@section('title', 'Efiboard - Página inicial')

@section('styles')
    <link rel="stylesheet" href="{{ asset('assets/css/dashboard.css') }}" rel="preload">
@endsection

@section('navbar')
    @include('parts.navbar')
@endsection

@section('content')
    @include('components.taskStatus')

    <div class="stats">
        @include('components.taskDashboard')
        @include('components.taskChart')
    </div>

    <section>
        {{-- ROTA GET USER --}}
        <p>{{$userData['id']}}</p>
        <p>{{$userData['username']}}</p>
        <p>{{$userData['email']}}</p>
        <p style="width: 20px; height: 20px; border-radius: 100%; background-color:{{$userData['color']}}"></p>
        <p>{{$userData['initials']}}</p>
    </section>
@endsection