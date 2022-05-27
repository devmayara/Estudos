@extends('layouts.app')
@section('title', 'Novo Usuário')
@section('content')

<h1>Novo Usuário</h1>

@if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif

<form action="{{ route('users.store') }}" method="post">
    @csrf
    <input type="text" name="name" value="{{ old('name') }}" placeholder="Nome:">
    <input type="email" name="email" value="{{ old('email') }}" placeholder="E-mail:">
    <input type="password" name="password" placeholder="Senha:">
    <input type="submit" name="submit" value="Enviar">
</form>

@endsection
