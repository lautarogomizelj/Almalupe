<?php 
	include '../db.php';

	
	session_start();

	date_default_timezone_set("America/Argentina/Buenos_Aires");
    $ultimaConexion =  date("d/m/Y H:i:s");

	if (isset($_POST['register']))
	{
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

		if ($usuario != "" && isset($usuario) && strlen($usuario > 0))
		{
			
			if ($contrasena != "" && isset($contrasena) && strlen($contrasena > 0))
            {
				
				$consulta_comprobacion = "SELECT username, password1, rol_id FROM usuarios WHERE username = '$usuario' AND password1 = '$contrasena'";
				$resultado_comprobacion = mysqli_query($conex, $consulta_comprobacion);

				$row_comprobacion = $resultado_comprobacion->fetch_assoc();

				if ($row_comprobacion['username'] == $usuario && $row_comprobacion['password1'] == $contrasena)
				{		
					$consulta_conexion  = "UPDATE usuarios SET ult_conexion = '$ultimaConexion' WHERE username = '$usuario' AND password1 = '$contrasena'";
                    $resultado_conexion = mysqli_query($conex, $consulta_conexion);


					$_SESSION['usuario'] = $row_comprobacion['username'];
					$_SESSION['rol_id'] = $row_comprobacion['rol_id'];


					header('Location: ../index.php');			
				}	
				else
				{
					$_SESSION['mensaje_login'] = "Usuario o contraseña incorrecto...";
					header('Location: ../login.php');			
				}
			}
			else
			{
				header('Location: ../login.php');
			}
		}
		else
		{
			header('Location: ../login.php');
		}

	}

?>