<?php
// Carta de tragos
define('CERVEZA', 0);
define('CUBA_LIBRE', 1);
define('DESTORNILLADOR', 2);
define('FERNET_CON_COCA', 3);
define('RON', 4);
define('RON_CON_JUGO', 5);
define('VASO_DE_COCA', 6);
define('VASO_DE_JUGO', 7);
define('VODKA', 8);

// Recetas
$GLOBALS['recetas'] = [
	CERVEZA => [
		'cerveza' => 1
	],
	CUBA_LIBRE => [
		'coca_cola' => 0.8,
		'ron' => 0.2
	],
	DESTORNILLADOR => [
		'naranjas' => 3,
		'vodka' => 0.2
	],
	FERNET_CON_COCA => [
		'coca_cola' => 0.7,
		'fernet' => 0.3
	],
	RON => [
		'ron' => 0.5
	],
	RON_CON_JUGO => [
		'naranjas' => 3,
		'ron' => 0.2
	],
	VASO_DE_COCA => [
		'coca_cola' => 1
	],
	VASO_DE_JUGO => [
		'naranjas' => 5
	],
	VODKA => [
		'vodka' => 0.5
	]
];
?>
