<div class="infoEnvios">
        <p>Ventas minoristas / Envíos a todo el país / Hasta 12 cuotas</p>
    </div>
    
    <div class="contenedor">    
        <div class="seccion arriba">
            
            <div class="nombreMariana">
                <h3>by Mariana Paniagua</h3>
            </div>
            
            <div class="contenedorSesion">
                <div class="izq">
                    <a href="registrarProducto.php">
                        <h3>Iniciar Sesion</h3>
                    </a>
                </div>
                <!-- poner un guion como separador de los dos -->
                
                <div class="der">
                    <a href="">
                        <h3>Registrate</h3>
                    </a>
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
            
            <form action="">
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
                <li class="li_navLinks"> <a href="index.php"> <h2>Inicio</h2> </a> </li>
                <li class="li_navLinks"> 
                    <a href="productos.php"> <h2>Productos</h2> </a> 
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
                <li class="li_navLinks"> <a href="comoComprar.php"> <h2>Como comprar</h2> </a> </li>
                <li class="li_navLinks"> <a href="contacto.php"> <h2>Contacto</h2> </a> </li>                
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

                <form action="">
                    <div class="contenedorBusquedaAbsolute">
                        <input type="text" placeholder="Buscá entre tantos productos...">
                    
                        <!-- <button type="submit" class="icon">
                            <i id="busqueda" type="submit" class="fas fa-search"></i>
                        </button> -->
                    </div>
                </form>
                
                <div class="sub derecha">
                    <div class="iconoBusqueda">
                        <i class="fa fa-search" aria-hidden="true" id="iconoBusquedaCarrito"></i>
                    </div>
                    <div class="iconoCarrito">
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