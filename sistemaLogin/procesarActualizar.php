<?php
    require_once 'configuracion.php';

    if(!isset($_SESSION['usuario_id'])){
        header("Location: login.php?error=acceso_no_autorizado");
        exit;
    }

    if($_SERVER["REQUEST_METHOD"] == "POST"){
        if(!isset($_POST['nombre'], $_POST['apellido'], $_POST['correo'])){
            echo "<p style='color:red;'>Faltan Datos...</p>";
            exit;
        }

        $usuario_id= $_SESSION['usuario_id'];
        $nombre= $_POST['nombre'];
        $apellido= $_POST['apellido'];
        $correo= $_POST['correo'];

        $actualizar= $conexion->prepare("UPDATE usuarios SET nombre = ?, apellido = ?, correo = ? WHERE id= ?");
        $actualizar->bind_param("sssi", $nombre, $apellido, $correo, $usuario_id);

        if($actualizar->execute()){
            $_SESSION['usuario_nombre']= $nombre;
            echo "<p style='color:green;'>Datos actualizados correctamente. <a href='bienvenida.php'>Volver</a></p>";
        } else {
            echo "<p style='color:red;'>Error al actualizar los datos...</p>";
        }

        $actualizar->close();
        $conexion->close();
    }
?>
