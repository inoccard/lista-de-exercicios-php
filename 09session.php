<?php 
	session_start();
	$num = $_GET['num'];
	
	for ($i=0; $i <= $num; $i++) { 
		echo $i.'<br>';
	}
 ?>