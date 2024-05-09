<?php

/* 
Ejercicio 4. Crear un script en php que tenga 4 variables, una de tipo array,
 * otra de tipo string, otra int y otra booleana y que imprima un mensaje
 * segun el tipo de variable que sea.
 
 */
$arr = array("hola", 8);
$titulo = "La gran evasión";
$numero = 77;
$verdadero = true;

if (is_array($arr)) {
    echo "es un array";
}

if (is_string($titulo)) {
    echo "es un string";
}
if (is_integer(77)) {
    echo "es un entero";
}

if (is_bool($verdadero)) {
    echo "es un booleano";
}
