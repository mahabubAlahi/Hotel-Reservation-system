
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
  <title>LogIn</title>
</head>
<body>

    <!---Navigation-->
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



    <!--Login-->
   <div class="container-fluid" id="loginID">
     <div class="row">
         <div class="col-md-4 col-sm-4 col-xs-12"></div>
          <div class="col-md-4 col-sm-4 col-xs-12">
            <div class="card for">
              <div class="card-body">
                  <form class=" text-light" action="confirmlogin.php" method="POST">
                        <div class="form-group">
                           <h3 class="text-center text-success">Guest Login</h3>
                          <label for="email">Email address</label>
                          <input type="email" required class="form-control" name="email"  placeholder="Enter email">

                          <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                        </div>
                        <div class="form-group">
                          <label for="password">Password</label>
                          <input type="password" required class="form-control" name="password" placeholder="Password">

                        </div>

                        <input type="submit" value="Submit" name="submit" class="btn btn-primary btn-block" />
                  </form>
                </div>
              </div>
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12"></div>
        </div>
      </div>

<!--Footer-->

      <footer id="footer-main" class="py-2 bg-dark text-center text-light">
        <div class="container">
          <div class="row">
            <div class="col-12">
              <p class="lead mb-0">Copyright @ 2019 Hotel Reservation System</p>
              <span class="lead">Designed by: Mahabub alahi and K.M Ashrafuzzaman</span>
            </div>
          </div>
        </div>
      </footer>



   <script src="js/jquery.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
</body>
</html>
