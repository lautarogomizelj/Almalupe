<div class="infoEnvios">
    <p>Ventas minoristas / Envíos a todo el país / Hasta 12 cuotas</p>
</div>

<div class="infoEnvios1">
    <span class="uno">
        Ventas minoristas
    </span>
    <span class="dos">
        Envíos a todo el país
    </span>
    <span class="tres">
        Hasta 12 cuotas
    </span>
</div>

<div class="contenedorDetalleCarrito">
    <div class="row-1">
        <h2>Carrito de Compra</h2>
        <button id="botonCerrar">cerrar</button>

    </div>

</div>

<div class="contenedor">    
    <div class="seccion arriba">    
        <?php 
            if (!isset($_SESSION['username']))
            {
        ?>
                <div class="contenedorSesion opciones">
                    <div class="izq">
                        <a href="Pages/login.php">
                            <span>Iniciar Sesion</span>
                        </a>
                    </div>

                    <div class="der">
                        <a href="Pages/signup.php">
                            <span>Registrate</span>
                        </a>
                    </div>
                </div>
        <?php
            }
            else
            {
                $usuario = $_SESSION['username'];
        ?>
                <div class="contenedorSesion login">

                    <div class="usuario">
                        <a href="" class="titulo_usuario">
                            <span> <?php echo $usuario; ?> </span>
                        </a>

                        <div class="sub-menu">
                            <div class="dropdownItem">
                                <a href="" class="">
                                    <span>Mi cuenta</span>
                                </a>
                            </div>

                                
                            <div class="dropdownItem">
                                <a href="Backend/PHP/cerrarSesion.php">
                                    <span>Cerrar Sesion</span>
                                </a>
                            </div>


                            <?php 
                                if ($_SESSION['rol_id'] == 5){
                            ?>

                            <div class="dropdownItem">
                                <a href="Admin/lista_productos.php">
                                    <span>cosa de admin</span>
                                </a>
                            </div>

                            <?php
                                }
                            ?>
                        </div>
                    </div>

                </div>
            
                <!-- <a href="Backend/PHP/cerrarSesion.php">Cerrar Sesion</a> -->
        <?php
            }
        ?>
        
        
        <!-- <div class="nombreMariana">
            <h3>by Mariana Paniagua</h3>
        </div> -->
         
        <div id="carrito" class="contenedorCarrito computer">
            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
            
            <div class="contenedorInformacionCarrito">
                <span>0</span>
                <span>-</span>
                <span>$0,00</span>
            </div>

            
        </div>
    </div>
    
    <div class="seccion medio">
        <div class="contenedorTitulo">
            <div class="titulo">
                <h1>A lmalupe</h1>
                <div class="formaCirculo"></div>
            </div>
            
            <div class="subtitulo">
                <p>Tienda de ropa</p>
            </div>
        </div>
        
        <form action="" method="POST">
            <div class="contenedorBuscador">
                <input type="text" placeholder="Buscá entre tantos productos...">
                
                <button type="submit" class="icon">
                    <i id="busqueda" type="submit" class="fas fa-search"></i>
                </button>
            </div>
        </form>
    </div>
    
    <div class="seccion abajo">
        <!-- computer's view -->
        <div id="logoAlmalupe">
            <h1>A</h1>
        </div>
        
        <ul class="nav-links">
            <li class="li_navLinks"> <a href="index.php" <?php if ($paginaActual == "index.php"){ ?> class="subtituloActivo" <?php } ?> ><h2>Inicio</h2> </a> </li>
            <li class="li_navLinks"> 
                <a href="productos.php" <?php if ($paginaActual == "productos.php"){ ?> class="subtituloActivo" <?php } ?> > <h2>Productos</h2> </a> 
                <div class="sub-menu">
                    <div class="dropdownItem">
                        <a href="uno.php"> <h2>Idumentaria</h2> </a>
                        
                        <div class="subsub-menu">
                            <div class="dropdownItem2"><a href="s.php">    <h2>Sale</h2>        </a></div>
                            <div class="dropdownItem2"><a href="dos.php">    <h2>Remeras</h2>     </a></div>
                            <div class="dropdownItem2"><a href="dos.php">    <h2>Camperas</h2>     </a></div>
                            <div class="dropdownItem2"><a href="dos.php">    <h2>Pantalones</h2>     </a></div>
                        </div>

                    </div>
                    <div class="dropdownItem"><a href="dos.php">    <h2>Calzado</h2>        </a></div>
                    <div class="dropdownItem"><a href="tres.php">   <h2>Accesorios</h2>     </a></div>
                    <div class="dropdownItem"><a href="cuatro.php"> <h2>Vestidos</h2>       </a></div>
                    <div class="dropdownItem"><a href="cuatro.php"> <h2>Poleron</h2>        </a></div>
                    <div class="dropdownItem"><a href="cuatro.php"> <h2>Sacos abiertos</h2> </a></div>
                    <div class="dropdownItem"><a href="cuatro.php"> <h2>Enteritos</h2>      </a></div>
                </div>
            </li>
            <li class="li_navLinks"> <a href="comoComprar.php" <?php if ($paginaActual == "comoComprar.php"){ ?> class="subtituloActivo" <?php } ?> > <h2>Como comprar</h2> </a> </li>
            <li class="li_navLinks"> <a href="contacto.php" <?php if ($paginaActual == "contacto.php"){ ?> class="subtituloActivo" <?php } ?> > <h2>Contacto</h2> </a> </li>                
        </ul>
        
        <!-- mobile view -->
        
        <div class="contenedorMenuOpciones">
            <div class="sub izquierda">
                <div class="menuIconoHamburguesa" id="btnMenuResponsive">
                    <div class="linea"></div>
                    <div class="linea"></div>
                    <div class="linea"></div>
                </div>
            </div>

            
            
            <div class="sub derecha">
                <form action="" method="POST">
                    <i class="fa fa-search" aria-hidden="true" id="iconoBusquedaCarrito"></i>

                    <input type="text" placeholder="Buscá productos...">

                    <i class="fa fa-times-circle-o" aria-hidden="true"></i>
                </form>


                

                <!-- <div class="iconoCarrito">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    <div class="contenedorInformacionCarrito">
                        <span>5</span>
                        <span>-</span>
                        <span>$8000,00</span>
                    </div>
                </div> -->

                <div id="carrito" class="contenedorCarrito mobile">
                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    
                    <div class="contenedorInformacionCarrito">
                        <span>0</span>
                        <span>-</span>
                        <span>$0,00</span>
                    </div>
                </div>



            </div>
        </div>
        
        <ul class="nav-links mobile" id="nav-links-mobile">
            <li class="li_navLinks"> <a href="index.php"> <h2>Inicio</h2> </a> </li>
            <li class="li_navLinks" id="dropdownMenu-responsive"> 
                <a> <h2>Productos</h2> </a> 
                <i class="fa fa-angle-left" aria-hidden="true"></i>

                <div class="responsiveSub-menu">
                    <div class="dropdownItem"><a href="dos.php">    <h2>Idumentaria</h2>        </a></div>
                    <div class="dropdownItem"><a href="dos.php">    <h2>Calzado</h2>        </a></div>
                    <div class="dropdownItem"><a href="dos.php">    <h2>Acccesorios</h2>        </a></div>

                </div>
            </li>
            <li class="li_navLinks"> <a href="comoComprar.php"> <h2>Como comprar</h2> </a> </li>
            <li class="li_navLinks"> <a href="contacto.php"> <h2>Contacto</h2> </a> </li>
        </ul>       
    </div>
</div>