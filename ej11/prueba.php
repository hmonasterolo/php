<?php

$numeros = [9, 5, 41, 11, 28, 47, 31, 49, 43, 27];

$caca = array_rand($numeros, 5);
var_dump($caca);

echo('<pre>');
var_dump($numeros);
echo('</pre>');

sort($numeros);
echo('<pre>');
echo $numeros[0];
echo('</pre>');


?>