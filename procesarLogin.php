<?php
session_start(); 
include 'configuracion.php';

$correo = $_POST['correo'];
$contrasena = $_POST['contrasena'];


$stmt = $conexion->prepare("SELECT id, nombre, contrasena FROM usuarios WHERE correo = ?");
$stmt->bind_param("s", $correo);
$stmt->execute();
$resultado = $stmt->get_result();

if ($resultado->num_rows > 0) {
    $usuario = $resultado->fetch_assoc();

    
    if (password_verify($contrasena, $usuario['contrasena'])) {
        
        $_SESSION['usuario_id'] = $usuario['id'];
        $_SESSION['usuario_nombre'] = $usuario['nombre'];
        header("Location: bienvenida.php"); 
        exit;
    } else {
        echo "Contraseña incorrecta.";
    }
} else {
    echo "El correo no está registrado.";
}

$stmt->close();
$conexion->close();
?>