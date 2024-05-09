<?php

/* 
 Ejercicio 1. Hacer un programa en PHP que tenga un array con 8 numeros enteros
 y que haga lo siguiente:
 - Recorrerlo y mostrarlo
 - Ordenarlo y mostrarlo
 - Mostrar su longitud
 - Buscar algun elemento (buscar por el parametro que me llegue por la url)
 */

function mostrarNumeros($array_numeros)
{
    $resultado = "";
    foreach ($array_numeros as $n) {
        $resultado = $resultado . $n . '<br>';
    }
    return $resultado;
}

$numeros = [11, 33, 44, 61, 9, 56, 4, 87];
/*
//recorrer y mostrar
echo mostrarNumeros($numeros);
echo '<br>';
var_export($numeros);
echo "<hr>";
//Ordenarlo y mostrarlo
// sort($numeros);
// echo mostrarNumeros($numeros);
// echo '<br>';
// var_export($numeros);
//asort
asort($numeros);
echo mostrarNumeros($numeros);
echo '<br>';
var_export($numeros);

//Mostrar su longitud
echo "<hr>";
echo count($numeros);
*/
$numeros = [11, 33, 44, 61, 9, 56, 4, 87];
//Buscar algun elemento (buscar por el parametro que me llegue por la url)
if (isset($_GET['numero'])) {
    $busqueda = $_GET['numero'];

    $res = array_search($busqueda, $numeros);
    if ($res === false) {
        echo "El número no está en el array";
    } else {
        echo "El número que buscas está en la posición $res del array";
    }
}
