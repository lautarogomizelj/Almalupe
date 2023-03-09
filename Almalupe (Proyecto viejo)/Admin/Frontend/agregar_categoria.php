<?php 
    include '../../db.php';

    session_start();

    if (isset($_SESSION['usuario']) && $_SESSION['usuario'] != "")
    {
        $usuario = $_SESSION['usuario'];
        $rol = $_SESSION['rol_id'];
        
        $pagina = "agregar_categoria";

        if ($rol == 5 || $rol == 6)
        {
            $consulta = "SELECT * FROM fotos_categoria";
            $resultado = mysqli_query($conex, $consulta);
    
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Almalupe | Agregar categoria</title>

    <link rel="stylesheet" href="../CSS/template_formulario.css">

    <script src="https://kit.fontawesome.com/1ff8ebd91d.js"></script>
</head>
<body>

    <div class="contenedor" style="height: 31rem; margin-top: 12vh !important;">
        <div class="titulo">
            <span>Registrar categoria</span>
        </div>

        <form action="../Backend/registro_categoria.php" method="POST" enctype="multipart/form-data">
            <div class="grupo">
                <label for="">Subi una foto</label>
                <input name="imagen" type="file" class="file-upload-field" required>
            </div>  

            <div class="grupo">
                <label for="">Titulo</label>
                <input type="text" name="titulo" required>
            </div>  

            <div class="grupo">
                <label for="">Categoria</label>
                <input type="text" name="categoria" required>
            </div>  

            <div class="grupo">
                <button type="submit" name="enviar" class="button1" id="btn_uno">
                    <span>Registrar Categoria</span>
                </button>
                
                <button class="button1" id="btn_dos" type="button">
                    <a href="../lista_categorias.php">
                        <span>Volver</span>
                    </a>
                </button>
            </div>


            <div class="grupo">
                <div class="mensaje">
                    <span><?php if (isset($_SESSION['mensaje_backend_categoria'])){echo $_SESSION['mensaje_backend_categoria']; } ?></span>
                </div>     
            </div>

            <?php $_SESSION['mensaje_backend_categoria'] = ""; ?>

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