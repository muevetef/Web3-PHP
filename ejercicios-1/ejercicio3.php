<?php

/* 
 Ejercicio 3. Escribir un programa que imprima por pantalla los cuadrados
 (un numero multiplicado por si mismo) de los 40 primeros numeros naturales.
 PD: Utilizar bucle while.
 */

//version while
$contador = 1;
while ($contador <= 40) {
    $cuadrado = $contador * $contador;
    echo "<p>El cuadrado de $contador es es $cuadrado</p>";
    $contador++;
}
//version for
for ($i = 0; $i < 40; $i++) {
    # code...
    $cuadrado = $i * $i;
    echo "<p>El cuadrado de $contador es es $cuadrado</p>";
}
