<?php 
    include 'db.php';
    session_start();
    $pagina_actual = "index_php";
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Almalupe | Inicio</title>
    
    <link rel="shortcut icon" href="Assets/logoWeb.png">
    
    <link rel="stylesheet" href="Templates/CSS/template_nav.css">
    <link rel="stylesheet" href="Templates/CSS/template_producto.css">
    <link rel="stylesheet" href="Templates/CSS/template_footer.css">

    <link rel="stylesheet" href="CSS/main.css">
    <link rel="stylesheet" href="CSS/responsive.css">
    
    <!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> -->
    <script src="https://kit.fontawesome.com/1ff8ebd91d.js"></script>
</head>
<body>

    <!---------------------Arranca menu--------------------->
    
    
    <header>
        <?php include 'Templates/nav.php'; ?>
    </header>
    <!---------------------Termina menu--------------------->

    <!---------------------Empieza slider--------------------->

    <section>
        <article>
            <div class="slider">
                <ul>
                    <li>
                        <img src="Assets/80.jpg" alt="Image 1">
                    </li>

                    <li>
                        <img src="Assets/80.jpg" alt="Image 2">
                    </li>
                    
                    <li>
                        <img src="Assets/80.jpg" alt="Image 3">
                    </li>
                    
                    <li>
                        <img src="Assets/80.jpg" alt="Image 3">
                    </li>
                </ul>
            </div>
        </article>
        
        <!---------------------Termina slider--------------------->

        <article>
            <div class="barra"></div>
            
            <div class="contenedor-texto">
                <h1 class="titulo-texto"> 
                    Destacado
                </h1>   
            </div>
                
            <!----------Arranca imagenes de productos-----------> 

            <div class="contenedor-grid">
                    <div class="contenedor-productos">
                        <div class="parte-arriba">
                            <img src="Assets/cartera1.jpg" alt="">
                        </div>
            
                        <div class="parte-abajo">
                            <div class="row-1">
                                <span>Accesorios, Cartera</span>
                            </div>
            
                            <div class="row-2">
                                <span>Cartera de Cuero</span>
                            </div>
            
                            <div class="row-3">
                                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, possimus nostrum!</span>
                            </div>
            
                            <div class="row-4"></div>
            
                            <div class="row-5">
                                <span>$2500</span>
            
                                <div class="iconos">
                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="contenedor-productos">
                        <div class="parte-arriba">
                            <img src="Assets/cartera1.jpg" alt="">
                        </div>
            
                        <div class="parte-abajo">
                            <div class="row-1">
                                <span>Accesorios, Cartera</span>
                            </div>
            
                            <div class="row-2">
                                <span>Cartera de Cuero</span>
                            </div>
            
                            <div class="row-3">
                                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, possimus nostrum!</span>
                            </div>
            
                            <div class="row-4"></div>
            
                            <div class="row-5">
                                <span>$2500</span>
            
                                <div class="iconos">
                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="contenedor-productos">
                        <div class="parte-arriba">
                            <img src="Assets/cartera1.jpg" alt="">
                        </div>
            
                        <div class="parte-abajo">
                            <div class="row-1">
                                <span>Accesorios, Cartera</span>
                            </div>
            
                            <div class="row-2">
                                <span>Cartera de Cuero</span>
                            </div>
            
                            <div class="row-3">
                                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, possimus nostrum!</span>
                            </div>
            
                            <div class="row-4"></div>
            
                            <div class="row-5">
                                <span>$2500</span>
            
                                <div class="iconos">
                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
            
                    <div class="contenedor-productos">
                        <div class="parte-arriba">
                            <img src="Assets/cartera1.jpg" alt="">
                        </div>
            
                        <div class="parte-abajo">
                            <div class="row-1">
                                <span>Accesorios, Cartera</span>
                            </div>
            
                            <div class="row-2">
                                <span>Cartera de Cuero</span>
                            </div>
            
                            <div class="row-3">
                                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, possimus nostrum!</span>
                            </div>
            
                            <div class="row-4"></div>
            
                            <div class="row-5">
                                <span>$2500</span>
            
                                <div class="iconos">
                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="contenedor-productos">
                        <div class="parte-arriba">
                            <img src="Assets/cartera1.jpg" alt="">
                        </div>
            
                        <div class="parte-abajo">
                            <div class="row-1">
                                <span>Accesorios, Cartera</span>
                            </div>
            
                            <div class="row-2">
                                <span>Cartera de Cuero</span>
                            </div>
            
                            <div class="row-3">
                                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, possimus nostrum!</span>
                            </div>
            
                            <div class="row-4"></div>
            
                            <div class="row-5">
                                <span>$2500</span>
            
                                <div class="iconos">
                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="contenedor-productos">
                        <div class="parte-arriba">
                            <img src="Assets/cartera1.jpg" alt="">
                        </div>
            
                        <div class="parte-abajo">
                            <div class="row-1">
                                <span>Accesorios, Cartera</span>
                            </div>
            
                            <div class="row-2">
                                <span>Cartera de Cuero</span>
                            </div>
            
                            <div class="row-3">
                                <span>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vero, possimus nostrum!</span>
                            </div>
            
                            <div class="row-4"></div>
            
                            <div class="row-5">
                                <span>$2500</span>
            
                                <div class="iconos">
                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>

            <!----------Termina imagenes de productos-----------> 
        
            <div class="barra"></div>
        </article>
  
        <button id="myBtn" onclick="topFunction()" title="Go to top" style="display: none;">
            <i class="fas fa-arrow-up"></i>
        </button>
        <!----------Empieza publicidad-----------> 
        <article>
            <div class="contenedor-publicidad">
                <h1 id="titulo-1">¡Seguinos en nuestras redes!</h1>
                
                <div class="contenedor-iconos">
                    <a href="#" class="fa fa-facebook"></a>
                    <a href="#" class="fa fa-instagram"></a>
                    <a href="#" class="fa fa-whatsapp"></a>
                </div>
            </div>
        </article>
        <!----------Termina publicidad-----------> 

    </section>

    <!----------Empieza parte final de pagina-----------> 

    <footer>
        <?php include 'Templates/footer.php'; ?>
    </footer>

    <!----------Termina parte final de pagina-----------> 
    
    <script src="Backend/Scripts/animaciones_index.js"></script>
    
</body>
</html>

