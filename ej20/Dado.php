<?php

class Dado {

	private $resultado = 0;

	function __construct() {
		$this->resultado = mt_rand(1, 6);
	}

	public function mezclarTirar() {
		$this->resultado = mt_rand(1, 6);
		$this->mostrar();
	}

	private function mostrar() {
		echo($this->resultado . '<br />');
	}
}


?>