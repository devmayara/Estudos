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
      $letra = chr(67);
      echo "A letra do codigo 67 é $letra. </br>";
    
/**
 * é passado o codigo de cada tecla pelo numuero 
 * 67 = C
 * 99 = c
 *  
 * */    

      $letra = "C";
      $cod = ord($letra);
      print("A letra $letra tem o código $cod");
    ?>
</div>
</body>
</html>
 