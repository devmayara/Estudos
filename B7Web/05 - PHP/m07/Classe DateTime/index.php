<?php

$date = new DateTime();
$date->add( DateInterval::createFromDateString('7 years 2 days 5 minutes') );
// sub : miminui
//$date->setTimezone(new DateTimeZone('America/Sao_Paulo'));

echo $date->format('d/m/Y H:i:s');
