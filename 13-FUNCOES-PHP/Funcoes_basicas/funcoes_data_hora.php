<?php 

//date = Y - m - d   exibir e formatar datas no php

echo $data = date("m-d-Y ");
echo '<br />';

//strtotime = 2015-02-02

$data_inicial = '2015-04-02';
$data_final = '2015-04-05';

$time_inicial = strtotime($data_inicial);
$time_final = strtotime($data_final);

$diferenca_time = $time_final - $time_inicial;
echo $diferenca_time;
echo '<br />';

$diaSegundos = 24*60*60;
echo $diaSegundos;
$diferenca_dias = $diferenca_time / $diaSegundos;
echo $diferenca_dias;
?>


