let resto = document.querySelector("#resto-bars");
let navbar = document.querySelector(".navbar");

resto.onclick = () => {
  resto.classList.toogle("fa-times");
  navbar.classList.toogle("active");
};

window.onscroll = () => {
  resto - classList.remove("fa-times");
  navbar.classList.remove("active");
};

document.querySelector("#search-iconos").onclick = () => {
  document.querySelector("#search-form").classList.toggle("active");
};

document.querySelector("#close").onclick = () => {
  document.querySelector("#search-form").classList.remove("active");
};

var swiper = new Swiper(".Inicio-slider", {
  spaceBetween: 30,
  centeredSlides: true,
  autoplay: { delay: 3000, disableOnInteraction: false },
  pagination: { el: ".swiper-pagination", clickable: true },
  loop: true,
});
