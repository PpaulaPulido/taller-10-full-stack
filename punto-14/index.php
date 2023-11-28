<?php

  include "./passwordCheck.php";

  //Datos de entrada
  $user = "";
  $password = "";
  
  //Proceso
  echo "Digite el usuario a registrar: \n";
  $user = readline();
  echo "Digite su contraseña a registrar: \n";
  $password = readline();

  if(hasSecurityLong($password)){
    if(hasUpperLetter($password)){
      if(hasNumber($password)){
        echo "Felicidades su contraseña es segura \n";
      }else{
        echo "Su contraseña con cumple con numeros \n";
      }
    }else{
      echo "Su contraseña no cuenta con una letra mayusculas \n";
    } 
  }else{
    echo "Su contraseña no cumple con la longitud segura \n";
  }

  
?>