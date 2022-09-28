<?php

$hora = date_default_timezone_set('America/Fortaleza');
$agora = date('d/m/Y H:i:s');
$fim = date('28/10/2022'); 
$proximes = time() + (30 * 24 * 60 * 60);
$proxisemana = time() + (7 * 24 * 60 * 60);
echo 'Agora: '. date('d-m-Y'). "\n";
echo 'Proximo Mês:'. date('d-m-Y', $proximes). "\n";
echo 'Proxima Semana: '. date('d-m-Y', $proxisemana). "\n";


$inicio = new DateTime();
print_r($inicio->format('d-m-Y H:i:s'). "\n");
$fim = new DateTime(' +1 month');
print_r($fim->format('d-m-Y H:i:s'));

$intervaloo = $inicio->diff($fim);
echo $intervaloo->format(' %R%a dias');

$intervalo = new DateInterval('P1M');

echo "\n";

//verifica a quantidade de dias em um mês do ano.
echo 'Total de dias do mês: '. cal_days_in_month(CAL_GREGORIAN, 11, 2022). "\n";








