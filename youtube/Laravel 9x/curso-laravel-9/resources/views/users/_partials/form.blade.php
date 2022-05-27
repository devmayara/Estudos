<div class="w-full bg-white shadow-md rounded px-8 py-5">
    @csrf
    <input type="text" class="md:w-1/6 bg-gray-200 appearance-none px-2 py-1" name="name" value="{{ $user->name ?? old('name') }}" placeholder="Nome:">
    <input type="email" class="md:w-1/6 bg-gray-200 appearance-none px-2 py-1" name="email" value="{{ $user->email ?? old('email') }}" placeholder="E-mail:">
    <input type="password" class="md:w-1/6 bg-gray-200 appearance-none px-2 py-1" name="password" placeholder="Senha:">
    <input type="submit" class="w-full shadow bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white px-4 py-3 rounded" name="submit" value="Enviar">
</div>
