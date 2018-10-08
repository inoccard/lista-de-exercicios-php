<?php
	session_start();
	$fat = $_GET['num'];
	$resul = 1;
		for($i = $fat; $i > 1; $i--){
			$resul *= $fat;
			$fat--;
		}
		echo "<br><br>".$resul."<br><br><br>";
?>
