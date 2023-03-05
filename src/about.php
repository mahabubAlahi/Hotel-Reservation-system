<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="scss/style.min.css">
  <link rel="shortcut icon" type="image/x-icon" href="img/icon.png">
  <title>Hotel</title>
</head>
<body>
 <!-- Navigation -->
 <nav class="navbar navbar-dark navbar-expand-md" >
  <div class="container">
    <a href="index.php" class="navbar-brand">
      <img src="img/icon.png" class="img-fluid" width="50" height="50" alt="M">
      <h3 class="d-inline align-middle">Hotel</h3>
    </a>
    <button class="navbar-toggler navbar-toggler-right" data-toggle="collapse" data-target="#navbarNav">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div id="navbarNav" class="collapse navbar-collapse">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="index.php">Home</a>
        </li>
        <li class="nav-item active">
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

  <header id="page-header">
    <div class="container">
      <div class="row">
        <div class="col-md-6 m-auto text-center text-dark">
          <h1>About Us</h1>
          <p class="lead">Hotel reservation system allows users to compare hotel prices in just a few clicks from more than 400 booking sites for 1.8 million+ hotels in over 190 countries.</p>
        </div>
      </div>
    </div>
  </header>
  <!-- About Section -->
  <section id="about" class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-6 align-self-center text-justify">
          <h2>What We Do</h2>
          <p class="lead">Hotel reservation system allows users to compare hotel prices in just a few clicks from more than 400 booking sites for 1.8 million+ hotels in over 190 countries. With 1.4 billion visits annually to our site, travelers regularly use the hotel comparison to compare deals in the same city.</p>
          <p class="lead">Get information for trips to cities like Las Vegas or Orlando and you can find the right hotel on trivago quickly and easily. New York City and its surrounding area are great for trips that are a week or longer with the numerous hotels available.</p>
        </div>
        <div class="col-md-6 text-center">
          <img src="img/image2.jpeg" class="img-fluid rounded-circle" alt="">
        </div>
      </div>
    </div>
  </section>

  <!-- Icon Boxes -->
  <section id="icon-boxes" class="py-5 text-center text-light">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="card bg-success">
            <div class="card-body">
              <i class="fa fa-envelope mb-3" style="font-size: 30px;"></i>
              <h3>Hotels list</h3>
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla quasi magni placeat.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card bg-primary">
            <div class="card-body">
              <i class="fa fa-car mb-3" style="font-size: 30px;"></i>
              <h3>Hotels route</h3>
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla quasi magni placeat.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card bg-danger">
            <div class="card-body">
              <i class="fa fa-play mb-3" style="font-size: 30px;"></i>
              <h3>Hotels video</h3>
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla quasi magni placeat.</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row pt-4">
        <div class="col-md-4">
          <div class="card bg-light text-dark">
            <div class="card-body">
              <i class="fa fa-tree mb-3" style="font-size: 30px;"></i>
              <h3>Hotels envirnoment</h3>
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla quasi magni placeat.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card bg-dark">
            <div class="card-body">
              <i class="fa fa-cart-plus mb-3" style="font-size: 30px;"></i>
              <h3>Hotels malls</h3>
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla quasi magni placeat.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 text-dark">
          <div class="card bg-warning">
            <div class="card-body">
              <i class="fa fa-youtube mb-3" style="font-size: 30px;"></i>
              <h3>Hotels youtube</h3>
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla quasi magni placeat.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Testimonial -->
  <section id="testimonial" class="py-5 bg-light">
    <div class="container">
      <div class="row">
        <div class="col">
          <h2 class="text-center">Testimonial</h2>
          <div class="row px-5">
            <div class="col">
              <div class="slider my-3">
                  <div>
                    <blockquote class="blockquote">
                      <p class="lead mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis maiores, eius amet dolor reprehenderit iste!</p>
                      <footer class="blockquote-footer">
                        Mahabub Alahi From <a href="http://www.uap-bd.edu">UAP</a>
                      </footer>
                    </blockquote>
                  </div>
                  <div>
                    <blockquote class="blockquote">
                      <p class="lead mb-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officiis maiores, eius amet dolor reprehenderit iste!</p>
                      <footer class="blockquote-footer">
                        K.M Ashrafuzzaman From <a href="http://www.uap-bd.edu">UAP</a>
                      </footer>
                    </blockquote>
                  </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer id="copyright" class="py-3 text-primary text-center bg-dark">
    <div class="container">
      <div class="row">
        <div class="col">
          <p class="lead mb-0">Copyright 2019 © Mahabub Alahi and K.M Ashrafuzzaman</p>
        </div>
      </div>
    </div>
  </footer>

  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/uikit.min.js"></script>
  <script src="js/uikit-icons.min.js"></script>
  <script src="js/slick.js"></script>
  <script src="js/main.js"></script>
</body>
</html>
