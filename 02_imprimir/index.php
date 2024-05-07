<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imprimir datos</title>
</head>
<body>
    <h1>Mi página hecha con PHP - <?php echo "Mola mucho!!"?></h1>

    <?= "Bienvenidos a mi web" ?>

    <?php
    //Comentario de una línea
    echo "<h3>Lista de frutas</h3>";
    /*comentario 
    de 
    varias 
    líneas
    */
    echo "<ul>"
            ."<li>Peras</li>"
            ."<li>Manzanas</li>"
            ."<li>Melón</li>"
            ."<li>Plátanos</li>"
        ."</ul>";

    ?>
</body>
</html>