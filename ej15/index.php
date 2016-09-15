<?php

include('cartas.php');

$mazo = [];

for($i = 0; $i < 4; $i++) {
	for($j = 0; $j < 12; $j++) {
		$mazo[$i][$j] = ($j + 1) . ' de ' . nombrarPalo($i);
	}
}

$cartas = mezclar($mazo);

$mano = repartir($cartas);

echo('<pre>');
print_r($mano);
echo('</pre>');


echo('<pre>');
print_r($cartas);
echo('</pre>');

?>