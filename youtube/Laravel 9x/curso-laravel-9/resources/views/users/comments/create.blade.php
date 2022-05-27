@extends('layouts.app')
@section('title', 'Novo Comentário')
@section('content')

<h1 class="text-2xl font-semibold leading-tigh py-2">
    Novo Comentário Para o Usurário: {{ $user->name }}
</h1>
<hr>
@include('includes.validations-form')

<form action="{{ route('comments.store', $user->id) }}" method="POST" class="py-5">
    @include('users.comments._partials.form')

</form>
<br>
<a href="{{ route('users.index') }}">Voltar</a>

@endsection
