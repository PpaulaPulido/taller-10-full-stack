<?php

  echo "Escribe el numero al cual desea visualizar la tabla de multiplicación: ";

  $number = readline();
  $contador = 0;

  while($contador <= 30){
    $resultado = $number * $contador;
    echo $number ." x ". $contador ." = ". $resultado. "\n";
    $contador++;
  }

?>