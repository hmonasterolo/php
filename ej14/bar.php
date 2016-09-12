<?php


function comprar ($bebida, $cant) {
	$compras = [];
	$compras['$bebida'] = $cant;

	$GLOBALS['stock'][$bebida] = $cant;
}

function imprimirStock () {
	echo('<pre>');
	print_r($GLOBALS['stock']);
	echo('<pre>');
	echo('<br />');
}

function prepararTrago () {
	$ped = $GLOBALS['recetas'][$GLOBALS['trago']];
	$stock = $GLOBALS ['stock'];
	foreach ($stock as $trago => $cant) {
		if(isset($ped[$trago])) {
			if ($cant - $ped[$trago] >= 0) {
				$stock [$trago] = $cant - $ped[$trago];
				$GLOBALS['stock'] = $stock;
				return true;
			}
			else {
				return false;
			}
		}
	}

}

function nombrarTrago($x) {
	switch ($x) {
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