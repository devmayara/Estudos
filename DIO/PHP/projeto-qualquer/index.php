<?php

require_once "vendor/autoload.php";

use Wead\DigitalCep\Search;

$busca = new Search();

print_r($busca->getAddressFromZipcode('01001000'));
