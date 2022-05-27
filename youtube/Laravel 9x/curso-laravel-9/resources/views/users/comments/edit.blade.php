@extends('layouts.app')
@section('title', 'Editar Comentário')
@section('content')

<h1 class="text-2xl font-semibold leading-tigh py-2">
    Editar o Comentário do usuário: {{ $user->name }}
</h1>
<hr>
@include('includes.validations-form')

<form action="{{ route('comments.update', $comment->id) }}" method="post">
    @method('PUT')
    @include('users.comments._partials.form')
</form>
<br>
<a href="{{ route('users.index') }}">Voltar</a>

@endsection
