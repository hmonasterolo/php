<?php

$stock = ['cerveza'=>10, 'gin'=>3, 'wisky'=>5];
print_r($stock);
echo('<br />');

$consumo = ['gin'=>2, 'cerveza'=>8];
print_r($consumo);
echo('<br />');

$stock_f = [];


foreach($stock as $trago => $cantidad) {
   if(isset($consumo[$trago])) {
      $stock[$trago] = $cantidad - $consumo[$trago];
   }
}

print_r($stock);



?>