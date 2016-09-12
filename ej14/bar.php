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

function nombrarTrago ($x) {
	switch ($x) {
		case 0:
			return 'CERVEZA';
			break;
		case 1:
			return 'CUBA_LIBRE';
			break;
		case 2:
			return 'DESTORNILLADOR';
			break;
		case 3:
			return 'FERNET_CON_COCA';
			break;
		case 4:
			return 'RON';
			break;
		case 5:
			return 'RON_CON_JUGO';
			break;
		case 6:
			return 'VASO_DE_COCA';
			break;
		case 7:
			return 'VASO_DE_JUGO';
			break;
		case 8:
			return 'VODKA';
			break;
	}
}


?>