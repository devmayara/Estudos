<?php

spl_autoload_register(function($class) {
    require "./{$class}.php";
});

$n = new Matematica();
echo $n->somar(10, 25);
