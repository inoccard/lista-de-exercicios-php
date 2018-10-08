<?php

$peso = $_POST['peso'];
$altura = $_POST['altura'];

$imc = $peso/(pow($altura, 2));

if ($imc < 18.5):
    echo "IMC: ".number_format($imc,2) . " Está abaixo do peso!";
elseif ($imc > 18.5 and $imc < 25):
    echo "IMC: ".number_format($imc,2) . " Está no peso normal!";
elseif ($imc >= 25 and $imc < 30):
    echo "IMC: ".number_format($imc,2) . " Está acima do peso!";
else:
    echo "IMC: ".number_format($imc,2) . " Está obeso!";
endif;
?>