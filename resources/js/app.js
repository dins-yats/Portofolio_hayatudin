import "./bootstrap";

// fixed navbar
window.onscroll = function () {
    const header = document.querySelector("header");
    const fixednav = header.offsetTop;
    const balik = document.querySelector("#balikatas");

    if (window.pageYOffset > fixednav) {
        header.classList.add("navbar-fixed");
        balik.classList.remove("hidden");
        balik.classList.add("block");
    } else {
        header.classList.remove("navbar-fixed");
        balik.classList.remove("block");
        balik.classList.add("hidden");
    }
};

// burger dan nav
const burger = document.querySelector("#burger");
const navmenu = document.querySelector("#nav-menu");

burger.addEventListener("click", function () {
    burger.classList.toggle("burger-active");
    navmenu.classList.toggle("hidden");
});

// tutup burger dimana sja
window.addEventListener("click", function (e) {
    if (e.target != navmenu && e.target != burger) {
        burger.classList.remove("burger-active");
        navmenu.classList.add("hidden");
    }
});

// dark mode js
const checkbox = document.querySelector("#pindah");
const html = document.querySelector("html");
checkbox.addEventListener("click", function () {
    if (checkbox.checked) {
        html.classList.add("dark");
        localStorage.theme = "dark";
    } else {
        html.classList.remove("dark");
        localStorage.theme = "light";
    }

    // checkbox.checked
    //     ? html.classList.add("dark")
    //     : html.classList.remove("dark");
});

// pindah sesuai mode
if (
    localStorage.theme === "dark" ||
    (!("theme" in localStorage) &&
        window.matchMedia("(prefers-color-scheme: dark)").matches)
) {
    checkbox.checked = true;
} else {
    checkbox.checked = false;
    // document.documentElement.classList.remove("dark");
}

// typing text

import Typed from "typed.js";

var options = {
    strings: ["Web Developer", "Freelancer", "VB net Developer"],
    typeSpeed: 100,
    backSpeed: 100,
    loop: true,
};

var typed = new Typed(".gado", options);

// import Typed from "typed.js";
// const typed = new Typed("#gado", {
//     strings: [],
//     typeSpeed: 100,
//     backSpeed: 50,
// });
// var typed = new Typed('#element', {
//     strings: ['<i>First</i> sentence.', '&amp; a second sentence.'],
//     typeSpeed: 50,
//   });

//

// import Swiper bundle with all modules installed
import Swiper from "swiper/bundle";
import "swiper/css";
import "swiper/css/navigation";
import "swiper/css/pagination";

// import styles bundle
// import "swiper/css/bundle";
const swiper = new Swiper(".swiper", {
    loop: true,
    spaceBetween: 32,
    grabCursor: true,

    pagination: {
        el: ".swiper-pagination",
        clickable: true,
        // dynamicBullets: true,
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
    },

    breakpoints: {
        600: {
            slidesPerView: 2,
        },
        968: {
            slidesPerView: 3,
        },
    },
});

import AOS from "aos";
import "aos/dist/aos.css";
AOS.init();
