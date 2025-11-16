<?php
    session_start();
    session_unset();
    session_destroy(); //Cerrar sesion
    header("Location: login.php?logout=1");
    exit;
?>