// function showUser(str) 
// {
// 	if (str=="") {
// 	  document.getElementById("datos").innerHTML="";
// 	  return;
// 	}

// 	var xmlhttp = new XMLHttpRequest();
// 	xmlhttp.onreadystatechange = function() 
// 	{
// 	  if (this.readyState == 4 && this.status == 200) 
// 	  {
// 		document.getElementById("datos").innerHTML=this.responseText;
// 	  }
// 	}
// 	xmlhttp.open("GET","busqueda.php?q="+str,true);
// 	xmlhttp.send();
// }



function submit1(){
	var busqueda = document.forms["myForm1"]["busqueda"].value.trim();

	var bool1 = false;

	if (busqueda === ''){
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





/*Jquery*/

$(document).ready(function(){


    input = document.getElementById('input_bus').value.trim();
	const form = document.getElementById('myForm1');

	//usar fa fa icon as a submit button
	$("#busqueda").click(function(){
		form.addEventListener('submit', (e) => {
		
			if (input == ""){        
				e.preventDefault();
			}
			 
		})
	});

	//sugerencias de la barra de busqueda
	$("#input_bus").keyup(function(){

		input = document.getElementById('input_bus').value.trim();

		if (input != ""){
			$(".contenedor_sugerencias").show();
			buscarDatos(input);
		}
		else{
			$(".contenedor_sugerencias").hide();
			// buscarDatos();
		}
	});

	//sugerencias de la barra de busqueda
	$("#input_bus").focusin(function(){

		if (input != ""){
			$(".contenedor_sugerencias").show();
		}
		else{
			$(".contenedor_sugerencias").hide();
		}
	});

	//sugerencias de la barra de busqueda
	$("#input_bus").focusout(function(){

		$(".contenedor_sugerencias").hide();

	});
});


