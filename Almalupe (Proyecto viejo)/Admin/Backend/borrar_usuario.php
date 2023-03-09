<?php 
    include '../../db.php';

    date_default_timezone_set("America/Argentina/Buenos_Aires");

    $ultimaConexion =  date("d/m/Y H:i:s");
    $id_usuario = $_GET['n'];

    if (isset($_POST['enviar']))
    {
        $consulta = "DELETE FROM usuarios WHERE id = '$id_usuario'";
        $resultado = mysqli_query($conex, $consulta);

        if ($resultado)
        {
            ?>
                <script>
                    window.alert("Usuario borrado");
                    window.location.href = "../lista_usuarios.php";
                </script>
            <?php             
        }
        else
        {
            ?>
                <script>
                    window.alert("Ocurrio un error");
                    window.location.href = "../lista_usuarios.php";
                </script>
            <?php    
        }
        
    }

?>