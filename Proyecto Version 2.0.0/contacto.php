<?php
    $paginaActual = "contacto.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://kit.fontawesome.com/1ff8ebd91d.js"></script>
    
    <link rel="stylesheet" href="CSS/config.css">

    <link rel="stylesheet" href="Templates/CSS/template_header.css">
    <link rel="stylesheet" href="Templates/CSS/template_header_responsive.css">

    <link rel="stylesheet" href="Templates/CSS/template_footer.css">


    <link rel="stylesheet" href="CSS/main.css">
    <link rel="stylesheet" href="CSS/contacto.css">

    <link rel="shortcut icon" href="Assets/logoWeb.png">

    <title>Almalupe - Contacto</title>
</head>
<body>
    
    <?php
        include 'Templates/PHP/template_header.php';
    ?>

    <div class="contenedorSubtitulo">
        <h3>¡Contactate con nosotros!</h3>
    </div>

    <div class="contenedorTotal">
        <div class="contenedorParte izquierda">
            <div class="contenido">
                <div class="row uno">
                    <a href="https://goo.gl/maps/3CRaHnQVn71ZdF7e7">
                        <i class="fa fa-map-marker" aria-hidden="true"></i>
                        <span>Juan B Alberdi 4183, Villa Ballester</span>
                    </a>
                </div>
                <div class="row dos">
                    <a href="https://wa.me/5491144279069">
                        <i class="fa fa-whatsapp" aria-hidden="true"></i>
                        <span>+5491156933407</span>
                    </a>
                </div>
                <div class="row tres">
                    <a href="mailto:almalupe2023@gmail.com">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        <span>almalupe2023@gmail.com</span>
                    </a>
                </div>
            </div>
        </div>

        <div class="contenedorParte derecha">
            <form action="" method="POST">
                <input type="text" name="nombre" placeholder="Tu nombre">
                <input type="text" name="email" placeholder="Tu email">
                <textarea name="mensaje" placeholder="Mensaje"></textarea>

                <button class="btnVerMasProductos">
                    <a href="productos.php">
                        Enviar
                    </a>
                </button>
            </form>
        </div>
    </div>


    <?php
        include 'Templates/PHP/template_footer.php';
    ?>


    <script src="Backend/JS/app.js"></script>
    <script src="Backend/JS/animacionesIndex.js"></script>

</body>
</html>