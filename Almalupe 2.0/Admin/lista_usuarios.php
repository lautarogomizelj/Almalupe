<?php 
    include '../db.php';

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

            $consulta = "SELECT * FROM usuarios ORDER BY id LIMIT 6";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Almalupe | Lista de Usuarios</title>

    <link rel="stylesheet" href="CSS/lista_productos.css">
    <link rel="stylesheet" href="CSS/template.css">

    <script src="https://kit.fontawesome.com/1ff8ebd91d.js"></script>
</head>
<body>
    
    <?php include 'Templates/nav.php';?>

    <div class="row-1">
        <div class="contenedor-1">
            <i class="fas fa-list"></i>
            <span>Lista de usuarios</span>
        </div>

        <div class="contenedor-2">
            <a href="Frontend/registrar_usuario.php">
                <button>
                    <i class="fas fa-plus"></i>
                    <span>Registrar usuario</span>
                </button>
            </a>    
        </div>
    </div>

    <table style="width: 60% !important;">
        <tr class="titulo">
            <th class="sub">Id</th>
            <th class="sub">Usuario</th>
            <th class="sub">Contrseña</th>
            <th class="sub">Rol</th>
            <th class="sub">Ultima conexion</th>
            <th class="sub">Acciones</th>
        </tr>

        <?php 
            $resultado = mysqli_query($conex, $consulta);
            while ($row = mysqli_fetch_assoc($resultado))
            {
        ?>
        <tr>
            <th class="row"><?php echo $row['id'];?></th>
            <th class="row"><?php echo $row['username'];?></th>
            <th class="row"><?php echo $row['password'];?></th>
            <th class="row">
                <?php
                    echo $row['rol_id'];
                    echo " - ";
                    if ($row['rol_id'] == 5){echo "admin";}
                    if ($row['rol_id'] == 6){echo "observador";}
                    if ($row['rol_id'] == 7){echo "usuario";}
                ?>
            </th>
            <th class="row"><?php echo $row['ult_conexion'];?></th>
            <th class="row">
                <a href="" class="txt" id="editar">
                    <i class="far fa-edit"></i>
                    <span>Editar</span>
                </a>

                <a href="Frontend/eliminar_usuario.php?n=<?php echo $row['id']; ?>" class="txt" id="eliminar">
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