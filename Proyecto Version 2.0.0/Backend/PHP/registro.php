<?php 
	include '../../db.php';
	include 'filtros_funciones.php';
	
	date_default_timezone_set("America/Argentina/Buenos_Aires");
	$ultima_conexion = date("d/m/Y H:i:s");

	$bool1 = false;
	$confirmacion_existencia_cuenta = false;

	if(isset($_POST['register']))
	{
		$email = mysqli_real_escape_string($conex, trim($_POST['email']));
		$password = mysqli_real_escape_string($conex, trim($_POST['password']));
		$password_confirm = mysqli_real_escape_string($conex, trim($_POST['password_confirm']));
		$username = mysqli_real_escape_string($conex, trim($_POST['username']));

		$day = $_POST['dia'];
		$month = $_POST['month'];
		$year = $_POST['año'];
		$fecha_completa = $day .'-' .$month .'-' .$year;

		$sex = $_POST['radio'];

		

		// if email
		if (strlen($email) == 0)
		{
			$bool1 = true;
		}
		else
		{
			if (!filter_var($email, FILTER_VALIDATE_EMAIL))
			{
				$bool1 = true;

				if (filtro_input_email($email))
				{
					$bool1 = true;
				}				
			}
		}

		//if password
		if (strlen($password) == 0)
		{
			$bool1 = true;
		}

		//if confirm password

		if (strlen($password_confirm) == 0)
		{
			$bool1 = true;
		}
		else
		{
			if ($password !== $password_confirm)
			{
				$bool1 = true;
			}
		}

		//if username

		if (strlen($username) == 0)
		{
			$bool1 = true;
		}
		else
		{
			if (filtro_input($username)) 
			{
				$bool1 = true;
			}
		}


		//if date

		// if (strlen($day) == 0)
		// {
		// 	$bool1 = true;
		// }
		// else
		// {
		// 	if ($day > 31)
		// 	{
		// 		$bool1 = true;
		// 	}
		// }

		// if (strlen($month) == 0)
		// {
		// 	$bool1 = true;
		// }			

		// if (strlen($year) == 0)
		// {

		// 	$bool1 = true;
		// }
		// else
		// {
		// 	if (($año_actual - $year) > 100)
		// 	{
		// 		$bool1 = true;
		// 	}
		// }

		//if sex
		// if (strlen($sex) == 0)
		// {
		// 	$bool1 = true;
		// }


		//--------------------
		$email = filter_var($email, FILTER_SANITIZE_EMAIL);

		$password = filter_var($password, FILTER_SANITIZE_STRING);
		$password = htmlspecialchars($password);
		$password = html_entity_decode($password, ENT_COMPAT);
		$password = html_entity_decode($password, ENT_QUOTES);

		$username = filter_var($username, FILTER_SANITIZE_STRING);
		$username = htmlspecialchars($username);
		$username = html_entity_decode($username, ENT_COMPAT);
		$username = html_entity_decode($username, ENT_QUOTES);
		//--------------------
		if ($bool1 == true)
		{
			header('../../Pages/signup.php')
			?><script>alert("Ups, algo salio mal...");
			window.location.href="../../Pages/signup.php";</script><?php
		}

		if (strlen($email) > 0 && strlen($username) > 0)
		{
			$consulta2 = "SELECT email, username FROM usuarios WHERE email = '$email' OR username = '$username'";
			$resultado2 = mysqli_query($conex, $consulta2);

			$row2 = $resultado2->fetch_assoc();

			if (!$row2 == "")
			{
				if ($row2['email'] == $email || $row2['username'] == $username)
				{
					if ($row2['email'] == $email)
					{
						?><script>alert("Email ya existente");
						window.location.href="../../Pages/signup.php";</script><?php
					}

					if ($row2['username'] == $username)
					{
						?><script>alert("Usuario ya existente");
						window.location.href="../../Pages/signup.php";</script><?php
					}
					
				}
				else
				{
					$confirmacion_existencia_cuenta = true;
				}
			}
			else
			{
				$confirmacion_existencia_cuenta = true;
			}
		}

	
		//--------------------
		if (strlen($email) > 0)
		{
			if (!filtro_input_email($email))
			{
				$confirmacion_email = true;
			}
		}

		if (strlen($password) > 5)
		{
			if (!filtro_input($password))
			{
				$confirmacion_password = true;
			}
		}

		if (strlen($password_confirm) > 5)
		{
			if ($password == $password_confirm)
			{
				$confirmacion_password2 = true;
			}
		}

		if (strlen($username) > 0 && strlen($username) <= 15)
		{
			if (!filtro_input($username))
			{
				$confirmacion_username = true;
			}
		}

		// if (strlen($day) > 0 && $day <= 31)
		// {
		// 	if (strlen($month) > 0)
		// 	{
		// 		if (strlen($year) > 0 && ($año_actual - $year) < 100)
		// 		{
		// 			$confirmacion_date = true;
		// 		}
		// 	}
		// }

		// if (strlen($sex) > 0)
		// {
		// 	$confirmacion_sex = true;
		// }
		//--------------------

		//Registro de datos en mySQL
		if ($confirmacion_email == true && $confirmacion_password == true)
		{
			if ($confirmacion_password2 == true && $confirmacion_username == true)
			{
				if ($confirmacion_existencia_cuenta == true)
				{
					$password = md5($password);

					$consulta = "INSERT INTO usuarios(email, username, password1, fecha_reg) 
					VALUES ('$email','$username','$password','$ultima_conexion')";

					$resultado = mysqli_query($conex, $consulta);

					if ($resultado)
					{
						echo "hsldkf";
						$consulta_comprobacion = "SELECT username, password1 FROM usuarios WHERE username = '$username' AND password1 = '$password'";
						$resultado_comprobacion = mysqli_query($conex, $consulta_comprobacion);

						$row_comprobacion = $resultado_comprobacion->fetch_assoc();

						if ($row_comprobacion['username'] == $username && $row_comprobacion['password1'] == $password)
						{		
							$consulta_conexion  = "UPDATE usuarios SET ult_conexion = '$ultima_conexion' WHERE username = '$username' AND password1 = '$password'";
							$resultado_conexion = mysqli_query($conex, $consulta_conexion);


							// $_SESSION['usuario'] = $row_comprobacion['username'];
							// $_SESSION['rol_id'] = $row_comprobacion['rol_id'];


							header('Location: ../../index.php');			
						}	
						else
						{
							header('Location: ../../signup.php');			
						}
					}
				}
				else
				{	
					?><script>alert("Ups, ocurrio un error...");
					window.location.href="../../signup.html";</script><?php
				}
				
			}
		}
	}


?>