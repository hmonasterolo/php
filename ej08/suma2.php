<?php
function imprimirSumaIncremental($numeros) {

	$suma = 0;

	while(count($numeros)) {
		$suma += array_shift($numeros);
		echo($suma . '<br />');
	}
}
?>
