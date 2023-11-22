<?php

const TICKET = 25000;
$afiliacion = "";
$personNumber = 0;


echo "Escribe el número de personas que van a entrar a la bolera: ";
$personNumber = readline();
echo "¿Cual es su tipo de afiliación?: ";
$afiliacion= readline();

$totalPay = ($personNumber * TICKET);

if(strtoupper($afiliacion) == "A" || strtoupper($afiliacion) == "B" ){
  echo "Aplica al descuento del 30% ";
  $totalPay = $totalPay *0.3;
  
}else{
  echo "Lo sentimos, no cuenta para aplicar al descuento";
}
echo "\nEl total a pagar es $".number_format($totalPay);

?>