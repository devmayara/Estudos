@extends('layouts.app')
@section('title', 'Editar Usuário')
@section('content')

<h1>Editar o Usuário {{ $user->name }}</h1>

@include('includes.validations-form')

<form action="{{ route('users.update', $user->id) }}" method="post">
    @method('PUT')
    @include('users._partials.form')
</form>
<br>
<a href="{{ route('users.index') }}">Voltar</a>

@endsection
