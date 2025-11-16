<?php
    require_once 'sistemaLogin/configuracion.php';

    if(!isset($_SESSION['usuario_id'])){
        header("Location: login.php?error=acceso_no_autorizado");
        exit;
    }
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="estilos.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alex+Brush&family=Allura&family=Bad+Script&family=Caveat+Brush&family=Courier+Prime:ital,wght@0,400;0,700;1,400;1,700&family=Playfair+Display:ital,wght@0,800;1,800&family=Raleway:ital@0;1&display=swap" rel="stylesheet">
    <title>Contactanos</title>
</head>
<body>
    <header>
        <img src="imagenes/logo_paginacontactos.png" alt="Logo del Sitio:Reseñas Variadas">
        <div>
            <h1>Contáctanos</h1>
            <p class="p">Tu opinión es importante</p>
        </div>               
    </header>

    <div class="textoM"><p>¿QUÉ DESEAS VER?</p></div>

    <nav>
        <div class="menu">
            <img src="imagenes/logo_paginaprincipal.png" alt="imagen1">
            <a href="paginaInicio.php">Inicio</a>
        </div>
        <div class="menu">
            <img src="imagenes/logo_paginalibros.png" alt="imagen2">
            <a href="paginas/libros.php">Libros</a>
        </div>
        <div class="menu">
            <img src="imagenes/logo_paginapeliculas.png" alt="imagen3">
            <a href="paginas/peliculas.php">Películas</a>
        </div>
        <div class="menu">
            <img src="imagenes/logo_paginavideojuegos.png" alt="imagen4">
            <a href="paginas/videojuegos.php">Videojuegos</a>
        </div>
        <div class="menu">
            <img src="imagenes/logo_paginacontactos.png" alt="imagen5">
            <a href="contactos.php">Contactos</a>
        </div>
    </nav> 

    <main>
        <h3 class="ordenF">¡Completa este pequeño formulario y envíanos lo que te gustaría que reseñáramos la próxima vez!</h3>
        
        <div class="animación2">
            <img src="imagenes/gif_bienvenida.gif" alt="animacion5">
        </div>

        <form>
            <div>
                <div>
                    <label for="name">Nombre y Categoría de la Obra</label>
                </div>
                <div class="textos">
                    <input type="text" id="name" name="name">
                </div>
            </div>
            <div>
                <div>
                    <label for="categoria">Seleccione una Categoría</label>
                </div>
                <div class="textos">
                    <select id="categoria" id="categoria">
                        <option value="..."></option>
                        <option value="libro">Libro</option>
                        <option value="pelicula">Película</option>
                        <option value="videojuego">Videojuego</option>
                    </select>
                </div>
            </div>
            <div class="enviar">
                <input type="submit" value="Enviar">
            </div>
        </form>
    </main>

    <footer>
        <h6>@Aagudelo Todos los derechos reservados</h6>
    </footer>
</body>
</html>