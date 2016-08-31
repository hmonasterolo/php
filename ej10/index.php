<?php
include('calculadora.php');

// Memoria 0
$resultado = sumar(3, 4); // 7
guardarEnMemoria($resultado);

// Memoria 1
$resultado = multiplicar(7, 6); // 42
guardarEnMemoria($resultado, 1);

// Memoria 2
$resultado = restar(5, 3); // 2
guardarEnMemoria($resultado, 2);

// Memoria 3
$resultado = sumar(5, 4); // 9
guardarEnMemoria($resultado, 3);

// Memoria 4
$resultado = dividir(15, 3); // 5
guardarEnMemoria($resultado, 4);

$cuenta = sumar(dividir(restar(obtenerMemoria(1), obtenerMemoria(2)), obtenerMemoria(4)), restar(obtenerMemoria(3), obtenerMemoria(0)));
var_dump($cuenta); // 10
?>
