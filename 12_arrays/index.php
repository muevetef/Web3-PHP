<?php
$peliculas = array('Batman', 'Superman', 'Spiderman');
$cantantes = ['Julio Iglesias', 'Sabina', 'Serrat', 'Rosalía', 'Shakira'];

var_dump($peliculas);
// echo $cantantes[3];
// print_r($cantantes);

echo "<h2>Lista de cantantes</h2>";
// echo "<ul>";
// for ($i = 0; $i < count($cantantes); $i++) {
//     echo "<li>$cantantes[$i]</li>";
// }
// echo "</ul>";

//foreach
echo "<ul>";
foreach ($cantantes as $cantante) {
    echo "<li>$cantante</li>";
}
echo "</ul>";

//Arrays asociativos
$persona = array(
    'nombre' => 'Mario',
    'apellidos' => 'Bross',
    'trabajo' => 'Fontanero'
);

var_dump($persona);

echo $persona['nombre'];
echo "<hr>";
//recorrer array asociativo
foreach ($persona as $key => $value) {
    echo $key . ' : ' . $value . '<br>';
}

//Array multidimensional
$contactos = [
    ['nombre' => 'Bart', 'email' => 'bart@email.com'],
    ['nombre' => 'Lisa', 'email' => 'Lisa@email.com'],
    ['nombre' => 'Maggie', 'email' => 'Maggie@email.com']
];

var_dump($contactos);
echo "<hr>";
foreach ($contactos as $key => $contacto) {
    // var_dump($contacto);
    echo $key . ': El email de ' . $contacto['nombre'] . ' es ' . $contacto['email'] . '<br>';
}
