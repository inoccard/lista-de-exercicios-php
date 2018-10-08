<?php
session_start();
$texto = $_POST['texto'];
$total = strlen($texto);

echo 'Texto digitado: '.$texto;
echo '<br><br>Total de caracteres: '.$total;

for ($i=0; $i < $total ; $i++) { 
    echo '<br><br>'.$i;
}
?>