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
            $a = isset($_GET["ano"])?$_GET["ano"]:1900;
            $i = date ("Y") - $a;
            echo "Você nasceu em $a e tem $i anos.<br/><br/>";

            if ($i < 16) {
                $tipoVoto = "não vota";
            }
            elseif (($i >=16 && $i < 18) || ($i > 65)) {
                $tipoVoto = "o voto é opcional!";
            }
            else {
                $tipoVoto = "o voto é obrigatótio!";
            }
            echo "Para essa idade, $tipoVoto";

/**
 *  && = e
 *  || = ou
 */

        ?>
    </div>
</body>
</html>