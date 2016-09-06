<?php
include('narigon.php');

// NO COMMITEAR ESTE ARCHIVO! :)

$numeros = [9, 5, 41, 11, 28, 47, 31, 49, 43, 27];

$mayor = devolverMayor($numeros);
$menor = devolverMenor($numeros);
var_dump($mayor); // 49
echo('<br>');
var_dump($menor); // 5
echo('<br>');

$mayores = devolverMayores($numeros, 3);
$menores = devolverMenores($numeros, 3);
print_r($mayores);
echo('<br>');		// $mayores debe tener [43, 47, 49] (en cualquier order)
print_r($menores);
echo('<br>');		// $menores debe tener [5, 9, 11] (en cualquier order)

$mayores2 = devolverMayores($numeros, 20);
echo('<br>');		// como $mayores tiene menos de 20 elementos, esto debe devolver false
var_dump($mayores2);
echo('<br>');		// false

$promedio = calcularPromedio($numeros);
var_dump($promedio);
echo('<br>');		// 29.1

$random = devolverElementosAlAzar($numeros, 5);
print_r($random); 	// por ejemplo [28, 5, 43, 27, 9]
?>
