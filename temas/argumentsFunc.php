<?php
  // Argumentos de funciones
  function suma($num1, $num2) {
    $res = $num1 + $num2;
    echo "La suma es $res";
  }

  suma(10, 15);

  // array
  function suma_array($entrada) {
    $num1 = $entrada[0];
    $num2 = $entrada[1];

    echo "El resultado es ".($num1 + $num2);
  }

  suma_array(array(10, 5));

  // funcion por referencia
  function resta(&$num) {
    $num = 20 - $num;
  }

  $result = 13;
  resta($result);
  echo $result;

  // funcion recursiva
  function recursividad($a) {
    if ($a < 20) {
      echo "$a\n";
      recursividad($a + 1);
    }
  }

  recursividad(1);
?>
