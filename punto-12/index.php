<?php

  echo "Escribe el numero al cual desea visualizar la tabla de multiplicación: ";
  $number = readline();

  for($i = 0; $i <= 30; $i++){
    $resultado = $number * $i;
     echo $number ." x ". $i ." = ". $resultado. "\n";
  }
?>