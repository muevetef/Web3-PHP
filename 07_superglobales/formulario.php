<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Ejemplo envio de formulario con PHP</h1>
    <form method= 'POST' action="recibir.php">
        <p>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre">
        </p>
         <p>
            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos" id="apellidos">
        </p> 
        <input type="submit" value="Enviar datos">
    </form>
</body>
</html>