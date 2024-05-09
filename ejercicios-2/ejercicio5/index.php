<?php

/* 
 Crear un array con el contenido de la tabla:
 ACCION   AVENTURA   DEPORTES
 GTA      ASSASINS    FIFA 19
 COD      CRASH       PES 19
 PUGB     Prince of   MOTO GP 19
          persia
 
Cada fila debe ir en un fichero separado(includes).
 */
$tabla = array(
    "ACCION" => array("GTA", "Call of Duty", "PUGB"),
    "AVENTURA" => array("Assasins Creed", "Chrash", "Prince of persia"),
    "DEPORTES" => array("Fifa 2021", "Pes 19", "Moto GP")
);
$tabla['ACCION'][0];
$categorias = array_keys($tabla);

var_export($categorias);

?>

<table border="1">
    <?php include_once 'inc/table_header.php' ?>
    <?php require_once 'inc/table_first_row.php' ?>
    <?php include_once 'inc/table_second_row.php' ?>
    <?php include_once 'inc/table_third_row.php' ?>
</table>