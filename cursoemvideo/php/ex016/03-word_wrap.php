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
      $t = "Aqui temos um texto gigante escrito em PHP que vai mostrar o funcionamento da função word wrap.";
      $r = wordwrap($t, 5, "</br>\n", false);
      echo "$r";

/**
 * normal so aparece a quebra no inspencionar
 * a quebra visual só é vista com o br
 * com o br e o n aparece tanto no navegador quanto no inspencionar
 * false = mantem as palavras inteiras
 * true = quebra as palavas 
 */
    ?>
</div>
</body>
</html>
 