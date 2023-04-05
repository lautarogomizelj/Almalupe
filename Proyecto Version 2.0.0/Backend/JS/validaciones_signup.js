//no reenviar formulario
if (window.history.replaceState)
{
	window.history.replaceState(null, null, window.location.href)
}



//funcion para que solo puede ingresar numeros
function validaNumericos(evt) {
         
    // Only ASCII character in that range allowed
    var ASCIICode = (evt.which) ? evt.which : evt.keyCode;

    if (ASCIICode > 31 && (ASCIICode < 48 || ASCIICode > 57))
    {
        return false;
    }
    else
    {
        return true;
    }
}

//funcion elminar clase existente de .grupo
function elminarClase(className1, succes1, error1){
    var grupo = document.getElementById(className1).parentElement;
    var txt = document.getElementById(className1).value.trim();
    var icono = document.getElementById(succes1);
    var icono1 = document.getElementById(error1);

    if (txt === '')
    {
        grupo.className = 'grupo';
        icono.style.visibility = "hidden";
        icono1.style.visibility = "hidden";
    }

}

//funcion encontrar caracteres especiales
function validarSimbolos(dato)
{
    var simbolos = ["'", ">", "<", ">", "/", "=", "*", '"', "!", "|", "+", "[", "]", "#", "|", "?", ","];


    for (i = 1; i <= dato.length; i++)
    {
        for (x in simbolos)
        {
            if (dato[i-1] == simbolos[x])
            {
                return true;
            }

        }
        
    }
}

//funcion validar en caso de email
function validarEmail(dato)
{
    return /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,4}$/.test(dato);
}

//funcion agrega clase exito en caso de true
function setSuccess(id1, succes1, error1){
    var grupo = document.getElementById(id1).parentElement;
    var icono = document.getElementById(succes1);
    var icono2 = document.getElementById(error1);

    grupo.className = 'grupo exito';

    icono2.style.visibility = "hidden";
    icono.style.visibility = "visible";
}

//funcion agrega clase erorr en caso de false
function setError(id1, succes1, error1){
    var grupo = document.getElementById(id1).parentElement;
    var icono3 = document.getElementById(succes1);
    var icono4 = document.getElementById(error1);

    grupo.className = 'grupo error';

    icono3.style.visibility = "hidden";
    icono4.style.visibility = "visible";
    
}

//funcion agregar texto de validacion
function textAddError(value1, mensaje)
{
    var value = document.getElementById(value1);

    value.innerText = mensaje;
    value.classList.add('validacion');
}

//funcion remover texto de validacion
function textRemoveError(value1)
{
    var value = document.getElementById(value1);

    value.innerText = null;
    value.classList.remove('validacion');
}


var email_data = null;
var password_data = null;
var password_confirm_data = null;
var username_data = null;
var day_data = null;
var month_data = null;
var year_data = null;

function checkInputsValue(value2, value3, value4, value5)
{
    var value1 = document.getElementById(value2);
    var value_1 = value1.value.trim();
    
    email_data = document.getElementById("email").value.trim();
    password_data = document.getElementById("password").value.trim();
    password_confirm_data = document.getElementById("password_confirm").value.trim();
    username_data = document.getElementById("username").value.trim();
    // day_data =  document.getElementById("day").value.trim();
    // month_data =  document.getElementById("month").value.trim();
    // year_data =  document.getElementById("year").value.trim();


    if (value_1 === '')
    {
        setError(value2, value3, value4);
        textRemoveError(value5);
    }
    else
    {
        switch (value1)
        {
            case email:
                if (validarEmail(value_1) == true)
                {
                    if (validarSimbolos(value_1) === undefined)
                    {
                        textRemoveError(value5);
                        setSuccess(value2, value3, value4);
                    }
                    else
                    {
                        setError(value2, value3, value4);
                        textAddError(value5, '*Email no valido');
                    }
                }
                else
                {
                    textAddError(value5, '*Email no valido');
                    setError(value2, value3, value4);
                }
            break;
                
            case password:

                if (validarSimbolos(value_1) === undefined){   
                    if (password_data.length > 5 && password_data.length <= 20){
                        textRemoveError(value5);
                        setSuccess(value2, value3, value4);
                    }
                    else{
                        if (password_data.length < 5){
                            textAddError(value5, '*La contraseña es muy corta');
                            setError(value2, value3, value4);
                        }

                        if (password_data.length > 20){
                            textAddError(value5, '*La contraseña es muy larga');
                            setError(value2, value3, value4);
                        }
                    }
                }
                else
                {
                    textAddError(value5, '*La contraseña tiene caracteres no aceptados');
                    setError(value2, value3, value4);
                }
                
            break;

            case password_confirm:

                if (validarSimbolos(value_1) === undefined)
                {
                    if (password_data == password_confirm_data)
                    {
                        textRemoveError(value5);
                        setSuccess(value2, value3, value4);
                    }
                    else{
                        textAddError(value5, '*Las contraseñas no coinciden');
                        setError(value2, value3, value4);
                    }
                        
                }
                else
                {
                    textAddError(value5, '*La contraseña tiene caracteres no aceptados');
                    setError(value2, value3, value4);
                }


                
            break

            case username: 
                if (validarSimbolos(value_1) === undefined){
                    if (username_data.length > 0 && username_data.length <= 15){
                        textRemoveError(value5);
                        setSuccess(value2, value3, value4);
                    }
                    else{
                        textAddError(value5, '*El nombre de usuario es muy largo');
                    }
                }
                else{
                    textAddError(value5, '*El nombre de usuario tiene caracteres no aceptados');
                    setError(value2, value3, value4);
                }
            break; 
        }

    }
} 

