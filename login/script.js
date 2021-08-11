$(document).ready(function () {
  $("form").on("submit", function (e) {
    e.preventDefault();
    $.ajax({
      type: "post",
      url: "login.php",
      data: $("form").serialize(),
      dataType: "json",
      success: function (e) {
        if (e["valid"]) {
          window.location.replace("/uas-login-php/dashboard/index.php");
        } else if (e["empty"]) {
          $("#invalid").modal("show");
          $(".modal-body").html("Empty Username or Password!");
        } else {
          $("#invalid").modal("show");
          $(".modal-body").html("Invalid Username or Password!");
        }
      },
    });
  });
});
