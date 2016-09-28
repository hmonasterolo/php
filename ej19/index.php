<?php
include ('Calculadora2.php');

// $calc1 = new Calculadora(3, 4);
// $suma = $calc1->sumar();
// var_dump($suma);
// $mult = $calc1->multiplicar();
// var_dump($mult);

$calc1 = new Calculadora2();
$res = $calc1->sumar(5);
$res = $calc1->sumar(7);
$res = $calc1->restar(4);
$res = $calc1->ac();
?>