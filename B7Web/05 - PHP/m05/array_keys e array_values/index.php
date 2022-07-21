<?php

$array = [
    'nome' => 'Mayara',
    'idade' => '26',
    'empresa' => 'Code.education',
    'cor' => 'Azul',
    'profissao' => 'Desenvolvedora'
];

print_r($array);

echo "<br>";

$chaves = array_keys($array);
print_r($chaves);

echo "<br>";

$valores = array_values($array);
print_r($valores);
