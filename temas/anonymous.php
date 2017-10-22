<?php
  // funciones anonimas
  $saludo = function($nombre) {
    echo $nombre;
  }

  $saludo("Jorge");

  $suma = function($num1, $num2) {
    return $num1 + $num2;
  }

  echo $suma(4, 6);

  // funciones variables
  function saludo($saludo) {
    echo "Soy la variable funcion $saludo";
  }

  $variable = 'saludo';
  echo $variable('hola');

  // Funciones internas de php
  if (function_exists('array_filter')) {
    echo "La funcion existe";
  } else {
    echo "La funcion no existe";
  }

  print_r(get_extension_funcs("xml"));
?>
