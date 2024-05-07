<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenida</title>
</head>
<body>
    <h1><?= 'Bienvenid@ '.$_POST['nombre'].' '.$_POST['apellidos'] ?></h1>
    <?php
    var_dump($_POST);
    ?>

</body>
</html>


