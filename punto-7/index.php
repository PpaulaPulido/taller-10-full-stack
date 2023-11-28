<?php

  echo "Elige una opcion: \n";
  echo "1. Sumar \n";
  echo "2. Restar \n";
  echo "3. Multiplicar \n";
  echo "4. Dividir \n";

  echo "¿Cual es tu opcion?: ";
  $opcion = readline();

  if($opcion > 0 && $opcion <= 4){
    echo "Ingrese el primer número: ";
    $numero1 = readLine();
    echo "Ingresa el segundo numero: ";
    $numero2 = readline();
  }

  switch ($opcion) {
    case 1:
      $resultado = $numero1 + $numero2;
      echo "El resultado de la suma es: $resultado";
      break;

    case 2:
      $resultado = $numero1 - $numero2;
      echo "El resultado de la resta es: $resultado";
      break;
  
    case 3:
      $resultado = $numero1 * $numero2;
      echo "El resultado de la multiplicación es: $resultado";
      break;
  
    case 4:
      if ($numero2 != 0) {
          $resultado = $numero1 / $numero2;
          echo "El resultado de la división es: $resultado";
      } else {
          echo "Error: No se puede dividir por cero.";
      }
      break;
    
    default:
        echo "Opción no válida. Por favor, elige una opción del 1 al 4.";
  }
?>