@extends('layouts.app')
@section('title', 'Comentários')
@section('content')

<h1 class="text-2xl font-semibold leading-tigh py-2">
    Comentários do usuário: {{ $user->name }}
    <a href="{{ route('comments.create', $user->id) }}" class="bg-blue-900 rounded-full text-white px-4 text-sm">+</a>
</h1>
<hr>
<form action="{{ route('users.index') }}" method="GET" class="py-5">
    <input type="text" class="md:w-1/6 bg-gray-200 appearance-none px-2 py-1" name="search" placeholder="Pesquisar">
    <button class="shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white px-2 py-1">Pesquisar</button>
</form>

<table class="min-w-full leading-normal shadow-md rounded-lg overflow-hidden">
    <thead>
        <tr>
            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-gray-500">
                Conteúdo
            </th>
            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-gray-500">
                Visível
            </th>
            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-gray-500">
                Editar
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($comments as $comment)
        <tr>
            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                {{ $comment->body }}
            </td>
            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                {{ $comment->visible ? 'SIM' : 'NÃO' }}
            </td>
            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                <a href="{{ route('comments.edit', ['user' => $user->id, 'id' => $comment->id]) }}" class="bg-green-200 rounded-full px-6 py-2">Editar</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
<br>
<a href="{{ route('users.index') }}">Voltar</a>

@endsection
