<?php

function tirarMoneda () {

	return (mt_rand(1,2) == 1) ? 'Cara' : 'Cruz';

}

?>