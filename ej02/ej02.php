<?php
$num1 = 7;
$num2 = 9;
   function suma($num1, $num2){
      $resultado = $num1 + $num2;
      echo "El resultado de la suma es: $resultado";
   }
   suma($num1, $num2);
   function resta($num1, $num2){
   		$resultado = $num1 - $num2;
   		echo "<br /> El resutado de la resta es: $resultado";	
   }
   resta($num1, $num2);
   function mul($num1, $num2){
      $resultado = $num1 * $num2;
      echo "<br /> El resultado de la multiplicación es: $resultado";
   }
   mul($num1, $num2);
   function div($num1, $num2){
   		$resultado = $num1 / $num2;
   		echo "<br /> El resultado de la división es: $resultado";
   }
   div($num1, $num2);
?>
