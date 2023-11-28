<?php

  $suma = 0;  
  
  echo "Números impares hasta el 100 y la suma total de los impares\n";
  
  for($number = 1; $number <= 100; $number += 2){
    echo $number . "\n";
    $suma += $number;
  }
  
  echo "\n La suma de los números impares hasta 100 es: $suma";
  
?>