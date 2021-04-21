<?php 
    require 'includes/funciones.php';    
    incluirTemplate('header'); 
?>

    <main class="contenedor">
        <h1>Conoce sobre Nosotros</h1>
        <div class="contenido-nosotros">
            <div class="imagen">
                <picture>
                    <source srcset="build/img/nosotros.webp" type="image/webp">
                    <source srcset="build/img/nosotros.jpg" type="image/jpg">
                    <img  loading="lazy" src="build/img/nosotros.jpg" alt="imagen nosotros">

                </picture>
            </div>
            <div class="texto-nosotros">
                <blockquote>25 Años de Experiencia</blockquote>
                <p>
                    Front End es la parte de una aplicación que interactúa con los usuarios, es conocida como el lado del cliente. Básicamente es todo lo que vemos en la pantalla cuando accedemos a un sitio web o aplicación: tipos de letra, colores, adaptación para distintas pantallas(RWD), los efectos del ratón, teclado, movimientos, desplazamientos, efectos visuales… y otros elementos que permiten navegar dentro de una página web. Este conjunto crea la experiencia del usuario.
    
    Como hemos dicho, el desarrollador front end se encarga de la experiencia del usuario, es decir
    
                </p>
                <p>
                    Después de haber explicado un poco sobre cada una de las fases de una programación de aplicación web y saber qué diferencias hay entre ellas, podemos decir que aunque abarquen distintos aspectos dentro de una programación, las dos son completamente necesarias para el correcto funcionamiento de esta.
    
    Estas son solo unas de las múltiples facetas que podemos encontrar a la hora de crear una aplicación web, existen otras muchas que de igual forma pueden ayudarnos en su desarrollo.
                </p>
            </div>
            
        </div>
    </main>
    <section class="contenedor seccion">
        <h1>Mas sobre Nosotros</h1>

        <div class="iconos-nosotros">
            <div class="icono">
                <img src="build/img/icono1.svg" alt="icono seguridad" loading="lazy">
                <h3>Seguridad</h3>
                <p>
                    Una pequeña fuga de datos ya puede desembocar en 
                    consecuencias muy graves para las empresas, como, 
                    por ejemplo, pérdidas de ventas, daños en la reputación, 
                    o denuncias. Muchos negocios, especialmente las tiendas 
                    online, gozan de la confianza de los clientes
                </p>
            </div>

            <div class="icono">
                <img src="build/img/icono2.svg" alt="icono precio" loading="lazy">
                <h3>Precio</h3>
                <p>
                    Una pequeña fuga de datos ya puede desembocar en 
                    consecuencias muy graves para las empresas, como, 
                    por ejemplo, pérdidas de ventas, daños en la reputación, 
                    o denuncias. Muchos negocios, especialmente las tiendas 
                    online, gozan de la confianza de los clientes
                </p>
            </div>

            <div class="icono">
                <img src="build/img/icono3.svg" alt="icono tiempo" loading="lazy">
                <h3>A Tiempo</h3>
                <p>
                    Una pequeña fuga de datos ya puede desembocar en 
                    consecuencias muy graves para las empresas, como, 
                    por ejemplo, pérdidas de ventas, daños en la reputación, 
                    o denuncias. Muchos negocios, especialmente las tiendas 
                    online, gozan de la confianza de los clientes
                </p>
            </div>

            
        </div>
    </section>
    
    <?php 
        incluirTemplate('footer');
    ?>