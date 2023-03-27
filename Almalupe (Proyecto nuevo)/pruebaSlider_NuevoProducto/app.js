let contenedorCarousel = document.querySelector(".contenedorCarousel")
let contenedor = document.querySelectorAll(".contenedorTarjetaProducto")
console.log(contenedor)

let hijos = contenedorCarousel.childNodes

let contenedorTarjetaProducto = document.querySelector(".contenedorTarjetaProducto")

let parteArriba = contenedorTarjetaProducto.childNodes[1]
let btnIcono = parteArriba.childNodes[1]

let parteAbajo = contenedorTarjetaProducto.childNodes[3]


contenedorTarjetaProducto.addEventListener("mouseover", function(){
    parteAbajo.style.height = "25%"
    parteAbajo.style.opacity = "1"

    parteArriba.style.height = "75%"
    btnIcono.style.opacity = "1"

    
    contenedorTarjetaProducto.style.height = "34rem"
});

contenedorTarjetaProducto.addEventListener("mouseleave", function(){
    parteAbajo.style.height = "0%"
    parteAbajo.style.opacity = "0"
    
    parteArriba.style.height = "100%"
    btnIcono.style.opacity = "0"
    
    contenedorTarjetaProducto.style.height = "25rem"
});