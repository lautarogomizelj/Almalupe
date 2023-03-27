const navbar = document.querySelector(".seccion.abajo");
const logo = document.getElementById("logoAlmalupe");

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

/*----------------------------------------------------*/


let items = document.querySelectorAll('.carousel-item');
let currentItem = 0;
const itemsPerPage = 4;
let itemWidth = calculateItemWidth();

    function calculateItemWidth() {
        return items[0].getBoundingClientRect().width + parseInt(window.getComputedStyle(items[0]).marginRight);
    }

    function updateCarousel() {
        itemWidth = calculateItemWidth();
        items.forEach((item, index) => {
            item.style.transform = `translateX(-${currentItem * itemWidth}px)`;
        });
    }

    function moveToNextItem() {
        clearInterval(interval)
        
        if (currentItem < items.length - itemsPerPage) {
            currentItem += itemsPerPage;
        } else {
            currentItem = 0;
        }
        updateCarousel();

        interval = setInterval(moveToNextItem, 4000)
    }

    function moveToPrevItem() {
        clearInterval(interval)

        if (currentItem > 0) {
            currentItem -= itemsPerPage;
        } else {
            currentItem = items.length - itemsPerPage;
        }
        updateCarousel();

        interval = setInterval(moveToNextItem, 4000)
    }


    let prevButton = document.querySelector('.carousel-prev');
    let nextButton = document.querySelector('.carousel-next');

    prevButton.addEventListener('click', moveToPrevItem);
    nextButton.addEventListener('click', moveToNextItem);

    // window.addEventListener('resize', updateCarousel hola);

    window.addEventListener('resize',() => {    
        updateCarousel()
   });
    

    //haciendo el codigo para que se mueva automaticamente

    interval = setInterval(moveToNextItem, 4000)

