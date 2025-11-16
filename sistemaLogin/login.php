<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link rel="stylesheet" href="../estilosLogin.css">
</head>
<body class="bg-auth">

    <div class="auth-wrapper">
        <div class="auth-card">
            <div class="auth-header">
                <h2 class="auth-title">Iniciar sesión</h2>
            </div>

            <div id="mensaje"></div>
            <form id="formulario" action="procesarLogin.php" method="POST">
                <div class="form-group">
                    <label for="correo">Correo Electrónico:</label>
                    <input type="email" name="correo" required>
                </div>

                <div class="form-group">
                    <label for="contrasena">Contraseña:</label>
                    <input type="password" name="contrasena" required>
                </div>

                <button type="submit" id="entrar" class="btn-primary">Iniciar Sesión</button>
            </form>

            <p class="auth-footer-text"> ¿No tienes cuenta? <a href="index.html">Regístrate Aquí</a></p>
        </div>
    </div>
</body>
</html>
