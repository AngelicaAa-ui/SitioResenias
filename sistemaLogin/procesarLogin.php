<?php
    require_once 'configuracion.php';

    if(!isset($_POST['correo'], $_POST['contrasena'])){
        echo "<p style='color:red;'>Datos Incompletos...</p>";
        exit;
    }

    $correo = $_POST['correo'];
    $contrasena = $_POST['contrasena'];

    $registro = $conexion->prepare("SELECT id, nombre, apellido, contrasena FROM usuarios WHERE correo = ?");
    $registro->bind_param("s", $correo);
    $registro->execute();
    $resultado = $registro->get_result();

    if($resultado->num_rows > 0){
        $usuario = $resultado->fetch_assoc();

        if(password_verify($contrasena, $usuario['contrasena'])){
            $_SESSION['usuario_id'] = $usuario['id'];
            $_SESSION['usuario_nombre'] = $usuario['nombre'];
            $_SESSION['usuario_apellido'] = $usuario['apellido'];
            header("Location: bienvenida.php");
            exit; 
        } else {
            echo "<p style='color:red;'>Contraseña Incorrecta...</p>";
            exit;
        } 
    } else {
        echo "<p style='color:red;'>El correo no está registrado...</p>";
        exit;
    }

    $registro->close();
    $conexion->close();
?>
