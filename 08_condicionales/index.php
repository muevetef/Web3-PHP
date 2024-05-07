<?php
/*
condicionales if
if(condicion){
    instrucciones
}else{
    otras instrucciones
}

Operadores de comparación

== igual no estricto, compara el valor sin tener en cuenta el tipo de dato
=== igualdad estricta
!= desigualdad
<> desigualdad
!== desigualdad estricta
< menor que
> mayor que
<= menor o igual que
>= mayor o igual que

Operadores lógicos
&& AND -> y
|| OR -> o
!  NOT -> negación

*/

$color = "verde";
if($color === "rojo"){
    echo 'El color es rojo';
}else{
    echo 'El color no es rojo';
}

$year = 2024;
if($year >= 2024){
    echo "Estamos de 2024 en adelante";
}else{
    echo "El año es anterior a 2024";
}

//if anidados

$nombre = "Juan Sánchez";
$ciudad = "Madrid";
$continente = "Europa";
$edad = 34;
$mayoria_de_edad = 18;

if($edad >= $mayoria_de_edad){
    // echo '<h1>'.$nombre.' es mayor de edad</h1>';
    echo "<h1>$nombre es MAYOR de edad</h1>";
    if($continente === "Europa"){
        echo "<h2>Vive en $ciudad</h2>";
    }else{
        echo "<h2>No es europeo</h2>";
    }
}else{
    echo "<h1>$nombre es MENOR de edad</h1>";
}

$dia = 2;//imprimir Martes
/*if($dia == 1){
    echo "Es Lunes";
}else{
    if($dia == 2){
        echo "Es Martes";
    }else{
        if($dia == 3){
            echo "Es Miércoles";
        }else{
            if($dia == 4){
                echo "Es Jueves";
            }else{
                if($dia == 5){
                    echo "Es Viernes";
                }else{
                    echo "fin de semana"
                }
            }
        }
    }
}*/

$dia = 8;
if($dia == 1){
    echo "Es Lunes";
}elseif($dia == 2){
    echo "Es Martes";
}elseif($dia == 3){
    echo "Es Miércoles";
}elseif($dia == 4){
    echo "Es jueves";
}elseif($dia == 5){
    echo "Es Viernes";
}else{
    echo "fin de semana";
}

//switch case
switch ($dia) {
    case 1:
       echo "Es Lunes";
       break;
    case 2:
       echo "Es Martes";
       break;
    case 3:
       echo "Es Miércoles";
    break;
    case 4:
       echo "Es Jueves";
       break;
    case 5:
       echo "Es Viernes";
       break;
    default:
        echo "fin de semana";
        break;
}

$edad1 = 16;
$edad2 = 65;
$edad_usuario = 17;

if($edad_usuario >= $edad1 &&  $edad_usuario <= $edad2){
    echo "Estás en edad laboral";
}else{
    echo "No estás en edad laboral";
}

if(!($edad_usuario < $edad1 ||  $edad_usuario > $edad2)){
    echo "Estás en edad laboral";
}else{
    echo "No estás en edad laboral";
}