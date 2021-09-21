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

            if($i >= 18) {
                $v = "já pode votar";
                $d = "já pode dirigir";
            }
            else {
                $v = "não pode votar";
                $d = "não pode dirigir";
            }
            echo "Com essa idade você $v e <br/> também $d.";
        ?> <br>
        <a href="javascript:history.go(-1)" class="botao">Voltar</a>
    </div>
</body>
</html>