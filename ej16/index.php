<?php

include('contar.php');

$frase = 'you know what is what but they dont know what is what';

$resultado = contarPalabras2($frase);
echo 'Hay '.$resultado. ' palabras en el string.';



?>