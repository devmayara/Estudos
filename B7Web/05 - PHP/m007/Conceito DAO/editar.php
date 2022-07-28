<?php

require 'config.php';
require 'dao/UsuarioDaoMysql.php';

$usuarioDao = new UsuarioDaoMysql($pdo);

$usuario = false;

$id = filter_input(INPUT_GET, 'id');
if ($id) {
    $usuario = $usuarioDao->findById($id);
} 

if ($usuario === false) {
    header('Location: index.php');
    exit;
}

?>

<a href="index.php">[INÍCIO]</a>
<a href="adicionar.php">[ADICIONAR USUÁRIO]</a>

<hr>

<h1>Editar Usuário</h1>

<form action="editar_action.php" method="POST">
    <input type="hidden" name="id" value="<?= $usuario->getId(); ?>">

    <label for="name">Nome:</label>
    <input type="text" name="name" value="<?= $usuario->getNome(); ?>"> <br>

    <label for="email">E-mail:</label>
    <input type="email" name="email" value="<?= $usuario->getEmail(); ?>"> <br><br>

    <input type="submit" value="Salvar">
</form>
