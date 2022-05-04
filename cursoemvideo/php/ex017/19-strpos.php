<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
    <?php
      $frase = "Estou aprendendo PHP";
      $pos = stripos($frase, "php"); // adicionar o i em strpos
      echo "A string foi encontrada na posição $pos";
    ?>
</div>
</body>
</html>
 