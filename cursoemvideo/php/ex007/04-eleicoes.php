<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Document</title>
</head>
<body>
    <?php
        $ano = $_GET["an"];
        $idade = 2021 - $ano;
        echo "Quem nasceu em $ano tem idade de $idade anos.<br/>";
        $tipo = ($idade>=18 && $idade<65)?"OBRIGATÓRIO":"NÃO OBRIGATÓRIO";
        echo "E dessa forma seu voto é $tipo.";

        /** Operador logico &&
         * and - && - comparação
         * or - || - ou
         * xor
         */
    ?>
</body>
</html>