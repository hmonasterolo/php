<?php

function devolverMayor($x){
	return max($x);
}

function devolverMenor($x){
	return min($x);
}

function devolverMayores($x, $y){
	if ($y > count($x)) {
		return false;
	}
	else {
		sort($x);
		return array_slice($x, 0, $y);
}
}

function devolverMenores ($x, $y){
	sort($x);
	return array_slice($x, 0, $y);
}

function calcularPromedio ($x){
	return array_sum($x) / count($x);
}

function devolverElementosAlAzar ($x, $y){
	shuffle($x);
	return array_slice($x, 0, $y);

}

?>