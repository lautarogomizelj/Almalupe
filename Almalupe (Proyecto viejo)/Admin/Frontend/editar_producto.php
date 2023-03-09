<?php 
    include '../../db.php';

    session_start();

    if (isset($_SESSION['usuario']) && $_SESSION['usuario'] != "")
    {
        $usuario = $_SESSION['usuario'];
        $rol = $_SESSION['rol_id'];

        $id_producto = $_GET['n'];

        if ($rol == 5 || $rol == 6)
        {
            $consulta = "SELECT * FROM productos WHERE id_producto = '$id_producto'";
            $resultado = mysqli_query($conex, $consulta);

            $resultado2 = $resultado -> fetch_assoc();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Almalupe | Actualizar datos</title>

    <link rel="stylesheet" href="../CSS/template_formulario.css">

    <script src="https://kit.fontawesome.com/1ff8ebd91d.js"></script>
</head>
<body>

    <div class="contenedor" style="height: 50rem; margin: 4% auto;">
        <div class="titulo">
            <span>Actualizar datos</span>
        </div>

        <form action="../Backend/edicion_producto.php?n=<?php echo $id_producto; ?>" method="POST">
            <div class="grupo">
                <label for="">Id Producto</label>
                <input type="text" name="id" value="<?php echo $resultado2['id_producto']; ?>" disabled>
            </div>  

            <div class="grupo">
                <label for="">Nombre</label>
                <input type="text" name="nombre" value="<?php echo $resultado2['titulo']; ?>">
            </div>  

            <div class="grupo">
                <label for="">Precio</label>
                <input type="text" name="precio" value="<?php echo $resultado2['precio']; ?>" onkeypress="return validaNumericos(event)">
            </div>  
            
            <div class="grupo">
                <label for="">Stock</label>
                <input type="text" name="stock" value="<?php echo $resultado2['stock']; ?>" onkeypress="return validaNumericos(event)">
            </div>  

            <div class="grupo">
                <label for="">Destacado</label>
                <select name="destacado" id="">
                    <option value="si" <?php if ($resultado2['destacado'] == 1){?> selected <?php } ?> >Si</option>
                    <option value="no" <?php if ($resultado2['destacado'] == 0){?> selected <?php } ?> >No</option>
                </select>
            </div>  

            <div class="grupo">
                <label for="">Categoria</label>
                <input type="text" name="categoria" value="<?php echo $resultado2['categoria']; ?>" onkeypress="return validaNumericos(event)">
            </div>  

            <div class="grupo">
                <button type="submit" name="enviar" class="button1" id="btn_uno">
                    <span>Actualizar producto</span>
                </button>
                
                <button class="button1" id="btn_dos">
                    <a href="../lista_productos.php">
                        <span>Volver</span>
                    </a>
                </button>
            </div>

        </form>
    </div>

    <script src="../Backend/app.js"></script>


</body>
</html>

<?php 
        }
        else
        {
            header('Location: ../../index.php');
        }
    }
    else
    {
        header('Location: ../../index.php');
    }
?>