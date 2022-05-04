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
            $e = isset($_GET["est"])?$_GET["est"]:0;
            switch ($e) {
                case 2:
                case 3:
                case 4:
                case 5:
                case 6:
                    echo "Levanta e vai estudar! :)";
                    break;
                case 7:
                case 8:
                    echo "Descanse, pequeno gafanhoto! ;)";
                    break;
                default: 
                    echo "Dia da semana invalido";
            }
        ?>
        <br><a href="javascript:history.go (-1)" class="botao">Voltar</a>
    </div>
</body>
</html>