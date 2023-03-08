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
        $categoria = mysqli_real_escape_string($conex, $_POST['categoria']);

        $titulo = filter_var($titulo, FILTER_SANITIZE_STRING);
        $titulo = htmlspecialchars($titulo);
        $titulo = html_entity_decode($titulo, ENT_COMPAT);
        $titulo = html_entity_decode($titulo, ENT_QUOTES);

        $categoria = filter_var($categoria, FILTER_SANITIZE_STRING);
        $categoria = htmlspecialchars($categoria);
        $categoria = html_entity_decode($categoria, ENT_COMPAT);
        $categoria = html_entity_decode($categoria, ENT_QUOTES);

     

        if (isset($titulo) && $titulo != "" && isset($categoria) && $categoria != "")
        {
            if (isset($nombre_imagen) && $nombre_imagen != "")
            {
                $temp = $_FILES['imagen']['tmp_name'];
                $size = $_FILES['imagen']['size'];
                $filepath = "../../Assets/Categorias/" .$nombre_imagen;
                $extension = strtolower(pathinfo($filepath, PATHINFO_EXTENSION));

                if ($extension != "jpg" && $extension != "jpeg" && $extension != "png" && $extension != "gif")
                {
                    $_SESSION['mensaje_backend_categoria'] = "*Solo se permiten fotos con extension jpg, jpeg, png o gif";
                    header('Location: ../Frontend/agregar.php');
                }
                else{
                    if ($size > 5*MB)
                    {
                        $_SESSION['mensaje_backend_categoria'] = "*Archivo muy pesado";
                        header('Location: ../Frontend/agregar_categoria.php');
                    }
                    else{
                        if (file_exists($filepath))
                        {
                            $_SESSION['mensaje_backend_categoria'] = "*Archivo ya existente, por favor ingrese otro";
                            header('Location: ../Frontend/agregar_categoria.php');
                        }
                        else{
                            $consulta = "INSERT INTO fotos_categoria (nombre_archivo, titulo_archivo, categoria) VALUES ('$nombre_imagen', '$titulo', '$categoria')";

                            $resultado = mysqli_query($conex, $consulta);

                            if ($resultado)
                            {
                                move_uploaded_file($temp, $filepath);
                                
                                $_SESSION['mensaje_backend_categoria'] = "Producto agregado";
                                header('Location: ../Frontend/agregar_categoria.php');
                            }
                            else
                            {
                                $_SESSION['mensaje_backend_categoria'] = "*Algo salio mal";
                                header('Location: ../Frontend/agregar_categoria.php');
                            }
                        }

                    }
                }
            }
            else
            {
                $_SESSION['mensaje_backend_categoria'] = "*Ingresa una foto";
                header('Location: ../Frontend/agregar_categoria.php');
            }
        }
        else
        {
            if ($titulo == "")
            {
                $_SESSION['mensaje_backend_categoria'] = "*Ingresa el titulo";
                header('Location: ../Frontend/agregar_categoria.php');
            }
    
            if ($categoria == "")
            {
                $_SESSION['mensaje_backend_categoria'] = "*Ingresa la categoria";
                header('Location: ../Frontend/agregar_categoria.php');
            }
        }
    }

?>