<?php

  include "./operations.php";

  //Datos de entrada
  $numberOne = 0;
  $numberTwo = 0;
  $option = "";

  $numberOne = getNumber();
  $numberTwo = getNumber();
  $option = showMenu();
  $resultado = operate($numberOne,$numberTwo,$option);

  echo "El resultado de la operación es " . $resultado;
?>