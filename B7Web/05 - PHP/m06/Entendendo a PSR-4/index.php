<?php

require 'autoload.php';

use \matematica\Basica;
use \foto\Upload;

$m = new Basica();
echo $m->soma(10, 20);

$upload = new Upload();
