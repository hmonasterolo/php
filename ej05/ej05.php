<?php
function calculadora($operacion, $x, $y) {
	if ($operacion == 'sumar') {
		return $x + $y;
	} elseif ($operacion == 'multiplicar') {
		return $x * $y;
	} elseif ($operacion == 'restar') {
		return $x - $y;
	} elseif ($operacion == 'dividir') {
		return $x / $y;
	} else {
		echo 'Esta calculadora no realiza esa operación';
	}
}

$a = 10;
$b = 5;

$resultado = calculadora('sumar', $a, $b);
var_dump($resultado); // 15
$resultado = calculadora('multiplicar', $a, $b);
var_dump($resultado); // 50
$resultado = calculadora('dividir', $a, $b);
var_dump($resultado); // 2
$resultado = calculadora('restar', $a, $b);
var_dump($resultado); // 5

$resultado = calculadora('sorongo', $a, $b);

?>
