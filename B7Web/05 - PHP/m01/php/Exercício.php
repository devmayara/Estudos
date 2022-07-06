<?php
$lista = [
    'nome' => 'Mayara',
    'idade' => 26,
    'atributos' => [
        'altura' => 1.68,
        'peso' => 77,
        'cor' => 'parda'
    ],
    'vida' => 1000,
    'mana' => 920
];  // solução: faltava as aspas em 'vida e mana';

echo "NOME: " . $lista['nome'] . "<br>";
echo "ALTURA: " . $lista['atributos']['altura'] . "<br>";
echo "VIDA: " . $lista['vida'];
