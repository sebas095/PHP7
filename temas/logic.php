<?php
  // Operadores lógicos
  // Operador Y &&
  $bool = (15 == 5) && (15 == 15); // false
  var_dump($bool);

  // Operador O ||
  $bool = (15 == 5) || (15 == 15);
  var_dump($bool);

  // Operador xor
  $bool = (15 == 5) xor (15 == 15);
  var_dump($bool);

  // Operador not
  $bool = !(15 == 15);
  var_dump($bool);

  // and Y
  $bool = ((15 == 5) and (15 == 15)); // false
  var_dump($bool);

  // Operador O or
  $bool = ((15 == 5) or (15 == 15));
  var_dump($bool);
?>
