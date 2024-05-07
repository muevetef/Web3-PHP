<?php
//Debuggear 
$nombre = "Bitcho";
var_dump($nombre);

echo "<hr>";
//Fechas
echo date('d-m-y');
echo "<br>";
echo time();
echo "<hr>";
//Matemáticas

echo "Raiz cuadrada de 10 es " . sqrt(10);
echo "<br>";
echo "Número aleatório entre 10 y 40: " . rand(10, 40);
echo "<br>";
echo "Número PI: " . pi();
echo "<br>";
echo "redondeo: " . round(7.845653185, 1);

echo "<hr>";

//Otras genéricas
echo gettype($nombre);
echo "<hr>";
echo gettype(round(7.845653185, 1));

//Detectar el tipado
if (is_string($nombre)) {
    echo "la variable es un String";
}

echo "<br>";
if (!is_float($nombre)) {
    echo "La variable no es un número con decimales";
}
echo "<br>";

$test = NULL;
if (isset($test)) {
    echo "la variable exixte";
} else {
    echo "la variable no existe";
}
echo "<br>";

if (empty($test)) {
    echo "la variable está vacia";
} else {
    echo "la variable está a full";
}

//Limpiar espacios
echo "<br>";
$frase = "     El Tiempo sin ti es empo         ";
var_dump($frase);
echo "<br>";
var_dump(trim($frase));
echo "<br>";
//número de caracteres de un string
echo strlen($frase);
//Buscar carácteres
echo "<br>";
echo strpos($frase, "sin");
//Reemplazar
echo "<br>";
echo str_replace("Tiempo", "Tacobell", $frase);
//Mayus y minus
echo "<br>";
echo strtolower($frase);
echo "<br>";
echo strtoupper($frase);
