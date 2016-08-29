<?php
function calculadora($operacion, $x, $y) {
	switch($operacion) {

		case 'sumar':
			return  $x + $y;
		break;

		case 'multiplicar':
			return $x * $y;
		break;

		case 'dividir':
			return $x / $y;
		break;

		case 'restar':
			return $x - $y;
		break;

		default:
			return 'error';
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
var_dump($resultado);
$resultado = calculadora('sorete', $a, $b);
var_dump($resultado);
?>
