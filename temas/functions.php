<?php
  function name() {
    echo "Hola soy una funcion";
  }

  $age = 18;
  if ($age <= 18) {
    function party() {
      echo "Bienvenido a la fiesta";
    }
  }

  // funciones anidadas
  function foo() {
    function bar() {
      echo "Hola ya existo";
    }
  }

  foo();
  bar();
?>
