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
    $i = $i;
    while ($i <= $f) {
        $v = "num".$i;
        $url = "v".$i;
        $$v = isset($_GET[$url]) ? $_GET[$url] : 0;
        $i++;
    }
    //TESTE:
    //echo "$num1 $num2 $num3 $num4 $num5";

    $i = 1;
    while ($i <= 5) {
        $v = "num".$i;
        echo "Valor $i : ".$$v."<br/>";
        $i++;
    }
*/
    $c = $i;
    while ($c <= $f) {
      echo $c . "</br>" ;
      $c-=$in;   //$c = $c-2; 

    }

  ?>
</div>
</body>
</html>
 