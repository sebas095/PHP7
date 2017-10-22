<?php
  $personas = array(
    array("Amairani", "Lievano", 22),
    array("Guiomar", "Cameras", 22),
    array("Raquel", "Molina", 23),
    array("Delia", "Gallegos", 46)
  );

  $fila = 3;
  $columna = 1;
  echo $personas[$fila][$columna];

  for ($fila = 0; $fila < count($personas); $fila++) {
    for ($columna = 0; $columna < count($personas[$fila]); $columna++) {
      echo "Valor -> ".$personas[$fila][$columna]."\n";
    }
  }

  $barcos = array(
    'A' => array("nada", "nada", "Barco"),
    'B' => array("nada", "nada", "nada"),
    'C' => array("Barco", "nada", "nada"),
    'D' => array("nada", "nada", "Barco")
  );

  echo $barcos['A'][2];
  foreach ($barcos as $key => $value) {
    for ($index = 0; $index < count($value); $index++) {
      echo "Coordenadas -> $key - $index Valor -> $value[$indice]\n";
    }
  }
?>
