<?php
    require_once '../sistemaLogin/configuracion.php';

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
    <link rel="stylesheet" href="../estilos.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Alex+Brush&family=Allura&family=Bad+Script&family=Caveat+Brush&family=Courier+Prime:ital,wght@0,400;0,700;1,400;1,700&family=Playfair+Display:ital,wght@0,800;1,800&family=Raleway:ital@0;1&display=swap" rel="stylesheet">
    <title>Reseñas de Videojuegos</title>
</head>
<body>
    <header>
        <img src="../imagenes/logo_paginavideojuegos.png" alt= "Logo de la Página Reseñas de Videojuegos">
        <div>
            <h1>Reseñas de Videojuegos</h1>
            <p class="p">Aventuras épicas, mundos inmersivos</p>
        </div>
    </header>

    <div class="textoM"><p>MENÚ</p></div>

    <nav>
        <div class="menu">
            <img src="../imagenes/logo_paginaprincipal.png" alt="imagen1">
            <a href="../paginaInicio.php">Inicio</a>
        </div>
        <div class="menu">
            <img src="../imagenes/logo_paginalibros.png" alt="imagen2">
            <a href="libros.php">Libros</a>
        </div>
        <div class="menu">
            <img src="../imagenes/logo_paginapeliculas.png" alt="imagen3">
            <a href="peliculas.php">Películas</a>
        </div>
        <div class="menu">
            <img src="../imagenes/logo_paginavideojuegos.png" alt="imagen4">
            <a href="videojuegos.php">Videojuegos</a>
        </div>
        <div class="menu">
            <img src="../imagenes/logo_paginacontactos.png" alt="imagen5">
            <a href="../contactos.php">Contactos</a>
        </div>
    </nav>

    <div class="animación3">
        <img src="../imagenes/gif_videojuegos.gif" alt="animación4">
    </div>

    <main>
        <section>
            <div class="contenedor7">
                <div class="slide7">
                    <ul>
                        <li><img src="../imagenes/videojuego1.jpg" alt="Imagen Videojuego1: Devil May Cry"></li>
                        <li><img src="../imagenes/videojuego1imagen2.jpg" alt="Imagen2 Videojuego1"></li>
                        <li><img src="../imagenes/videojuego1imagen3.jpg" alt="Imagen3 Videojuego1"></li>
                        <li><img src="../imagenes/videojuego1imagen4.jpg" alt="Imagen4 Videojuego1"></li>
                        <li><img src="../imagenes/videojuego1imagen5.jpg" alt="Imagen5 Videojuego1"></li>
                    </ul>
                </div>
                <div>
                    <h2>Devil May Cry</h2>
                    <p>Para los amantes de historias intensas, lazos familiares tan retorcidos como entrañables y una gran sed de acción, llega Devil May Cry que más allá de ser un videojuego es una experiencia.</p>
                    <p>Su protagonista es Dante, quien es más que un simple cazador de demonios, puesto que es el hijo de Sparda uno de los demonios mas poderosos del inframundo, un ser que, contra todo pronóstico eligió proteger a la humanidad. Tras perder a su familia y a muchas personas importantes en el proceso, Dante acoge ese mismo deber, enfrentándose así a múltiples criaturas salidas del averno cada una más peligrosa que la anterior, mientras intenta mantener un ápice de humanidad en un mundo que parece haberla olvidado. Pero entre balas, espadas y enfrentamientos infernales, Dante se topa con algo inesperado: su hermano gemelo, a quien creía muerto. Y ese reencuentro, lejos de ser una reconciliación, desencadena un conflicto aún más profundo.</p>
                    <p>Es una saga que brilla por si sola, teniendo combates estilizados, una ambientación oscura pero fascinante, y personajes inolvidables, haciendo de cada entrega una explosión de estilo, drama, sarcasmo y mucha actitud.</p>

                    <div>
                        <p class="espacio">
                            <strong class="negrita7">OPINIÓN PERSONAL:</strong> Puedo decir que mi acercamiento a esta historia fue muy imprevisto, nunca fui una persona cercana a los videojuegos, pero desde que conocí Dmc una realidad nueva se abrió ante mis ojos. Tiene una historia buenísima y personajes que ciertamente te enganchan de más de una forma. Es ese tipo de obras que una vez que te adentras en su mundo solo buscas conocer más y más. Lo recomiendo demasiado, especialmente a aquellos que disfrutan de ver estéticas góticas o combates incesantes.
                        </p>
                    </div>
                </div>
            </div>

            <div class="texto2">
                <h3>INFORMACIÓN ADICIONAL</h3>
            </div>

            <div>
                <a class="enlace" href="https://www.eurogamer.es/devil-may-cry-resumen-completo-historia-saga" target="_blank">Leer Más...</a>

            </div>

            <div class="contenedor8">
                <div class="slide8">
                    <ul>
                        <li><img src="../imagenes/videojuego2.jpg" alt="Imagen Videojuego2: Resident Evil"></li>
                        <li><img src="../imagenes/videojuego2imagen2.jpg" alt="Imagen2 Videojuego2"></li>
                        <li><img src="../imagenes/videojuego2imagen3.jpg" alt="Imagen3 Videojuego2"></li>
                        <li><img src="../imagenes/videojuego2imagen4.jpg" alt="Imagen4 Videojuego2"></li>
                        <li><img src="../imagenes/videojuego2imagen5.jpg" alt="Imagen5 Videojuego2"></li>
                    </ul>
                </div>
                <div>
                    <h2>Resident Evil</h2>
                    <p>Cuando el miedo ya no puede paralizarte, lo único que queda es transformarlo en impulso. En un mundo donde el fin fue el resultado de una decisión mal tomada (otra vez más el ser humano jugando a ser Dios) nace Resident Evil: un universo donde la humanidad ha sido casi completamente erradicada, y el horror reina en cada rincón.</p>
                    <p>Cada entrega tiene su propia esencia, sus propios sobrevivientes, y una trama que va mucho más allá de una simple historia de terror o suspenso. Es una saga donde el concepto de “apocalipsis” toma un nuevo rumbo, uno que convierte a cada personaje en un símbolo de resistencia.</p>
                    <p>Porque en Resident Evil, no se trata solo de sobrevivir. Se trata de seguir adelante aun cuando todo está perdido. Se trata de aferrarse a la chispa más pequeña de esperanza, incluso cuando el mundo entero ya se ha apagado.</p>
                
                    <div>
                        <p class="espacio">
                            <strong class="negrita8">OPINIÓN PERSONAL:</strong> No solo cuenta con gráficos excelentes, sino que la ambientación de su historia le da un plus total. Tiene todo lo que se puede desear en un relato de este tipo, te incita a querer jugar de primera mano cada entrega para así poder vivir la experiencia completa y no saltarte ningún detalle. Es envolvente y bien estructurado en su mayoría, desde mi perspectiva una obra con todas las de ganar.
                        </p>
                    </div>
                </div>
            </div>

            <div class="texto2">
                <h3>INFORMACIÓN ADICIONAL</h3>
            </div>

            <div>
                <a class="enlace" href="https://www.hobbyconsolas.com/listas/todos-juegos-resident-evil-clasificados-peor-mejor-1315494" target="_blank">Leer Más...</a>

            </div>

            <div class="contenedor9">
                <div class="slide9">
                    <ul>
                        <li><img src="../imagenes/videojuego3.jpg" alt="Imagen Videojuego3: Final Fantasy"></li>
                        <li><img src="../imagenes/videojuego3imagen2.jpg" alt="Imagen2 Videojuego3"></li>
                        <li><img src="../imagenes/videojuego3imagen3.jpg" alt="Imagen Videojuego3"></li>
                        <li><img src="../imagenes/videojuego3imagen4.jpg" alt="Imagen4 Videojuego3"></li>
                        <li><img src="../imagenes/videojuego3imagen5.jpg" alt="Imagen5 Videojuego3"></li>
                    </ul>
                </div>
                <div>
                    <h2>Final Fantasy</h2>
                    <p>Esa sensación que se queda contigo después de presenciar algo verdaderamente hermoso… es lo que sucede cuando juegas Final Fantasy. Una historia, o mejor dicho, muchas historias que de alguna forma siempre dejan una marca, como si te escribieran con fuego en la mente y en el corazón.</p>
                    <p>Final Fantasy representa lo que significa ser un héroe: cómo el peso de tantas responsabilidades puede hacer que caigas una y otra vez… y aun así, sigas. Es una obra que disfraza las despedidas más dolorosas con ternura, que viste de amor las pérdidas inevitables.</p>
                    <p>Es una belleza fugaz, tejida con amor, guerra, pérdida y, sobre todo, búsqueda de identidad. Llena de personajes tan profundamente humanos, que, aunque no existan en nuestro mundo, logran despertar una empatía que atraviesa la pantalla. Porque a veces, la fantasía se parece demasiado a la realidad. Y nos recuerda que los finales no siempre son felices… pero sí profundamente humanos.</p>
                    
                    <div>
                        <p class="espacio">
                            <strong class="negrita9">OPINIÓN PERSONAL:</strong> El diseño de personajes es ciertamente lo mas atractivo a primera vista, pero es la historia la que te engancha conforme se van desarrollando lo hechos. Si bien todas sus entregas no son perfectas, es la esencia que perdura la que hace de Final Fantasy una saga entrañable. Si me preguntas la verdad es que la recomiendo de forma asegurada, ya sea que solo desees conocer su historia o  experimentar la vivencia jugable; puesto que de ambas formas tus ojos se abrirán ante un nuevo mundo completamente interesante.
                        </p>
                    </div>
                </div>
            </div>

            <div class="texto2">
                <h3>INFORMACIÓN ADICIONAL</h3>
            </div>

            <div>
                <a class="enlace" href="https://jfkastro.wordpress.com/2024/06/20/merece-la-pena-hoy-en-dia-jugar-al-final-fantasy-vii-original-resenas-rpg/" target="_blank">Leer Más...</a>

            </div>
        </section>
    </main>

    <footer>
        <h6>@Aagudelo Todos los derechos reservados</h6>
    </footer>
</body>
</html>