<?php
  echo "<p>Hola Mundo</p>";
  $integer = 1;
  $float = 1.5;
  $isTrue = true;
  $arrayColores = array('Azul', 'Morado', 'Negro');
  $string = "Hola";

  echo $integer;
  echo $float;
  if ($isTrue) {
    echo $arrayColores[0];
    echo $string;
    echo "Verdadero";
  }

  // variables locales y globales
  function variablesGlobales() {
    $local = "Soy la variable local";
    echo $GLOBALS["global"];
    echo $local;
  }

  $global = "Soy la variable global";
  variablesGlobales();

  // variables superglobals
  /*
    $GLOBALS -- Hace referencia a todas las variables disponibles en el ámbito global
    $_SERVER -- Información del entorno del servidor y de ejecución
    $_GET -- Variables HTTP GET
    $_POST -- Variables POST de HTTP
    $_FILES -- Variables de subida de ficheros HTTP
    $_COOKIE -- Cookies HTTP
    $_SESSION -- Variables de sesión
    $_REQUEST -- Variables de HTTP Request
    $_ENV -- Variables de entorno
    $php_errormsg -- El mensaje de error anterior
    $HTTP_RAW_POST_DATA -- Datos POST sin tratar
    $http_response_header -- Encabezados de respuesta HTTp
    $argc -- El número de argumentos pasados a un script
    $argv -- Array de argumentos pasados a un script
   */
?>
