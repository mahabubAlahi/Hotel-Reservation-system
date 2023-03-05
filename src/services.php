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
  <title>Hotel Reservation System</title>
</head>
<body>
 <!-- Navigation -->
 <nav class="navbar navbar-dark navbar-expand-md" uk-sticky="top: 100; animation: uk-animation-slide-top; bottom: #sticky-on-scroll-up">
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
        <li class="nav-item">
          <a class="nav-link" href="about.php">About Us</a>
        </li>
        <li class="nav-item active">
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
          <h1>Services</h1>
          <p class="lead">Hotel reservatio system is a hotel search with an extensive price comparison. The prices shown come from numerous hotels and booking websites.</p>
        </div>
      </div>
    </div>
  </header>
  <!-- About Section -->
  <section id="services" class="py-5">
    <div class="container">
      <div class="row">
        <div class="col-md-4">
          <div class="card text-center">
            <div class="card-header">
              <h3>Service Plan One</h3>
            </div>
            <div class="card-body">
              <div class="card-title">
                <h4>$19.99/Night</h4>
              </div>
              <div class="card-text">
                <p class="lead">Here is one service plan with following Amencities.</p>
              </div>
              <ul class="list-group">
                <li class="list-group-item">
                  <i class="fa fa-check"></i> Free Wifi
                </li>
                <li class="list-group-item">
                  <i class="fa fa-check"></i> Breakfast buffet
                </li>
                <li class="list-group-item">
                  <i class="fa fa-check"></i> Free valet parking
                </li>
                <li class="list-group-item">
                  <i class="fa fa-check"></i> Free one-way airport transfer
                </li>
                <li class="list-group-item">
                  <i class="fa fa-check"></i> Swimming pool
                </li>
              </ul>
            </div>
            <div class="card-footer">
              <p class="text-muted mb-0">Special Plan </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card text-center">
            <div class="card-header">
              <h3>Service Plan Two</h3>
            </div>
            <div class="card-body">
              <div class="card-title">
                <h4>$29.99/Night</h4>
              </div>
              <div class="card-text">
                <p class="lead">Here is one service plan with following Amencities.</p>
              </div>
              <ul class="list-group">
                <li class="list-group-item">
                  <i class="fa fa-check"></i> Free Wifi
                </li>
                <li class="list-group-item">
                  <i class="fa fa-check"></i> Breakfast buffet
                </li>
                <li class="list-group-item">
                  <i class="fa fa-check"></i> Free valet parking
                </li>
                <li class="list-group-item">
                  <i class="fa fa-check"></i> Free one-way airport transfer
                </li>
                <li class="list-group-item">
                  <i class="fa fa-check"></i> Swimming pool
                </li>
              </ul>
            </div>
            <div class="card-footer">
              <p class="text-muted mb-0">Special Plan </p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card text-center">
            <div class="card-header">
              <h3>Service Plan Three</h3>
            </div>
            <div class="card-body">
              <div class="card-title">
                <h4>$39.99/Night</h4>
              </div>
              <div class="card-text">
                <p class="lead">Here is one service plan with following Amencities.</p>
              </div>
              <ul class="list-group">
                <li class="list-group-item">
                  <i class="fa fa-check"></i> Free Wifi
                </li>
                <li class="list-group-item">
                  <i class="fa fa-check"></i> Breakfast buffet
                </li>
                <li class="list-group-item">
                  <i class="fa fa-check"></i> Free valet parking
                </li>
                <li class="list-group-item">
                  <i class="fa fa-check"></i> Free one-way airport transfer
                </li>
                <li class="list-group-item">
                  <i class="fa fa-check"></i> Swimming pool
                </li>
              </ul>
            </div>
            <div class="card-footer">
              <p class="text-muted mb-0">Special Plan </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="faq" class="bg-dark py-5 text-light">
    <div class="container">
      <h2 class="text-center">Frequently Asked Questions</h2>
      <div class="row pt-5">
        <div class="col-md-6">
          <div id="accordion">
            <div class="card bg-light text-dark mb-2">
              <div class="card-header" id="headingOne">
                <a href="#collapseOne" class="text-dark" data-toggle="collapse" data-parent="#accordion">
                  <h5 class="mb-0">What is the cheapest room?</h5>
                </a>
              </div>
              <div id="collapseOne" class="collapse">
                <div class="card-body lead">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. At praesentium, necessitatibus qui deleniti. Eum harum porro repudiandae adipisci repellat saepe?
                </div>
              </div>
            </div>
            <div class="card bg-light text-dark mb-2">
              <div class="card-header" id="headingTwo">
                <a href="#collapseTwo" class="text-dark" data-toggle="collapse" data-parent="#accordion">
                  <h5 class="mb-0">What is the most high priced room?</h5>
                </a>
              </div>
              <div id="collapseTwo" class="collapse">
                <div class="card-body lead">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. At praesentium, necessitatibus qui deleniti. Eum harum porro repudiandae adipisci repellat saepe?
                </div>
              </div>
            </div>
            <div class="card bg-light text-dark mb-2">
              <div class="card-header" id="headingThree">
                <a href="#collapseThree" class="text-dark" data-toggle="collapse" data-parent="#accordion">
                  <h5 class="mb-0">What is the extra facilities we can get?</h5>
                </a>
              </div>
              <div id="collapseThree" class="collapse">
                <div class="card-body lead">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. At praesentium, necessitatibus qui deleniti. Eum harum porro repudiandae adipisci repellat saepe?
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div id="accordion">
            <div class="card bg-light text-dark mb-2">
              <div class="card-header" id="headingFour">
                <a href="#collapseFour" class="text-dark" data-toggle="collapse" data-parent="#accordion">
                  <h5 class="mb-0">What are the nearest Restaurants?</h5>
                </a>
              </div>
              <div id="collapseFour" class="collapse">
                <div class="card-body lead">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. At praesentium, necessitatibus qui deleniti. Eum harum porro repudiandae adipisci repellat saepe?
                </div>
              </div>
            </div>
            <div class="card bg-light text-dark mb-2">
              <div class="card-header" id="headingFive">
                <a href="#collapseFive" class="text-dark" data-toggle="collapse" data-parent="#accordion">
                  <h5 class="mb-0">What are the nearest beautiful places?</h5>
                </a>
              </div>
              <div id="collapseFive" class="collapse">
                <div class="card-body lead">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. At praesentium, necessitatibus qui deleniti. Eum harum porro repudiandae adipisci repellat saepe?
                </div>
              </div>
            </div>
            <div class="card bg-light text-dark mb-2">
              <div class="card-header" id="headingSix">
                <a href="#collapseSix" class="text-dark" data-toggle="collapse" data-parent="#accordion">
                  <h5 class="mb-0">Why we choose these hotels?</h5>
                </a>
              </div>
              <div id="collapseSix" class="collapse">
                <div class="card-body lead">
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit. At praesentium, necessitatibus qui deleniti. Eum harum porro repudiandae adipisci repellat saepe?
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Footer -->
  <footer id="copyright" class="py-3 text-dark text-center">
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
