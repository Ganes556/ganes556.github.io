<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <!-- Bootstrap Icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" />
    <!-- Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;700&family=Oxygen&display=swap" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <!-- CSS custom-->
    <link rel="stylesheet" href="style.css" />
    <!-- CDN aos -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />
    <!-- CDN typed -->
    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
    <!-- CDN jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="icon" href="../login/img/logo.png">
    <title>My CV | Ganes Satsangga</title>
  </head>
  <body class="position-relative">
    <?php
      session_start();
      if(empty($_SESSION['valid']) || $_SESSION['valid'] !== true) {        
        header("Location: /uas-login-php");
      }
    ?>
    <!-- navbar start -->
    <nav class="navbar navbar-expand-md navbar-dark fixed-top" style="background-color: #8675a9">
      <div class="container">
        <a class="navbar-brand text-uppercase fs-6" style="letter-spacing: 3px" href="#"> <img width="30px" src="../login/img/logo.png" alt="" /> Ganes Satsangga</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <div class="animation-x d-flex flex-column gap-1">
            <span></span>
            <span></span>
            <span></span>
          </div>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link" href="#home">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about-me">About me</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#contact-me">Contact me</a>
            </li>
            <li class="nav-item log-out">
              <a class="nav-link fw-bold"  data-bs-toggle="modal" href="#check" role="button">Log Out</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- navbar end -->

    <!-- popup log-out checked -->
    <div class="modal fade" id="check" tabindex="-1" aria-labelledby="checkLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Log Out</h5>
            <button type="button" class="btn-exit" data-bs-dismiss="modal" aria-label="Close"> <i class="bi bi-x-lg"></i> </button>   
          </div>
          <div class="modal-body">
            Do You Want to Log Out?
          </div>
          <div class="modal-footer">
            <button type="button" class="btn no" style="padding: 5px 30px;" data-bs-dismiss="modal">No</button>
            <button type="button" class="btn yes" style="padding: 5px 30px;">Yes</button>
          </div>
        </div>
      </div>
    </div>
    <!-- end popup log-out checked -->

    <!-- jumbotron start -->
    
    <section class="jumbotron text-center text-white" id="home">
      <img data-aos="fade-up" data-aos-once="true" data-aos-duration="1000" class="rounded-circle img-thumbnail" src="./img/img.png" alt="Ganes Satsangga" srcset="" style="width: 200px" />
      <h1 data-aos="fade-up" data-aos-once="true" data-aos-delay="1000" data-aos-duration="1200" class="display-4" style="font-family: 'Montserrat', sans-serif">Ganes Satsangga</h1>
      <div id="typed-strings">
        <p class="lead">A College Student in ITB Stikom Bali Renon</p>
        <p class="lead">NIM 200030794</p>
        <p class="lead">For Middle Test & The end-semester exam For Perancangan Web Learning Subject</p>
        <p class="lead">From Class BA193</p>
        <p class="lead">Sistem Information Department</p>
      </div>
      <p id="typed-slider" class="lead d-inline"></p>

      <!-- <span id="typed-slider"></span> -->

      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#fff"
          fill-opacity="1"
          d="M0,128L60,149.3C120,171,240,213,360,240C480,267,600,277,720,245.3C840,213,960,139,1080,106.7C1200,75,1320,85,1380,90.7L1440,96L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- jumbotron end -->

    <!-- about us start-->
    <section id="about-me">
      <!-- Title about -->
      <div class="container">
        <div class="row text-center mb-4">
          <div class="col-12">
            <h2 data-aos="fade-up" data-aos-duration="1000">About Me</h2>
          </div>
        </div>
        <!-- Contex about -->
        <div class="row justify-content-center text-center">
          <div class="col-lg-6 col-md-7 col-sm-10 col-12">
            <p data-aos="fade-up" data-aos-duration="1200">Hey, My name is <strong>I Gusti Agung Ganes Satsangga Dipa</strong>, you can call me Ganes, I am 20 years old with birthday at 20 april 2002 and I was born in Klungkung Bali.</p>
          </div>
        </div>
        <!-- Title skill -->
        <div class="row justify-content-center">
          <div class="col-6 text-center fs-5">
            <p data-aos="fade-up" data-aos-duration="1600">Skills</p>
          </div>
        </div>
        <!-- Python -->
        <div class="row justify-content-center gap-3">
          <div class="col-2 col-md-1">
            <h5 data-aos="zoom-in-right" data-aos-duration="1000">Python</h5>
          </div>

          <div class="col-lg-4 col-md-6 ms-4 col-8 align-self-center">
            <div class="progress">
              <div class="progress-bar bg-success" data-aos-duration="800" data-aos-id="python" data-aos="zoom-in-right" role="progressbar" style="width: 60%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">60%</div>
            </div>
          </div>
        </div>
        <!-- Html -->
        <div class="row justify-content-center gap-3">
          <div class="col-2 col-md-1">
            <h5 data-aos="zoom-in-right" data-aos-duration="1200">Html</h5>
          </div>

          <div class="col-lg-4 col-md-6 ms-4 col-8 align-self-center">
            <div class="progress">
              <div class="progress-bar bg-success" data-aos-duration="1000" data-aos="zoom-in-right" role="progressbar" style="width: 50%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">50%</div>
            </div>
          </div>
        </div>
        <!-- CSS3 -->
        <div class="row justify-content-center gap-3">
          <div class="col-2 col-md-1">
            <h5 data-aos="zoom-in-right" data-aos-duration="1400">CSS3</h5>
          </div>
          <div class="col-lg-4 col-md-6 ms-4 col-8 align-self-center">
            <div class="progress">
              <div class="progress-bar bg-success" data-aos-duration="1200" data-aos="zoom-in-right" role="progressbar" style="width: 40%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">40%</div>
            </div>
          </div>
        </div>
        <!-- JavaScript -->
        <div class="row justify-content-center gap-3">
          <div class="col-2 col-md-1">
            <h5 data-aos="zoom-in-right" data-aos-duration="1600">JavaScript</h5>
          </div>
          <div class="col-lg-4 col-md-6 ms-4 col-8 align-self-center">
            <div class="progress">
              <div class="progress-bar bg-success" data-aos-duration="1400" data-aos="zoom-in-right" role="progressbar" style="width: 20%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">20%</div>
            </div>
          </div>
        </div>
        <!-- Bootstrap -->
        <div class="row justify-content-center gap-3">
          <div class="col-2 col-md-1">
            <h5 data-aos="zoom-in-right" data-aos-duration="1800">Bootstrap</h5>
          </div>
          <div class="col-lg-4 col-md-6 ms-4 col-8 align-self-center">
            <div class="progress">
              <div class="progress-bar bg-success" data-aos-duration="1600" data-aos="zoom-in-right" role="progressbar" style="width: 30%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">30%</div>
            </div>
          </div>
        </div>
      </div>

      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#c3aed6"
          fill-opacity="1"
          d="M0,32L48,64C96,96,192,160,288,165.3C384,171,480,117,576,90.7C672,64,768,64,864,96C960,128,1056,192,1152,208C1248,224,1344,192,1392,176L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- about us end -->

    <!-- contact me start -->
    <section id="contact-me">
      <div class="container">
        <div class="row text-center">
          <div class="col">
            <h2 data-aos="zoom-in-up">Contact Me</h2>
          </div>
        </div>
        <div class="row justify-content-center mt-5">
          <div class="col-8">
            <form data-aos="zoom-in-up" class="form-contact">
              <div class="mb-3">
                <label for="nama-lengkap" class="form-label">Nama Lengkap</label>
                <input type="text" class="form-control" id="nama-lengkap" aria-describedby="nama-lengkap" />
              </div>
              <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" aria-describedby="email" />
              </div>
              <div class="mb-3">
                <label for="comments" class="form-label">Comments</label>
                <textarea class="form-control" placeholder="Leave a comment here!" id="comments" style="height: 200px"></textarea>
              </div>
              <button type="submit" class="btn btn-primary">Send</button>
            </form>
          </div>
        </div>
      </div>
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path
          fill="#8675a9"
          fill-opacity="1"
          d="M0,288L60,266.7C120,245,240,203,360,208C480,213,600,267,720,256C840,245,960,171,1080,165.3C1200,160,1320,224,1380,256L1440,288L1440,320L1380,320C1320,320,1200,320,1080,320C960,320,840,320,720,320C600,320,480,320,360,320C240,320,120,320,60,320L0,320Z"
        ></path>
      </svg>
    </section>
    <!-- contact me end -->

    <!-- footer start -->
    <footer class="text-white text-center pb-3" style="background-color: #8675a9">
      <p>Create with <i class="bi bi-heart-fill text-danger"></i> by <a href="instagram.com/slashrootctf/" class="fw-bold text-white text-decoration-none">Ganes Satsangga</a></p>
    </footer>
    <!-- footer end -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="./script.js"></script>
    <!-- import aos library for set the scroll animation -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
      AOS.init();
    </script>
  </body>
</html>
