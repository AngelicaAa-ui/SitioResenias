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
    <title>Reseñas de Libros</title>
</head>
<body>
    <header>
        <img src="../imagenes/logo_paginalibros.png" alt="Logo de la Página Reseñas de Libros">
        <div>
            <h1>Reseñas de Libros</h1>
            <p class="p">Historias que marcan, inspiran y te acompañan</p>
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
    
    <div class="animación">
        <img src="../imagenes/gif_libros.gif" alt="animación2">
    </div>

    <main>
        <section>
            <div class="contenedor1">
                <div class="slide">
                    <ul>
                        <li><img src="../imagenes/libro1.jpg" alt="Portada Libro1: Lector Omnisciente"></li>
                        <li><img src="../imagenes/libro1portada2.jpg" alt="Segunda Portada Libro1"></li>
                        <li><img src="../imagenes/libro1portada3.jpg" alt="Tercera Portada Libro1"></li>
                        <li><img src="../imagenes/libro1portada4.jpg" alt="Cuarta Portada Libro1"></li>
                        <li><img src="../imagenes/libro1portada5.jpg" alt="Quinta Portada Libro1"></li>
                    </ul>                 
                </div>              
                <div>
                    <h2>Lector Omnisciente (Novela)</h2>
                    <p>Un mundo donde la fantasía se fusiona con la realidad: así es como podemos describir, en un primer vistazo, esta fascinante obra. Llena de suspenso, supervivencia, caos y, sobre todo, momentos que harán que incluso el hombre más duro suelte algunas lágrimas. Todo esto nos sumerge en una historia tan intensa como inolvidable.
                    <p>Nos remontamos a un mundo aparentemente normal, sin elementos extraordinarios. Allí conocemos a Dokja, un joven común que lucha día a día por salir adelante. Su vida carece de grandes aspiraciones, salvo una: seguir fielmente una novela titulada "Tres maneras de sobrevivir al apocalipsis". De la cual, durante casi diez años, Dokja ha sido su único lector aferrado a cada capítulo como si su vida dependiera de ello. Lo que parece una premisa sencilla da un giro inesperado cuando la humanidad entera se ve amenazada por criaturas aterradoras que desatan masacres sin piedad. Todo esto ocurre como parte de un retorcido espectáculo universal, presenciado por entidades divinas de otros mundos. En medio del caos, Dokja es el único que, gracias a su conocimiento de la novela (que ahora ha pasado a suceder en realidad), sabe lo que está por venir.</p>   
                    <p>Cada personaje en esta historia cuenta con un desarrollo profundo y matices únicos. La narrativa está repleta de giros impredecibles y momentos que te dejarán sin aliento. Incluyendo un arte visual que eleva la experiencia, haciendo de esta lectura una travesía inolvidable.</p>
                    
                    <div>
                        <p class="espacio">
                            <strong class="negrita1">OPINIÓN PERSONAL:</strong> Una gran obra, simplemente no se puede describir con palabras la cantidad de emociones que llegan a cruzar por tu mente con los distintos escenarios y giros argumentales. Desde el fondo de mi corazón la recomiendo con entusiasmo, especialmente a aquellas personas que aman las emociones intensas.
                        </p>
                    </div>
                </div> 
            </div> 

            <div class="texto2">
                <h3>INFORMACIÓN ADICIONAL</h3>
            </div>
            
            <div>
                <a class="enlace" href="https://gonkbonk.com/articles/omniscient-readers-viewpoint-vol-1-review" target="_blank">Leer Más...</a>
            </div>
            
            <div class="contenedor2">
                <div class="slide2">
                    <ul>
                        <li><img src="../imagenes/libro2.jpg" alt="Portada Libro2: La Bendición del Oficial del Cielo"></li>
                        <li><img src="../imagenes/libro2portada2.png" alt="Segunda Portada Libro2"></li>
                        <li><img src="../imagenes/libro2portada3.jpg" alt="Tercera Portada Libro2"></li>
                        <li><img src="../imagenes/libro2portada4.jpg" alt="Cuarta Portada Libro2"></li>
                        <li><img src="../imagenes/libro2portada5.jpg" alt="Quinta Portada Libro2"></li>
                    </ul>
                </div>
                <div>
                    <h2>La Bendición del Oficial del Cielo (Novela)</h2>
                    <p>Si el amor nació en algún lugar, definitivamente fue en esta novela. Es una de esas obras que te hacen enamorarte poco a poco, junto a sus protagonistas, en un mundo donde incluso el más leve aleteo de una mariposa posee un significado mucho más valioso.</p>
                    <p>Xie Lian es el príncipe heredero de una nación caída hace mucho tiempo. Marginado y desprestigiado, arrastra la fama de traer mala suerte a todos los que se cruzan en su camino, incluso a él mismo. Pero Xie Lian no es un ser humano común: puesto que es un dios que, contra todo pronóstico, ha logrado ascender por tercera vez a la corte celestial. Un hecho que ni él mismo esperaba, y que lo llevará a descubrir el verdadero significado de la felicidad.</p>
                    <p>Esta novela está llena de aventuras, romance, toques de comedia y una traición inesperada. Mezcla a la perfección la acción con un romance progresivo que, más allá de ser emocionante, es de aquellos que le dan calidez al corazón.</p>
                    
                    <div>
                        <p class="espacio">
                            <strong class="negrita2">OPINIÓN PERSONAL:</strong> Un libro que me conmovió hasta las lágrimas, en especial su ultima entrega. Debido a la forma tan hermosa en la que se plasmó el amor entre los protagonistas, es decir, si ya se pensaba que ambos sentían un cariño intenso el uno por el otro definitivamente la trayectoria final es como una cachetada de amor en la cara. Solo puedo describirlo como una experiencia maravillosa, un género de literatura en el que empiezas y sabes que ya no habrá vuelta atrás.
                        </p>
                    </div>
                </div>
            </div>

            <div class="texto2">
                <h3>INFORMACIÓN ADICIONAL</h3>
            </div>

            <div>
                <a class="enlace" href="https://www.neapoulain.com/2021/08/tian-guan-ci-fu-mo-xiang-tong-xiu-resena.html" target="_blank">Leer Más...</a>
            </div>

            <div class="contenedor3">
                <div class="slide3">
                    <ul>
                        <li><img src="../imagenes/libro3.jpg" alt="Portada Libro3: El Maestro de la Cultivación Demoniaca"></li>
                        <li><img src="../imagenes/libro3portada2.png" alt="Segunda Portada Libro3"></li>
                        <li><img src="../imagenes/libro3portada3.jpg" alt="Tercera Portada Libro3"></li>
                        <li><img src="../imagenes/libro3portada4.jpg" alt="Cuarta Portada Libro3"></li>
                        <li><img src="../imagenes/libro3portada5.jpg" alt="Quinta Portada Libro3"></li>
                    </ul>
                </div>
                <div>
                    <h2>El Maestro de la Cultivación Demoniaca (Novela)</h2>
                    <p>¿Hasta dónde estarías dispuesto a llegar para proteger aquello que realmente amas? Aunque esta novela se desarrolla en un mundo lleno de acción y aventuras, es mucho más que eso puesto que si te detienes a observar las decisiones de cada personaje, descubrirás un mensaje profundo que atraviesa toda la historia.
                    <p>Es un libro que, en palabras simples, “pega muy fuerte”. A lo largo del relato, se nos muestra cómo, incluso amando con todo el corazón, a veces hay que dejar ir aquello que más se quiere por un bien mayor. Wei Wuxian lo vivió en carne propia: perdió a su familia tres veces, y cargó con el estigma de ser un hombre malvado que caminaba por el sendero de la herejía, finalizando su vida con un destino que lo llevó a una muerte tan dolorosa como solitaria.
                    <p>Pero no te dejes engañar por esa primera impresión, porque el final… es solo el comienzo. A partir de ahí, la historia florece con diálogos que te sacan una sonrisa, te dejan sin aliento o te hacen replantearte todo lo que creías saber. Mo Dao Zu Shi (El maestro de la cultivación demoníaca) no es solo un libro: es una experiencia que, llena de giros argumentales brillantes, te deja al final con la sensación de que cada detalle, por pequeño que parezca, fue planeado desde el principio.</p>
                    
                    <div>
                        <p class="espacio">
                            <strong class="negrita3">OPINIÓN PERSONAL:</strong> Es de esos libros en los que no es necesario un beso o una muestra de amor físico para percibir el amor inherente, de verdad es tan conmovedor que de un momento a otro puedes simplemente estar recordando alguna escena y emocionarte tanto que las lagrimas corren por si solas. Desde mi experiencia la parte más fuerte es como se aborda los temas relacionados a la guerra y las consecuencias de esta, ciertamente te de mucho que pensar. Recomendado para los fanáticos de un romance de época con toques de acción.
                        </p>
                    </div>
                </div>
            </div>

            <div class="texto2">
                <h3>INFORMACIÓN ADICIONAL</h3>
            </div>

            <div>
                <a class="enlace" href="https://ramenparados.com/resena-grandmaster-of-demonic-cultivation/" target="_blank">Leer Más...</a>
            </div>
        </section>
    </main>

    <footer>
        <h6>@Aagudelo Todos los derechos reservados</h6>
    </footer>
</body>
</html>