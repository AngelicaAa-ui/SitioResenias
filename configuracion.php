<?php
    $conexion = new mysqli("localhost", "root", "", "loginbd");

    if ($conexion -> connect_error) {
        die("Error de conexión");
    }
?>