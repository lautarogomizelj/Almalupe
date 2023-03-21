let contenedor = document.querySelector(".contenedorProducto")

let parteArriba = contenedor.childNodes[1]
let btnIcono = parteArriba.childNodes[1]

let parteAbajo = contenedor.childNodes[3]


contenedor.addEventListener("mouseover", function(){
    parteAbajo.style.height = "25%"
    parteAbajo.style.opacity = "1"

    parteArriba.style.height = "75%"
    btnIcono.style.opacity = "1"

    
    contenedor.style.height = "34rem"
});

contenedor.addEventListener("mouseleave", function(){
    parteAbajo.style.height = "0%"
    parteAbajo.style.opacity = "0"
    
    parteArriba.style.height = "100%"
    btnIcono.style.opacity = "0"
    
    contenedor.style.height = "25rem"
});