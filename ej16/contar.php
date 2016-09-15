<?php

function contarPalabras ($frase) {
	return str_word_count($frase);
}


function contarPalabras2 ($frase) {
	$cant = explode(' ', $frase);
	return count($cant);
}



?>