<?php

$array = [
    'nome' => 'Mayara',
    'idede' => '26',    // idade
    'empresa' => 'Code.education',
    'cor' => 'Azul',
    'profissao' => 'Desenvolvedora'
];

// key_exists faz uma verificação caso nao encontre nao mostrar erro

if(key_exists('idade', $array)) {
    $idade = $array['idade'];
    echo $idade.' anos.';
} else {
    echo 'Não tem idade!';
}

