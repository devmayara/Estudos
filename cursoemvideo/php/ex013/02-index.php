<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="_css/estilo.css"/>
  <meta charset="UTF-8"/>
  <title>Curso de PHP - CursoemVideo.com</title>
</head>
<body>
<div>
  <form action="02-tabuada.php" method="GET">
    <select name="num" id="">
      <?php
        for ($c=1; $c<=10; $c++) {
          echo "<option>$c</option>";
        }
      ?>      
    </select> <br><br>
    <input type="submit" value="Tabuada" class="botao">
  </form>
</div>
</body>
</html>
 