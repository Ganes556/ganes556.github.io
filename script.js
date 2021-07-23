$("button.navbar-toggler").on("click", () => {
  $(".animation-x").toggleClass("open");
});

// type string
if ($("#typed-slider").length == 1) {
  let typed = new Typed("#typed-slider", {
    stringsElement: "#typed-strings",
    typeSpeed: 80,
    backDelay: 2000,
    backSpeed: 20,
    startDelay: 2200,
    loop: true,
  });
}
// var scrollSpy = bootstrap.ScrollSpy.getOrCreateInstance(scrollSpyContentEl);
// $(document).ready(() => {
//   $("body").each(function () {
//     var scrollSpy = new bootstrap.ScrollSpy(document.body, {
//       target: "#navbarNav",
//     });
//   });
// });
