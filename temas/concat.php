<?php
  // Comillas dobles
  // Concatenación
  $palabra = "Código";
  $union = $palabra . "Facilito";

  $palabra .= "Facilito2";
  echo $union;

  // Interpolación
  echo "Bienvenido a $palabra adios";
  echo "Bienvenido a {$palabra}222 adios";
  // con "" se reconoces los caracteres escapados

  echo "Hola mundo \n adios";

  // Comillas simples
  // No interpolacion ni caracteres escapados
  echo '$palabra hola';
?>
