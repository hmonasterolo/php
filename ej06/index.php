<?php
function calculadora() {
	// DEFINIR
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

$resultado = calculadora('sorete', $a, $b);
var_dump($resultado); // error

$resultado = calculadora('potencia', $b, 2);
var_dump($resultado); // 25

$resultado = calculadora('potencia', $b, 3);
var_dump($resultado); // 125

$resultado = calculadora('potencia', $b, 5);
var_dump($resultado); // 3125

$resultado = calculadora('raiz', 9);
var_dump($resultado); // 3

$resultado = calculadora('raiz', 81);
var_dump($resultado); // 9
?>
