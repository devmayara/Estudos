<?php
// Definição normal

function somar($n1, $n2) {
    $total = $n1 + $n2;
    return $total;
}

$resultado = somar(10, 20);
echo "Total: $resultado";

?>

<hr><br>

<?php
// Type e Valor padrão

function somar1($n1, $n2, $n3=0) {
    $total = $n1 + $n2 + $n3;
    return $total;
}

$x = somar1(10, 20, 30);    // 3º parâmetro se torna opcional
$y = somar1(10, 20);
$w = somar1($x, $y);

echo $w;

?>

<hr><br>

<?php
// Referência ou Valor

function somar2($n1, $n2) {
    $total = $n1 + $n2;
    return $total;
}

$x = 30;
$y = 40;
$soma = somar2($x, $y);

echo "Total: " . $soma;
?>

<hr><br>
