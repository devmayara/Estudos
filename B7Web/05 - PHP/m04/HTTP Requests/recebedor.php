<?php

session_start();
require_once 'header.php';

$nome = filter_input(INPUT_POST, 'nome', FILTER_SANITIZE_SPECIAL_CHARS);
$email = filter_input(INPUT_POST, 'email', FILTER_VALIDATE_EMAIL);
$idade = filter_input(INPUT_POST, 'idade', FILTER_SANITIZE_NUMBER_INT);

if($nome && $email && $idade) {
    setcookie('nome', $nome, time() + (86400 * 30));

    echo "Nome: ".$nome."<br>";
    echo "E-mail: ".$email."<br>";
    echo "Idade: ".$idade."<br>";
} else {
    $_SESSION['aviso'] = 'Preencha todos os campos corretamente!';

    header('Location: index.php');
    exit;
}
