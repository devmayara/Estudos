@extends('layouts.app')
@section('title', 'Editar Usuário')
@section('content')

<h1>Editar o Usuário {{ $user->name }}</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('users.update', $user->id) }}" method="post">
    @method('PUT')
    @csrf
    <input type="text" name="name" value="{{ $user->name }}" placeholder="Nome:">
    <input type="email" name="email" value="{{ $user->email }}" placeholder="E-mail:">
    <input type="password" name="password" placeholder="Senha:">
    <input type="submit" name="submit" value="Enviar">
</form>
<br>
<a href="{{ route('users.index') }}">Voltar</a>

@endsection
