<?php

require 'vendor/autoload.php';

use \classes\matematica\Basica;
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

$log = new Logger('name');
$log->pushHandler(new StreamHandler('teste.log', Logger::WARNING));

$m = new Basica();
echo $m->somar(10, 20);

$log->warning('Foo');
$log->error('Bar');
