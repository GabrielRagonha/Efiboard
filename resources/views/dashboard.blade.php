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
@endsection