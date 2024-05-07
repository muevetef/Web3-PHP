<?php
/* Se ejecuta el código mientras la condición se evalé a true
Nota: en algún momento se tiene que poder salir del bucle
evaluar la condición a false o con la senténcia break;
while(condición){
    bloque de intrucciones
}
*/

$contador = 0;
while($contador <= 100){
    echo $contador;

    if($contador != 100){
        echo ", ";
    }
   $contador++;
}
echo ".";

echo "<hr>";
//index.php?numero=2    -> query string parameter
if(isset($_GET['numero'])){
    $numero = (int)$_GET['numero'];
}else{
    $numero = 1;
}

echo "<h1>Tabla de multiplicar del numero $numero</h1>";
$counter = 1;
while($counter<= 10){
    echo "$numero x $counter = ".$numero*$counter."<br>";
    $counter++;
}
echo "<hr>";

/*
do{
    bloque de instrucciones
}while(condición);
*/

/*
for(variable contador; condición; actualiza el contador){
    bloque de instrucciones
}
*/

for($i = 0; $i < 10; $i++){
    echo "La i vale: $i <br>";
}