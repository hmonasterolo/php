<?php

function sumar($x, $y) {
  return $x + $y;
}

function multiplicar($x, $y) {
  return $x * $y;
}

function restar($x, $y) {
  return $x - $y;
}

function dividir($x, $y) {
  return $x / $y;
}

$memoria = []; // variable GLOBAL
// acá PHP crea una variable $memoria Y TAMBIÉN crea $GLOBALS['memoria'],
// con el mismo valor


function guardarEnMemoria($valor, $posicion = 0) {
  // acá ADENTRO NO TENGO ACCESO A $memoria, PERO SÍ a $GLOBALS,
  // porque PHP es un copado

  // acá tengo que decirle a php que quiero que use la variable global
  $globals[$memoria[$posicion] = $valor;

  /*
  lo que REALMENTE pasó acá,
  fue que php NO encontró la variable global,
  y CREÓ AUTOMATICAMENTE una nueva, que es LOCAL
  a esta función.

  esta nueva variable NO es la misma que está afuera
  */
}

function obtenerMemoria($posicion) {
  // acá tengo que decirle a php que quiero que use la variable global
  return $memoria[$posicion];
}


?>