function checkDateSexValue(value2)
{

    var value1 = document.getElementById(value2);
    var value_1 = value1.value.trim();

    day_data =  document.getElementById("day").value.trim();
    month_data =  document.getElementById("month").value.trim();
    year_data =  document.getElementById("year").value.trim();


    if (value_1 === '')
    {
        
    }
    else
    {
        switch (value1)
        {
            case day:
                if (value_1.length < 2)
                {
                    value1.className = 'input_dia error'
                }
                else{
                    if (value_1 > 31)
                    {
                        value1.className = 'input_dia error'
                    }
                    else{
                        value1.className = 'input_dia exito';   
                    }
                }
            break;
    
            case month:
                if (value_1 >= 01 && value_1 <=12)
                {
                    value1.className = 'input_mes exito';   
                }
                else if (value_1 === 'mes')
                {
                    value1.className = 'input_mes error'
                }
            break;
                
            case year:
                if (value_1.length < 4)
                {
                    value1.className = 'input_año error'
                }
                else{
                    if (value_1 > 2021)
                    {
                        value1.className = 'input_año error';   
                    }
                    else{
                        if ((2020 - value_1) > 105)
                        {
                            value1.className = 'input_año error'
                        }
                        else{
                            value1.className = 'input_año exito';   
                        }
                    }
                    
        
                }
            break;
        }
    }
}



function sumbit1()
{
    var email1 = document.forms["myForm"]["email"].value.trim();
    var password1 = document.forms["myForm"]["password"].value.trim();
    var password_confirm1 = document.forms["myForm"]["password_confirm"].value.trim();
    var username1 = document.forms["myForm"]["username"].value.trim();
    
    var day1 = document.forms["myForm"]["dia"].value.trim();
    var month1 = document.forms["myForm"]["month"].value.trim();
    var year1 = document.forms["myForm"]["year"].value.trim();

    var sex1 = document.forms["myForm"]["radio"].value.trim();

    var bool1 = false;
    var bool2 = false;
    var bool3 = false;
    var bool4 = false;
    var bool5 = false;
    var bool6 = false;
    var bool7 = false;
    

    if (email1 === ''){
        bool1 = true;
        setError('email', 'icono', 'icono1');
    }
    else{
        if (validarEmail(email1)){
            bool1 = false;
        }
        else{
            bool1 = true;
        }        
    }   
    //--------------------//
    if (password1 === ''){
        bool2 = true;
        setError('password', 'icono2', 'icono3');
    }
    else{
        if (password1 > 5 && password1 <= 20){
            if (validarSimbolos(password1)){
                bool2 = true;
            }
            else{
                bool2 = false;
            }
        }
        else{
            bool2 = false;
        }
    }    
    //--------------------//
    if (password_confirm1 === ''){
        bool3 = true;
        setError('password_confirm', 'icono4', 'icono5');
    }
    else{
        if (password_confirm1 === password1){
            if (validarSimbolos(password_confirm1)){
                bool3 = true;
            }
            else{
                bool3 = false;
            }
        }
        else{
            bool3 = true;
        }
    }    
    //--------------------//
    if (username1 === ''){
        bool4 = true;
        setError('username', 'icono6', 'icono7');
    }
    else{
        if (username1.length <= 15){
            if (validarSimbolos(username1)){
                bool4 = true;
            }
            else{
                bool4 = false;
            }
        }
        else{
            bool4 = true;
        }
    }    
    //--------------------//
    if (day1 === ''){
        bool5 = true;
        document.getElementById('day').className = 'input_dia error'

    }
    else{
        if (day1.length < 2){
            bool5 = true;
        }
        else{
            if (day1 > 31)
            {
               bool5 = true;
            }
            else{
                bool5 = false;
            }
        }
    }   
    //--------------------//
    if (month1 === 'mes'){
        bool6 = true;
        document.getElementById('month').className = 'input_mes error'
    }
    else{
        if (month1 >= 01 && month1 <=12){
            bool6 = false;
        }
    }
    //--------------------//
    if (year1 === ''){
        bool7 = true;
        document.getElementById('year').className = 'input_año error'
    }
    if (year1.length < 4){
        bool7 = true;
        document.getElementById('year').className = 'input_año error'
    }
    else{
        if (year1 > 2021)
        {
            bool7 = true; 
        }
        else{
            if ((2021 - year1) > 105){
                bool7 = true;
            }
            else{
                bool7 = false;
            }
        }
    }


    return [bool1, bool2, bool3, bool4, bool5, bool6, bool7];
}



function submit2()
{
    var boolFinal = false;
    var contador = 0;

    do{
        if (sumbit1()[contador] == true)
        {
            boolFinal = true;
        }

        contador +=1;
    } while(contador < 7)

    return boolFinal;
}




const form = document.getElementById('form');

form.addEventListener('submit', (e) => {
    
    if (submit2() == true){
        
        e.preventDefault();
    }
})
