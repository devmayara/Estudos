<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Operações Aritméticas</title>
</head>
<body>
    <div>
        <?php
            $n1 = $_GET["a"];  //GET: pegar o parametro "a para n1
            $n2 = $_GET["b"];
            echo "<h2> Valores recebidos: $n1 e $n2 </h2>";
            $m = ($n1 + $n2) / 2;
            echo "A soma vale ". ($n1+$n2);
            echo "<br/>A subtração vale ". ($n1-$n2);
            echo "<br/>A multiplicação vale ". ($n1*$n2);
            echo "<br/>A divisão vale ". ($n1/$n2);
            echo "<br/>O módulo vale ". ($n1%$n2);
            echo "<br/>A media vale $m";
        
        /** Operadores Aritiméticos:
        *
        * Adição        /   $r = $a + $b
        * Subtração     /   $r = $a - $b
        * Multiplicação /   $r = $a * $b
        * Divisão       /   $r = $a / $b
        * Módulo        /   $r = $a % $b
        */
        
        /** Ordem de Precedência:
         * 
         * Parênteses      /   ()
         * Multiplicação   /   *
         * Divisão         /   /
         * Módulo          /   %
         * Adição          /   +
         * Subtração       /   -
         */
        ?>
    </div>
</body>
</html>