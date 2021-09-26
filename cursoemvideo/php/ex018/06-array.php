<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
  <pre>
    <?php
      $m = array( array(6,4),
                  array(4,2),
                  array(9,7));
      $m[0] [1] = $m[2] [0];
      print_r($m);
    ?>
  </pre>
</div>
</body>
</html>
 