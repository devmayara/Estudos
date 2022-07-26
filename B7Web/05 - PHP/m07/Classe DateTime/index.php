<?php

// $date = new DateTime();
// $date->add( DateInterval::createFromDateString('7 years 2 days 5 minutes 17 seconds') );

// // sub : miminui
// //$date->setTimezone(new DateTimeZone('America/Sao_Paulo'));

// echo $date->format('d/m/Y H:i:s');

$today = new DateTime();
$end = new DateTime('2022-12-31');

$diff = $today->diff($end);
echo $diff->format('%m meses e %d dias para o Fim do Ano!');

$date1 = new DateTime('2020-01-01');
$date2 = new DateTime('2020-02-15');

$diff = $date1->diff($date2);
//echo $diff->format('%a');
