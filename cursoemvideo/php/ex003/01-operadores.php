<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Operadores</title>
</head>
<body>
    <?php
        $preco = $_GET["p"];
        echo "O preço do produto é R$ " . number_format($preco,2,",",".");
        $preco += $preco*10/100;
        echo "<br/>E o novo preço com 10% de aumento será R$ " . number_format($preco,2,",",".");
    ?>
</body>
</html>