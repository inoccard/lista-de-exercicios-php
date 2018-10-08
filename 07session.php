<?php 
	session_start();
	$nome = $_GET['nome'];
	$altura = $_GET['altura'];
	$sexo = $_GET['sexo'];

	if ($sexo == 'H' OR $sexo == 'h') {
		echo $nome.' seu peso é ';
		echo $calc = ((72.7 * $altura)-58);
	} else if ($sexo == 'M' OR $sexo == 'm') {
		echo $nome.' seu peso é ';
		echo $calc = ((62.1 * $altura)-44.7);
	} else{
		echo "Atributo de sexo inválido";
	}
 ?>