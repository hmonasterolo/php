<?php

function imprimirSumaIncremental($x) {
	$cont = 0;
	$suma = 0;

	while ($cont < count($x)) {
		$suma = $x[$cont] + $suma;
		echo $suma . '<br />';
		$cont++;
}
}

?>