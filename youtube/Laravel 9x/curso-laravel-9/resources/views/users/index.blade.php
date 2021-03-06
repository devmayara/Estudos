@extends('layouts.app')
@section('title', 'Usuários')
@section('content')

<h1 class="text-2xl font-semibold leading-tigh py-2">
    Listagem dos usuários 
    <a href="{{ route('users.create') }}" class="bg-blue-900 rounded-full text-white px-4 text-sm">+</a>
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
                Nome
            </th>
            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-gray-500">
                E-mail
            </th>
            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-gray-500">
                Editar
            </th>
            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-gray-500">
                Detalhes
            </th>
            <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-gray-500">
                Comentários (0)
            </th>
        </tr>
    </thead>
    <tbody>
        @foreach ($users as $user)
        <tr>
            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                {{ $user->name }}
            </td>
            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                {{ $user->email }}
            </td>
            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                <a href="{{ route('users.edit', $user->id) }}" class="bg-green-200 rounded-full px-6 py-2">Editar</a>
            </td>
            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                <a href="{{ route('users.show', $user->id) }}" class="bg-orange-200 rounded-full px-6 py-2">Detalhes</a>
            </td>
            <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                <a href="{{ route('comments.index', $user->id) }}" class="bg-blue-200 rounded-full px-6 py-2">Anotações (0)</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
