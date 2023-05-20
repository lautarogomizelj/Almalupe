<?php 

    include '../../db.php';
    session_start();

    date_default_timezone_set("America/Argentina/Buenos_Aires");
    $ultimaConexion =  date("d/m/Y H:i:s");

    echo "skldjf";
    if (isset($_POST['register'])){
        $usuario = $_POST['usuario'];
        $contrasena = $_POST['contrasena'];

        $usuario = mysqli_real_escape_string($conex, trim($_POST['usuario']));
        $contrasena = mysqli_real_escape_string($conex, trim($_POST['contrasena']));

        $usuario = filter_var($usuario, FILTER_SANITIZE_STRING);
        $usuario = htmlspecialchars($usuario);
        $usuario = html_entity_decode($usuario, ENT_COMPAT);
        $usuario = html_entity_decode($usuario, ENT_QUOTES);

        $contrasena = filter_var($contrasena, FILTER_SANITIZE_STRING);
        $contrasena = htmlspecialchars($contrasena);
        $contrasena = html_entity_decode($contrasena, ENT_COMPAT);
        $contrasena = html_entity_decode($contrasena, ENT_QUOTES);

        if ($usuario != "" && strlen($usuario) > 0 && $contrasena != "" && strlen($contrasena) > 0){
            // compruebo que exista un usuario en la base de datos con ese campo
            $consultaComprobacionUsuario = "SELECT username FROM usuarios WHERE username = '$usuario'";
            $resultadoComprobacionUsuario = mysqli_query($conex, $consultaComprobacionUsuario);
            
            if ($resultadoComprobacionUsuario){
                //exito en la consulta
                $extraido_ComprobacionUsuario = mysqli_fetch_assoc($resultadoComprobacionUsuario);

                if ($extraido_ComprobacionUsuario){
                    // existe un usuario en la base de datos        
                    // comprobar si las creedenciales son correctas

                    $contrasenamd5 = md5($contrasena);

                    $consultaUsuario = "SELECT * FROM usuarios WHERE username = '$usuario' AND password1 = '$contrasenamd5'";
                    $resuladoConsultaUsuario = mysqli_query($conex, $consultaUsuario);

                    if ($resultadoComprobacionUsuario){
                        //exito en la consulta
                        $extraido_Usuario = mysqli_fetch_assoc($resuladoConsultaUsuario);

                        if ($extraido_Usuario['username'] == $usuario && $extraido_Usuario['password1'] == $contrasenamd5){
                            $consulta_conexion  = "UPDATE usuarios SET ult_conexion = '$ultimaConexion' WHERE username = '$usuario' AND password1 = '$contrasenamd5'";
                            $resultado_conexion = mysqli_query($conex, $consulta_conexion);

                            $_SESSION['username'] = $extraido_Usuario['username'];
                            $_SESSION['rol_id'] = $extraido_Usuario['rol_id'];

                            header('Location: ../../index.php');
                            // if ($extraido_Usuario['rol_id'] == "5"){
                            //     header('Location: ../../Admin/lista_productos.php');
                            // }
                            // else{
                            //     header('Location: ../../index.php');
                            // }
                        }
                        else{
        					$_SESSION['mensaje_login'] = "*Hubo un error en el inicio de sesion...";

                            header('Location: ../../Pages/login.php');
                        }
                    }
                    else{
        				$_SESSION['mensaje_login'] = "*Hubo un error en el inicio de sesion...";
                        header('Location: ../../Pages/login.php');
                    }                    
                }
                else{
                    $_SESSION['mensaje_login'] = "*Hubo un error en el inicio de sesion...";
                    header('Location: ../../Pages/login.php');
                }
            }
            else{
                $_SESSION['mensaje_login'] = "*Hubo un error en el inicio de sesion...";
                header('Location: ../../Pages/login.php');
            }
        }
    }
    else{
        echo "h";
        // header("HTTP/1.1 401 Unauthorized");
        header("HTTP/1.0 404 Not Found");
        exit;
        // header('Location: ../../Pages/login.php');
    }
?>