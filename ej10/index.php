<?php
include('calculadora.php');

// Memoria 0
$resultado1 = sumar(3, 4); // 7
guardarEnMemoria($resultado1);

// Memoria 1
$resultado2 = multiplicar(7, 6); // 42
guardarEnMemoria($resultado2, 1);

// Memoria 2
$resultado3 = restar(5, 3); // 2
guardarEnMemoria($resultado3, 2);

// Memoria 3
$resultado4 = sumar(5, 4); // 9
guardarEnMemoria($resultado4, 3);

// Memoria 4
$resultado5 = dividir(15, 3); // 5
guardarEnMemoria($resultado5, 4);

$cuenta = sumar(dividir(restar(obtenerMemoria(1), obtenerMemoria(2)), obtenerMemoria(4)), restar(obtenerMemoria(3), obtenerMemoria(0)));
var_dump($cuenta); // 10
?>
