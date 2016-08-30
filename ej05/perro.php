<?php

class Perro {

  function ladrar() {
      return 'guau';
  }

  function cagar() {
      return 'caca';
  }

  function tirar($objeto) {

      if($objeto == "palo") {
        return 'voy corriendo';
      } elseif($objeto == 'chancleta') {
        return 'huir rapido';
      }

      return 'no dar bola';
  }
}


$coco = new Perro();
$resultado = $coco->cagar();
$resultado = $coco->tirar('palo');
?>