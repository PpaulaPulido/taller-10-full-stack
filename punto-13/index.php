<?php

  $arreglo = array();
  $suma = 0;

  for($i = 0; $i < 5; $i++){
    echo "Escribe un numero para sumar: ";
    $arreglo[] = readline();
  }
  
  
  foreach ($arreglo as $valor) {
    $suma += $valor;
  }
  
  echo "La suma de los elementos del arreglo es: ", $suma;

?>