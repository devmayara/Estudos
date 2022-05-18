<?php 

/*
  ->   P representação de periodo: vem antes de dia, mes e ano e semana
  Y   anos
  M   meses
  W   semanas
  D   dias
  
  ->   T representação de tempo: vem antes de hora, minuto e segundo
  H   horas
  M   minutos
  S   segundos

  EX: P5Y10M5DT10H50M10S
 */


$date = new DateTime();

$intervalo = new DateInterval('P5Y');   // adiciona um periodo de 5 minutos 
$date->sub($intervalo);

//var_dump($date);

echo $date->format('d/m/Y H:i:s') . PHP_EOL ;
