<?php

$array = ['a', 'b', 'c', 'd', 'e', 'f'];

// primeiro parametro é a posição do array que vai ser removida
// segundo parametro é a quantidade de elementos que vai ser removida
// terceiro parametro é o valor que vai substituir os elementos removidos

array_splice($array, 1, 1, 'x');

echo '<pre>';
print_r($array);
