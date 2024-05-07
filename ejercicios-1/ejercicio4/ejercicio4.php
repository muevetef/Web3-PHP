<?php
include 'test.php';
/* 
Ejercicio 4. Recoger dos numeros por la url(Parametros GET) y hacer todas las 
 * operaciones basicas de una calculadora(suma, resta, multiplicaion y division)
 * de esos dos numeros.
 */

// http://localhost:8080/../../index.php?numero1=3&numero2=5

if(isset($_GET['numero1']) && isset($_GET['numero2'])){
    $n1 = $_GET['numero1'];
    $n2 = $_GET['numero2'];

    echo "<h1>Calculadora</h1>";
    echo "<p>Suma: ".($n1+$n2)."</p>";
    echo "
    División: 0.71428571428571<p>Resta: ".($n1-$n2)."</p>";
    echo "<p>Multipicación: ".($n1*$n2)."</p>";
    echo "<p>División: ".($n1/$n2)."</p>";
}else{
    echo "<h1>Introduce correctamente los parámetros por la URL</h1>";
}
?>