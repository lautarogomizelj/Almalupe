<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
	<title>Almalupe - Registrate</title>
    
    <link rel="shortcut icon" href="Assets/logoWeb.png">

    <link rel="stylesheet" href="../CSS/main.css">
    <link rel="stylesheet" href="../CSS/signup-login.css">
    
    <script src="https://kit.fontawesome.com/1ff8ebd91d.js"></script>
</head>
<body>  
	<div class="contenedor" id="contenedor_signup">
        <div class="logo">
            <a href="../index.php">
                <img src="../Assets/logoWeb.png" alt="Logo">
            </a>
        </div>  

        <form onsubmit="submit2()" name="myForm" id="form" method="POST" action="../Backend/PHP/registro.php">
           
            <!--------------->
           <div class="grupo" id="uno">
            <label for="">Cual es tu direccion de email?</label>
            <input id="email" type="text" name="email" placeholder="Ingresa tu direccion de email" onkeyup="checkInputsValue('email', 'icono', 'icono1', 'email_validacion')">

            <i id="icono" class="fas fa-check-circle"></i>
            <i id="icono1" class="fas fa-exclamation-circle"></i>

            <h3 id="email_validacion"></h3>
           </div>

            <!--------------->
            <div class="grupo" id="dos">
                <label for="" id="password2">Crea una contraseña</label>
                <input id="password" type="password" name="password"  placeholder="Crea una contraseña" onkeyup="checkInputsValue('password', 'icono2', 'icono3', 'password1_validacion')">
                
                <i id="icono2" class="fas fa-check-circle"></i>
                <i id="icono3" class="fas fa-exclamation-circle"></i>

                <h3 id="password1_validacion"></h3>
            </div>

            <!--------------->
            <div class="grupo">
                <label for="" id="password2">Confirma la contraseña</label>
                <input id="password_confirm" type="password" name="password_confirm"  placeholder="Confirma la contraseña" onkeyup="checkInputsValue('password_confirm', 'icono4', 'icono5', 'password_confirm_validacion')">

                <i id="icono4" class="fas fa-check-circle"></i>
                <i id="icono5" class="fas fa-exclamation-circle"></i>

                <h3 id="password_confirm_validacion"></h3>
            </div>

            <!--------------->
            <div class="grupo">
                <label for="" id="password2">Como queres que te llamemos?</label>
                <input id="username" type="text" name="username"  placeholder="Crea un nombre de usuario" onkeyup="checkInputsValue('username', 'icono6', 'icono7', 'username_validacion')">

                <i id="icono6" class="fas fa-check-circle"></i>
                <i id="icono7" class="fas fa-exclamation-circle"></i>

                <h3 id="username_validacion"></h3>
            </div>


           <!--------------->

           <!-- <div class="grupo">
            <label for="" id="password2">Cual es tu fecha de nacimiento?</label>

            <div class="row-1">
                <input type="day" id="day" name="dia" class="input_dia" onkeyup="checkDateSexValue('day')" maxlength="2" title="Day" placeholder="DD" autocomplete="off" onkeypress="return validaNumericos(event)">

                <select name="month" id="month" class="input_mes" aria-invalid="true" title="Month" onclick="checkDateSexValue('month')"> 
                    <option value="mes" id="mes" selected>Mes</option>
                    <option value="01">Enero</option>
                    <option value="02">Febrero</option>
                    <option value="03">Marzo</option>
                    <option value="04">Abril</option>
                    <option value="05">Mayo</option>
                    <option value="06">Junio</option>
                    <option value="07">Julio</option>
                    <option value="08">Agosto</option>
                    <option value="09">Septiembre</option>
                    <option value="10">Octubre</option>
                    <option value="11">Noviembre</option>
                    <option value="12">Diciembre</option>
                </select>   

                <input type="año" id="year" name="año" class="input_año" onkeyup="checkDateSexValue('year')" maxlength="4" title="Year" placeholder="AAAA" autocomplete="off" onkeypress="return validaNumericos(event)"> 
            </div>
           </div> -->

            <!--------------->
            
            <!-- <div class="grupo1">
                <label for="" id="password2">What is your sex?</label>
                
                <label class="container" id="first">Men
                    <input id="input_signup" type="radio" name="radio" value="men" required=""> 
                    <span class="checkmark"></span>
                </label>
            
                <label class="container">Women
                    <input id="input_signup" type="radio" name="radio" value="women" required="">
                    <span class="checkmark"></span>
                </label>
                
                <label class="container">Unknown
                    <input id="input_signup" type="radio" name="radio" value="other" required="">
                    <span class="checkmark"></span>
                </label>
                
                <h3 class="validacion" id="date_validacion"></h3> 

            </div> -->

            <!--------------->
            <div class="grupo">
                <button type="submit" name="register" class="button1" id="boton_signup"><span>Registrate</span></button>
            </div>
            <div class="row-2">
                <p>Ya tienes una cuenta?</p> <a href="login.php">Iniciar Sesion</a>
            </div>
        </form>

    </div>


	<script src="../Backend/JS/validaciones_signup.js"></script>



</body>
</html>