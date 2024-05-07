<?php

/* 
 Ejercicio 6. Mostrar las tablas de multiplicar del 1 al 10 en tablas HTML.
 */
echo "<table border=1> <tr>"; //inicio de la tabla

echo "<tr>"; //inicio 1 fila
for ($i = 1; $i <= 10; $i++) {
    echo "<th>Tabla del $i</th>";
}
echo "</tr>"; //cierre 1 fila

echo "<tr>"; //inicio 2 fila
for ($i = 1; $i <= 10; $i++) {
    echo "<td>";
    for ($j = 1; $j <= 10; $j++) {
        echo "$i x $j = " . ($i * $j) . "<br>";
    }
    echo "</td>";
}
echo "</tr>"; //cierre 2 fila

echo "</table>";

function buenasDias()
{
    return "<h1>Hola! Buenos dias :)</h1>";
}

function buenasTardes()
{
    return "<h1>Hey!! Que tal ha ido la comida??</h1>";
}

function buenasNoches()
{
    return "<h1>¿Te vas a dormir ya? Buenas noches!!</h1>";
}

$horario = "Noches";

$miFuncion = "buenas" . $horario;
echo $miFuncion();
