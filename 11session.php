<?php 
	session_start();

	$ini = $_GET['num1'];
	$final = $_GET['num2'];

	for ($i=$ini+1; $i < $final; $i++) { 
		echo $i.'<br>';
	}

 ?>