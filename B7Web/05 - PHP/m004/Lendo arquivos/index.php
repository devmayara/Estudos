<?php

$texto = file_get_contents('texto.txt');

$texto .= "\nMayara Silva";

file_put_contents('texto.txt', $texto);

echo 'Arquivo editado com sucesso!';
