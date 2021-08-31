<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8"/>
    <title>Valores iguais e identicos</title>
</head>
<body>
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

</body>
</html>