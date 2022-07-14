<?php

session_start();
error_reporting(0);
require_once 'header.php';

if($_SESSION['aviso']) {
    echo $_SESSION['aviso'];
    $_SESSION['aviso'] = '';
}
?>

<a href="apagar.php">Apagar Cookie</a>

<form action="recebedor.php" method="post">
    <label for="nome">Nome:</label>
    <input type="text" name="nome" id="nome" />
    <br>
    <label for="email">E-mail:</label>
    <input type="text" name="email" id="email" />
    <br>
    <label for="idade">Idade:</label>
    <input type="text" name="idade" id="idade" />
    <br><br>
    <input type="submit" value="Enviar" />
</form>
