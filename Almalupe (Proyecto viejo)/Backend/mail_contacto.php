<?php 

	//include 'conexion.php';
	//include 'filtros_funciones.php';


	$nombre = $email = $mensaje = "";
	$texto = $texto1 = $texto2 = $texto3 = $texto4 = "";



	date_default_timezone_set("America/Argentina/Buenos_Aires");

	$horario =  date("h:i:sa");
	$año_actual = date("Y");
	$fecha = date("d, m, Y");


	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
		if(isset($_POST['enviar']))
		{
	
			$nombre = $_POST['nombre'];
			$email = $_POST['email'];
			$mensaje = $_POST['mensaje'];

			$nombre = filter_var($nombre, FILTER_SANITIZE_STRING);
			$nombre = htmlspecialchars($nombre);
			$nombre = html_entity_decode($nombre, ENT_COMPAT);
			$nombre = html_entity_decode($nombre, ENT_QUOTES);

			$email = filter_var($email, FILTER_SANITIZE_EMAIL);

			$mensaje = filter_var($mensaje, FILTER_SANITIZE_STRING);
			$mensaje = htmlspecialchars($mensaje);
			$mensaje = html_entity_decode($mensaje, ENT_COMPAT);
			$mensaje = html_entity_decode($mensaje, ENT_QUOTES);

			//$nombre = str_replace(" ", "\n", $nombre);



			if (!empty($nombre) &&  !empty($email) && !empty($mensaje ))
			{

				$name = $nombre;
				$asunto = "Consulta1";
				$mensaje1 = $mensaje;
				$mail = "lautigomi@gmail.com";
				$header = "From: noreply@example.com" . "\r\n";
				$header.= "Reply-To: noreply@example.com" ."\r\n";
				$header.= "X-Mailer: PHP/" .phpversion();

				$mail = @mail($mail, $asunto, $mensaje1, $header);

				if ($mail){
					$texto1 = "Mail enviado";
				}
				else{
					$texto1 = "Hubo un error";
				}
			}


		}
	}



?>