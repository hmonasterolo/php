<?php
class Tragamonedas {

	private $caja;
	private $juego;

	function __construct() {
		$this->caja = 100;
		$this->juego = [mt_rand(1, 6), mt_rand(1, 6), mt_rand(1, 6)];
	}

	public function mostrarJuego() {
		echo($this->juego[0] . ':' . $this->juego[1] . ':' . $this->juego[2] . '<br>');
	}

	public function tirarPalanca($apuesta = 0) {
		$premio = 0;
		if($apuesta > 0) {
			$this->caja += $apuesta;
			$this->juego = [mt_rand(1, 6), mt_rand(1, 6), mt_rand(1, 6)];
			$premio = $this->calcularPremio($apuesta);
			if($premio > 0) {
				$this->pagarPremio($premio);
			}
		}
		return $premio;
	}

	private function calcularPremio($apuesta) {
		$premio = 0;
		if ($this->juego[0] == $this->juego[1] && $this->juego[1] == $this->juego[2]) {
			$premio = $apuesta * 20;
		} elseif ($this->juego[0] == $this->juego[1] || $this->juego[1] == $this->juego[2]) {
			$premio = $apuesta * 3;
		}
		return $premio;
	}

	private function pagarPremio($premio) {
		$this->caja -= $premio;
	}

	public function getCaja() {
		return $this->caja;
	}
}
?>
