<?php 

    include '../../db.php';

    date_default_timezone_set("America/Argentina/Buenos_Aires");
    $ultimaConexion =  date("d/m/Y H:i:s");


    if (isset($_POST['register'])){


        $usuario = $_POST['usuario'];
        $contrasena = $_POST['contrasena'];


        // $usuario = mysqli_real_escape_string($conex, trim($_POST['usuario']));
        // $contrasena = mysqli_real_escape_string($conex, trim($_POST['contrasena']));

        // $usuario = filter_var($usuario, FILTER_SANITIZE_STRING);
        // $usuario = htmlspecialchars($usuario);
        // $usuario = html_entity_decode($usuario, ENT_COMPAT);
        // $usuario = html_entity_decode($usuario, ENT_QUOTES);

        // $contrasena = filter_var($contrasena, FILTER_SANITIZE_STRING);
        // $contrasena = htmlspecialchars($contrasena);
        // $contrasena = html_entity_decode($contrasena, ENT_COMPAT);
        // $contrasena = html_entity_decode($contrasena, ENT_QUOTES);

        echo $usuario;
        echo "\n";
        echo $contrasena;



    }



?>