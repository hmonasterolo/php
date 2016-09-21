<?php

include('Tragamonedas.php');

$tm = new Tragamonedas();

for ($i=0; $i < 10 ; $i++) {
	$apuesta = mt_rand(1, 20);
	$premio = $tm->tirarPalanca($apuesta);
	$tm->mostrarJuego();
	echo($apuesta . ':' . $premio . '<br /><br />');
}

echo '<br>';
echo $tm->getCaja();
?>