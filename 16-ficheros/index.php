<?php
require_once 'includes/header.php';

//Abrir archivo
$archivo = fopen("archivo.txt", "a+");

var_dump($archivo);
//leer hasta el final
while (!feof($archivo)) {
    $contenido = fgets($archivo);
    echo '<p>' . $contenido . '</p>';
}



//Escribir
fwrite($archivo, date("d-m-Y h:i:s") . "-****Soy un texto añadido desde php****\n");
fclose($archivo);

$about = fopen("about.php", "a+");
fwrite($about, "<?php echo '<h1>Sobre mí</h1>'?>");
fclose($about);

require_once 'includes/footer.php';
