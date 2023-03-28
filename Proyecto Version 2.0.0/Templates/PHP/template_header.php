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
                <li <?php if ($pagina_actual == "index.php"){ ?> class="subtitulo Activo" <?php } ?> > <a href="index.php"> <h2>Inicio</h2> </a> </li>
                <li <?php if ($pagina_actual == "productos.php"){ ?> class="subtitulo Activo" <?php } ?> > 
                    <a href="productos.php"> <h2>Productos</h2> </a> 
                    <ul class="sub-menu">
                        <li><a href="uno.php"> <h2>Idumentaria</h2> </a></li>
                        <li><a href="dos.php"> <h2>Calzado</h2> </a></li>
                        <li><a href="tres.php"> <h2>Accesorios</h2> </a></li>
                        <li><a href="cuatro.php"> <h2>Vestidos</h2> </a></li>
                        <li><a href="cuatro.php"> <h2>Poleron</h2> </a></li>
                        <li><a href="cuatro.php"> <h2>Sacos abiertos</h2> </a></li>
                        <li><a href="cuatro.php"> <h2>Enteritos</h2> </a></li>
                        <li><a href="cuatro.php"> <h2>Vestido</h2> </a></li>
                        <li><a href="cuatro.php"> <h2>Vestido</h2> </a></li>
                        <li><a href="cuatro.php"> <h2>Vestido</h2> </a></li>

                    </ul>
                </li>
                <li <?php if ($pagina_actual == "comoComprar.php"){ ?> class="subtitulo Activo" <?php } ?> > <a href="comoComprar.php"> <h2>Como comprar</h2> </a> </li>
                <li <?php if ($pagina_actual == "contacto.php"){ ?> class="subtitulo Activo" <?php } ?> > <a href="contacto.php"> <h2>Contacto</h2> </a> </li>                
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
                    <div class="iconoBusqueda"></div>
                    <div class="iconoCarrito"></div>
                </div>
            </div>

            

            <ul class="nav-links mobile" id="hola">
                <li <?php if ($pagina_actual == "index.php"){ ?> class="subtituloActivo" <?php } ?> > <a href="index.php"> <h2>Inicio</h2> </a> </li>
                <li <?php if ($pagina_actual == "productos.php"){ ?> class="subtituloActivo" <?php } ?> > <a href="productos.php"> <h2>Productos</h2> </a> </li>
                <li <?php if ($pagina_actual == "comoComprar.php"){ ?> class="subtituloActivo" <?php } ?> > <a href="comoComprar.php"> <h2>Como comprar</h2> </a> </li>
                <li <?php if ($pagina_actual == "contacto.php"){ ?> class="subtituloActivo" <?php } ?> > <a href="contacto.php"> <h2>Contacto</h2> </a> </li>
            </ul>


            


            

        </div>
    </div>