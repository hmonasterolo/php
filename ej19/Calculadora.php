<?php

class Calculadora {

	private $valor1;
	private $valor2;

	function __construct($valor1, $valor2) {
		$this->valor1 = $valor1;
		$this->valor2 = $valor2;

	}

	public function sumar() {
		return $this->valor1 + $this->valor2;
	}
	public function multiplicar() {
		return $this->valor1 * $this->valor2;
	}
	public function dividir() {
		return $this->valor1 / $this->valor2;
	}
	public function restar() {
		return $this->valor1 - $this->valor2;
	}

}

?>