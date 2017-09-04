<?php
  // Operadores de asignación
  $a = 15;
  $b = 5;

  // Operadores combinados
  // +, -, *, /, **, %
  $a += $b;
  echo $a;

  $a .= $b;
  echo $a;

  // Operadores incremento y decremento
  $a = 15;
  echo "Post- incremento".$a++."\n";
  echo "resultado ".$a."\n";

  echo "Pre- incremento".++$a."\n";
  echo "resultado ".$a."\n";

  // Decremento
  echo "Post- decremento".$a--."\n";
  echo "resultado ".$a."\n";

  echo "Pre- decremento".--$a."\n";
  echo "resultado ".$a."\n";
?>
