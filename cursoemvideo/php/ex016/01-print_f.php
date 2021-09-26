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




       /**  FUNÇÕES STRING:
        * 
        * 1- printf()
        * 2- print_r()
        * 3- wordwrap()
        * 4- str_len()
        * 5- trim()
        * 6- itrim()
        * 7- rtrim()
        * 8- str_word_count()
        * 9- explode()
        *10- str_split()
        *11- implode()
        *12- chr()
        *13- ord()
        */
    ?>
</div>
</body>
</html>
 