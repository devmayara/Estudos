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
    $c = $i;
    while ($c <= $f) {
        $v = "num".$i;
        $url = "v".$i;
        $$v = isset($_GET[$url]) ? $_GET[$url] : 0;
        $c-=$in;
    }

    $c = $i;
    do {
      echo "$c - " ;
      $c-=$in;       
    } while ($c<=$f);
  ?>
</div>
</body>
</html>
 