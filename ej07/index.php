<?php
function area($tipo, $objeto) {
	switch ($tipo) {
		case 'rectangulo':
			// return array_product($objeto); no era la idea!
			return $objeto['x'] * $objeto['y'];
		break;

		case 'circulo':
			return pow($objeto['r'], 2) * M_PI;
			break;

		default:
			return 'error';
	}
}

$rectangulo = [
	'x' => 11,
	'y' => 7
];

$circulo = [
	'r' => 4
];

$areaRectangulo = area('rectangulo', $rectangulo);
$areaCirculo = area('circulo', $circulo);
$areatortuga = area('tortuga', $circulo);

var_dump($areaRectangulo);
var_dump($areaCirculo);
var_dump($areatortuga);

?>
