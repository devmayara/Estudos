<?php

session_start();

if(empty($_SESSION['nome'])) {
    header('location:login.php');
}
?>

<html>
    <head>
        <title>Página secreta!</title>
    </head>
    <body>
        <h1>Olá, <?php echo $_SESSION['nome']; ?> - <a href="sair.php">Sair</a></h1>
    </body>
</html>
