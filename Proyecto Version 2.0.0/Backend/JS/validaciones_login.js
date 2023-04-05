//no reenviar formulario
if (window.history.replaceState)
{
	window.history.replaceState(null, null, window.location.href)
}

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



function setExito(id1, exito, error){
	var value1 = document.getElementById(id1).parentElement;
	var icono2 = document.getElementById(exito);
    var icono3 = document.getElementById(error);

	value1.className = 'grupo exito';
    icono3.style.visibility = "hidden";
	icono2.style.visibility = "visible";
}

function setError(id1, exito, error){
	var value1 = document.getElementById(id1).parentElement;
	var icono2 = document.getElementById(exito);
    var icono3 = document.getElementById(error);

	value1.className = 'grupo error';
	icono2.style.visibility = "hidden";
	icono3.style.visibility = "visible";
}

function textAddError1(value1, mensaje)
{
    var value_2 = document.getElementById(value1);

    value_2.innerText = mensaje;
}

function textRemoveError1(value1)
{
    var value_2 = document.getElementById(value1);

    value_2.innerText = null;
}




var username_data1 = '';
var password_data1 = '';

function checkInputsValue1(value, exito, error, value5){
	value_1 = document.getElementById(value).value.trim();

	username_data1 = document.getElementById('input_login').value.trim(); 
	password_data1 = document.getElementById('input_password').value.trim(); 

	if (value_1 === ''){
		setError(value, exito, error);
	}
	else{
		if (value == "input_login"){
			if (validarSimbolos(username_data1) === undefined){
				if (username_data1.length > 0 && username_data1.length <= 15){
					textRemoveError1(value5);
					setExito(value, exito, error);
				}
				else{
					setError(value, exito, error);

					if (username_data1.length == 0){
						textAddError1(value5, "*El usuario es muy corto");	
					}
					if (username_data1.length > 15){
						textAddError1(value5, "*El usuario es muy largo");	
					}
				} 
			}
			else{
				setError(value, exito, error);
				textAddError1(value5, "*El usuario tiene caracteres no aceeptados");	
			}
			
			
		}

		if (value == "input_password"){
			if (validarSimbolos(value_1) === undefined){
				if (password_data1.length > 5 && password_data1.length <= 20){
					textRemoveError1(value5);
					setExito(value, exito, error);
				}
				else
				{
					if (password_data1.length < 5)
					{
						textAddError1(value5, '*La contraseña es muy corta');
						setError(value, exito, error);
					}
	
					if (password_data1.length > 20)
					{
						textAddError1(value5, '*La contraseña es muy larga');
						setError(value, exito, error);
					}
				}
				
			}
			else{
				textAddError1(value5, '*La contraseña tiene caracteres no aceptados');
				setError(value, exito, error);
			}
		}
	}

	
}

function submit1(){
	var username_1 = document.forms["myForm1"]["input_login"].value.trim();
    var password_1 = document.forms["myForm1"]["input_password"].value.trim();

	var bool1 = false;

	if (username_1 === ''){
		console.log("ASd");
		setError('input_login', 'icono', 'icono1');
		bool1 = true;
	}
	
	if (password_1 === ''){
		setError('input_password', 'icono2', 'icono3');
		bool1 = true;
	}

	if (validarSimbolos(username_1) == true)
	{
		setError('input_login', 'icono', 'icono1');
		bool1 = true;
	}

	if (validarSimbolos(username_1) == true)
	{
		setError('input_password', 'icono2', 'icono3');
		bool1 = true;
	}

	return bool1;
}


const form = document.getElementById('myForm1');

form.addEventListener('submit', (e) => {
    
    if (submit1() == true){
        
        e.preventDefault();
    }
})
