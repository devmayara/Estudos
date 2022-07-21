<?php

$array = ['Mayara', 26, 'Café', 'Azul'];

// desconstruindo o array 
list($nome, $idade, $bebida, $cor) = $array;

echo '<pre>';
echo "Nome: $nome\n";
echo "Idade: $idade\n";
echo "Bebida: $bebida\n";
echo "Cor: $cor\n";
