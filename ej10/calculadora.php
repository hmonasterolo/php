<?php

function sumar($x, $y) {
	return $x + $y;
}

function multiplicar($x, $y) {
	return $x * $y;
}

function restar($x, $y) {
	return $x - $y;
}

function dividir($x, $y) {
	return $x / $y;
}

$memoria = [];

function guardarEnMemoria($valor, $posicion = 0) {
	$GLOBALS['memoria'][$posicion] = $valor;
}

function obtenerMemoria($posicion) {
	return $GLOBALS['memoria'][$posicion];
}


?>