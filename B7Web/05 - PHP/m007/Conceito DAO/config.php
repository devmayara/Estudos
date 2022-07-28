<?php

$dbName = "test";
$dbHost = "Localhost";
$dbUsername = "root";
$dbPassword = "";

$pdo = new PDO('mysql:dbname='.$dbName.';host='.$dbHost, $dbUsername, $dbPassword);

//  TESTE DE CONEXÃO:
//if($pdo->connect_errno) {
//    echo "Erro";
//}
//else {
//    echo "Conexão efetuada com sucesso";
//}
