<?php
  $color = "Morado";
  $array = array(1, 2, "hola", $color);

  echo $array[2];
  for ($i = 0; $i < count($array); $i++) {
    echo $array[$i]."\n";
  }

  // Array asociativo
  $arrayAsociativo = array('Nombre' => 'Marines', 'Color' => 'Morado', 'Saludo' => 'Hola');

  echo $arrayAsociativo['Saludo'];
  foreach ($arrayAsociativo as $key => $value) {
    echo "Clave $key ---- Valor $value\n";
  }
?>
