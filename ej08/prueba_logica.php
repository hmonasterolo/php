<?php
$arrayDeNumeros = [9, 5, 41, 11, 28, 47, 31, 49, 43, 27];

$cont = 0;
$suma = 0;

while ($cont < count($arrayDeNumeros)) {
	$suma = $arrayDeNumeros[$cont] + $suma;
	echo $suma . '<br />';
	$cont++;
}

?>