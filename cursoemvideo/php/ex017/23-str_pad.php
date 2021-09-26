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
      $nome = "Mayara";
      $novo = str_pad($nome,30," ",STR_PAD_RIGHT);


/**
 * STR_PAD_RIGHT
 * STR_PAD_CENTER
 * STR_PAD_LEFT
 */

 /**
  * blablabla Mayara ******* blablabla!
  * blablabla    
  */

    ?>
</div>
</body>
</html>
 