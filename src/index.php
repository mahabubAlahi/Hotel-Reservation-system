<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/uikit.min.css">
   <link rel="stylesheet" href="css/font-awesome.min.css">
   <link rel="stylesheet" href="css/bootstrap.css">
   <link rel="stylesheet" href="scss/style.min.css">
   <link rel="shortcut icon" type="image/x-icon" href="img/icon.png">
  <title>Hotel Reservation System</title>
</head>
<body>
  <!-- Navigation -->
<nav class="navbar navbar-dark navbar-expand-md" uk-sticky="top: 100; animation: uk-animation-slide-top; bottom: #sticky-on-scroll-up">
 <div class="container">
   <a href="index.html" class="navbar-brand">
     <img src="img/icon.png" class="img-fluid" width="50" height="50" alt="M">
     <h3 class="d-inline align-middle">Hotel</h3>
   </a>
   <button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarNav">
     <span class="navbar-toggler-icon"></span>
   </button>
   <div id="navbarNav" class="collapse navbar-collapse">
     <ul class="navbar-nav ml-auto">
       <li class="nav-item active">
         <a class="nav-link" href="index.php">Home</a>
       </li>
       <li class="nav-item">
         <a class="nav-link" href="about.php">About Us</a>
       </li>
       <li class="nav-item">
         <a class="nav-link" href="services.php">Services</a>
       </li>
       <li class="nav-item">
         <a class="nav-link" href="registration.php">Register</a>
       </li>
       <li class="nav-item dropdown">
        <button class="btn btn-default btn-dark dropdown-toggle rounded" type="button" data-toggle="dropdown">Login
           <span class="caret"></span></button>
          <ul class="dropdown-menu bg-dark" role="menu" aria-labelledby="menu1">
            <li role="presentation"><a role="menuitem"  href="guestlogin.php">Guest</a></li>
            <li role="presentation"><a role="menuitem" href="adminlogin.php">Admin</a></li>
          </ul>
       </li>
     </ul>
    </div>
  </div>
</nav>


<!-- Carousel Slider -->
  <section id="showcase" class="bg-dark">
    <div id="myCarousel" class="carousel slide" data-ride="carousel">
      <ol class="carousel-indicators">
        <li data-slide-to="0" data-target="#myCarousel" class="active"></li>
        <li data-slide-to="1" data-target="#myCarousel"></li>
        <li data-slide-to="2" data-target="#myCarousel"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item carousel-img-1 active">
          <div class="container">
            <div class="carousel-caption mb-5 pb-5">
              <h2 class="display-4 text-success">Hotel Reservation</h2>
              <p class="lead my-4 text-success">Hotel reservation system allows users to compare hotel prices in just a few clicks from more than 400 booking sites for 1.8 million+ hotels in over 190 countries.</p>
              <a href="about.php" class="btn btn-danger">Learn More</a>
            </div>
          </div>
        </div>
        <div class="carousel-item carousel-img-2">
          <div class="container">
            <div class="carousel-caption mb-5 pb-5 text-right">
              <h2 class="display-4">Hotel Reservation</h2>
              <p class="lead my-4">Hotel reservation system allows users to compare hotel prices in just a few clicks from more than 400 booking sites for 1.8 million+ hotels in over 190 countries.</p>
              <a href="about.php" class="btn btn-success">Learn More</a>
            </div>
          </div>
        </div>
        <div class="carousel-item carousel-img-3">
          <div class="container">
            <div class="carousel-caption text-left text-light mb-5 pb-5">
              <h2 class="display-4 text-dark">Hotel Reservation</h2>
              <p class="lead my-4 text-dark">Hotel reservation system allows users to compare hotel prices in just a few clicks from more than 400 booking sites for 1.8 million+ hotels in over 190 countries.</p>
              <a href="about.php" class="btn btn-outline-light">Learn More</a>
            </div>
          </div>
        </div>
      </div>
      <a href="#myCarousel" class="carousel-control-prev pb-5" data-slide="prev">
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a href="#myCarousel" class="carousel-control-next pb-5" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    </div>
  </section>



      <!-- Home Icon -->

    <section id="home-icon" class="py-5 text-center">
          <div class="container">
            <div class="row">
              <div class="col-md-4">
                <i class="fa fa-hotel" style="font-size:36px"></i>
                <h3 class="my-2">Luxurious hotel</h3>
                <p class="lead">Hotel reservation system allows users to compare hotel prices in just a few clicks.</p>
              </div>
              <div class="col-md-4">
                <i class="fa fa-home" style="font-size:36px"></i>
                <h3 class="my-2">Beautiful rooms</h3>
                <p class="lead">Hotel reservation system allows users to compare hotel prices in just a few clicks.</p>
              </div>
              <div class="col-md-4">
                <i class="fa fa-cart-plus" style="font-size:36px"></i>
                <h3 class="my-2">Easy Money transfer</h3>
                <p class="lead">Hotel reservation system allows users to compare hotel prices in just a few clicks.</p>
              </div>
            </div>
          </div>
  </section>




