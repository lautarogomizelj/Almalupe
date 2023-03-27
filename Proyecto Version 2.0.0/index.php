<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://kit.fontawesome.com/1ff8ebd91d.js"></script>

    <link rel="stylesheet" href="config.css">

    <link rel="stylesheet" href="Templates/CSS/template_header.css">
    <link rel="stylesheet" href="Templates/CSS/template_header_responsive.css">

    <link rel="stylesheet" href="Templates/CSS/template_producto.css">
    <link rel="stylesheet" href="Templates/CSS/template_producto_responsive.css">

    <!-- <link rel="stylesheet" href="Templates/CSS/template_header.css"> -->

    <link rel="stylesheet" href="CSS/main.css">
    <link rel="stylesheet" href="responsive.css">

    <title>Almalupe</title>

</head>
<body>

    <?php 
        include 'Templates/PHP/template_header.php';
    ?>


    <!-- <div class="contenedorTituloDestacado">
        <h2>Destacado</h2>
    </div> -->
    
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

    

    
    <div class="btnVerMasProductos">
        <a href="">
            Ver más productos
        </a>
    </div>
    

    <footer>
        <div class="contenedorNewsletter">
            <form action="">
                <input type="text" placeholder="Tu e-mail">
                <button class="btnSubmit"></button>
            </form>
        </div>
    </footer>

    <script src="Backend/JS/app.js"></script>
    <script src="Backend/JS/animacionesIndex.js"></script>
</body>
</html>
