<?php 
    include 'db.php';
    session_start();

    $pagina_actual = "productos_php";

    if (isset($_GET['busqueda']))
    {
        $busqueda = mysqli_real_escape_string($conex, trim($_GET['busqueda']));
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Almalupe | Productos</title>

    <link rel="shortcut icon" href="Assets/logoWeb.png">
    
    <link rel="stylesheet" href="CSS/busqueda_producto.css">
    <link rel="stylesheet" href="CSS/responsive.css">
    
    <link rel="stylesheet" href="Templates/CSS/template_nav.css">
    <!-- <link rel="stylesheet" href="Templates/CSS/template_producto.css"> -->
    <link rel="stylesheet" href="Templates/CSS/template_categoria.css">
    <link rel="stylesheet" href="Templates/CSS/template_ofertas.css">
    
    <script src="https://kit.fontawesome.com/1ff8ebd91d.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>

    <header>
        <?php include 'Templates/nav.php'; ?>
    </header>

    <?php 
        if (isset($_GET['busqueda']))
        {  
    ?>

    <section>
        <article>
            <div class="contenedor-resultados">
                <div class="columna-izquierda">
                    <div class="row-1">Celulares > fundas</div>
                    <div class="contenedor-busqueda">
                        <div class="titulo"><?php if(isset($_GET['busqueda'])){echo $busqueda;} ?></div>
                        <div class="subtitulo">3 resultados</div>
                    </div>
                    <div class="contenedor-filtros">
                        a
                    </div>
                </div>
                <div class="columna-derecha">
                    <div class="row-1">Ordenar por</div>
                </div>
            </div>
        </article>
    </section>

<?php 
    }
    else
    {
?>

    <div class="contenedor-grupo">
        <div class="titulo">Ofertas</div>
        <div class="contenedor-ofertas">
            <?php include 'Templates/estilo_ofertas.php'; ?>
        </div>    
    </div>

    <!-- <div class="contenedor-grupo">
        <div class="titulo">Destacados</div>
        <div class="contenedor-destacado">
        </div>
    </div> -->


    <div class="contenedor-grupo">
        <div class="titulo">Categorias</div>
        <div class="contenedor-categoria">

        <?php 
            $consulta_categoria = "SELECT * FROM fotos_categoria";
            $resultado_categoria = mysqli_query($conex, $consulta_categoria);
        
            foreach ($resultado_categoria as $row_categoria)
            {
                include 'Templates/estilo_categoria.php'; 
            }
        ?>
        </div>
    </div>





<?php
    }
?>
    <script src="Backend/Scripts/funciones_busqueda.js"></script>
</body>
</html>