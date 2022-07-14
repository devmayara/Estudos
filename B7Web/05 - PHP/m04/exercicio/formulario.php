<?php

session_start();

// Este arquivo tem a função de processar o formulário enviado pelo login.php
$nome = filter_input(INPUT_POST,'nome',FILTER_SANITIZE_SPECIAL_CHARS);

if(empty($nome)) {
    $_SESSION['erro'] = 'Preencha o campo corretamente!';
    header('location:login.php');
} else {
    $_SESSION['nome'] = $nome;
};

header('location:index.php');
