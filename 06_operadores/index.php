<?php

//aritmeticos
$n1 = 40;
$n2 = 35;

echo 'Suma: '.($n1+$n2).'<br>';
echo 'Resta: '.$n1-$n2.'<br>';
echo 'Mult: '.$n1*$n2.'<br>';
echo 'Div: '.$n1/$n2.'<br>';
echo 'Resto: '.$n1%$n2.'<br>';

//Incremento y decremento
$puntos = 10;

$puntos = $puntos + 1;
$puntos++;
++$puntos;

$puntos = $puntos - 1;
$puntos--;
--$puntos;

echo "<h1>$puntos</h1>";

$edad = 34;

echo $edad.'<br>';
$edad = $edad + 5;
$edad += 5;
$edad -= 5;
$edad /= 5;
$edad *= 5;
echo $edad.'<br>';