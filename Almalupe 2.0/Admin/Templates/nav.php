<div class="contenedor-arriba">
    <div class="fila-uno">
        <div class="titulo1">Admin - Almalupe</div>

        <div class="contenido1">
            <div class="fecha">
                <span id="hora"></span>
                <span id="minutos"></span>
                <span id="segundos"></span>
            </div>

            <div class="usuario"> <?php echo $usuario; ?> </div>
                <div class="cerrar-sesion">
                    <a href="../Backend/cerrar_sesion.php">
                        <i class="fas fa-power-off"></i>
                    </a>
                </div>
            </div>
        </div>

        <div class="fila-dos">
            <ul class="nav-links">
                <a href="../index.php"><li><i class="fas fa-home"></i><span>Inicio</span></li></a>
                <a href="lista_usuarios.php">
                    <li>
                        <i class="fas fa-users"></i>
                        <span <?php if ($pagina == "lista_usuarios"){?> id="activo" <?php } ?> >Usuarios</span>
                    </li>
                </a>

                <a href="lista_productos.php">
                    <li>
                        <i class="far fa-file-image"></i>
                        <span <?php if ($pagina == "lista_productos"){?> id="activo" <?php } ?> >Lista productos</span>
                    </li>
                </a>

                <a href="lista_categorias.php">
                    <li>
                        <i class="fab fa-microsoft"></i>
                        <span <?php if ($pagina == "lista_categorias"){?> id="activo" <?php } ?> >Lista categorias</span>
                    </li>
                </a>
            </ul>
        </div>
    </div>
</div>