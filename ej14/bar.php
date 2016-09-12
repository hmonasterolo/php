<?php
function comprar ($bebida, $cant) {

	/* Estas líneas no hacen nada */
	// $compras = [];
	// $compras['$bebida'] = $cant;

	$GLOBALS['stock'][$bebida] = $cant;
}

function imprimirStock () {
	echo('<pre>');
	print_r($GLOBALS['stock']);
	echo('</pre>');
	echo('<br />');
}

// function prepararTrago () {
// 	$ped = $GLOBALS['recetas'][$GLOBALS['trago']];
// 	$stock = $GLOBALS ['stock'];
// 	foreach ($stock as $trago => $cant) {
// 		if(isset($ped[$trago])) {
// 			if ($cant - $ped[$trago] >= 0) {
// 				$stock [$trago] = $cant - $ped[$trago];
// 				$GLOBALS['stock'] = $stock;
// 				return true;
// 			}
// 			else {
// 				return false;
// 			}
// 		}
// 	}
// }

function prepararTrago($trago) {

	$receta = $GLOBALS['recetas'][$trago];

	// Nos fijamos 1ro. que el trago se pueda hacer (y no empezar a restar ingredientes del stock
	// para darnos cuenta a la mitad del trago que no podemos hacerlo)
	foreach($GLOBALS['stock'] as $bebida => $cantidad) {
		if(isset($receta[$bebida])) {
			if($cantidad < $receta[$bebida]) {
				// El trago NO se puede hacer, devolvemos FALSE sin afectar el stock
				return false;
			}
		}
	}

	// Acá ya sabemos que el trago se puede hacer, sólo tenemos que restar los ingredientes del stock
	foreach($GLOBALS['stock'] as $bebida => $cantidad) {
		if(isset($receta[$bebida])) {
			$GLOBALS['stock'][$bebida] -= $receta[$bebida];
		}
	}

	// Devolvemos TRUE porque hicimos el trago
	return true;
}

function prepararTrago2($trago) {

	$receta = $GLOBALS['recetas'][$trago];

	// Esta versión es mejor porque iteramos por la receta, y no por TODO el stock que puede ser enorme
	foreach($receta as $bebida => $cantidad) {
		// Este if() se lee: "si NO existe $stock[$bebida] o $stock[$bebida] es menor a $cantidad"
		if(!isset($stock[$bebida]) || $stock[$bebida] < $cantidad) {
			// El trago NO se puede hacer, devolvemos FALSE sin afectar el stock
			return false;
		}
	}

	// De vuelta, este bucle es más rápido que iterar por el stock entero
	foreach($receta as $bebida => $cantidad) {
		$GLOBALS['stock'][$bebida] -= $cantidad;
	}

	// Devolvemos TRUE porque hicimos el trago
	return true;
}

function nombrarTrago($trago) {
	switch($trago) {
		case CERVEZA:
			return 'Cerveza';
		break;
		case CUBA_LIBRE:
			return 'Cuba Libre';
		break;
		case DESTORNILLADOR:
			return 'Destornillador';
		break;
		case FERNET_CON_COCA:
			return 'Fernet con Coca';
		break;
		case RON:
			return 'Ron';
		break;
		case RON_CON_JUGO:
			return 'Ron con Jugo';
		break;
		case VASO_DE_COCA:
			return 'Vaso de Coca';
		break;
		case VASO_DE_JUGO:
			return 'Vaso de Jugo';
		break;
		case VODKA:
			return 'Vodka';
		break;
	}
}
?>
