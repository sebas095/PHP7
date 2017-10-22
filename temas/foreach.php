<?php
  // foreach
  $array = array(1, 2, 3, 4, 5);

  foreach ($array as &$value ) {
    $value *= 2;
  }

  foreach ($array as $index => $value) {
    echo "$index ... $valor";
  }
?>
