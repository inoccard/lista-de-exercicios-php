<?php
$dois_reais = 2;
$cinco_reais = 5;
$dez_reais = 10;
$vinte_reais = 20;
$cinquenta_reais = 50;
$cem_reais = 100;

echo "Nota R$".number_format($dois_reais,2)." prescisa de ".($dois_reais/0.10).
" moedas de 10cen OU ".($dois_reais/0.25)." moedas de 25cen OU ".($dois_reais/0.50)." moedas de 50cen<br><br>";

echo "Nota R$".number_format($cinco_reais,2)." prescisa de ".($cinco_reais/0.10).
" moedas de 10cen OU ".($cinco_reais/0.25)." moedas de 25cen OU ".($cinco_reais/0.50)." moedas de 50cen<br><br>";

echo "Nota R$".number_format($dez_reais,2)." prescisa de ".($dez_reais/0.10).
" moedas de 10cen OU ".($dez_reais/0.25)." moedas de 25cen OU ".($dez_reais/0.50)." moedas de 50cen<br><br>";

echo "Nota R$".number_format($vinte_reais,2)." prescisa de ".($vinte_reais/0.10).
" moedas de 10cen OU ".($vinte_reais/0.25)." moedas de 25cen OU ".($vinte_reais/0.50)." moedas de 50cen<br><br>";

echo "Nota R$".number_format($cinquenta_reais,2)." prescisa de ".($cinquenta_reais/0.10).
" moedas de 10cen OU ".($cinquenta_reais/0.25)." moedas de 25cen OU ".($cinquenta_reais/0.50)." moedas de 50cen<br><br>";

echo "Nota R$".number_format($cem_reais,2)." prescisa de ".($cem_reais/0.10).
" moedas de 10cen OU ".($cem_reais/0.25)." moedas de 25cen OU ".($cem_reais/0.50)." moedas de 50cen<br>";
?>