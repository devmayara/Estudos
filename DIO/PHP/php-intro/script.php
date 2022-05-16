<?php

session_start();

$categorias = [];       // variaveis de array
$categorias[] = 'Infantil';
$categorias[] = 'Adolescente';
$categorias[] = 'Adulto';
    //print_r($categorias);


$nome = $_POST['nome'];
$idade = $_POST['idade'];
    //var_dump($nome, $idade);
    //die;


    // Validações
if (empty($nome)) {
    $_SESSION['mensagem-de-erro'] = 'O nome não pode ser vazio!';
    header('Location: index.php');
    return;
}
else if (strlen($nome) < 3) {
    $_SESSION['mensagem-de-erro'] = 'O nome deve ter mais de 3 caracteres!';
    header('Location: index.php');
    return;
}
else if (strlen($nome) > 40) {
    $_SESSION['mensagem-de-erro'] = 'O nome é muito extenso!';
    header('Location: index.php');
    return;
}
else if (!is_numeric($idade)) {
    $_SESSION['mensagem-de-erro'] = 'Informe o número da idade!';
    header('Location: index.php');
    return;
}


if ($idade >= 6 && $idade <= 12) {      // operadores condicionais
    for ($i = 0; $i < count($categorias); $i++) {
        if ($categorias[$i] == 'Infantil') {
            $_SESSION['mensagem-de-sucesso'] = 'O nadador ' . $nome . ' tem ' . $idade . ' anos e compete na categoria: ' . $categorias[$i] . '<br>';
            header('Location: index.php');
            return;
        }
    }
} elseif ($idade >= 13 && $idade <= 18) {
    for ($i = 0; $i < count($categorias); $i++) {
        if ($categorias[$i] == 'Adolescente') {
            $_SESSION['mensagem-de-sucesso'] = 'O nadador ' . $nome . ' tem ' . $idade . ' anos e compete na categoria: ' . $categorias[$i] . '<br>';
            header('Location: index.php');
            return;
        }
    }
} else {
    for ($i = 0; $i < count($categorias); $i++) {
        if ($categorias[$i] == 'Adulto') {
            $_SESSION['mensagem-de-sucesso'] = 'O nadador ' . $nome . ' tem ' . $idade . ' anos e compete na categoria: ' . $categorias[$i] . '<br>';
            header('Location: index.php');
            return;
        }
    }
}
