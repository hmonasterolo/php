<?php

function tirarMoneda () {

	if (mt_rand(1,2) == 1){
		return 'Cara';
	} else {
		return 'Cruz';
	}

}


?>