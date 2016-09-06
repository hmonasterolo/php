<?
$elementos = ['a', 'b', 'c', 'd'];

$claves = array_rand($elementos, 2);
foreach($claves as $clave)
{
	echo $elementos[$clave];
}
?>