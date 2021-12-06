//slider
document.addEventListener("DOMContentLoaded", function() {
    var mySwiper = new Swiper('.swiper-container', {
        loop: true,
        pagination: {
            el: '.swiper-pagination' ,
            clickable: true
        },
        paginationClickable: true,
        navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev'
        }
    });
});


/*
let searchForm = document.querySelector('.search-form');
let shoppingCart = document.querySelector('.shopping-cart');

document.querySelector('#search-btn').onclick = () =>{
    searchForm.classList.toggle('active');

}
*/

let loginForm = document.querySelector('.login-form-container');
let signupForm = document.querySelector('.signup-form-container');

document.querySelector('#login-btn').onclick = () =>{
  loginForm.classList.toggle('active');
}
document.querySelector('#close-login-btn').onclick = () =>{
  loginForm.classList.remove('active');
}
document.querySelector('#signup-btn').onclick = () =>{
  signupForm.classList.toggle('active');
}
document.querySelector('#close-signup-btn').onclick = () =>{
  signupForm.classList.remove('active');
}
document.querySelector('#signup-btn-close').onclick = () =>{
  signupForm.classList.remove('active');
}
document.querySelector('#signup-to-login').onclick = () =>{
  signupForm.classList.remove('active');
  loginForm.classList.toggle('active');
}
document.querySelector('#login-to-signup').onclick = () =>{
  signupForm.classList.toggle('active');
  loginForm.classList.remove('active');
}
function myfn() {
  var myobj = document.getElementById("fav");
  myobj.remove();
}
//review slider
var swiper = new Swiper(".review-slider", {
    loop:true,
    spaceBetween: 20,
    autoplay: {
        delay: 7500,
        disableOnInteraction: false,
    },
    centeredSlides: true,
    breakpoints: {
      0: {
        slidesPerView: 1,
      },
      768: {
        slidesPerView: 2,
      },
      1020: {
        slidesPerView: 3,
      },
    },
});

//doctors slider
var doc_swiper = new Swiper(".doctor_list", {
  loop:true,
  spaceBetween: 20,
  autoplay: {
      delay:800,
      disableOnInteraction: false,
  },
  centeredSlides: true,
  breakpoints: {
    0: {
      slidesPerView: 1,
    },
    252: {
      slidesPerView: 2,
    },
    512: {
      slidesPerView: 3,
    },
    1024: {
      slidesPerView: 5,
    },
  },
});

//counter part
jQuery(document).ready(function($) {
  $('.counters').counterUp({
      delay: 10,
      time: 1000
  });
});
