<?php
// EJERCICIO 14 (BORRACHO)

include('tragos.php');
include('bar.php'); // ACA VA LA MAGIA HACKER DE HERNÁN!
// Nota: El archivo bar.php se incluye debajo de tragos.php para que tengas acceso a las definiciones y recetas hechas en tragos.php

// No tenemos nada en nuestro bar
$stock = [];

// Hacemos las compras
comprar('cerveza', 100);
comprar('coca_cola', 10)
comprar('fernet', 5);
comprar('naranjas', 30);
comprar('ron', 2);
comprar('vodka', 3);

// Imprimimos nuestro stock inicial a modo informativo
imprimirStock();

// Abrimos el bar!
$clientes = mt_rand(30, 200); // Nos visitan entre 30 y 200 clientes

for($i = 0; $i < $clientes; $i++) {

	// El cliente pide un trago de la carta (estos números del 0 al 8 se corresponden con las definiciones en tragos.php)
	$trago = mt_rand(0, 8);

	// Devolvemos TRUE o FALSE según hayamos preparado el trago (depende del stock), además prepararTrago() afecta el stock
	$pedido = prepararTrago($trago);

	// Se imprime el número de cliente con el trago que pide, en verde si pudimos hacerlo o rojo en caso contrario
	echo('Cliente ' . ($i + 1) . ': <font color="' . ($pedido ? 'green' : 'red') . '">' . nombrarTrago($trago) . '</font><br />');
}

// Imprimimos nuestro stock final a modo informativo
imprimirStock();
?>
