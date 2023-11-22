<?php

  define("NUMERO_CONSTANTE", 5);
  $numeroVariable = 7;

  $suma = NUMERO_CONSTANTE + $numeroVariable;

  echo "El resultado de la suma es : " . $suma;

  $numeroVariable = 10;
  $suma = NUMERO_CONSTANTE + $numeroVariable;
  echo "\nNueva suma";
  echo "\nEl resultado de la suma es : " . $suma;
?>
