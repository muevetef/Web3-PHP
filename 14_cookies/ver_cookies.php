<?php
var_dump($_COOKIE);
echo '<br>';

if (isset($_COOKIE['micookie'])) {
    echo '<h2>' . $_COOKIE['micookie'] . '</h2>';
} else {
    echo "micookie no existe";
}
?>
<a href="crear_cookie.php">Crear las galletas</a><br>
<a href="borrar_cookies.php">Borrar las galletas</a>