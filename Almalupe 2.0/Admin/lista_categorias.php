<?php 
    include '../db.php';

    session_start();

    if (isset($_SESSION['usuario']) && $_SESSION['usuario'] != "")
    {
        $usuario = $_SESSION['usuario'];
        $rol = $_SESSION['rol_id'];
        $pagina = "lista_categorias";

        if ($rol == 5 || $rol == 6)
        {
            date_default_timezone_set("America/Argentina/Buenos_Aires");
        	$ultimaConexion =  date("d/m/Y H:i:s");

            //Arranca codigo para los filtros dentro de la tabla

            $orden_pred = "id_foto";
            $asc_desc = "ASC";

            if (!isset($_SESSION['contador_sort']))
            {
                $_SESSION['contador_sort'] = 1;
            }
        
            if (!isset($_SESSION['asc_desc']))
            {
                $_SESSION['asc_desc'] = "ASC";
            }

            if (isset($_SESSION['orden']))
            {
                if ($orden_pred != $_SESSION['orden'])
                {
                    $orden_pred = $_SESSION['orden'];
                }
            }

            if (isset($_GET['sort']))
            {
                if ($_GET['sort'] != $orden_pred)
                {
                    $orden_pred = $_GET['sort'];
                    $_SESSION['orden'] = $orden_pred;

                    $_SESSION['contador_sort'] = 1;
                }
                else
                {
                    $_SESSION['contador_sort'] += 1;

                    if (($_SESSION['contador_sort'] % 2) == 0)
                    {
                        $_SESSION['asc_desc'] = "DESC";
                        $asc_desc = $_SESSION['asc_desc'];
                    }
                    else
                    {
                        $_SESSION['asc_desc'] = "ASC";
                        $asc_desc = $_SESSION['asc_desc'];
                    }
                }
            }

            //Termina codigo para los filtros dentro de la tabla

            //Termina codigo para los filtros dentro de la tabla
            $consulta_cantidad = "SELECT count(*) as count1 FROM fotos_categoria";
            $resultado_cantidad = mysqli_query($conex, $consulta_cantidad);
            $row_cantidad = $resultado_cantidad -> fetch_assoc();


            $consulta_categorias = "SELECT * FROM fotos_categoria";
            $resultado_categorias = mysqli_query($conex, $consulta_categorias);
            $row_categoria = $resultado_categorias -> fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Almalupe | Lista de Categorias</title>

    <link rel="stylesheet" href="CSS/template.css">
    <link rel="stylesheet" href="CSS/lista_productos.css">

    <script src="https://kit.fontawesome.com/1ff8ebd91d.js"></script>
</head>
<body>

    <?php include 'Templates/nav.php'; ?>   

    <div class="row-1">
        <div class="contenedor-1">
            <i class="fas fa-list"></i>
            <span>Lista de categorias (<?php echo $row_cantidad['count1']; ?>)</span>
        </div>

        <div class="contenedor-2">
            <a href="Frontend/agregar_categoria.php?n=<?php echo $row['id_foto']; ?>">
                <button>
                    <i class="fas fa-plus"></i>
                    <span>Registrar Categoria</span>
                </button>
            </a>    
        </div>
    </div>

    <table>
        <tr class="titulo">
            <?php include 'Templates/table_row_categoria.php'; ?>
        </tr>

        <?php 
            
            foreach ($resultado_categorias as $row_1)
            {
    ?>
            <tr>
                <th class="row"><?php echo $row_1['id_foto'];?></th>
                <th class="row"><?php echo $row_1['titulo_archivo'];?></th>
                <th class="row"><?php echo $row_1['categoria'];?></th>
                <th class="row"><img src="../Assets/Categorias/<?php echo $row_1['nombre_archivo'];?>" alt=""></th>
                <th class="row">
                    <a href="Frontend/editar_categoria.php?n=<?php echo $row_1['id_foto']; ?>" class="txt" id="editar">
                        <i class="far fa-edit"></i>
                        <span>Editar</span>
                    </a>

                    <a href="Frontend/eliminar_categoria.php?n=<?php echo $row_1['id_foto']; ?>" class="txt" id="eliminar">
                        <i class="far fa-trash-alt"></i>
                        <span>Eliminar</span>
                    </a>
                </th>
            </tr>

        <?php
            }
        ?>
    </table>

    
    
    <!-- <footer>
        <?php include 'Templates/footer.php'; ?>
    </footer> -->


    <script src="Backend/horario.js"></script>
    <script src="Backend/app.js"></script>
</body>
</html>

<?php 
        }
        else
        {
            header('Location: ../index.php');
        }
    }
    else
    {
        header('Location: ../index.php');
    }
?>