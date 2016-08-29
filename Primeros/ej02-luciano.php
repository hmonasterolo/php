<?php
function suma($num1, $num2){
   $resultado = $num1 + $num2;
   echo("El resultado de la suma es: $resultado<br />");
}

function resta($num1, $num2){
   $resultado = $num1 - $num2;
   echo("El resutado de la resta es: $resultado<br />"); 
}

function mul($num1, $num2){
   $resultado = $num1 * $num2;
   echo("El resultado de la multiplicación es: $resultado<br />");
}

function div($num1, $num2){
   $resultado = $num1 / $num2;
   echo("El resultado de la división es: $resultado<br />");
}

$num1 = 4;
$num2 = 8;

suma($num1, $num2);
resta($num1, $num2);
mul($num1, $num2);
div($num1, $num2);
?>