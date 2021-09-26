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
    $v = array("nome" => "Mayara.",
              "idade" => "26.",
               "peso" => "86.4kg.");
    foreach ($v as $k => $c) {
      echo "O campo $k possui o conteúdo $c </br>";
    }
  ?>
</div>
</body>
</html>
 