<?php 

declare(strict_types=1);

$pdo = require 'connect.php';
$sql = 'INSERT INTO produtos(descricao) VALUES(?)';

$prepare = $pdo->prepare($sql);

$prepare->bindParam(1, $_GET['descricao']);
$prepare->execute();

echo $prepare->rowCount();
