<?php
session_start();

if (!isset($_SESSION['usuario_id'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Página Protegida</title>
</head>
<body>
<h2>Bienvenido, <?php echo htmlspecialchars($_SESSION['usuario_nombre']); ?> </h2>

<a href="cerrar_sesion.php">Cerrar sesión</a>
</body>
</html>