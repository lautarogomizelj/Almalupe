<?php 
    include 'db.php';
    include 'Backend/mail_contacto.php';

    session_start();

    $pagina_actual = "contacto_php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Almalupe | Contacto</title>

    <link rel="shortcut icon" href="Assets/logoWeb.png">

    <link rel="stylesheet" href="Templates/CSS/template_nav.css">
    <link rel="stylesheet" href="Templates/CSS/template_footer.css">
    
    <link rel="stylesheet" href="CSS/main.css">
    <link rel="stylesheet" href="CSS/contacto.css">
    <link rel="stylesheet" href="CSS/responsive.css">
    
   
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://kit.fontawesome.com/1ff8ebd91d.js"></script>
</head>
<body>
    <header>    
        <?php include 'Templates/nav.php'; ?>
    </header>

    <div class="barra"></div>

    <section>
        <article>
            <!-- <h1>¿Como podemos ayudarte?</h1> -->

            <div class="contenedor-ayuda">
                <div class="columna1">
                    <div class="row-1">
                        <i class="fas fa-map-marker-alt"></i>
                        <span>Pedro Moran 2649, CABA</span>
                    </div>
                    <div class="row-2">
                        <i class="fas fa-phone-alt"></i>
                        <span>15 4427 9069</span>
                    </div>
                    <div class="row-3">
                        <i class="far fa-envelope"></i>
                        <span>lautigomi@gmail.com</span>
                    </div>

                    <div class="barra-1"></div>

                    <div class="row-4">
                        <a href="#" class="fa fa-facebook"></a>
                        <a href="#" class="fa fa-instagram"></a>
                        <a href="#" class="fa fa-whatsapp"></a>
                    </div>
                </div>

                

                <div class="columna2">
                    <div class="row1">
                        <span>Contactate con nosotros</span>
                    </div>

                    <form method="POST">
                        <input type="text" name="nombre" placeholder="Tu nombre">
                        <input type="text" name="email" placeholder="Tu email">
                        <textarea name="mensaje" placeholder="Mensaje"></textarea>

                        <div class="row2">
                            <button type="submit" name="enviar">Enviar</button>
                        </div>
                    </form>

                    
                </div>
            </div>
        </article>
    </section>

    <h1 style="color: blue"> <?php echo $texto1; ?> </h1>
 
    <footer>
        <?php include 'Templates/footer.php'; ?>
    </footer>

<script src="Backend/Scripts/animaciones_index.js"></script>

</body>
</html>