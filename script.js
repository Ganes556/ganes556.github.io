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

// manual scrollspy
$(document).ready(function () {
  let link_selector = ".nav-link";
  let link_page = "section";
  $(link_selector).removeClass("active");
  // if (location.hash === "") {
  //   $("a[href='#home']").addClass("active");
  // } else {
  // }
  location.hash = localStorage["current-link"];
  $("a[href='" + location.hash + "']").addClass("active");

  $(window).scroll(function () {
    let top = $(window).scrollTop();

    $(link_page).each(function () {
      let id = $(this).attr("id");
      let height = $(this).height();
      let offset = $(this).offset().top - 150;

      if (top === 0) {
        $(".nav-link").eq(0).addClass("active");
      } else if (top >= offset && top < offset + height) {
        localStorage["current-link"] = id;
        $(link_selector).removeClass("active");
        $("a[href='#" + id + "']").addClass("active");
      }
    });
  });
});
