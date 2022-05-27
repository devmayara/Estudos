@extends('layouts.app')
@section('title', 'Usuário')
@section('content')

<h1 class="text-2xl font-semibold leading-tigh py-2">
    Listagem do usuário: {{ $user->name }}
</h1>
<hr>
<ul class="py-5">
    <li>{{ $user->name }}</li>
    <li>{{ $user->email }}</li>
</ul>

<form action="{{ route('users.delete', $user->id) }}" method="POST">
    @method('DELETE')
    @csrf
    <input type="submit" class="bg-red-500 rounded-full text-white  px-4 py-1 text-sm" value="Deletar">
    <a class="bg-green-500 rounded-full text-white  px-4 py-1 text-sm" href="{{ route('users.edit', $user->id) }}">Editar</a>
</form>
<br>
<a href="{{ route('users.index') }}">Voltar</a>

@endsection
