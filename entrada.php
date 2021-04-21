<?php 
    require 'includes/funciones.php';    
    incluirTemplate('header'); 
?>

    <main class="contenedor seccion contenido-centrado">
        <h1>Guia para la decoracion de tu hogar</h1>
       
        <picture>
            <source srcset="build/img/destacada2.webp" type="image/webp"> 
            <source srcset="build/img/destacada2.jpg" type="image/jpg"> 
            <img loading="lazy" src="build/img/destacada2.jpg" alt="imagen de la propiedad">
        </picture>
        <p class="informacion-meta">Escrito el <span>20/10/2021</span> por: <span>Admin</span></p>
        <div class="resumen-propiedad">
            

            <p>
                Como hemos dicho antes, Front end es todo con lo que el usuario se encuentra directamente en la web o aplicación, entonces cuando hablamos de “Back end” nos referimos al interior de las aplicaciones que viven en el servidor y al que a menudo se le denomina “el lado del servidor”.

El back end del sitio web consiste en un servidor, una aplicación y una base de datos. Se toman los datos, se procesa la información y se envía al usuario.  Los desarrolladores de Front end y Back end suelen trabajar juntos para que todo funcione correctamente.
            </p>


        </div>

    </main>
    
    <?php 
        incluirTemplate('footer');
    ?>