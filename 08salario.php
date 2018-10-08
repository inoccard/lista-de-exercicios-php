<?php 
	session_start();

	$salario = $_GET['salario'];

	if ($salario <= 300) {
		$perc = (($salario*50)/100);
		echo "Salário Bruto: ".$salario;
		echo "<br> Aumento:".$perc;
		echo '<br> Salário reajustado: '.$reaj = $salario + $perc;
	} else if ($salario > 300) {
		$perc = (($salario*30)/100);
		echo "Salário Bruto: ".$salario;
		echo "<br> Aumento:".$perc;
		echo '<br> Salário reajustado: '.$reaj = $salario + $perc;
	}
 ?>