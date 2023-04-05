<?php 
    include '../db.php';


    $consulta_cantidad = "SELECT count(*) as count1 FROM productos";
    $resultado_cantidad = mysqli_query($conex, $consulta_cantidad);
    $row_cantidad = mysqli_fetch_assoc($resultado_cantidad);

    $consulta_productos = "SELECT * FROM productos";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>E-commerce | Lista de Productos</title>

    <link rel="stylesheet" href="CSS/lista_productos.css">
    <link rel="stylesheet" href="CSS/template.css">

    <script src="https://kit.fontawesome.com/1ff8ebd91d.js"></script>
</head>
<body>

    <!-- <?php //include 'Templates/nav.php'; ?>    -->

    <div class="row-1">
        <div class="contenedor-1">
            <i class="fas fa-list"></i>
            <span>Lista de productos (<?php echo $row_cantidad['count1']; ?>)</span>
        </div>

        <div class="contenedor-2">
            <a href="Frontend/agregar_productos.php">
                <button>
                    <i class="fas fa-plus"></i>
                    <span>Registrar Producto</span>
                </button>
            </a>    
        </div>
    </div>

    <table>
        <tr class="titulo">
            <?php include 'Templates/table_row.php'; ?>
        </tr>

        <?php 
            $contador_resultado = 0;
            $resultado = mysqli_query($conex, $consulta_productos);

            while ($row = mysqli_fetch_assoc($resultado))
            {
    ?>
            <tr>
                <th class="row"><?php echo $row['id'];?></th>
                <th class="row"><?php echo $row['titulo'];?></th>
                <th class="row"><?php echo $row['precio'];?></th>
                <th class="row"><?php echo $row['stock'];?></th>
                <th class="row"><?php if ($row['destacado'] == 1) {echo "Si";} else {echo "No";} ?></th>
                <th class="row"><?php echo $row['categoria'];?></th>
                <th class="row"><img src="../Assets/<?php echo $row['nombre_archivo'];?>" alt="as"></th>
                <th class="row">
                    <a href="Frontend/editar_producto.php?n=<?php echo $row['id_producto']; ?>" class="txt" id="editar">
                        <i class="far fa-edit"></i>
                        <span>Editar</span>
                    </a>

                    <a href="Frontend/eliminar_producto.php?n=<?php echo $row['id_producto']; ?>" class="txt" id="eliminar">
                        <i class="far fa-trash-alt"></i>
                        <span>Eliminar</span>
                    </a>
                </th>
            </tr>

        <?php
            }
        ?>
    </table>

    
    <script src="Backend/horario.js"></script>
    <script src="Backend/app.js"></script>
</body>
</html>

