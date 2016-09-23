<?php
class Carta {

	private $numero;
	private $palo;

	function __construct($numero, $palo) {
		$this->numero = $numero;
		$this->palo = $palo;
	}

	public function mostrar() {
		echo($this->numero . ' de ' . $this->nombrarPalo() . '<br />');
	}

	private function nombrarPalo() {
		switch($this->palo) {
			case 0:
				return 'Basto';
			break;

			case 1:
				return 'Copa';
			break;

			case 2:
				return 'Espada';
			break;

			case 3:
				return 'Oro';
			break;
		}
	}
}
?>