<?php
  declare(strict_type = 1);
  // modo coercitivo
  function suma(int $a, int $b) {
    return $a + $b;
  }

  var_dump(suma(8, 5));

  // modo estricto
  function resta(int $a, int $b) {
    return $a - $b;
  }

  var_dump(suma(6, 5));

  function multi(int $a, int $b) : int {
    return $a * $b;
  }

  var_dump(multi(7, 5));
?>
