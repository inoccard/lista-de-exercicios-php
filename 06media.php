<?php
	$nome=$_GET["nome"];
	$n1=$_GET["n1"];
	$n2=$_GET["n2"];
	$n3=$_GET["n3"];
	$n4=$_GET["n4"];
	$media=($n1+$n2+$n3+$n4)/3;
	
	echo "Bem vindo $nome, suas notas são:";
	echo "<br><br>Nota 1: $n1 - Nota 2: $n2 - Nota 3: $n3 - Nota 4: $n4 
	<br><br>Media: $media<br><br>
	<br>Voce está ";

	if($media>=7){
	echo "Aprovado!!!"; 
	} else{
	 echo "Reprovado!!!";
	 }
 ?>