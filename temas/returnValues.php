<?php
  function resta($num) {
    return $num - 10;
  }

  echo resta(40);

  function hacer_cafe($tipo = "capuchino") {
    return "El cafe es de $tipo.\n";
  }

  echo hacer_cafe();
  echo hacer_cafe(null);
  echo hacer_cafe("Mocha");

  function persona($nombre = "fulanito", $apellido = "fulanito", $edad = 15) {
    return "Bienvenido $nombre $apellido de $edad años";
  }

  echo persona();

  function animales($animales = $array("sin dato", "sin dato"), $tipo = "sin tipo") {
    return "Los animales son ".implode("," $animales)." $tipo\n";
  }

  echo animales();
  echo animales(array("gato, tigre"), "felinos");

  function flores() {
    $flor = "Clavel";
    $color = "Morado";
    $cantidad = 10;
    return array($flor, $color, $cantidad);
  }

  list($fl, $co, $can) = flores();
  echo "Hola soy un $fl mi color es $co y somos $can\n";
?>
