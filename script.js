function open_animation() {
  document.querySelector(".animation-x").classList.toggle("open");
}
// link_click and add the active class
const link_menu = document.querySelectorAll(".nav-link");
link_menu.forEach((e) => {
  e.addEventListener("click", () => {
    link_menu.forEach((d) => {
      d.classList.remove("active");
    });
    e.classList.add("active");
  });
});
