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
            date_default_timezone_set("America/Argentina/Buenos_Aires");

        	$ultimaConexion =  date("d/m/Y H:i:s");

            $consulta = "SELECT * FROM usuarios WHERE id = '$id'";
            $resultado = mysqli_query($conex, $consulta);

            $resultado2 = $resultado->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Almalupe | Eliminar usuario</title>

    <link rel="stylesheet" href="../CSS/template_formulario.css">

    <script src="https://kit.fontawesome.com/1ff8ebd91d.js"></script>
</head>
<body>
    
    <div class="contenedor" style="height: 30rem;">
        <div class="titulo" style="width:85% !important;">
            <span>¿Eliminar usuario "<?php echo $resultado2['username'];?>"?</span>
        </div>

        <form action="../Backend/borrar_usuario.php?n=<?php echo $id; ?>" method="POST">
            <div class="grupo">
                <label for="">Usuario</label>
                <input type="text" value="<?php echo $resultado2['username']; ?>" disabled>
            </div>  
            
            <div class="grupo">
                <label for="">Rol Id</label>
                <input type="text" value="<?php echo $resultado2['rol_id']; ?>" disabled>
            </div>  

            <div class="grupo">
                <label for="">Ultima Conexion</label>
                <input type="text" value="<?php echo $resultado2['ult_conexion']; ?>" disabled>
            </div>  

            <div class="grupo">
                <button name="enviar" type="submit" class="button1" id="uno">
                    <span>Eliminar usuario</span>
                </button>
                
                <button class="button1" id="dos" type="button"> 
                    <a href="../lista_usuarios.php">
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