<!--Home started--->
<section id="getstarted" class="py-5 text-center text-light">
    <div class="dark-overlay">
      <div class="container">
           <div class="row">
             <div class="col mt-5 pt-4">
                 <h3>Are you ready to get started?</h3>
                 <p class="lead">Hotel reservation system allows users to compare hotel prices in just a few clicks from more than 400 booking sites for 1.8 million+ hotels in over 190 countries.</p>
             </div>
           </div>
      </div>
    </div>

</section>

<!--Photo gallery-->

<section id="gallery" class="py-5 text-center" uk-lightbox>
    <div class="container">
      <div class="row">
        <div class="col">
          <h2>Photo Gallery</h2>
          <p class="lead">Check out our photos</p>
        </div>
      </div>
      <div class="row py-0 py-sm-3">
        <div class="col-md-4">
          <div>
            <a href="img/pic-1.jpg">
              <img src="img/pic-1.jpg" class="img-fluid" style="min-height:250px" alt="">
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div>
            <a href="img/pic-7.jpg">
              <img src="img/pic-7.jpg" class="img-fluid" style="min-height:250px" alt="">
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div>
            <a href="img/pic-3.jpg">
              <img src="img/pic-3.jpg" class="img-fluid" style="min-height:250px" alt="">
            </a>
          </div>
        </div>
      </div>
      <div class="row py-0 py-sm-2">
        <div class="col-md-4">
          <div>
            <a href="img/pic-4.jpg">
              <img src="img/pic-4.jpg" class="img-fluid" style="min-height:250px" alt="">
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div>
            <a href="img/pic-5.jpg">
              <img src="img/pic-5.jpg" class="img-fluid" style="min-height:250px" alt="">
            </a>
          </div>
        </div>
        <div class="col-md-4">
          <div>
            <a href="img/pic-8.jpg">
              <img src="img/pic-8.jpg" class="img-fluid" style="min-height:250px" alt="">
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!--Founders-->

  <section id="authors1" class="text-center py-5">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <div class="info-authors mb-5 pb-3">
            <h2 class="display-4 text-primary">Meet The Founders </h2>
            <p class="lead mt-3">Here is the list of the founders of Hotel Reservation System. </p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6 col-md-12 col-sm-12">
          <div class="card">
            <div class="card-body">
              <img src="img/person-1.jpg" class="img-fluid rounded-circle w-50 mb-3" alt="Mahabub Alahi">
              <h3 >Mahabub Alahi</h3>
              <h5>Lead Founder</h5>
              <p class="lead">Mahabub Alahi is the lead founder of this Hotel Reservation System.He is the student of a renowned university named as University Of Asia Pacific.</p>
              <div class="d-flex flex-row justify-content-center">
                <div class="p-4">
                  <a href="#"><i class="fa fa-facebook" style="font-size:36px"></i></a>
                </div>
                <div class="p-4">
                  <a href="#"><i class="fa fa-twitter" style="font-size:36px"></i></a>
                </div>
                <div class="p-4">
                  <a href="#"><i class="fa fa-linkedin" style="font-size:36px"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-12 col-sm-12">
          <div class="card">
            <div class="card-body">
              <img src="img/person-2.jpg" class="img-fluid rounded-circle w-50 mb-3" alt="K.M Ashrafuzzaman">
              <h3 >K.M Ashrafuzzaman</h3>
              <h5>Co-Founder</h5>
              <p class="lead">K.M Ashrafuzzaman is the co founder of this Hotel Reservation System.He is the student of a renowned university named as University Of Asia Pacific.</p>
              <div class="d-flex flex-row justify-content-center">
                <div class="p-4">
                  <a href="#"><i class="fa fa-facebook" style="font-size:36px"></i></a>
                </div>
                <div class="p-4">
                  <a href="#"><i class="fa fa-twitter" style="font-size:36px"></i></a>
                </div>
                <div class="p-4">
                  <a href="#"><i class="fa fa-linkedin" style="font-size:36px"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>



<!--footer-->

<footer id="footer-main" class="py-5 bg-dark text-center text-light">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <p class="lead">Copyright @ 2019 Hotel Reservation System</p>
        <span class="lead">Designed by: Mahabub Alahi and K.M Ashrafuzzaman</span>
      </div>
    </div>
  </div>
</footer>






    <script src="js/jquery.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>
</body>
</html>
