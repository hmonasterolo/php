<?php

function imprimirSumaIncremental($x) {

	$suma = 0;

	for ($i=0; $i < count($x); $i++) {
		$suma = $x[$i] + $suma;
		echo $suma . '<br />';
	}
}

?>