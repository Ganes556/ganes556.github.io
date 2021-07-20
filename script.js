const navbarToggler = document.querySelector("button.navbar-toggler");
const spanToggler = document.querySelector(".animation-x");
navbarToggler.addEventListener("click", () => {
  spanToggler.classList.toggle("open");
});

// link_click and add the active class
// const link_menu = document.querySelectorAll(".nav-link");
// link_menu.forEach((e) => {
//   e.addEventListener("click", () => {
//     link_menu.forEach((d) => {
//       d.classList.remove("active");
//     });
//     e.classList.add("active");
//   });
// });
