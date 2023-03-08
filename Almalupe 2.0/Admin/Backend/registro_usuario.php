<?php 
    include '../../db.php';

    date_default_timezone_set("America/Argentina/Buenos_Aires");

    $ultimaConexion =  date("d/m/Y H:i:s");
    
    if(isset($_POST['enviar']))
    {
        $usuario = trim($_POST['usuario']);
        $contrasena = trim($_POST['contrasena']);
        $rol = $_POST['rol'];

        echo "usuario = " .$usuario;
        echo "<br>";
        echo "rol = " .$rol;
        echo "<br>";

        $usuario = filter_var($usuario, FILTER_SANITIZE_STRING);
        $usuario = htmlspecialchars($usuario);
        $usuario = html_entity_decode($usuario, ENT_COMPAT);
        $usuario = html_entity_decode($usuario, ENT_QUOTES);

        $contrasena = filter_var($contrasena, FILTER_SANITIZE_STRING);
        $contrasena = htmlspecialchars($contrasena);
        $contrasena = html_entity_decode($contrasena, ENT_COMPAT);
        $contrasena = html_entity_decode($contrasena, ENT_QUOTES);

        if ($usuario != "" && isset($usuario))
        {
            echo "1";
            echo "<br>";
            if ($contrasena != "" && isset($contrasena))
            {
                echo "2";
                echo "<br>";
                if (strlen($usuario) > 0 && strlen($contrasena) > 0)
                {
                    echo "3";
                    echo "<br>";

                    $consulta_comprobacion = "SELECT usuario FROM usuarios WHERE usuario = '$usuario'";
                    $resultado_comprobacion = mysqli_query($conex, $consulta_comprobacion);


                    // $confirmacion_usuario = false;
                    // $confirmacion_rol = false;

                    if (!$row_comprobacion == "")
                    {
                        echo "4";

                        if ($row_comprobacion['usuario'] == $usuario)
					    {
                            echo "5";

                            ?>
                            <script> 
                                window.alert("Usuario ya existente");
                                winodw.location.href = "../lista_usuarios.php";
                            </script>
                            <?php
                            
                        }
                    }
                    else
                    {
                        echo "consulta";
                        $consulta = "INSERT INTO usuarios (usuario, contrasena, rol_id) VALUES ('$usuario','$contrasena','$rol')";
                        $resultado = mysqli_query($conex, $consulta);

                        if ($resultado)
                        {
                            ?>
                                <script> 
                                    window.alert("Usuario registrado");
                                    // winodw.location.href = "../lista_usuarios.php";
                                </script>
                            <?php
                            
                            header('Location: ../lista_usuarios.php');
                        }
                    }
                }
            }
        }
    }
    
?>