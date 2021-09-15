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
    //CONTAGEM PROGRESSIVA 
      $c = 1;
      do {
        echo "$c - " ;
        $c++;       
      } while ($c<=10);
      
    //CONTAGEM REGRESSIVA
      $c = 10;
      do {
        echo "$c - " ;
        $c--;       
      } while ($c>=1);
    ?>
</div>
</body>
</html>
 