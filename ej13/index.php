<?php
include('agenda.php');

function imprimirDatos($contacto) {
	echo($contacto['nombre'] . ' ' . $contacto['apellido'] . '<br />');
	echo('Teléfono de la casa: ' . $contacto['telefonos']['casa'] . '<br />');
	echo('Teléfono del celular: ' . $contacto['telefonos']['celular'] . '<br />');
	echo('Dirección de la casa: ' . $contacto['direcciones']['casa'] . '<br />');
	echo('Dirección de la oficina: ' . $contacto['direcciones']['oficina'] . '<br />');
	echo('Mail: ' . $contacto['mail'] . '<br />');
	echo('<br />');
}

guardarContacto('cecilia', 'torres', '3462454321', '3462588888', 'Pepe 333', 'Ganga 555', 'ceci@gallega.com');
guardarContacto('luciano', 'ropero', '1145458664', '1155059288', 'Vedia 3080', 'Costa Rica 1234', 'lropero@gmail.com');
guardarContacto('santiago', 'cordoba', '3462424492', '3462512345', 'Sorongo 123', 'Manzana 567', 'santi@gaylord.com');

$contacto = obtenerContacto('luciano');
imprimirDatos($contacto);

$contacto = obtenerContacto('santiago');
imprimirDatos($contacto);

$contacto = obtenerContacto('cecilia');
imprimirDatos($contacto);
?>
