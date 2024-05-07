<?php

/* 
 Ejercicio 5. Hacer un programa que muestre todos los numeros entre dos numeros
 * que nos lleguen por la URL($_GET)
 */
if(isset($_GET['numero1']) && isset($_GET['numero2'])){
    // $n1 = $_GET['numero1'];
    // $n2 = $_GET['numero2'];

    // if($n1 < $n2){
    //     for ($i=$n1; $i <= $n2 ; $i++) { 
    //         echo "<h4>$i</h4>";
    //     }
    // }else{
    //     echo "El primer número debe ser menor";
    // }

    // $inicio = $_GET['numero1'];
    // $fin = $_GET['numero2'];

    // if($inicio > $fin){
    //     $temp = $inicio;
    //     $inicio = $fin;
    //     $fin = $temp;
    // }
    $inicio = $_GET['numero2'];
    $fin = $_GET['numero2'];
    if($_GET['numero1'] > $_GET['numero2']){
        $fin = $_GET['numero1'];
    }else{
        $inicio = $_GET['numero1'];
    }

    for ($i=$inicio + 1; $i < $fin ; $i++) { 
        echo "<h4>$i</h4>";
    }

}else{
    echo "<h1>Introduce correctamente los parámetros por la URL</h1>";
}