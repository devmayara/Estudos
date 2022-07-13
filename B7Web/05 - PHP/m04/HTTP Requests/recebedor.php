<?php

$nome = filter_input(INPUT_POST, 'nome');
$idade = filter_input(INPUT_POST, 'idade');

if($nome) {
    echo "Nome: ".$nome."<br>";
    echo "Idade: ".$idade."<br>";
} else {
    header('Location: index.php');
    exit;
}
