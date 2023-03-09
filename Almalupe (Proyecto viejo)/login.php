<?php 
    session_start();
    include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Almalupe | Login</title>
    
    <link rel="shortcut icon" href="Assets/logoWeb.png">

    <link rel="stylesheet" href="CSS/main.css">
    <link rel="stylesheet" href="CSS/signup_login.css">
    
    <script src="https://kit.fontawesome.com/1ff8ebd91d.js"></script>
</head>
<body>
    <div class="contenedor" id="contenedor_login">
        <div class="logo">
            <a href="index.php">
                <img src="Assets/logoWeb.png" alt="Logo">
            </a>
        </div>

        <form id="myForm1" onsubmit="submit1()" method="POST" action="Backend/validacion_login.php"> 
            
            <div class="grupo">
                <label for="">Usuario</label>
                <input id="input_login" type="text" name="usuario" placeholder="Usuario" onkeyup="checkInputsValue1('input_login', 'icono', 'icono1', 'username_validacion')">
                
                <i id="icono" class="fas fa-check-circle"></i>
                <i id="icono1" class="fas fa-exclamation-circle"></i>

                <h3 class="validacion" id="username_validacion"></h3>

            </div>  


            <div class="grupo">
                <label for="">Contraseña</label>
                <input id="input_password" type="password" name="contrasena" utocomplete="off" placeholder="Contraseña" onkeyup="checkInputsValue1('input_password', 'icono2', 'icono3','password_validacion')">
                
                <i id="icono2" class="fas fa-check-circle"></i>
                <i id="icono3" class="fas fa-exclamation-circle"></i>

                <h3 class="validacion" id="password_validacion"></h3>

            </div>

            <div class="grupo">
                <button type="submit" name="register" class="button1" id="boton_login"><span>Log in</span></button>
            </div>

            <div class="row-2">
                <p>No tenes una cuenta?</p> <a href="signup.html">Registrate.</a>
            </div>
        </form>


        <?php 
            if (isset($_SESSION['mensaje_login']))
            {
        ?>

            <p class="mensaje-error">
                <?php echo $_SESSION['mensaje_login']; ?>
            </p>

        <?php
            }
            $_SESSION['mensaje_login'] = "";
        ?>

    
    </div>

	<script src="Backend/Scripts/validaciones_login.js"></script>
</body>
</html>