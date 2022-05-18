<?php 

function divisao(array $numero)
{
    if (empty($numero['num1']) || empty($numero['num2'])) {
        throw new Exception("Campos obrigatórios não foram preenchidos!\n");
    }

    return false;
}

$numero = [
    'num1' => 1,
    'num2' => 0,
];

$status = false;

try {
    $status = divisao($numero);
} catch (Exception $e) {
    echo $e->getMessage();
} finally {
    echo "Status de operação: " . (int)$status . "\n"; // cast para int
    die();
}

echo  "\n... executando ...\n";
