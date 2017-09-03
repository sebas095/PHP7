<?php
  // constantes
  // Forma 1
  const CONSTANTE = "Soy una constante";
  const NUMEROS = 1;
  const COLORES = array('amarillo', 'azul', 'rojo');

  echo CONSTANTE;
  echo NUMEROS;
  echo COLORES[1];

  // Forma 2
  define('CONSTANTE2', "Hola Mundo");
  define('COLORES2', array('naranja', 'verde', 'morado'));

  echo CONSTANTE2;
  echo COLORES2[2];
  echo PHP_INT_MIN;

  // Nuevas constantes predefinidas en PHP7
  /*
    PHP_INT_MIN
    PHP_FLOAT_DIG
    PHP_FLOAT_EPSILON
    PHP_FLOAT_MIN
    PHP_FLOAT_MAX
    PHP_FD_SETSIZE

    Constantes que pueden redefinirse:
    __LINE__
    __FILE__
    __DIR__
    __FUNCTION__
    __CLASS__
    __TRAIT__
    __METHOD__
    __NAMESPACE__
   */
?>
