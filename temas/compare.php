<?php
  // Operadores de comparación

  $num1 = 13;
  $num2 = "13";

  // Operador ==
  echo "Hola soy el operador igual == \n";
  var_dump($num1 == $num2);

  // Operador identico ===
  echo "Hola soy el operador identico === \n";
  var_dump($num1 === $num2);

  // Operador diferente !=
  echo "Hola soy el operador diferente != o <> \n";
  var_dump($num1 != $num2);

  // Operador no identico !==
  echo "Hola soy el operador no identico !== \n";
  var_dump($num1 !== $num2);

  // Operador mayor que >
  $a = 14;
  $b = 13;
  echo "Hola soy el operador mayor que > \n";
  var_dump($a > $b);

  // Operador menor que >
  echo "Hola soy el operador menor que < \n";
  var_dump($a < $b);

  // Operador mayor o igual que >
  echo "Hola soy el operador mayor o igual que >= \n";
  var_dump($a >= $b);

  // Operador menor o igual que >
  echo "Hola soy el operador menor o igual que <= \n";
  var_dump($a <= $b);

  // Operador de nave especial <=>
  echo "Hola soy el operador de nave especial <=> \n";
  var_dump($a <=> $b);

  // Operador de elvis ?:
  $resultado = 0;
  echo "Hola soy el operador de elvis ?: \n";
  var_dump(isset($resultado) ?: 'No hay datos');

  // Operador ternario
  echo "Hola soy el operador ternario ?: \n";
  var_dump(isset($resultado) ? 'Soy verdadero' : 'Soy falso');

  // Operador de fusion null
  echo "Hola soy el operador de fusion null ?? \n";
  var_dump($resultado ?? 'No hay datos');
?>
