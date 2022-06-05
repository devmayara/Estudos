<?php

$dbHost = 'Localhost';
$dbUsername = 'root';
$dbPassword = '';
$dbName = 'sistema-cadastro';

$conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

// TESTE DE CONEXÃO:
// if($conexao->connect_errno)
// {
//     echo "Error";
// } else {
//     echo "Conectado com sucesso!";
// }
