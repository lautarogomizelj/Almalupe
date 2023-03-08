const slider = document.getElementById("slider")
let sliderSection = document.querySelectorAll(".slider__section")
let sliderSection_Last = sliderSection[sliderSection.length - 1]

const btnLeft = document.getElementById("btn-left")
const btnRigth = document.getElementById("btn-rigth")

slider.insertAdjacentElement('afterbegin', sliderSection_Last)

function moverDerecha(){
    let sliderSection_First = document.querySelectorAll(".slider__section")[0]
    slider.style.marginLeft = "-200%"
    slider.style.transition = "all 500ms"

    setTimeout(function(){
        slider.style.transition = "none"
        slider.insertAdjacentElement('beforeend', sliderSection_First)
        slider.style.marginLeft = "-100%"
    },500);
}

function moverIzquierda(){
    let sliderSection = document.querySelectorAll(".slider__section")
    let sliderSection_Last = sliderSection[sliderSection.length - 1]
    slider.style.marginLeft = "0%"
    slider.style.transition = "all 500ms"

    setTimeout(function(){
        slider.style.transition = "none"
        slider.insertAdjacentElement('afterbegin', sliderSection_Last)
        slider.style.marginLeft = "-100%"
    },500);
}

let movimiento;


btnRigth.onclick = function(){
    moverDerecha()
};


btnLeft.onclick = function(){
    moverIzquierda()
};

// movimiento = setInterval(function(){
//     moverDerecha()

// },3000)