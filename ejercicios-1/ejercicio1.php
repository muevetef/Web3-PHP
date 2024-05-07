<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#">
        <input type="number" name="numero">
        <button type="submit">Enviar</button>
    </form>
    <?php
    if(isset($_GET['numero'])){
        echo "El numero es: ".$_GET['numero'];
    }else{
        echo "escribe un número";
    }
    ?>
    
</body>
</html>
<?php

/* 
 Ejercicio 1. Crear dos variables "pais" y "continente" y mostrar su valor por pantalla(imprimir)
 Poner en un comentario que tipo de dato tienen.
 */

