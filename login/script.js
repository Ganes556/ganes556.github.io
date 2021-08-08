let login = {
  name: "GanesSatsangga",
  password: "123456",
};

$(document).ready(function () {
  $(".btn").click(function (e) {
    e.preventDefault();
    if ($("#floatingUsernameInput").val() === login.name && $("#floatingPasswordInput").val() === login.password) {
      location.replace("/dashboard");
      sessionStorage.setItem("user", $("#floatingUsernameInput").val());
      sessionStorage.setItem("pass", $("#floatingPasswordInput").val());
    } else {
      $(".form-control").addClass("is-invalid");
    }
  });
});
