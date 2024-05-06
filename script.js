document.addEventListener('DOMContentLoaded', () => {
    const wrapper = document.querySelector('#login-popup');
    const loginLink = document.querySelector('.login-link');
    const registerLink = document.querySelector('.register-link');
    const btnPopup = document.querySelector('.login_btn');
    const iconClose = document.querySelector('.icon-close');


    registerLink.addEventListener('click', () => {
        wrapper.classList.add('active');
    });

    loginLink.addEventListener('click', () => {
        wrapper.classList.remove('active');
    });

    btnPopup.addEventListener('click', () => {
        wrapper.classList.add('active-popup');
        
    });

    iconClose.addEventListener('click', () => {
        wrapper.classList.remove('active-popup');
        wrapper.classList.remove('active');
    });
});

//Header Scroll
window.addEventListener('scroll', function() {
    var header = document.querySelector('.header');
    if (window.scrollY > 0) {
        header.classList.add('header-scrolled');
    } else {
        header.classList.remove('header-scrolled');
    }
});

//Closes Login and Register
document.addEventListener('DOMContentLoaded', function() {
    const closeIcons = document.querySelectorAll('.icon-close');

    closeIcons.forEach(icon => {
        icon.addEventListener('click', function() {
            // Find the closest modal and close it
            const modal = icon.closest('.modal');
            const modalInstance = bootstrap.Modal.getInstance(modal);
            modalInstance.hide();
        });
    });
});



//Header and Navbar
document.addEventListener("DOMContentLoaded", function() {
    const menuIcon = document.getElementById("menu-icon");
    const closeIcon = document.getElementById("close-icon");
    const header = document.querySelector(".header");
    const navbar = document.querySelector(".navbar");
    let isMenuOpen = false;

    menuIcon.addEventListener("click", function() {
 
        isMenuOpen = !isMenuOpen;

        if (isMenuOpen) {
            header.style.backgroundColor = "var(--background-color)";
            navbar.style.backgroundColor = "var(--background-color)";
        } else {
            header.style.backgroundColor = "transparent";
            navbar.style.backgroundColor = "transparent";
        }
    });

    closeIcon.addEventListener("click", function() {
        isMenuOpen = false;
        header.style.backgroundColor = "transparent";
        navbar.style.backgroundColor = "transparent";
    });

 
    menuIcon.addEventListener("mouseover", function() {
        if (!isMenuOpen) {
            menuIcon.style.color = "var(--main-color)";
        }
    });

    menuIcon.addEventListener("mouseout", function() {
        if (!isMenuOpen) { 
            menuIcon.style.color = "var(--text-color)";
        }
    });

    closeIcon.addEventListener("mouseover", function() {
        closeIcon.style.color = "var(--main-color)";
    });

    closeIcon.addEventListener("mouseout", function() {
        closeIcon.style.color = "var(--text-color)";
    });
});

//navbar scroll events
const navbar = document.querySelector('.header');

function toggleNavbarBackground() {
    if (window.scrollY > 0) {
        navbar.classList.add('navbar-scrolled');
    } else {
        navbar.classList.remove('navbar-scrolled');
    }
}
window.addEventListener('scroll', toggleNavbarBackground);

//login & register
document.addEventListener('DOMContentLoaded', () => {
    const btnLogin = document.querySelector('.login_btn');
    const btnClose = document.querySelector('.wrapper .icon-close');
    const showRegister = document.querySelector('.register-link');
    const showLogin = document.querySelector('.login-link');
    const wrapper = document.querySelector(".wrapper");

    btnLogin.addEventListener('click', function(){
        wrapper.classList.add('active-popup');
        wrapper.classList.remove('active');
    });

    btnClose.addEventListener('click', function(){
        wrapper.classList.remove('active-popup');
    });

    showRegister.addEventListener('click', function(){
        wrapper.classList.add('active');
    });

    showLogin.addEventListener('click', function(){
        wrapper.classList.remove('active');
    });

});

//carousel
var swiper = new Swiper(".home", {
    spaceBetween: 30,
    centeredSlides: true,
    autoplay: {
      delay: 4000,
      disableOnInteraction: false,
    },
    speed: 1500,
    pagination: {
      el: ".swiper-pagination",
      clickable: true,
    },
  });

  //now showing
//   var swiper = new Swiper(".upcoming-slider", {
//     slidesPerView: 4,
//     spaceBetween: 20,
//     pagination: {
//       el: ".swiper-pagination",
//       clickable: false,
//     },
//   });

//coming 
var swiper = new Swiper(".upcoming-slider", {
    spaceBetween: 20,
    loop: true,
    centeredSlides: true,
    autoplay: {
        delay: 300, // Set autoplay delay to control the pace of the slider
        disableOnInteraction: false,
    },
    speed: 800, // Set the speed of transition between slides
    breakpoints: {
        0: {
            slidesPerView: 2,
        },
        568: {
            slidesPerView: 3,
        },
        768: {
            slidesPerView: 4,
        },
        968: {
            slidesPerView: 5,
        },
    },
    // Pause autoplay when mouse enters the slider
    on: {
        init: function () {
            this.el.addEventListener('mouseenter', function () {
                swiper.autoplay.stop();
            });
            this.el.addEventListener('mouseleave', function () {
                swiper.autoplay.start();
            });
        },
    },
});