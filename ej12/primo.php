<?php

function esPrimo ($num) {
	if ($num==1) {
		return false;
	}
	else {
		$cont = 0;
		for ($i=$num; $i > 0; $i--) {
			if ($num % $i == 0) {
				$cont++;
			}
		}
		if ($cont>2) {
			return false;
		}
		else {
			return true;
		}
	}
}

?>