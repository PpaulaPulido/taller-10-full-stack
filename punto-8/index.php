<?php

  const TICKET = 25000;
  $afiliacion = "";
  $personNumber = 0;
  
  echo "Escribe el numero de personas que van a entrar a la bolera: ";
  $personNumber = readline();
  echo "¿Cual es su tipo de membresia?: ";
  $afiliacion= readline();
  
  $totalPay = ($personNumber * TICKET);
  
  switch(strtoupper($afiliacion)){
  
    case "A":
    $totalPay *= 0.7;
    break;
    case "B":
    $totalPay *= 0.75;
    break;
    case "C":
    $totalPay *= 0.9;
    break;
    case "D":
    $totalPay *= 0.95;
    break;
    default:
    echo "No cuenta con una afiliacion, por lo que no tiene descuento";
    break;
  }
  echo "El total a pagar es $".number_format($totalPay);

?>