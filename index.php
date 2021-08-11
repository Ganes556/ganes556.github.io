<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link rel="stylesheet" href="./login/style.css" />
    <link rel="icon" href="./login/img/logo.png">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
    <script src="./login/script.js"></script>
    <title>Login</title>
    
  </head>
  <body>   
    <?php session_start(); 
      if(isset($_SESSION['valid']) && $_SESSION['valid'] === true){        
        header('Location: /uas-login-php/dashboard');
      }
    ?>
  <!-- invalid popup -->
    <div class="modal fade" id="invalid" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="invalidLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header text-white" style="background: linear-gradient(95.26deg, #9d50bb 2.75%, #6935ba 120.79%);">
            <h5 class="modal-title" id="invalidLabel">Not Allowed!</h5>
            <button type="button" class="btn-exit" data-bs-dismiss="modal" aria-label="Close"> <i class="bi bi-x-lg"></i> </button>          
          </div>
          <div class="modal-body text-danger">          
          </div>
          <div class="modal-footer">
            <button type="button" class="btn-invalid" data-bs-dismiss="modal">Close</button>              
          </div>
        </div>
      </div>
    </div>
  <!-- end invalid popup -->
    <div class="container-fluid d-flex overflow-hidden position-relative" style="height: 100vh">
      <div class="container m-auto">
        <div class="row justify-content-center d-grid gap-2">
          <div class="col-12">
            <p class="login-text">Login.</p>
          </div>
          <div class="col-12 d-flex justify-content-center">
            <img width="200px" src="./login/img/logo.png" alt="" srcset="" />
          </div>
          <form  method="post" class="col-12 d-grid gap-3 mb-4">
            <div class="form-floating">
              <input type="text" class="form-control" id="floatingUsernameInput" placeholder="Username" name="username" />
              <label for="floatingUsernameInput">Username</label>
            </div>
            <div class="form-floating">
              <input type="password" class="form-control" id="floatingPasswordInput" placeholder="Password" name="password" />
              <label for="floatingPasswordInput">Password</label>
            </div>

              <button type="submit" class="btn text-white" name="submit">SIGN IN</button>   

          </form>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    
        
  </body>
</html>
