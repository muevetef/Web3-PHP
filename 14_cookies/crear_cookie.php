<?php

setcookie('micookie', 'has mirado televisores');

setcookie('unyear', 'me tendrás en el navegador un año entero', time() + (365 * 24 * 60 * 60));

header('Location:ver_cookies.php');
