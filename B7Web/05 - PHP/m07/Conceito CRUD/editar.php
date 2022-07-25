<?php

require 'config.php';

$info = [];
$id = filter_input(INPUT_GET, 'id');
if ($id) {
    $sql = $pdo->prepare("SELECT * FROM usuarios WHERE id = :id");
    $sql->bindValue(':id', $id);
    $sql->execute();

    if ($sql->rowCount() > 0) {
        $info = $sql->fetch(PDO::FETCH_ASSOC);
        $info['nome'];
    } else {
        header('Location: index.php');
        exit;
    }
} else {
    header('Location: index.php');
    exit;
}

?>

<a href="index.php">[INÍCIO]</a>
<a href="adicionar.php">[ADICIONAR USUÁRIO]</a>

<hr>

<h1>Editar Usuário</h1>

<form action="editar_action.php" method="POST">
    <input type="hidden" name="id" value="<?= $info['id'] ?>">

    <label for="name">Nome:</label>
    <input type="text" name="name" value="<?= $info['nome'] ?>"> <br>

    <label for="email">E-mail:</label>
    <input type="email" name="email" value="<?= $info['email'] ?>"> <br><br>

    <input type="submit" value="Salvar">
</form>
