<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <link rel="stylesheet" href="_css/estilo.css">
    <title>Valores iguais e identicos</title>
</head>
<body>
    <div>
        <?php
            $a = 3;
            $b = "3";
            $r = ($a == $b)?"SIM":"NAO";
            echo "As variaveis A e B são iguais? $r <br/>";
        
            $a = 3;
            $b = "3";
            $r = ($a === $b)?"SIM":"NAO";
            echo "As variaveis A e B são identicos? $r";
        /**
         * = recebe
         * == igual
         * === identico
         */
        
        ?>
    </div>
</body>
</html>