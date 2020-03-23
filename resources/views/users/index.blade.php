@extends('layout')

@section('tittle', 'Usuarios')

@section('content')
    <h1>{{ $tittle }}</h1>

    <ul>
        @forelse ($users as $user)
            <li>{{ $user->name }}, ({{$user -> email}})</li>
        @empty
            <li>No hay usuarios registrados.</li>
        @endforelse
    </ul>
@endsection

@section('sidebar')
    @parent

    <h2>Barra lateral personalizada!</h2>
@endsection
