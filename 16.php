<?php 
$n1 = 1095; 
$n2 = 9002.14;
$n3 = 2400;

$ordem = array($n1,$n2,$n3);

sort($ordem); // ordena os valores do menor para o maior

foreach ($ordem as $l ) {
     echo "$l<br>";
 } 
 $maior = ($n1 > $n2)? $n1: $n2; 
 $maior = ($maior > $n3)? $maior: $n3; 
 echo "<br>O maior numero é ".$maior;

 $menor = ($n1 < $n2) ? $n1: $n2;
 $menor = ($menor < $n3) ? $menor : $n3;
 echo "<br>O menor numero é ".$menor.'<br>';

 $dif = (($maior-$menor)/$menor)*100;

 echo "Diferença percentual: ".$dif;
?>