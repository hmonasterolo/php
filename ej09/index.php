<?php
include('moneda2.php');

$veces = 10;

for($i = 0; $i < $veces; $i++) {
	echo(tirarMoneda() . '<br />'); // cara o cruz
}
?>
