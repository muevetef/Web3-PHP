<?php
session_start();
$title = "Inicio de sessión";
require_once 'includes/header.php';
require_once 'utils/filters.php';

$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['nombre']) && isset($_POST['password'])) {

    $nombre = filter($_POST['nombre']);
    $password = filter($_POST['password']);
    //leer los datos en el fichero de texto
    // $archivo = fopen("user.txt", "r");
    // $user_nombre = trim(fgets($archivo));
    // $user_email = trim(fgets($archivo));
    // $user_password = trim(fgets($archivo));
    // $user_image_path = trim(fgets($archivo));
    // fclose($archivo);
    $data = file("user2.txt", FILE_IGNORE_NEW_LINES);
    $data_array = explode(",", $data[0]);
    $user_nombre = $data_array[0];
    $user_email = $data_array[1];
    $user_password = $data_array[2];
    $user_image_path = $data_array[3];
    //var_dump($data_array);
    //exit;
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

    <button type="submit">Enviar</button>
</form>
<p>
    <a href="register.php">No estás registrado? clica aquí</a>
</p>

<?php require_once 'includes/footer.php'; ?>