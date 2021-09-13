<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="_css/estilo.css">
    <title></title>
</head>
<body>
    <div>
        <?php
            $nota1 = $_GET["n1"];
            $nota2 = $_GET["n2"];
            $m = ($nota1+$nota2)/2;
            echo "A média entre $nota1 e $nota2 é igual a $m<br/><br/>";

            if ($m >= 7) {
                $media= "APROVADO!";
            }
            elseif ($m >= 5) {
                $media= "RECUPERAÇÃO!";
            }
            else {
                $media= "REPROVADO!";
            }
            echo "Situação do aluno é, $media";
          
/**
 *  && = e
 *  || = ou
 */

        ?>
    </div>
</body>
</html>