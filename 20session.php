<?php
session_start();
$tempo = $_POST['tempo'];
$vel = $_POST['velocidade'];

$distancia = $tempo*$vel;
$litros = ($distancia/12);

echo "Velocidade: ".$vel;
echo "<br>Tempo: ".$tempo;
echo "<br>Distância percorrida: ".$distancia;
echo "<br>Quantidade de litros:".$litros;