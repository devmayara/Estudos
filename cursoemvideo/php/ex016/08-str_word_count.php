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
      $frase = "Eu vou estudar PHP hoje";
      $cont = str_word_count($frase,2);
      //echo $cont;     // pra 0
      print_r($cont);   // pra 1

/**
 * 0 = conta as palavras
 * 1 = vai mostrar o vetor array
 * 2 = mostra em vetor tbm porem diferente
 */

    ?>
</div>
</body>
</html>
 