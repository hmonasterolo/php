<?php
class Calculadora2 {

	private $resultado;

	function __construct() {
		$this->resultado = 0;
		$this->imprimir();
	}

	private function imprimir() {
		echo($this->resultado . '<br />');
	}

	public function sumar($valor) {
		$this->resultado = $this->resultado + $valor;
		$this->imprimir();
	}

	public function restar($valor) {
		$this->resultado = $this->resultado - $valor;
		$this->imprimir();
	}

	public function multiplicar($valor) {
		$this->resultado = $this->resultado * $valor;
		$this->imprimir();
	}
	public function dividir($valor) {
		$this->resultado = $this->resultado / $valor;
		$this->imprimir();
	}

	public function ac() {
		$this->resultado = 0;
		$this->imprimir();
	}
}

?>