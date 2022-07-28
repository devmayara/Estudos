<?php
// Condicional IF

$idade = 16;

if ($idade >= 18) {
    echo "Maior de idade";
} else {
    echo "Menor de idade";
}
?>

<hr><br>

<?php
// Condicional Ternário
echo ($idade >= 18) ? "Maior de idade" : "Menor de idade";

// é a mesma coisa so que em uma linha
?>

<hr><br>

<?php
// Condicional NULL CAO (7.4)

// $nome = 'Mayara ';
// $sobrenome = 'Silva';

$nomeCompleto = $nome ?? 'Visitante';
//$nomeCompleto .= isset($sobrenome) ? " $sobrenome" : "";
$nomeCompleto .= $sobrenome ?? "";

echo $nomeCompleto;
?>

<hr><br>

<?php
// Condicional Switch
$tipo = 'texto';

switch ($tipo) {
    case 'foto':
        echo "Exibindo foto";
        break;
    case 'video':
        echo "Exibindo video";
        break;
    case 'texto':
        echo "Exibindo texto";
        break;
}

$door = 1;
switch($door){ 
    case 1: 
        echo "<br> Você está entrando pela porta errada."; 
        break; 
    case 2: 
        echo "<br> Você está entrando por uma porta certa."; 
        break;
    default: 
        echo "<br> Você não escolheu nenhuma porta válida."; 
        break;
}

?>
