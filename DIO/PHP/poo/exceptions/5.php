<?php 

function validarUsuario(array $usuario)
{
    if (empty($usuario['codigo']) || empty($usuario['nome']) || empty($usuario['idade'])) {
        throw new Exception("Campos obrigatórios não foram preenchidos!\n");
    }

    return true;
}

$usuario = [
    'codigo' => 1,
    'nome' => '',
    'idade' => 57,
];

$status = false;

try {
    $status = validarUsuario($usuario);
} catch (Exception $e) {
    echo $e->getMessage();
} finally {
    echo "Status de operação: " . (int)$status . "\n"; // cast para int
    die();
}

echo  "\n... executando ...\n";
