<?php
    session_set_cookie_params([
        'lifetime' => 0,
        'secure' => false,
        'httponly' => true,
        'samesite' => 'Strict'
    ]);

    session_start();

    $conexion = new mysqli("localhost", "angelica", "Pulgarcita878..", "loginbd");
    if($conexion -> connect_error){
        die("Error de conexión: ". $conexion-> connect_error);
    }

?>