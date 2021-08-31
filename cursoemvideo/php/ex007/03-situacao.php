<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Document</title>
</head>
<body>
    <?php
        $nota1 = $_GET["n1"];
        $nota2 = $_GET["n2"];
        $m = ($nota1+$nota2)/2;
        echo "A media entre $nota1 e $nota2 é $m <br/>";

        $sit = ($m<6)?"REPROVADO":"APROVADO";
        echo "A situação do aluno é $sit <br/>";

        //concatenado:
        echo "A situação do aluno é ".(($m<6)?"REPROVADO":"APROVADO");

        /** colocar valores na URL:
         * ?n1=5&n2=8
         */
    ?>
</body>
</html>