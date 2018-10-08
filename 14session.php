<?php
session_start();
$texto1 = $_POST['texto1'];
$texto2 = $_POST['texto2'];

if(strcmp($texto1,$texto2)):
    echo "São diferentes";
elseif (strcmp($texto2,$texto1)):
    echo "São diferentes";
else:
    echo "São iguais";
endif;
?>