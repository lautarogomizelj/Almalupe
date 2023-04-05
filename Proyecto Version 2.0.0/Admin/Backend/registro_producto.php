<?php 
    include '../../db.php';

    session_start();
    
    // $mensaje = "";
    
    define('KB', 1024);
    define('MB', 1048576);
    define('GB', 1073741824);
    define('TB', 1099511627776);

    if (isset($_POST['enviar']))
    {
        $nombre_imagen = $_FILES['imagen']['name'];
        $titulo = mysqli_real_escape_string($conex, $_POST['titulo']);
        $precio = mysqli_real_escape_string($conex, $_POST['precio']);
        $stock = mysqli_real_escape_string($conex, $_POST['stock']);
        $destacado = mysqli_real_escape_string($conex, $_POST['destacado']);
        $categoria = mysqli_real_escape_string($conex, $_POST['categoria']);


        $titulo = filter_var($titulo, FILTER_SANITIZE_STRING);
        $titulo = htmlspecialchars($titulo);
        $titulo = html_entity_decode($titulo, ENT_COMPAT);
        $titulo = html_entity_decode($titulo, ENT_QUOTES);

        $categoria = filter_var($categoria, FILTER_SANITIZE_STRING);
        $categoria = htmlspecialchars($categoria);
        $categoria = html_entity_decode($categoria, ENT_COMPAT);
        $categoria = html_entity_decode($categoria, ENT_QUOTES);

        if (isset($titulo) && $titulo != "" && isset($precio) && $precio != "" && isset($stock) && $stock != "" && isset($destacado) && $destacado != "" && isset($categoria) && $categoria != "")
        {
            
            if (isset($nombre_imagen) && $nombre_imagen != "")
            {
                $temp = $_FILES['imagen']['tmp_name'];
                $size = $_FILES['imagen']['size'];
                $filepath = "../../Assets/Productos/" .$nombre_imagen;
                $extension = strtolower(pathinfo($filepath, PATHINFO_EXTENSION));
                
                echo $temp;
                echo "</br>";  
                echo $size;
                echo "</br>";  
                echo $filepath;
                echo "</br>";  
                echo $extension;
                echo "</br>";  


                if ($extension != "jpg" && $extension != "jpeg" && $extension != "png" && $extension != "gif")
                {
                    echo "mal1";
                    // $_SESSION['mensaje_backend_producto'] = "*Solo se permiten fotos con extension jpg, jpeg, png o gif";
                    // header('Location: ../Frontend/agregar_productos.php');
                }
                else{
                    echo "bnien";
                    echo "</br>";  
                        
                    if ($size > 13*MB)
                    {
                        // $_SESSION['mensaje_backend_producto'] = "*Archivo muy pesado";
                        // header('Location: ../Frontend/agregar_productos.php');
                    }
                    else{
                        echo "bien2";
                        echo "</br>";  

                        if (file_exists($filepath))
                        {
                            echo "mal2";
                            echo "</br>";  

                            // $_SESSION['mensaje_backend_producto'] = "*Archivo ya existente, por favor ingrese otro";
                            // header('Location: ../Frontend/agregar_productos.php');
                        }
                        else{
                            echo "bien3";
                            echo "</br>";  

                            $consulta = "INSERT INTO productos (nombre_archivo, titulo, precio, stock, destacado, categoria) 
                            VALUES ('$nombre_imagen', '$titulo', '$precio', '$stock', '$destacado', '$categoria');";

                            echo $consulta;
                            $resultado = mysqli_query($conex, $consulta);

                            if ($resultado)
                            {
                                move_uploaded_file($temp, $filepath);
                                
                                // $_SESSION['mensaje_backend_producto'] = "Producto agregado";
                                header('Location: ../Frontend/agregar_productos.php');
                            }
                            else
                            {
                                // $_SESSION['mensaje_backend_producto'] = "*Algo salio mal";
                                // header('Location: ../Frontend/agregar_productos.php');
                            }
                        }

                    }
                }
            }
            else
            {
                // $_SESSION['mensaje_backend_producto'] = "*Ingresa una foto";
                // header('Location: ../Frontend/agregar_productos.php');
            }
        }
        else
        {
            if ($titulo == "")
            {
                // $_SESSION['mensaje_backend_producto'] = "*Ingresa el titulo";
                // header('Location: ../Frontend/agregar_productos.php');
            }
    
            if ($precio == "")
            {
                // $_SESSION['mensaje_backend_producto'] = "*Ingresa el precio";
                // header('Location: ../Frontend/agregar_productos.php');
            }
    
            if ($stock == "")
            {
                // // $_SESSION['mensaje_backend_producto'] = "*Ingresa el stock";
                // header('Location: ../Frontend/agregar_productos.php');
            }
        }
    }

?>