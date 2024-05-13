<?php
$title = "Registro de usuario";
require_once 'includes/header.php';
require_once 'utils/filters.php';
$errors = [];


if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {

    if (empty($_POST['nombre']) || preg_match("/[0-9]/", $_POST['nombre'])) {
        $errors['err_nombre'] = "El nombre no puede estar vacío y no puede contener numeros";
    }
    if (empty($_POST['password']) || strlen($_POST['password']) < 4) {
        $errors['password'] = "El password es obligatorio y debe tener más de 4 carácteres";
    }
    if (empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "La formato del email no es válido";
    }
    //validar imagen
    if (!isset($_FILES['imagen'])) {
        $errors['imagen'] = "No has cargado ninguna imagen";
    } else {
        $image = $_FILES['imagen'];
        $image_name = $image['name'];
        $image_type = $image['type'];
        if (!($image_type == "image/jpg" || $image_type == "image/jpeg" || $image_type == "image/png" || $image_type == "image/gif")) {
            $errors['imagen'] = "La imagen no tiene un formato válido";
        }
    }


    //var_dump($errors);
    //var_dump($_FILES);

    if (empty($errors)) {
        $nombre = filter($_POST['nombre']);
        $password = filter($_POST['password']);
        $email = filter($_POST['email']);
        //guardar imagen
        if (!is_dir('images')) {
            mkdir('images', 0777);
        }
        $image_path = 'images/' .
            str_replace(" ", "-", $image_name);
        move_uploaded_file($image['tmp_name'], $image_path);

        //escribir los datos en el fichero de texto
        $archivo = fopen("user.txt", "w");
        fwrite($archivo, "$nombre\n$email\n$password\n$image_path\n");
        fclose($archivo);
        //redireccionar a login
        header("Location:login.php");
    }
}
?>


<h2>Formulario de Registro</h2>
<form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" enctype="multipart/form-data">
    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre">
    <p><?php isset($errors['err_nombre']) ? print $errors['err_nombre'] : "" ?></p>

    <label for="email">Email:</label>
    <input type="text" id="email" name="email">
    <p><?php isset($errors['email']) ? print $errors['email'] : "" ?></p>

    <label for="password">Contraseña:</label>
    <input type="password" id="password" name="password">
    <p><?php isset($errors['password']) ? print $errors['password'] : "" ?></p>

    <label for="imagen">Imagen:</label>
    <input type="file" id="imagen" name="imagen" accept="image/*">
    <p><?php isset($errors['imagen']) ? print $errors['imagen'] : "" ?></p>
    <button type="submit" name="submit">Enviar</button>
</form>
<p>
    <a href="login.php">Ya estás registrado? Inicia sessión</a>
</p>

<?php require_once 'includes/footer.php'; ?>