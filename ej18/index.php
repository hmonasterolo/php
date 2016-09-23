<?php
include('Mazo.php');

$mazo = new Mazo(true);
//$mazo->mezclar();
//$mazo->mostrar();
$mano = $mazo->repartir(3);
foreach($mano as $carta) {
    $carta->mostrar();
}
echo '<br>';
$mazo->mostrar();

?>