@extends('layouts.app')
@section('title', 'Usuário')
@section('content')
<h1>Listagem do usuário: {{ $user->name }}</h1>

<ul>
    <li>{{ $user->name }}</li>
    <li>{{ $user->email }}</li>
</ul>

<a href="{{ route('users.index') }}">Voltar</a>

@endsection
