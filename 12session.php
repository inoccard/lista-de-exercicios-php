<?php 
	session_start();

	$num1 = $_GET['num1'];
	$num2 = $_GET['num2'];
	$res = 0;
	for ($i=1; $i <= $num1; $i++) { 
		$res = $res + $num2;
		echo $i.'ª multiplicação = '.$res.'<br>';
	}
 ?>