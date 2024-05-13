<?php
session_start();
$title = "Inicio de sessión";
require_once 'includes/header.php';
require_once 'utils/filters.php';

$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {

    $nombre = filter($_POST['nombre']);
    $password = filter($_POST['password']);
    //leer los datos en el fichero de texto
    $archivo = fopen("user.txt", "r");
    $user_nombre = trim(fgets($archivo));
    $user_email = trim(fgets($archivo));
    $user_password = trim(fgets($archivo));
    $user_image_path = trim(fgets($archivo));
    //var_dump($user_nombre, $user_password, $user_email);

    //validar las credenciales
    if ($nombre === $user_nombre && $password === $user_password) {
        //si són validas iniciar sessión
        $_SESSION['nombre'] = $nombre;
        $_SESSION['email'] = $nombre;
        $_SESSION['imagen'] = $user_image_path;

        header("Location:index.php");
    } else {
        $errors['info'] = "Credenciales inválidas";
    }
}
?>

<h2>Iniciar sesión</h2>
<p><?php isset($errors['info']) ? print $errors['info'] : "" ?></p>
<form action="<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">

    <label for="nombre">Nombre:</label>
    <input type="text" id="nombre" name="nombre">

    <label for="password">Contraseña:</label>
    <input type="password" id="password" name="password"><br>

    <button type="submit" name="submit">Enviar</button>
</form>
<p>
    <a href="register.php">No estás registrado? clica aquí</a>
</p>

<?php require_once 'includes/footer.php'; ?>