<?php

$senha = '123456';

$hash = password_hash($senha, PASSWORD_DEFAULT);

// md5($senha); - 30 caracteres

// PASSWORD_DEFAULT: Padrão do PHP - usar o algoritmo mais seguro disponível
// PASSWORD_BCRYPT: Padrão do PHP 7 - 60 caracteres

echo "SENHA ORIGINAL: " . $senha . "<br>";
echo "SENHA HASH: $hash";
