<?php
//Variables globales

holaMundo();
echo $frase;
$frase = "El Tiempo sin ti es empo<br>";


function holaMundo()
{
    $frase2 = "Una frase<br>";
    global $frase;
    echo $frase;
}

holaMundo();

// echo $frase2;
