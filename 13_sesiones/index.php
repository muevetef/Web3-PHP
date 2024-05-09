<?php
// phpinfo();

//Iniciar la sessión
session_start();
$_SESSION['variable_de_session'] = "Soy una sesión activa";
echo '<p>' . $_SESSION['variable_de_session'] . '</p>';

$variable_normal = "Git es un sistema de control de versiones distribuido";

echo $variable_normal;

?>
<p><a href="pagina1.php">Ir a la página 1</a></p>