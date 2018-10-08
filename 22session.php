<?php

session_start();
$dia1 = "01";
$mes1 = "01";
$ano1 = "2018";

$dia2 = $_POST['dia'];
$mes2 = $_POST['mes'];
$ano2 = $_POST['ano'];


$data1 = DateTime::createFromFormat("dmY", $dia1 . $mes1 . $ano1);
$data2 = DateTime::createFromFormat("dmY", $dia2 . $mes2 . $ano2);

$diff = $data2->diff($data1);

echo $diff->format("Diferença de %y anos, %m meses e %d dias.<br>");
echo $diff->format("Total de %a dias do ano"); 