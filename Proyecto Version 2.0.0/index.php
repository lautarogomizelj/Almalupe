<?php
    $paginaActual = "index.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://kit.fontawesome.com/1ff8ebd91d.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <link rel="stylesheet" href="CSS/config.css">
    <link rel="stylesheet" href="CSS/main.css">

    <link rel="stylesheet" href="Templates/CSS/template_popup.css">

    <link rel="stylesheet" href="Templates/CSS/template_header.css">
    <link rel="stylesheet" href="Templates/CSS/template_header_responsive.css">

    <link rel="stylesheet" href="Templates/CSS/template_producto.css">
    <link rel="stylesheet" href="Templates/CSS/template_producto_responsive.css">

    <!-- <link rel="stylesheet" href="Templates/CSS/template_header.css"> -->
    <link rel="stylesheet" href="Templates/CSS/template_footer.css">


    <title>Almalupe - Inicio</title>

</head>
<body>

    <header>
        <?php 
            include 'Templates/PHP/template_header.php';
        ?>
    </header>

    <?php
        include 'Templates/PHP/template_popup.php';
    ?>
    
    <section>
        <!-- <article>
            <div class="contenedorSubtitulo">
                <h2>Categorías destacadas</h2>
            </div>
        </article> -->


        <article>           
            <div class="contenedorSubtitulo">
                <h3>Productos destacados</h3>
            </div>
            
            <div class="contenedorGrid">
                <?php 
                    include 'Templates/PHP/template_producto.php';
                    include 'Templates/PHP/template_producto.php';
                    include 'Templates/PHP/template_producto.php';
                    include 'Templates/PHP/template_producto.php';
                    include 'Templates/PHP/template_producto.php';
                    include 'Templates/PHP/template_producto.php';
                ?>
            </div>
        </article>
        
        
        
        
        <button class="btnVerMasProductos">
            <a href="productos.php">
                Ver más productos
            </a>
        </button>



        <!----------Empieza publicidad-----------> 
        <article>
            <div class="contenedorSubtitulo">
                <h3>¡Seguinos en nuestras redes sociales!</h3>
            </div>

            <div class="contenedor-publicidad">
                <!-- <h3>¡Seguinos en nuestras redes!</h3> -->
                
                <div class="contenedor-iconos">
                    <a href="https://www.facebook.com/profile.php?id=100063544151286" class="fa fa-facebook"></a>
                    <a href="https://www.instagram.com/almalupee/" class="fa fa-instagram"></a>
                    <a href="https://wa.me/5491144279069" class="fa fa-whatsapp"></a>
                </div>
            </div>
        </article>
        <!----------Termina publicidad-----------> 
    
    </section>

    <footer>
        <div class="contenedorNewsletter">
            <form action="">
                <input type="text" placeholder="Tu e-mail">
                <button class="btnSubmit"></button>
            </form>
        </div>
    </footer>

    <?php
        include 'Templates/PHP/template_footer.php';
    ?>
    
    
    <script src="Backend/JS/app.js"></script>
    <script src="Backend/JS/animacionesIndex.js"></script>
</body>
</html>
