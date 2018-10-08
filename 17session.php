<?php
session_start();

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];

if ($num1<$num2):
    $soma = 0;
    for ($i=$num1; $i <= $num2; $i++):
        echo $i.'<br>';
        $soma = $soma + $i;
    endfor;
    echo '<br>'.$media = $soma/$i;
    elseif ($num1>$num2):
        $qtd = 0;
        for ($i=$num1; $i >= $num2; $i--):
            echo $i.'<br>';
            if($num1%$i == 0):
                $qtd++;
            endif;
        endfor;
        echo "Quantidade de pares: ".$qtd;
    elseif ($num1 == $num2):
        echo "<b>São iguais, não acontecerá nada!";
endif;