<?php
    require 'Config/constantes.php';

    $servername = HOST;
    $username = USER;
    $password = PASSWORD;
    $db = DATABASE_NAME;

    $conex = mysqli_connect($servername, $username, $password, $db);

    if (!$conex){
        die("Conexion fallida: " .mysqli_connect_error());
    }
    else{
        echo "bien";
    }
?>