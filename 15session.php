<?php 
session_start();
$string = $_POST['string'];
$busca = $_POST['busca'];

$total = strlen($string);
$qtd = 0;
for ($i=0; $i < $total; $i++) {
	if (substr($string, $i) == $busca) {
		$qtd++;
		echo "A caractere ".$busca."ocorre ".$qtd." vezes<br>";
		}
		echo "Nada para exibir<br>";
}
 ?>