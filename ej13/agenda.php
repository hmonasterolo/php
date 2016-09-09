<?php
$contactos = [];

function guardarContacto($nombre, $apellido, $telCasa, $telCelular, $dirCasa, $dirOficina, $mail) {

	$contacto = [];
	$contacto['nombre'] = $nombre;
	$contacto['apellido'] = $apellido;
	$contacto['telefonos'] = [
		'casa' => $telCasa,
		'celular' => $telCelular
	];
	$contacto['direcciones'] = [
		'casa' => $dirCasa,
		'oficina' => $dirOficina
	];
	$contacto['mail'] = $mail;

	$GLOBALS['contactos'][$nombre] = $contacto;
}

function obtenerContacto($nombre) {
	return $GLOBALS['contactos'][$nombre];
}
?>
