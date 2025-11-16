<?php
    session_set_cookie_params([
        'lifetime' => 0,
        'secure' => false,
        'httponly' => true,
        'samesite' => 'Strict' //Establece los parametros de cookie, protegiendo la cookie de la sesion de ataques.
    ]);

    session_start(); //Gestion de sesiones, asegura la confidencialidad de nuestro sitio.

    $conexion = new mysqli("localhost", "angelica", "Pulgarcita878..", "loginbd");
    if($conexion -> connect_error){
        die("Error de conexión: ". $conexion-> connect_error); //Asignacion de un usuario y contraseña a la base, evitando 
    }                                                         //que cualquiera que entre a mysql pueda acceder a la informacion.

?>