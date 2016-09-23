<?php
include('Carta.php');

class Mazo {

	private $cartas = [];

	function __construct($mezclado = false) {

		for($i = 0; $i < 4; $i++) {
			for($j = 1; $j < 13; $j++) {
				$this->cartas[] = new Carta($j, $i);
			}
		}

		if($mezclado) {
			$this->mezclar();
		}
	}

	public function mostrar() {
		foreach($this->cartas as $carta) {
			$carta->mostrar();
		}
	}

	public function mezclar() {
		shuffle($this->cartas);
	}

	public function repartir($cantidad = 1) {
		$repartidas = [];
		for ($i = 0; $i < $cantidad; $i++) {
			$repartidas[] = array_shift($this->cartas);
		}

		return $repartidas;
	}
}
?>