<?php 
    include '../../db.php';

    session_start();

    if (isset($_SESSION['usuario']) && $_SESSION['usuario'] != "")
    {
        $usuario = $_SESSION['usuario'];
        $rol = $_SESSION['rol_id'];
        $pagina = "lista_usuarios";

        if ($rol == 5 || $rol == 6)
        {
            date_default_timezone_set("America/Argentina/Buenos_Aires");

        	$ultimaConexion =  date("d/m/Y H:i:s");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Almalupe | Registrar usuario</title>

    <link rel="stylesheet" href="../CSS/template_formulario.css">

    <script src="https://kit.fontawesome.com/1ff8ebd91d.js"></script>
</head>
<body>

    <div class="contenedor" style="height: 32rem;">
        <div class="titulo">
            <span>Registrar Usuario</span>
        </div>

        <form action="../Backend/registro_usuario.php" method="POST">
            <div class="grupo">
                <label for="">Usuario</label>
                <input id="input_login" type="text" name="usuario" placeholder="Usuario">
            </div>  

            <div class="grupo">
                <label for="">Contraseña</label>
                <input id="input_login" type="text" name="contrasena" placeholder="Contraseña">
            </div>  

            <div class="grupo">
                <label for="">Rol</label>

                <select name="rol" id="rol_id">
                    <option value="7">7-usuario</option>
                    <option value="6">6-observador</option>
                    <option value="5">5-admin</option>
                </select>
            </div>  

            <div class="grupo">
                <button type="submit" name="enviar" class="button1" id="uno">
                    <span>Registrar Usuario</span>
                </button>
                
                <button class="button1" id="dos" type="button">
                    <a href="../lista_usuarios.php">
                        <span>Volver</span>
                    </a>
                </button>
            </div>


            

        </form>
    </div>



    <script src="Backend/app.js"></script>    
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