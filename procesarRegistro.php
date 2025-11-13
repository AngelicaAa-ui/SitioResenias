<?php
    include 'configuracion.php';

    error_reporting(E_ALL);
    ini_set('display_errors', 1);
    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    $hash = password_hash($contrasena, PASSWORD_DEFAULT);

    $verificar = $conexion->prepare("SELECT id FROM usuarios WHERE correo = ?");
    $verificar->bind_param("s", $correo);
    $verificar->execute();
    $verificar->store_result();

    if ($verificar->num_rows > 0) {
        echo "El correo ya está registrado.";
    } else {
        $stmt = $conexion->prepare("INSERT INTO usuarios (nombre, correo, contrasena) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $nombre, $correo, $hash);

        if ($stmt->execute()) {
            echo "Registro exitoso. <a href='login.php'>Inicia sesión</a>";
        } else {
            echo "Error al registrar.";
        }
        $stmt->close();
    }

    $verificar->close();
    $conexion->close();
?>