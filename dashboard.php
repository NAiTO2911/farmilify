<?php
session_start();
if(!isset($_SESSION['username'])) {
   header('location:logincontroller.php'); 
} else { 
   $username = $_SESSION['username']; 
}
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Fav Icon -->
    <link rel="icon" href="https://icon-library.com/images/farm-icon-png/farm-icon-png-7.jpg">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <!-- Local CSS -->
    <link rel="stylesheet" link href="style/dashboard.css">

    <!-- Import Font Awesome -->
    <script src="https://kit.fontawesome.com/97987cf7bc.js" crossorigin="anonymous"></script>

    <!-- Import Font Rosario -->
    <style>
      @import url('https://fonts.googleapis.com/css2?family=Rosario:wght@300&display=swap');
    </style>

    <!-- Title -->
    <title>Farmilify</title>
  </head>
  <body>
    <header>
       <!--Navbar -->
      <nav class="mb-1 navbar navbar-expand-lg navbar-dark default-color">
        <a class="navbar-brand" href="#">Farmilify</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent-333"
          aria-controls="navbarSupportedContent-333" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent-333">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="diskusi/category.php">Forum</a>
            </li>        
          </ul>
          <ul class="navbar-nav ml-auto nav-flex-icons">
            <li class="nav-item">
              <a class="nav-link waves-effect waves-light">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link waves-effect waves-light">
                <i class="fab fa-google-plus-g"></i>
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" id="navbarDropdownMenuLink-333" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="fas fa-user"></i>
              </a>
              <div class="dropdown-menu dropdown-menu-right dropdown-default"
                aria-labelledby="navbarDropdownMenuLink-333">
                <a class="dropdown-item" href="#">Edit Profile</a>
                <a class="dropdown-item" href="#"></a>
                <a class="dropdown-item text-danger" href="logout.php">Logout</a>
              </div>
            </li>
          </ul>
        </div>
      </nav>
      <!--/.Navbar -->
    </header>

    <body>
     <!--  <div class="container-fluid"></div>
        <div class="row">
          <div class="col-lg-12 text-center">          
            <img class="img-responsive" src="https://images.unsplash.com/photo-1439086245660-e617c4291020?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1567&q=80" alt="pic">    
              <div class="intro-text">
                    <span class="name">HEADING</span>
                    <hr class="star-light">
                    <span class="skills">TEXT</span>
              </div>
            </div>
          </div>
        </div> -->  

                  <div class="cover">
        <div class="container-fluid">
          <div class="row" 
               style="background:transparent url('https://images.unsplash.com/photo-1439086245660-e617c4291020?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1567&q=80') no-repeat center center /cover">
            <div class="col-lg-12 pt-5 pb-5">
              <div class="intro-text text-white">
                <span class="name"></span>
                <hr class="star-light">
                <span class="skills float-right text-light"><h2>Selamat Pagi <br>Anda lagi !</h2></span>
              </div>
            </div>
          </div>
        </div>
      </div>

      <br>

      <div class="container-fluid" style="margin-bottom: 90px;">
        <div class="row">
          <div class="col-md-3">
            <div class="card mb-4 ml-5">
              <img src="https://images.unsplash.com/photo-1549988476-8323b2c9a083?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="image" style="max-height: 180px;>
              <div class="card-body">
                <h5 class="card-title pt-2 pl-3">Time</h5>
                <hr>
                <p class="card-text pl-3"></p>
                <a href="#" class="btn btn-primary"></a>
              </div>
            </div>

            <div class="col-md-3">
              <div class="card">
                              <a class="weatherwidget-io" href="https://forecast7.com/en/n6d92107d62/bandung/" data-label_1="BANDUNG" data-label_2="WEATHER" data-theme="original" >BANDUNG WEATHER</a>
                <script>
                !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
                </script>
                <div class="card-body">
                  <h5 class="card-title pt-2 pl-3">Cuaca</h5>
                  <hr>
                  <p class="card-text pl-3"></p>
                  <a href="#" class="btn btn-primary">Go</a>
                </div>
              </div>

              <div class="col-md-3">
                <div class="card">
                  <img src="https://images.unsplash.com/photo-1549988476-8323b2c9a083?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="image" style="max-height: 180px;>
                  <div class="card-body">
                    <h5 class="card-title pt-2 pl-3">Siap di panen</h5>
                    <hr>
                    <p class="card-text pl-3"></p>
                    <a href="info_tani.html" class="btn btn-primary">Go</a>
                  </div>
                </div>

          </div>

          <br>

          <div class="row">
            <div class="col-md-3">
              <div class="card mb-4 ml-5">
                <img src="https://images.unsplash.com/photo-1549988476-8323b2c9a083?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="image" style="max-height: 180px;>
                <div class="card-body">
                  <h5 class="card-title pt-2 pl-3">Mau menanam apa?</h5>
                  <hr>
                  <p class="card-text pl-3"></p>
                  <a href="#" class="btn btn-primary">Go</a>
                </div>
              </div>
  
              <div class="col-md-3">
                <div class="card">
                  <img src="https://images.unsplash.com/photo-1549988476-8323b2c9a083?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="image" style="max-height: 180px;>
                  <div class="card-body">
                    <h5 class="card-title pt-2 pl-3">Kendala</h5>
                    <hr>
                    <p class="card-text pl-3"></p>
                    <a href="#" class="btn btn-primary">Go</a>
                  </div>
                </div>
  
                <div class="col-md-3">
                  <div class="card">
                    <img src="https://images.unsplash.com/photo-1549988476-8323b2c9a083?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=750&q=80" alt="image" style="max-height: 180px;>
                    <div class="card-body">
                      <h5 class="card-title pt-2 pl-3">Hasil panen</h5>
                      <hr>
                      <p class="card-text pl-3"></p>
                      <a href="hasil_panen.html" class="btn btn-primary">Go</a>
                    </div>
                  </div>
  
            </div>

        </div>
      </div>
      
    </body> 
       <!-- Footer -->
<footer class="page-footer font-small mdb-color fixed-bottom">

  <!-- Footer Links -->
  <div class="container-fluid  text-center text-md-left ">
    <!-- Grid row -->
    <div class="row d-flex align-items-center bg-dark text-white pt-3">

      <!-- Grid column -->
      <div class="col-md-7 col-lg-8">

        <!--Copyright-->
        <p class="text-center text-md-left">© 2020 Copyright :
          <a href="https://github.com/muhfelmi/farmilify" target="_blank">
            <strong>FARMILIFY Team</strong>
          </a>
        </p>

      </div>
      <!-- Grid column -->

      <!-- Grid column -->
      <div class="col-md-5 col-lg-4 ml-lg-0">

        <!-- Social buttons -->
        <div class="text-center text-md-right">
          <ul class="list-unstyled list-inline">
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1 text-white" a href="https://facebook.com/farmilify" target="_blank">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1 text-white" a href="https://instagram.com/farmilify" target="_blank">
                <i class="fab fa-instagram"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1 text-white" a href="https://twitter.com/farmilify" target="_blank">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a class="btn-floating btn-sm rgba-white-slight mx-1 text-white" a href="https://google.com/farmilify" target="_blank">
                <i class="fab fa-google-plus-g"></i>
              </a>
            </li>
          </ul>
        </div>

      </div>
      <!-- Grid column -->

    </div>
    <!-- Grid row -->

  </div>
  <!-- Footer Links -->

</footer>
<!-- Footer -->

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->
  </body>
</html>