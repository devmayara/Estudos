<?php

// primeiro parametro: inicio do array
// segundo parametro: fim do array
// terceiro parametro: passo

// seguencia de numeros e de letras crescente e decrescente

$array = range(1, 10, 2);

foreach ($array as $item) {
    echo $item . '<br>';
}
