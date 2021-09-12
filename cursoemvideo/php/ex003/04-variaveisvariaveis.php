<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Document</title>
</head>
<body>
    <div>
        <?php
            $x = "abc";
            $$x = "def";
            echo "O conteúdo da variavel X é $x.";
            echo "<br/>A variavel ABC criada recebeu o valor $abc.";
        ?>
    </div>
</body>
</html>