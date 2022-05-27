@csrf
<input type="text" name="name" value="{{ $user->name ?? old('name') }}" placeholder="Nome:">
<input type="email" name="email" value="{{ $user->email ?? old('email') }}" placeholder="E-mail:">
<input type="password" name="password" placeholder="Senha:">
<input type="submit" name="submit" value="Enviar">
