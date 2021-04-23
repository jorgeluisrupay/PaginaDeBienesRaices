<?php 

    if(!isset($_SESSION)){
        session_start();
    }
    //var_dump($_SESSION)  
    
    $auth = $_SESSION['login']?? false;
    ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienes Raices</title>
    <link rel="stylesheet" href="/build/css/app.css">
    
     <!-- Yandex.Metrika counter -->
<script type="text/javascript" >
   (function(m,e,t,r,i,k,a){m[i]=m[i]||function(){(m[i].a=m[i].a||[]).push(arguments)};
   m[i].l=1*new Date();k=e.createElement(t),a=e.getElementsByTagName(t)[0],k.async=1,k.src=r,a.parentNode.insertBefore(k,a)})
   (window, document, "script", "https://mc.yandex.ru/metrika/tag.js", "ym");

   ym(76449304, "init", {
        clickmap:true,
        trackLinks:true,
        accurateTrackBounce:true
   });
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/76449304" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->

</head>
<body>
    <header class="header <?php echo ($inicio)  ? 'inicio' : '' ?>">
        
        <div class="contenedor contenedor-header">
            <div class="barra">
                
                <a href="index.php">
                <img src="/build/img/logo.svg" alt="logotipo" >
                </a>
                <div class="mobile-menu">
                    <img src="/build/img/barras.svg" alt="icono menu responsive">
                </div>    

                <div class="derecha">
                   <img class="dark-mode-boton" src="/build/img/dark-mode.svg" alt="imagen dark"> 
                    <nav class="navegacion">
                        <a href="nosotros.php">Nosotros</a>
                        <a href="anuncios.php">Anuncios</a>
                        <a href="blog.php">Blog</a>
                        <a href="contacto.php">Contacto</a>
                        <?php if($auth) :  ?>
                         <a href="cerrar-sesion.php">Cerrar Sesion</a>
                        <?php endif;?>
                    </nav>
                </div>
            </div> <!--Cierre de la barra-->
      
        <?php  
            if($inicio){
                echo "<h1> Ventas de Casas y Departamento Exclusivos de Lujo</h1>";
            }
        ?>

        </div>
    </header>