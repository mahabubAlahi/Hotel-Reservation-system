<?php
   session_start();


 ?>



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
  <title>Registration Form</title>
</head>
<body>

  <nav class="navbar navbar-dark navbar-expand-md" uk-sticky="top: 50; animation: uk-animation-slide-top; bottom: #sticky-on-scroll-up">
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
         <li class="nav-item active">
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



  <!--Registration-->

  <div class="container-fluid" id="ip">
   <div class="row justify-content-center">
                 <div class="col-md-5">
                     <div class="card my-2 ml-5 pb-2 vg">
                         <div class="card-header text-center text-light">Register</div>
                         <div class="card-body">

                          <form class="form-horizontal text-light" method="POST" action="confirmRegistration.php">

                                 <div class="form-group">
                                     <label for="name" class="cols-sm-2 control-label pl-4" >Your Name</label>
                                     <div class="cols-sm-10">
                                         <div class="input-group">
                                             <span class="input-group-addon mr-2"><i class="fa fa-user fa" aria-hidden="true"></i></span>
                                             <input required type="text" class="form-control" name="name" id="name" placeholder="Enter your Name" />
                                         </div>
                                     </div>
                                 </div>
                                 <div class="form-group">
                                     <label for="email" class="cols-sm-2 control-label pl-4 ">Your Email</label>
                                     <div class="cols-sm-10">
                                         <div class="input-group">
                                             <span class="input-group-addon mr-2"><i class="fa fa-envelope fa" aria-hidden="true"></i></span>
                                             <input required type="text" class="form-control" name="email" id="email" placeholder="Enter your Email" />
                                         </div>
                                     </div>
                                 </div>

                                 <div class="form-group">
                                     <label for="password" class="cols-sm-2 control-label pl-4">Password</label>
                                     <div class="cols-sm-10">
                                         <div class="input-group">
                                             <span class="input-group-addon mr-2"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                             <input required type="password" class="form-control" name="password" id="password" placeholder="Enter your Password" />
                                         </div>
                                     </div>
                                 </div>
                                 <div class="form-group">
                                     <label for="confirm" class="cols-sm-2 control-label pl-4">Confirm Password</label>
                                     <div class="cols-sm-10">
                                         <div class="input-group">
                                             <span class="input-group-addon mr-2"><i class="fa fa-lock fa-lg" aria-hidden="true"></i></span>
                                             <input required type="password" class="form-control" name="confirm" id="confirm" placeholder="Confirm your Password" />
                                         </div>
                                     </div>
                                 </div>
                                 <div class="form-group ">
                                     <input type="submit" value="Register" name="register" class="btn btn-primary btn-lg btn-block login-button"/>
                                 </div>
                                 <p>
                                   Already a member?  <a href="guestlogin.php">Sign in</a>
                                 </p>

                             </form>
                         </div>

                     </div>
                 </div>

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
