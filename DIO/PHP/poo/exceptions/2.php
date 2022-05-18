<?php

function validarUsuario(array $usuario)
{
    if (empty($usuario['codigo']) || empty($usuario['nome']) || empty($usuario['idade'])) {
        return false;
    }

    return true;
}

$usuario = [
    'codigo' => 1,
    'nome' => '',
    'idade' => 57,
];

$usuarioValido = validarUsuario($usuario);

if (!$usuarioValido) {
    echo "Usuário Inválido!\n";
    return false;
}

echo  "\n... executando ...\n";
