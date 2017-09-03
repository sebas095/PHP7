<?php
  // Conversiones
  // contexto
  $variable = "20 holamundo";
  $suma = 20 + $variable;

  echo $suma;
  echo gettype($suma);

  // Forzado de tioo
  $int = (int)$variable;

  echo $int;
  echo gettype($int);

  // función
  $funcion = intval($variable); // floatval, boolval

  echo $funcion;
  echo gettype($funcion);

  $numeros = "1, 2, 3, 4";
  $arrayNumeros = explode(", ", $numeros, 5);
  echo $arrayNumeros[0];
  echo $arrayNumeros[1];

  $string = implode(" - ", $arrayNumeros);
  echo $string;
?>
