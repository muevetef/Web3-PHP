<?php
$title = "Página principal";
require_once 'includes/header.php';

session_start();
if (!isset($_SESSION["nombre"])) {
    header("Location:login.php");
    exit;
}

//var_dump($_SESSION);
?>
<h2>Bienvenido <?= $_SESSION["nombre"] ?></h2>
<figure>
    <img src=<?= $_SESSION['imagen'] ?> alt="avatar de <?= $_SESSION["nombre"] ?>">
</figure>
<p>
    <a href="logout.php">Cerrar sesión</a>
</p>

<?php require_once 'includes/footer.php'; ?>