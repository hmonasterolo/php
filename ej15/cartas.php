<?php

define('BASTO', 0);
define('COPA', 1);
define('ESPADA', 2);
define('ORO', 3);

function nombrarPalo($palo) {
	switch($palo) {

		case BASTO:
			return 'Basto';
		break;

		case COPA:
			return 'Copa';
		break;

		case ESPADA:
			return 'Espada';
		break;

		case ORO:
			return 'Oro';
		break;
	}
}

function mezclar($mazo) {
	$cartas = [];
	foreach ($mazo as $palo => $cartasPalo) {
		foreach ($cartasPalo as $carta) {
			array_push($cartas, $carta); // $cartas[] = $carta; (forma simplificada)
		}
	}
	shuffle($cartas);
	return $cartas;
}


function repartir(&$cartas, $cantidad = 1) { // $cartas con "&" hace cambios sobre el index.php
	$repartidas = [];
	for ($i=0; $i < $cantidad ; $i++) {
		$repartidas[] = array_shift($cartas);
	}

	return $repartidas;
}

















?>
