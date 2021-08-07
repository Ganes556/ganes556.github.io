<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <title>Login</title>
    <style>
      :root {
        --border-color: #d7d7d7;
        --placeholder-color: #9c9c9c;
      }
      * {
        font-family: "Montserrat", sans-serif !important;
        font-weight: 700 !important;
      }
      .container-fluid {
        background-image: url("img/background.png");
        background-size: cover;
      }

      .container {
        width: 400px;
        height: 600px;
        position: relative;
        border: 1px solid var(--border-color);
        border-radius: 40px;
        background-color: white;
      }
      .content-login {
        z-index: 2;
        position: relative;
      }
      .login-text {
        text-align: center;
        margin: 20px;
        font-size: 30px;
        text-transform: uppercase;
      }
      .btn {
        background: linear-gradient(95.26deg, #9d50bb 2.75%, #6935ba 120.79%);
        border-radius: 15px;
        width: 300px;
        height: 56px;
      }
      .btn:focus {
        box-shadow: 0 0 10px var(--border-color);
      }
      .form-control,
      .form-control:focus {
        border: 5px solid var(--border-color);
        color: gray;
      }
      .form-control {
        width: 300px !important;
        height: 56px;
        border-radius: 15px !important;
      }
      .form-control:focus {
        box-shadow: 0 0 5px var(--border-color);
      }
      .form-control::placeholder,
      label {
        color: var(--placeholder-color);
        font-weight: 500 !important;
      }
    </style>
  </head>
  <body>
    <?php
      $user = $_GET['username'];
      $pass = $_GET['password'];
      if($user === "gustiganes" && $pass === "12345"){
        session_start();
        
      }
    ?>
    <div class="container-fluid d-flex overflow-hidden" style="height: 100vh">
      <div class="container m-auto">
        <div class="content-login">
          <p class="login-text">Login.</p>
          <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?></form>" class="row gap-3 d-grid justify-content-center">
            <div class="col-12 d-flex justify-content-center">
              <img width="200px" src="./img/logo.png" alt="" srcset="" />
            </div>
            <div class="col-12">
              <div class="form-floating">
                <input type="text" class="form-control" id="floatingUsernameInput" placeholder="Username" name="username" />
                <label for="floatingUsernameInput">Username</label>
              </div>
            </div>
            <div class="col-12">
              <div class="form-floating">
                <input type="password" class="form-control" id="floatingPasswordInput" placeholder="Password" name="password"/>
                <label for="floatingPasswordInput">Password</label>
              </div>
            </div>
            <div class="col-12 mt-3">
              <button class="btn text-white">SIGN IN</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  </body>
</html>
