function getScreenWidth(){
    documentWidth = screen.width
    console.log(documentWidth)

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


const btnMenu = document.getElementById("btnMenuResponsive")
const menu = document.getElementById("hola")

btnMenu.addEventListener("click", function(){
    menu.classList.toggle("active")
    document.body.classList.toggle("opacity")
    document.body.classList.toggle("no-scroll")
});

document.onclick = function(e){
    if(!btnMenu.contains(e.target) && !menu.contains(e.target)){
        menu.classList.remove("active")
        document.body.classList.remove("opacity")
        document.body.classList.remove("no-scroll")
    }
}

// Popup javascript
//Show popup on window load
// window.onload = () => {
//     document.querySelectorAll('body > *:not(.pop-up-container)')
//         .forEach(x => x.style.filter = 'blur(5px)')
//     document.querySelectorAll('.pop-up-container')[0].style.display = 'block'
// }

// // Close popup on btn click
// document.querySelector(".popup-exit").addEventListener('click', function(){
//     document.querySelectorAll('.pop-up-container')[0].style.display = "none"
//     document.querySelectorAll('body > *:not(.pop-up-container)')
//         .forEach(x => x.style.filter = 'blur(0)')
// })