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
      function teste($x) {   //colocando & A recebe msm valor que X
        $x +=2;
        echo "<p>O valor de X é: $x</p>";
      }
      $a = 3;
      teste($a);
      echo "<p>O valor da A é: $a</p>";
    ?>
</div>
</body>
</html>
 