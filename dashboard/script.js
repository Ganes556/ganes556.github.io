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
// end type string

// log out popup
$(".modal-footer .yes").click(function (e) {
  e.preventDefault();
  $.ajax({
    type: "POST",
    url: "logout.php",
    data: { logout: true },
    success: function (e) {
      if (e) {
        // window.location.replace("/uas-login-php");
        location.reload();
      }
    },
  });
});
// end log out popup
// form for contact me
$(".form-contact").on("submit", (e) => {
  e.preventDefault();
  $.ajax({
    type: "POST",
    url: "send-contact.php",
    data: $(".form-contact").serialize(),
    success: function (response) {
      if (response) {
      }
    },
  });
});
// end form for contact me

$(document).ready(function () {
  // navbar hamburger menu in android
  $("button.navbar-toggler").on("click", () => {
    $(".animation-x").toggleClass("open");
  });
  // end navbar hamburger menu in android
  // manual scrollspy
  const link_selector = ".nav-link";
  const link_page = "section";

  $(link_selector).removeClass("active");
  if (location.hash === "" || location.hash === "#undefined" || location.hash === "#home") {
    $("a[href='#home']").addClass("active");
    window.scrollTo(0, 0);
  } else {
    location.hash = localStorage["current-link"];
    $("a[href='" + location.hash + "']").addClass("active");
  }

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
  // end manual scrollspy
});
