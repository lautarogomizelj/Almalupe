<a href="busqueda_productos.php?busqueda=<?php echo $row_categoria['categoria']; ?>">
    <div class="banner">
        <img src="Assets/Categorias/<?php echo $row_categoria['nombre_archivo']; ?>" alt="<?php echo $row_categoria['categoria']; ?>">
        <div class="texto"><?php echo $row_categoria['categoria']; ?></div>
    </div>
</a>