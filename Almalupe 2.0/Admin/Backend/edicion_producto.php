<?php 
    include '../../db.php';

    date_default_timezone_set("America/Argentina/Buenos_Aires");

    $ultimaConexion =  date("d/m/Y H:i:s");
    $id_producto1 = $_GET['n'];

    if(isset($_POST['enviar']))
    {
        // $id = $_POST['id'];
        $titulo = $_POST['nombre'];
        $precio = $_POST['precio'];
        $stock = $_POST['stock'];
        $destacado = $_POST['destacado'];
        $categoria = $_POST['categoria'];

        if ($destacado == "si"){$destacado_1 = 1;}else{$destacado_1 = 0;}

        if ($titulo != "" && isset($titulo))
        {
            if ($precio != "" && isset($precio))
            {
                if ($stock != "" && isset($stock))
                {
                    if ($destacado != "" && isset($destacado))
                    {
                        if ($categoria != "" && isset($categoria))
                        {
                            $consulta = "UPDATE productos SET titulo = '$titulo', precio = '$precio', stock = '$stock', Destacado = '$destacado_1', categoria = '$categoria' WHERE id_producto = '$id_producto1'";
                            $resultado = mysqli_query($conex, $consulta);

                            if ($resultado)
                            {
                                ?>
                                    <script>
                                        window.alert("Se actualizaron los datos");
                                        window.location.href = "../lista_productos.php";
                                    </script>
                                <?php
                            }
                        }
                    }
                }
            }
        }


    }
?>