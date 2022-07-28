<?php

class Basico1 {
    public function somar($x, $y) {
        return $x + $y;
    }
}

class Basico2 {
    public function somar($x, $y) {
        $res = $x;
        for($q=0; $q<$y; $q++) {
            $res++;
        }
        return $res;
    }
}

class Matematica {
    private $basico;

    public function __construct($b) {
        $this->basico = $b;
    }

    public function somar($x, $y) {
        return $this->basico->somar($x, $y);
    }
}

$basico = new Basico1();
$met = new Matematica($basico);
echo $met->somar(10, 25);

// O que significa o conceito Injeção de Dependência no PHP?

// Método no qual é inserido um objeto de fora de uma classe para ser usado nela.

// Injeção de Dependência é a forma de injetar um objeto em um método.
