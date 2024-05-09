<?php

/* 
 Ejercicio 3. Programa que compruebe si una variable esta vacia y si está vacia,
 rellenarla con texto en minusculas y mostrarlo en mayusculas y negrita.
 */
$texto = "";

if (empty($texto)) {
    $texto = "texto por defecto";
    $textMayus = strtoupper($texto);
    echo "<strong>$textoMayus</strong>";
} else {
    echo "La varible contiene: " . $texto;
}
