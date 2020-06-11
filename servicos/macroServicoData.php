<?php

$data = new DateTime();
$intervalo= new DateInterval('P5DT10H50M');
$data->sub($intervalo);
//var_dump($data);
echo $data->format('d/m/Y - H:m:s') . PHP_EOL;


