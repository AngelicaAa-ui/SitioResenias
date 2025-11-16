<?php
    require_once 'configuracion.php';

    if(!isset($_SESSION['usuario_id'])){
        header("Location: login.php?error=acceso_no_autorizado");
        exit;
    } //Inclusion de condiciones en caso de acceso no autorizado.
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenida</title>
    <link rel="stylesheet" href="../estilosLogin.css"> 
<body class="bg-auth">

    <div class="auth-wrapper">
        <div class="auth-card">
            <div class="auth-header">
                <h2 class="auth-title">Bienvenid@ a nuestra Web</h2>
                <p class="auth-subtitle">Gracias por formar parte de nuestra bella familia.</p>
            </div>

            <p>¿QUÉ DESEAS HACER?</p>

            <div class="button-container">
                <a href="actualizarDatos.php" class="btn-primaryD">Actualizar mis Datos</a>
                <a href="logout.php" class="btn-primaryD">Cerrar Sesión</a>
                <a href="../paginaInicio.php" class="btn-primaryD">Adentrate en nuestro mundo</a>
            </div>
        </div>
    </div>

</body>
</html>
