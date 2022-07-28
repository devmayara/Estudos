<?php

$pdo = new PDO("mysql:dbname=test;host=localhost", "root");

$sql = $pdo->query('SELECT * FROM usuarios');

echo "TOTAL: " . $sql->rowCount();

$dados = $sql->fetchAll( PDO::FETCH_ASSOC );

echo '<pre>';
print_r($dados);
