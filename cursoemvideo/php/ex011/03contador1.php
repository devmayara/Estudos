<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
<form method="GET" action="03contador2.php">
    <?php
      $c = $i;
      while ($c <= $f) {
      echo "Inicial : <input type='number' name='$i'><br>";
      echo "Final : <input type='number' name='$f'><br>";
      echo "Incremento : <input type='number' name='$in'><br>";
      $c++;
    }
    ?>
    <br>
    <input type="submit" value="Enviar" class="botao">
  </form>
</div>
</body>
</html>
 