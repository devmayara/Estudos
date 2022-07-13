<?php
// Anônimas

$dizimo = function($valor) {
    return $valor * 0.10;
};

echo $dizimo(4000);

function() {
    // código
}

?>

<hr><br>

<?php
// Flecha (Arrow) (7.4)

$dizimo1 = fn($valor) => $valor * 0.10;
echo $dizimo1(1212);

?>

<hr><br>

<?php
// Recursivas

function dividir($valor) {
    $metade = $valor / 2;
    echo $metade."<br>";

    if (round($metade) > 0) {
        dividir($metade);
    }
}
dividir(100);
?>

<hr><br>

<?php
// Nativas de Matemática

rand(1, 10); // Gera um número aleatório entre 1 e 10
max(1, 2, 3, 4, 5); // Retorna o maior número
min(1, 2, 3, 4, 5); // Retorna o menor número
abs(-10); // Retorna o valor absoluto de um número
pi(); // Retorna o valor de pi
sqrt(9); // Retorna a raiz quadrada de um número
ceil(3.1); // arredonda para cima
floor(3.1); // arredonda para baixo
round(3.1); // arredonda para cima ou para baixo
//(3.1, 2); // arredonda com 2 casas decimais

?>

<hr><br>

<?php
// Nativas de String
$nomeSujo = " João da Silva  ";
$nomeLimpo = trim($nomeSujo); 

trim("   teste   "); // Remove espaços em branco do início e do final da string
strlen("teste"); // Retorna o tamanho da string
strtolower("TESTE"); // Converte a string para minúsculas
strtoupper("teste"); // Converte a string para maiúsculas
str_replace("teste", "teste2", "teste"); // Substitui uma string por outra
substr("teste", 0, 3); // Retorna uma parte da string

echo "Nome sujo: ".strlen($nomeSujo)."<br>";
echo "Nome limpo: ".strlen($nomeLimpo)."<br>";

strpos("teste", "s"); // Retorna a posição de um caracter na string
ucwords("teste"); // Converte a primeira letra de cada palavra para maiúscula

?>

<hr><br>

<?php
//


?>

<hr><br>

<?php
//


?>

<hr><br>

<?php
//


?>

<hr><br>
