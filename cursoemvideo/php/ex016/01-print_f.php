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
      $p = "Leite";
      $pr = 4.5;
      //echo "O $p custa R$" . number_format($pr,2);
      printf("O %s custa: R$ %.2f", $p, $pr);


      /**
       * %d = valor decimal (positivo ou negativo)
       * %u = valor decimal sem sinal (apenas positivos)
       * %f = valor
       * %s = string 
       */
    ?>
</div>
</body>
</html>
 