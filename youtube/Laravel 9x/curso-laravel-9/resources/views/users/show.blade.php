@extends('layouts.app')
@section('title', 'Usuário')
@section('content')

<h1>Listagem do usuário: {{ $user->name }}</h1>

<ul>
    <li>{{ $user->name }}</li>
    <li>{{ $user->email }}</li>
</ul>

<form action="{{ route('users.delete', $user->id) }}" method="POST">
    @method('DELETE')
    @csrf
    <input type="submit" value="Deletar">
    <a href="{{ route('users.edit', $user->id) }}">Editar</a>
</form>
<br>
<a href="{{ route('users.index') }}">Voltar</a>

@endsection
