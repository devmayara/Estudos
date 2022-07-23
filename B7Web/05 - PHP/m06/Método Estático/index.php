<?php

class Matematica {
    public static string $nome = 'Mayara';
    
    public static function soma(int $a, int $b) {
        return $a + $b;
    }
}

echo Matematica::$nome;
