<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión</title>
</head>
<body>
<h2>Iniciar Sesión</h2>

<form action="procesarLogin.php" method="POST">
    <label>Correo:</label><br>
    <input type="email" name="correo" required><br><br>

    <label>Contraseña:</label><br>
    <input type="password" name="contrasena" required><br><br>

    <input type="submit" value="Ingresar">
</form>

<p>¿No tienes cuenta? <a href="registro.html">Regístrate aquí</a></p>
</body>
</html>