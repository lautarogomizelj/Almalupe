<?php 
    include '../../db.php';

    session_start();


    if (isset($_SESSION['usuario']) && $_SESSION['usuario'] != "")
    {
        $usuario = $_SESSION['usuario'];
        $rol = $_SESSION['rol_id'];
        
        $pagina = "agregar_productos";

        if ($rol == 5 || $rol == 6)
        {
            $consulta = "SELECT * FROM productos";
            $resultado = mysqli_query($conex, $consulta);
    
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Almalupe | Agregar productos</title>

    <link rel="stylesheet" href="../CSS/template_formulario.css">

    <script src="https://kit.fontawesome.com/1ff8ebd91d.js"></script>
</head>
<body>

    <div class="contenedor" style="height: 49rem; margin-top: 6vh !important;">
        <div class="titulo">
            <span>Registrar Producto</span>
        </div>

        <form action="../Backend/registro_producto.php" method="POST" enctype="multipart/form-data">
            <div class="grupo">
                <label for="">Subi una foto</label>
                <input name="imagen" type="file" class="file-upload-field" required>
            </div>  

            <div class="grupo">
                <label for="">Titulo</label>
                <input type="text" name="titulo" required>
            </div>  

            <div class="grupo">
                <label for="">Precio</label>
                <input type="text" name="precio" required autocomplete="off" onkeypress="return validaNumericos(event)" required>
            </div>  

            <div class="grupo">
                <label for="">Stock</label>
                <input type="text" name="stock" required autocomplete="off" onkeypress="return validaNumericos(event)" required>
            </div>  

            <div class="grupo">
                <label for="">Destacado</label>

                <select name="destacado" required>
                    <option value="no">No</option>
                    <option value="si">Si</option>
                </select>
            </div>  

            <div class="grupo">
                <label for="">Categoria</label>
                <input type="text" name="categoria" required>
            </div>  

            <div class="grupo">
                <button type="submit" name="enviar" class="button1" id="btn_uno">
                    <span>Registrar Producto</span>
                </button>
                
                <button class="button1" id="btn_dos" type="button">
                    <a href="../lista_productos.php">
                        <span>Volver</span>
                    </a>
                </button>
            </div>


            <div class="grupo">
                <div class="mensaje">
                    <span><?php if (isset($_SESSION['mensaje_backend_producto'])){echo $_SESSION['mensaje_backend_producto']; } ?></span>
                </div>     
            </div>

            <?php $_SESSION['mensaje_backend_producto'] = ""; ?>

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