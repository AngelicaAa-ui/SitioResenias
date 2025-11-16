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
    <title>Reseñas de Películas</title>
</head>
<body>
    <header>
        <img src="../imagenes/logo_paginapeliculas.png" alt="Logo de la Página Reseñas de Películas">
        <div>
            <h1>Reseñas de Películas</h1>
            <p class="p">Cine que emociona, series que atrapan</p>
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

    <div class="animación2">
        <img src="../imagenes/gif_peliculas.gif" alt="animación3">
    </div>

    <main>
        <section>
            <div class="contenedor4">
                <div class="slide4">
                    <ul>
                        <li><img src="../imagenes/pelicula1.jpg" alt="Imagen Película1: Vampire Hunter D Bloodlust"></li>
                        <li><img src="../imagenes/pelicula1imagen2.jpg" alt="Imagen2 Película1"></li>
                        <li><img src="../imagenes/pelicula1imagen3.jpg" alt="Imagen3 Película1"></li>
                        <li><img src="../imagenes/pelicula1imagen4.jpg" alt="Imagen4 Película1"></li>
                        <li><img src="../imagenes/pelicula1imagen5.jpg" alt="Imagen5 Película1"></li>
                    </ul>
                </div>
                <div>
                    <h2>Vampire Hunter D: Bloodlust</h2>
                    <p>Ambientada en un mundo postapocalíptico donde la humanidad no ha sido la única especie en habitar la Tierra, Vampire Hunter nos transporta a una época en la que humanos y vampiros coexistieron... aunque no en armonía. Si eres amante de la animación gótica y los personajes con pasados complejos, esta obra es para ti.</p>
                    <p>En esta entrega seguimos una nueva misión de nuestro enigmático protagonista, D, un cazador mitad humano, mitad vampiro, encargado de encontrar a la hija desaparecida de un acaudalado hombre. En su travesía, D se cruza con una pandilla peculiar y, por primera vez, conoce a alguien que podría llegar a considerar un amigo.</p>
                    <p>La película está cargada de una melancolía palpable, con una narrativa que atraviesa la pantalla y cala hondo en el espectador. La atmósfera, el arte y la historia se combinan para ofrecer una experiencia emocional que te hace sentir como si estuvieras viviendo cada escena en carne propia.</p>

                    <div>
                        <p class="espacio">
                            <strong class="negrita4">OPINIÓN PERSONAL:</strong> Es una película super emocionante y no lo digo desde el punto de vista de una fanática de la narración oscura y los toques vampíricos. Los personajes son supremamente interesantes, tienen buenos fundamentos y están bien planteados. Esta historia ciertamente supero las expectativas; el universo que han construido alrededor de Vampire Hunter es tan interesante que incluso te incita a querer leer las novelas ligeras. Desde el fondo de mi corazón esta obra tiene un 10/10.
                        </p>
                    </div>
                </div>
            </div>

            <div class="texto2">
                <h3>INFORMACIÓN ADICIONAL</h3>
            </div>

            <div>
                <a class="enlace" href="https://vampirehunterd.fandom.com/es/wiki/Vampire_Hunter_D:_Bloodlust" target="_blank">Leer Más...</a>
            </div>

            <div class="contenedor5">
                <div class="slide5">
                    <ul>
                        <li><img src="../imagenes/pelicula2.webp" alt="Imagen Película2: Violet Evergarden The Movie"></li>
                        <li><img src="../imagenes/pelicula2imagen2.jpg" alt="Imagen2 Película2"></li>
                        <li><img src="../imagenes/pelicula2imagen3.jpg" alt="Imagen3 Película2"></li>
                        <li><img src="../imagenes/pelicula2imagen4.jpg" alt="Imagen4 Película2"></li>
                        <li><img src="../imagenes/pelicula2imagen5.jpg" alt="Imagen5 Película2"></li>
                    </ul>
                </div>
                <div>
                    <h2>Violet Evergarden: The Movie</h2>
                    <p>Una civilización que intenta sanar tras la guerra. Una joven que busca comprender el verdadero significado de la palabra amor. Así comienza la historia de Violet, una Auto Memory Doll: escribas encargadas de transformar los sentimientos más profundos en palabras, sin importar el lugar ni la persona.</p>
                    <p>Esta película sirve como cierre a la aclamada franquicia de Violet Evergarden, y lo hace de manera magistral. Su diseño visual es deslumbrante, la narración está cuidadosamente construida y la historia en conjunto es un viaje emocional que, sin exagerar, puede hacerte llorar durante dos horas seguidas.</p>
                    <p>Más allá de un relato de autodescubrimiento, esta obra nos recuerda cómo, en el proceso de sanar nuestras propias heridas, también podemos tocar el corazón de otros... a veces con solo unas pocas palabras escritas en una carta.</p>

                    <div>
                        <p class="espacio">
                            <strong class="negrita5">OPINIÓN PERSONAL:</strong> Esta película es todo un viaje, en un momento estas contemplando la belleza de los reencuentros y al otro estas derramando un sinfín de lágrimas. Es tan hermosa la forma en la que se abordo todos los escenarios que sientes como si te arrancaran un pedacito de corazón en cada escena, siendo un mundo de historias que te dan un fuerte acercamiento a las distintas realidades que se pueden llegar a presentar en la vida. A todas aquellas personas que gozan de buenas obras con las que pueden “sufrir felizmente”, les invito a darle la oportunidad a esta entrega puesto que no se arrepentirán.
                        </p>
                    </div>
                </div>  
            </div>

            <div class="texto2">
                <h3>INFORMACIÓN ADICIONAL</h3>
            </div>

            <div>
                <a class="enlace" href="https://ramenparados.com/critica-violet-evergarden-la-pelicula/" target="_blank">Leer Más...</a>
            </div>

            <div class="contenedor6">
                <div class="slide6">
                    <ul>
                        <li><img src="../imagenes/pelicula3.jpg" alt="Imagen Película3: Aloscence of Utena"></li>
                        <li><img src="../imagenes/pelicula3imagen2.webp" alt="Imagen2 Película3"></li>
                        <li><img src="../imagenes/pelicula3imagen3.jpg" alt="Imagen3 Película3"></li>
                        <li><img src="../imagenes/pelicula3imagen4.jpg" alt="Imagen4 Película3"></li>
                        <li><img src="../imagenes/pelicula3imagen5.jpg" alt="Imagen5 Película3"></li>
                    </ul>
                </div>
                <div>
                    <h2>Adolescence of Utena: The Movie</h2>
                    <p>¿Es esto la realidad… o solo un reflejo de nuestra confusión interior? Adolescence of Utena es una de esas películas que te dejan pensando durante horas, incluso días, después de verla. Con un estilo visual profundamente simbólico y envolvente, esta obra requiere atención plena: cada escena, cada color, cada gesto tiene un significado que no querrás pasar por alto.</p>
                    <p>La película se adentra en las guerras interiores, en cómo nuestros deseos más profundos pueden convertirse en las cadenas que nos atan a nuestras circunstancias. Y, al mismo tiempo, plantea que solo alguien verdaderamente especial puede ayudarnos a romper con todo eso… y así concedernos el poder de revolucionar el mundo.</p>
                    
                    <div>
                        <p class="espacio">
                            <strong class="negrita6">OPINIÓN PERSONAL:</strong> Seré sincera, en un principio mi primera impresión fue: ¿Qué esta pasando aquí? Pero luego de verla lo que pensé inmediatamente fue: Wow, tengo que repetir esto. Es una obra tan visual que no te aburres en ningún momento y si bien hay partes en donde la continuidad es algo desordenada, creo que eso es lo que le da esencia. Es un relato que te da un mensaje a partir de hechos fantásticos y no es pesada de entender dándonos así una historia hermosa, con personajes inolvidables. Sin embargo, para aquellos que buscan más respuestas les recomiendo apoyarse en el manga.
                        </p>
                    </div>
                </div>
            </div>

            <div class="texto2">
                <h3>INFORMACIÓN ADICIONAL</h3>
            </div>

            <div>
                <a class="enlace" href="https://ramenparados.com/critica-utena-la-chica-revolucionaria-apocalipsis-adolescente/" target="_blank">Leer Más...</a>
            </div>
        </section>
    </main>

    <footer>
        <h6>@Aagudelo Todos los derechos reservados</h6>
    </footer>
</body>
</html>