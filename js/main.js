
AOS.init();
var swiper = new Swiper(".mySwiper", {
    spaceBetween: 30,
    effect: "slide",
    speed: 1000,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    loop: true,
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
        simulateTouch: false,
    },
});
var swiper = new Swiper(".mySwiper2", {
    spaceBetween: 30,
    effect: "fade",
    speed: 1000,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    loop: true,
    autoplay: {
        delay: 5000,
        disableOnInteraction: false,
        simulateTouch: false,
    },
});
var acc = document.getElementsByClassName("accordian__heading");
var i;

for (i = 0; i < acc.length; i++) {
    acc[i].addEventListener("click", function () {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.maxHeight) {
            panel.style.maxHeight = null;
        } else {
            panel.style.maxHeight = panel.scrollHeight + "px";
        }
    });
}
let menu = document.querySelectorAll(".header  nav .list__item");
for (let i = 0; i < menu.length; i++) {

    if (menu[i].children[1]) {

        if (menu[i].children[1].className = "subMenu") {

            menu[i].children[0].classList.add("after");

        }


    }
}
// -----------------------header Fixed ------------------
window.addEventListener("scroll", (event) => {
    let scroll = this.scrollY;

    if (scroll > 1000) {

        var header = document.querySelector("header");
        header.classList.add("fixed");
    } else {
        var header = document.querySelector("header");
        header.classList.remove("fixed");
    }
});

jQuery(document).ready(function($) {
    $("#menu").mmenu({
        "extensions": ["effect-menu-zoom", "effect-panels-zoom", "pagedim-black", "theme-dark"],
        "offCanvas": {
            "position": "right"
        },
        "counters": true,
        "iconPanels": true,
        "navbars": [{
            "position": "top"
        }]
    });
});
// menu close



let form = document.getElementById('form');

document.getElementById("cb-img").addEventListener("click", function(event){
  event.preventDefault();
  form.classList.add("request_active");
});


document.getElementById("cb-form").addEventListener("click", function(event){
    event.preventDefault();
    form.classList.remove("request_active");
  });
  