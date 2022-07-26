<?php

class A {
    public function getNome() {
        return 'Meu nome é A';
    }
}
class B extends A {
    public function getNome() {
        return 'Meu nome é B';
    }
}

function imprimirNome(A $obj) {
    echo $obj->getNome();
}


$objeto1 = new A();
$objeto2 = new B();
echo imprimirNome($objeto1).'<br>';
echo imprimirNome($objeto2);
