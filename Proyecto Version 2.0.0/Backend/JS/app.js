function getScreenWidth(){
    documentWidth = screen.width

    if (documentWidth > 600){
        document.querySelectorAll(".contenedorProducto").forEach(item => {
            let parteArriba = item.childNodes[1]
            let btnIcono = parteArriba.childNodes[1]
            let parteAbajo = item.childNodes[3]

            item.addEventListener("mouseover", function(){
                console.log("uno")
                parteAbajo.classList.remove("parteAbajoNoHover")
                parteAbajo.classList.add("parteAbajoHover")
                
                parteArriba.style.height = "75%"
                btnIcono.style.opacity = "1"
                
                
                item.style.height = "29rem"
            });

            item.addEventListener("mouseleave", function(){
                console.log("dos")
                parteAbajo.classList.remove("parteAbajoHover")
                parteAbajo.classList.add("parteAbajoNoHover")

                parteArriba.style.height = "100%"
                btnIcono.style.opacity = "0"
                
                item.style.height = "23rem"
            });
        })
    }   
}

window.onload = getScreenWidth
window.onresize = getScreenWidth
   


document.getElementById("logoAlmalupe").addEventListener("click", function(){
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
});


/*--------------------------------------------------------------*/


const btnMenu = document.getElementById("btnMenuResponsive")
const menu = document.getElementById("nav-links-mobile")
/*------*/
const dropdownMenuResponsiveButton = document.getElementById("dropdownMenu-responsive")
const contenedorDropdownResponsive = document.querySelector(".responsiveSub-menu")
const iconDropdown1 = dropdownMenuResponsiveButton.childNodes[3]

const hijonum3 = menu.childNodes[5]

let todoLi = document.querySelectorAll(".li_navLinks.mobile")

console.log(todoLi)

$(document).ready(function(){
    
    $(btnMenu).click(function(e){
        $(menu).animate({
            width: "240px"
        })

        // $('body').toggleClass('opacity');
        // $(".body").toggleClass("no-scroll");

    })


    $(document).click(function(e){
        if (menu.style.width == "240px"){
            if (!menu.contains(e.target)){
                $(menu).animate({
                    width: "0"
                });

                todoLi.forEach(elementoLi => {
                    let hijos = elementoLi.childNodes
                    
                    hijos.forEach(hijo => {
                        if(hijo.classList == "sub-nav-links"){
                            if(hijo.style.height == "100%"){
                                $(hijo).animate({
                                    height: "0",
                                    opacity: "0"
                                })
                            }
                        }
                    });
                });

                // $('body').toggleClass('opacity');
                // $(".body").toggleClass("no-scroll");
            }

            // todoLi.forEach(elementoLi => {
            //     if (elementoLi.contains(e.target)){
            //         let hijos = elementoLi.childNodes

            //         hijos.forEach(hijo => {
            //             if(hijo.classList == "sub-nav-links"){
            //                 if
            //                 $(hijo).animate({
            //                     height: "100%",
            //                     opacity: "1"
            //                 });
            //             }
            //         });
            //     }
            // });

            todoLi.forEach(elementoLi => {
                if (elementoLi.contains(e.target)) {
                  let hijos = elementoLi.childNodes;
              
                  hijos.forEach(hijo => {
                    if (hijo.classList == "sub-nav-links") {
                        console.log(hijo.style.height)
                      if (hijo.style.height == "" || hijo.style.height == "0px" ) {
                        // Child elements are hidden, animate to show
                        $(hijo).animate({
                          height: "100%",
                          opacity: "1"
                        });
                      } else {
                        // Child elements are visible, animate to hide
                        $(hijo).animate({
                          height: "0",
                          opacity: "0"
                        });
                      }
                    }
                  });
                }
              });

        }
    })


});



/*--------------------------------------------------------------*/



const iconoBusquedaCarrito = document.getElementById("iconoBusquedaCarrito")
const iconoCerrarBusquedaCarrito = iconoBusquedaCarrito.nextElementSibling.nextElementSibling
const formulario = iconoBusquedaCarrito.parentElement

const inputBusquedaForm = formulario.childNodes[3]
const iconoCerrarFormulario = formulario.childNodes[5]


iconoBusquedaCarrito.addEventListener("click", function(){
    btnMenu.classList.toggle("desaparece")

    formulario.classList.toggle("claseMoverFormulario")
    inputBusquedaForm.classList.toggle("activo12")
    iconoCerrarFormulario.classList.toggle("activo12")

    iconoBusquedaCarrito.classList.toggle("claseIconoActivo")
})

iconoCerrarBusquedaCarrito.addEventListener("click", function(){
    btnMenu.classList.toggle("desaparece")

    formulario.classList.toggle("claseMoverFormulario")
    inputBusquedaForm.classList.toggle("activo12")
    iconoCerrarFormulario.classList.toggle("activo12")

    iconoBusquedaCarrito.classList.toggle("claseIconoActivo")
})


/*--------------------------------------------------------------*/
let contenedorCarritoComputer = document.querySelectorAll(".contenedorCarrito")[0]
let contenedorCarritoMobile = document.querySelectorAll(".contenedorCarrito")[1]

let contenedorDetalleCarrito = document.querySelector(".contenedorDetalleCarrito")
let botonCerrar = document.getElementById("botonCerrar")


$(document).ready(function(){
    // codigo para abrir/cerrar el popup del carrito
    // ----------------------------------------------------------------
    $(contenedorCarritoComputer).click(function(){
        $(contenedorDetalleCarrito).animate({
            width: "500px"
        });
    })

    $(contenedorCarritoMobile).click(function(){
        $(contenedorDetalleCarrito).animate({
            width: "100%"
        }, 500);
    })

    $(botonCerrar).click(function(){
        $(contenedorDetalleCarrito).animate({
            width: "0"
        });
    })

    

    $(document).click(function(e){
        if (contenedorDetalleCarrito.style.width == "500px"){
            if (!contenedorDetalleCarrito.contains(e.target)){
                $(contenedorDetalleCarrito).animate({
                    width: "0"
                });
            }
        }
    })
    // ----------------------------------------------------------------
});




// // Popup javascript
// //Show popup on window load
// window.onload = () => {
//     getScreenWidth
//     document.querySelectorAll('body > *:not(.pop-up-container)')
//         .forEach(x => x.style.filter = 'blur(1px)')
//     document.querySelectorAll('.pop-up-container')[0].style.display = 'block'
// }

// // // Close popup on btn click
// document.querySelector(".popup-exit").addEventListener('click', function(){
//     document.querySelectorAll('.pop-up-container')[0].style.display = "none"
//     document.querySelectorAll('body > *:not(.pop-up-container)')
//         .forEach(x => x.style.filter = 'blur(0)')
// })