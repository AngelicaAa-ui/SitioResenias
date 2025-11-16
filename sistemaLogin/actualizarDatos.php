<?php
    require_once 'configuracion.php';

    if(!isset($_SESSION['usuario_id'])){
        header("Location: login.php?error=acceso_no_autorizado");
        exit;
    }

    $usuario_id= $_SESSION['usuario_id'];
    $actualizar= $conexion->prepare("SELECT nombre, apellido, correo FROM usuarios WHERE id=?");
    $actualizar->bind_param("i", $usuario_id);
    $actualizar->execute();
    $resultado= $actualizar->get_result();
    $usuario= $resultado->fetch_assoc();
    $actualizar->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../js/procesarActualizar.js" defer></script>
    <link rel="stylesheet" href="../estilosLogin.css">
    <title>Actualizar Datos</title>
</head>
<body class= "bg-auth">

    <div class="auth-wrapper">
        <div class="auth-card">
            <div class="auth-header">
                <div class="auth-icon">
                    <img src="../imagenes/icono2.jpg" alt="Icono Dos">
                </div>
                <div>
                    <h2 class="auth-title">Actualizar Datos</h2>
                </div>
            </div>
            <div id="mensaje"></div>
            <form id="formulario" method="POST" onsubmit="return enviarFormulario(event)">
                <div class="form-group">
                    <label for="nombre">Nombre: </label>
                    <input type="text" name="nombre" value="<?=htmlspecialchars($usuario['nombre'])?>" required >
                </div>

                <div class="form-group">
                    <label for="apellido">Apellido: </label>
                    <input type="text" name="apellido" value="<?=htmlspecialchars($usuario['apellido'])?>" required>
                </div>

                <div class="form-group">
                    <label for="correo">Correo Electrónico: </label>
                    <input type="email" name="correo" value="<?=htmlspecialchars($usuario['correo'])?>" required>
                </div>

                <button type="submit" id="entrar" class="btn-primary">Actualizar</button>

            </form>    
            <p class="auth-footer-text"><a href="bienvenida.php">Volver</a></p>
        </div>
    </div>
</body>
</html>
