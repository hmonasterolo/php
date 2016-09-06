<?php
$array = array('red', 'blue', 'green', 'yellow');
$total = count($array) - 1;
$select = rand(0, $total);
echo $array[$select];

var_dump($select);
?>
