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
      $v = array("A", "J", "M", "X", "K");
      print_r($v);
      array_unshift($v, "O");
      //array_shift($v);
      print_r($v);

/**
 * sort($n); == coloca em ordem
 * */      
    ?>
  </pre>
</div>
</body>
</html>
 