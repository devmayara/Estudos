<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <meta charset="UTF-8"/>
    <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <form action="03contador.php" method="GET">
        <?php
            Inicio :
            <input type="number" name="i" min="0" max="10000" required>
            <br>
            Final :
            <input type="number" name="i" min="0" max="10000" required>
            <br>
            Incremento :
            <input type="number" name="i" min="1" max="10" required>
        ?>
        <br>
        <input type="submit" value="Enviar" class="botao">
    </form>
</div>
</body>
</html>
 