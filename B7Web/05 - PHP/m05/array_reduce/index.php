<?php

$numeros = [1, 2, 3, 4, 5];

// primeiro parametro é um subtotal, ele começa com valor 0, e deve ser retonardo ele mesmo.
// segundo parametro é adicionado ao subtotal, e o resultado é retornado.


function somar($subtotal, $item) {
    $subtotal += $item;
    return $subtotal;
}

// primeiro é passado o array
// segundo é passado a funçao 

$total = array_reduce($numeros, 'somar');

echo $total;

/////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////////////////////////


$pessoas = [
    ['nome' => 'Fulano', 'sexo' => 'M', 'nota' => 9],
    ['nome' => 'Ciclano', 'sexo' => 'M', 'nota' => 7],
    ['nome' => 'Beltrana', 'sexo' => 'F', 'nota' => 10],
    ['nome' => 'Siclana', 'sexo' => 'F', 'nota' => 8],
    ['nome' => 'Paulo', 'sexo' => 'M', 'nota' => 9],
    ['nome' => 'Cintia', 'sexo' => 'F', 'nota' => 6],
    ['nome' => 'Mayara', 'sexo' => 'F', 'nota' => 10]
];

// MULHERES
// total de pessoas por sexo
function contar_mulheres($subtotal, $item) {
    if ($item['sexo'] === 'F') {
        $subtotal++;
    }
    return $subtotal;
}

$total_mulheres = array_reduce($pessoas, 'contar_mulheres');

// soma das notas das mulheres
function somar_notas_mulheres($subtotal, $item) {
    if ($item['sexo'] === 'F') {
        $subtotal += $item['nota'];
    }
    return $subtotal;
}

$soma_notas_mulheres = array_reduce($pessoas, function($subtotal, $item) {
    if ($item['sexo'] == 'F') {
        $subtotal += $item['nota'];
    }
    return $subtotal;
});

// media das notas das mulheres
$media_notas_mulheres = $soma_notas_mulheres / $total_mulheres;

echo '<br><hr>Total de pessoas do SEXO Feminino: '.$total_mulheres;
echo '<br>Soma das NOTAS: '.$soma_notas_mulheres;
echo '<br>Média das NOTAS: '.$media_notas_mulheres;


/////////////////////////////////////////////////////////////////////////////////////////////////////


// HOMENS
// total de pessoas por sexo
function contar_homens($subtotal, $item) {
    if ($item['sexo'] === 'M') {
        $subtotal++;
    }
    return $subtotal;
}

$total_homens = array_reduce($pessoas, 'contar_homens');

// soma das notas das homens
function somar_notas_homens($subtotal, $item) {
    if ($item['sexo'] === 'M') {
        $subtotal += $item['nota'];
    }
    return $subtotal;
}

$soma_notas_homens = array_reduce($pessoas, function($subtotal, $item) {
    if ($item['sexo'] == 'M') {
        $subtotal += $item['nota'];
    }
    return $subtotal;
});

// media das notas das homens
$media_notas_homens = $soma_notas_homens / $total_homens;

echo '<br><hr>Total de pessoas do SEXO Masculino: '.$total_homens;
echo '<br>Soma das NOTAS: '.$soma_notas_homens;
echo '<br>Média das NOTAS: '.$media_notas_homens;
