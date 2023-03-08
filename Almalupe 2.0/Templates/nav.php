<div class="contenedor-arriba">

    <div class="contenedor-izquierda">
        <a href="contacto.php"> <div class="fa-2"> <i class="fas fa-phone"> </i> </div> </a> 
        <a href="contacto.php"> <span>15 4427 9069 </span></a>
        
        <a href="contacto.php"> <div class="fa-2"> <i class="far fa-envelope"> </i></div> </a>
        <a href="contacto.php"> <span>lautigomi@gmail.com</span></a>
    </div>


    <div class="contenedor-derecha">

    <?php 
        if (isset($_SESSION['usuario']) && $_SESSION['usuario'] != "" && isset($_SESSION['rol_id']) && $_SESSION['rol_id'] != "")
        {
            $usuario = $_SESSION['usuario'];
            $rol_id = $_SESSION['rol_id'];
    ?>

        <div class="contenedor1">
            
            <div class="usuario">
                <span> <?php echo $usuario; ?> </span>
            </div>
            
            <i class="fas fa-user-alt"></i>

            <div class="dropdown-content">
                <?php 
                    if ($rol_id == "5" || $rol_id == "6")
                    {
                ?>
                    <a href="Admin/lista_usuarios.php">Admin</a>
                <?php
                    }
                    else
                    {
                ?>
                    <a href="">Mi cuenta</a>
                <?php
                    }
                ?>
                <a href="Backend/cerrar_sesion.php">Cerrar sesion</a>
            </div>

        </div>

    <?php
        }
        else
        {
    ?>

        <a href="login.php" id="izquieda-arriba">     
            <span>Inciar Sesion</span>
        </a>

        <div class="barra-arriba"></div> 

        <a href="signup.html" id="derecha-arriba"> 
            <span>Registrate</span>
        </a>

    <?php
        }
    ?>
</div>

</div>

<!--------Titulo y subtitulos-------->


<nav id="navbar">
    <a href="index.php">
        <div class="titulo" id="titulo_nav">Almalupe</div>  
    </a>

    <?php 
        if ($pagina_actual != "productos_php")
        {
    ?>
            <ul class="nav-links">
                <li><a href="index.php"><span>Inicio</span></a></li>
                <li><a href="busqueda_productos.php"><span>Productos</span></a>
                    <ul class="sub-menu">
                        <li> <a href="busqueda_productos.php?busqueda=remeras"> Remeras </a> </li>
                        <li> <a href="busqueda_productos.php?busqueda=pantalones"> Pantalones </a></li>
                        <li> <a href="busqueda_productos.php?busqueda=shorts"> Shorts </a> </li>
                        <li> <a href="busqueda_productos.php?busqueda=remeras"> Vestido </a> </li>
                    </ul>
                </li>

                <li><a href="contacto.php"><span>Contacto</span></a></li>
            </ul>

            <label>
                <input type='checkbox'>

                <span class='menu'>
                    <span class='hamburger'></span>
                </span>

                <ul>
                    <li><a href=""><span>Inicio</span></a></li>
                    <li><a href="busqueda_productos.php"><span>Productos</span></a></li>
                    <li><a href="contacto.php"><span>Contacto</span></a></li>
                </ul>

            </label>
    <?php
        }
        else
        {
    ?>

        <form action="busqueda_productos.php" method="GET" id="myForm1" onsubmit="submit1()">
            <div class="barra-busqueda">
                    <input type="text" name="busqueda" id="input_bus" value="<?php if(isset($_GET['busqueda'])){echo $busqueda;} ?>" onkeyup="showUser(this.value)" autocomplete="off" placeholder="Buscar productos, marcas y mas...">
                    
                    <button type="submit" class="icon">
                        <i id="busqueda" type="submit" class="fas fa-search"></i>
                    </button>

                    <!-- <div class="contenedor_sugerencias">
                        <ul id="datos">
                        </ul>
                    </div> -->
            </div>
        </form>

    <?php
        }
    ?>
</nav>

<?php 
    if ($pagina_actual == "contacto_php")
    {
?>

    <div class="contenedor-fondo">
        <img src="Assets/fondo1.jpg" id="fondo1" alt="">
        <div class="texto">¡Nos encantaria que nos contactes!</div>
    </div>

<?php }
?>
