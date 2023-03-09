<?php 
    include '../../db.php';

    date_default_timezone_set("America/Argentina/Buenos_Aires");

    $ultimaConexion =  date("d/m/Y H:i:s");
    $id_producto1 = $_GET['n'];

    if (isset($_POST['enviar']))
    {
        $consulta = "SELECT nombre_archivo FROM productos WHERE id_producto = '$id_producto1'";
        $resultado = mysqli_query($conex, $consulta);

        $resultado1 = $resultado->fetch_assoc();
        $file = "../../Assets/Productos/" .$resultado1['nombre_archivo'];

        if (isset($resultado1))
        {
            $consulta1 = "DELETE FROM productos WHERE id_producto = '$id_producto1'";
            $resultado2 = mysqli_query($conex, $consulta1);

            if (file_exists($file))
            {
                if (unlink($file)) 
                {
                    if ($resultado2)
                    {
                        ?>
                            <script>
                                window.alert("Archivo borrado");
                                window.location.href = "../lista_productos.php";
                            </script>
                        <?php                        
                    }
                } 
            }
            else
            {
                if ($resultado2)
                    {
                        ?>
                            <script>
                                window.alert("Archivo borrado");
                                window.location.href = "../lista_productos.php";
                            </script>
                        <?php                        
                    }
            }  
        } 
        else
        {
            ?>
                <script>
                    window.alert("Intenta devuelta");
                    window.location.href = "../lista_productos.php";
                </script>
            <?php
        }

        
    }

?>