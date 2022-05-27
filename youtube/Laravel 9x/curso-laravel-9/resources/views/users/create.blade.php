@extends('layouts.app')
@section('title', 'Novo Usuário')
@section('content')

<h1 class="text-2xl font-semibold leading-tigh py-2">
    Novo Usuário
</h1>
<hr>
@include('includes.validations-form')

<form action="{{ route('users.store') }}" method="POST" class="py-5">
    @include('users._partials.form')

</form>
<br>
<a href="{{ route('users.index') }}">Voltar</a>

@endsection
