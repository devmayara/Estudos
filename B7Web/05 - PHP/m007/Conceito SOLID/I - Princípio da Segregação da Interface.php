<?php

interface Aves {
    public function setLocation($lat, $long);
    public function render();
}
interface AvesQueVoam extends Aves {    // resolve o problema com a extensão de interfaces.
    public function setAltitude($alt);
}

class Papagaio implements AvesQueVoam {
    public function setLocation($lat, $long) {}
    public function setAltitude($alt) {}
    public function render() {}
}
class Pinguim implements Aves {
    public function setLocation($lat, $long) {}
    //public function setAltitude($alt) {return 0;}   // Pinguim não tem altitude.
    public function render() {}
}

// Principio de Segregação da Interface: Aves não deve ter métodos que não 
//sejam necessários e que não sejam implementados.

function renderAves(Aves $ave) {
    $ave->render();
}
