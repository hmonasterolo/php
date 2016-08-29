<?php
$x = 2;
$pendiente = 1;
$ordenada = 3;
function recta ($x, $pendiente, $ordenada){
   $resultado = $pendiente * $x + $ordenada;
   echo "El valor de Y es: $resultado";
}
recta ($x, $pendiente, $ordenada);
?>