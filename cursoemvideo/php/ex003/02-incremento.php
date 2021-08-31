<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Incremento</title>
</head>
<body>
    <?php
         $atual = $_GET["aa"];
         echo "O ano atual é $atual e o ano anterior é " . --$atual;
    ?>
</body>
</html>