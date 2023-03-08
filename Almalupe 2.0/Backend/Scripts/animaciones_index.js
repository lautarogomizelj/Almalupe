var cuatro;
var hola4;

var hola = document.getElementById("navbar");  
var hola3 = hola.offsetTop;

window.addEventListener('scroll', function() {
  cuatro = document.documentElement.scrollTop;
  hola4 = hola.offsetWidth;
});


/*----------------------------------------------------*/


function myFunction() {

  if (hola4 > 660){
    if (window.pageYOffset >= hola3) 
    {
      hola.classList.add("pega")
    } 
    else 
    {
      hola.classList.remove("pega");
    }
  }
}
/*----------------------------------------------------*/


var mybutton = document.getElementById("myBtn");

function myFunction1(){
  
  if (cuatro > 1000)
  {
    mybutton.style.display = "block";
  }
  else
  {
    mybutton.style.display = "none";

  }
}

function topFunction() {
  document.body.scrollTop = 0;
  document.documentElement.scrollTop = 0;
}
/*----------------------------------------------------*/


window.onscroll = function() {myFunction(), myFunction1()};



/*----------------------------------------------------*/
var width = document.body.offsetWidth;  
var atri = document.getElementById("titulo-1");

function myFunction3(){
  if (width <= 564 && width > 425){
    if(typeof atri !== 'undefined' && atri !== null){
      atri.innerHTML = "¡Seguinos en nuestras <br /> redes";
    }
  }

  if (width <= 425){
    if(typeof atri !== 'undefined' && atri !== null){
      atri.innerHTML = "¡Seguinos en <br /> nuestras  redes";
    }
  }
}

myFunction3();
/*----------------------------------------------------*/