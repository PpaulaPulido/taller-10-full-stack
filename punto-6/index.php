<?php

  echo "Ingrese su nombre: ";
  $name = readline();

  echo "Ingrese su edad: ";
  $edad = readline();

  if ($edad >= 18) {
    echo "Hola $name, usted es mayor de edad";
  } else {
    echo "Hola $name, usted es menor de edad";
  }
  
?>