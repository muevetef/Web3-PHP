<?php

/* 
Ejercicio 2. 
Escribir un programa con PHP que añada valores
a un array mientras que su
longuitud sea menor a 120 y luego mostrarlo por pantalla.
 */


$coleccion = array();
for ($i = 0; $i < 120; $i++) {
    array_push($coleccion, 'Elemento-' . $i);
}

var_export($coleccion);

function mostrarArray($array)
{
    $resultado = "";
    foreach ($array as $elem) {
        $resultado = $resultado . $elem . '<br>';
    }
    return $resultado;
}

echo mostrarArray($coleccion);
echo 2;
