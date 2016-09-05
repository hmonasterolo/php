<?php
include('primo.php');

for($i = 0; $i < 10; $i++) {

	$numero = mt_rand(1, 100); // Número aleatorio entre 1 y 100

	if(esPrimo($numero)) {
		echo($numero . ' es primo');
	} else {
		echo($numero . ' no es primo');
	}

	// Salto de línea
	echo('<br />');
}

/*
El ejercicio consiste en definir esPrimo(), que devolverá 'true' en caso de que el
número que se pasa por parámetro sea primo y 'false' en caso contrario (sin las comillas)

Como lo ejecutamos 10 veces en un bucle, el resultado va a ser algo así:
34 no es primo
7 es primo
18 no es primo
81 no es primo
2 es primo
32 no es primo
17 es primo
73 es primo
99 no es primo
1 no es primo
*/
?>
