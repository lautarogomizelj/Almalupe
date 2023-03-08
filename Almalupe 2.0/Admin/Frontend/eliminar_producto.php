<?php 
    include '../../db.php';

    session_start();

    if (isset($_SESSION['usuario']) && $_SESSION['usuario'] != "")
    {
        $usuario = $_SESSION['usuario'];
        $rol = $_SESSION['rol_id'];
        $id = $_GET['n'];

        if ($rol == 5 || $rol == 6)
        {
            $consulta = "SELECT * FROM productos WHERE id_producto = '$id'";
            $resultado = mysqli_query($conex, $consulta);
            $resultado2 = $resultado->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>E-commerce | Eliminar producto</title>
    
    <link rel="stylesheet" href="../CSS/template_formulario.css">

    <script src="https://kit.fontawesome.com/1ff8ebd91d.js"></script>
</head>
<body>
    
    <div class="contenedor" style="height: 30rem;">
        <div class="titulo" style="width:max-content !important;">
            <span>Eliminar producto "<?php echo $resultado2['titulo'];?>"</span>
        </div>

        <form action="../Backend/borrar_producto.php?n=<?php echo $id; ?>" method="POST">
            <div class="grupo">
                <label for="">Nombre</label>
                <input type="text" value="<?php echo $resultado2['titulo']; ?>" disabled>
            </div>  

            <div class="grupo">
                <label for="">Precio</label>
                <input type="text" value="<?php echo $resultado2['precio']; ?>" disabled>
            </div>  
            
            <div class="grupo">
                <label for="">Stock</label>
                <input type="text" value="<?php echo $resultado2['id_producto']; ?>" disabled>
            </div>  

            <div class="grupo">
                <button name="enviar" type="submit" class="button1" id="btn_uno">
                    <span>Eliminar producto</span>
                </button>
                
                <button class="button1" id="btn_dos">
                    <a href="../lista_productos.php">
                        <span>Volver</span>
                    </a>
                </button>
            </div>
        </form>
    </div>


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