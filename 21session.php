<?php
session_start();

$dia = $_POST['dia'];
$mes = $_POST['mes'];
$ano = $_POST['ano'];

$data = date('Y-m-d');
$add_mes = date("{$ano}-{$mes}-{$dia}", strtotime('1 month', strtotime($data)));

echo "Data Atual: ".$data;
echo "<br>Prazo de vencimento: ".$add_mes;
echo "<br>Data de Vencimento: ".$add_mes;