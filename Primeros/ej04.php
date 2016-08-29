<?php

function compararNumeros ($x, $y){
	if ($x > $y) {
		// echo "a es mayor que b";
		return $x;
	} else if ($x < $y) {
		// echo "b es mayor que a";
		return $y;
	} else {
		// echo "a es igual a b";
		return false;
	}
}

function devolverMayor($x, $y) {
	return $x > $y ? $x : ($y > $x ? $y : $x);
}

$a = 5;
$b = 5;

$mayor = devolverMayor($a, $b);
var_dump($mayor);
// $longitud = strlen("hola");
// var_dump($longitud);

?>