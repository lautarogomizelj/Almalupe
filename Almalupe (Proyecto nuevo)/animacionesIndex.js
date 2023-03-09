const navbar = document.querySelector(".seccion.abajo");
const logo = document.getElementById("logoAlmalupe");

console.log(navbar)

var distanciaTopPagina;
var offsetWidthNavBar;

var offsetTopNavbar = navbar.offsetTop;


window.addEventListener('scroll', function() {
    distanciaTopPagina = document.documentElement.scrollTop;
});


/*----------------------------------------------------*/


function myFunction() {

    if (window.pageYOffset >= offsetTopNavbar) 
    {
        console.log("ahora")
        // navbar.classList.add("pega")
        navbar.style.position = "fixed";
        navbar.style.top = "0";

        logo.style.opacity = "1"; 
    } 
    else 
    {
        navbar.style.position = "relative";
        // navbar.classList.remove("pega");v
        logo.style.opacity = "0";
    }
}
window.onscroll = function() {myFunction()};
