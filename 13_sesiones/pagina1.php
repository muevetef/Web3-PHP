<?php
session_start();
if (isset($_SESSION['variable_de_session'])) {
    echo '<p>' . $_SESSION['variable_de_session'] . '</p>';
    // echo $variable_normal;
    echo "<h1>Contenido privada</h1>";
} else {
    // header("Location:index.php");
    echo "<h1>Contenido público</h1>";
}

?>
<a href="index.php">Ir al index</a><br>
<a href="logout.php">logout</a>