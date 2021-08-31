<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Document</title>
</head>
<body>
    <?php
        $x = "abc";
        $$x = "def";
        echo "O conteúdo da variavel X é $x.";
        echo "<br/>A variavel ABC criada recebeu o valor $abc.";
    ?>
</body>
</html>