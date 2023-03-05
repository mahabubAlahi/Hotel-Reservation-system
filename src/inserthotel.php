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
  <title>Admin Page</title>
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
         <li class="nav-item">
           <a class="nav-link" href="registration.php">Register</a>
         </li>
         <li class="nav-item active">
           <a class="nav-link" href="logout.php"><i class="fa fa-user rounded "style="font-size:25px;"></i></a>
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
                         <div class="card-header text-center text-info"><h2>Insert Hotel Details</h2></div>
                         <div class="card-body">

                          <form class="form-horizontal text-light" method="POST" action="confirmInsertion.php" enctype="multipart/form-data">

                                 <div class="form-group">
                                     <label for="name" class="cols-sm-2 control-label pl-4" >Hotel Location</label>
                                     <div class="cols-sm-10">
                                         <div class="input-group">
                                             <span class="input-group-addon mr-2"><i class="fa fa-home fa" aria-hidden="true"></i></span>
                                             <input required type="text" class="form-control" name="name" id="name" placeholder="Enter hotel Location" />
                                         </div>
                                     </div>
                                 </div>
                                 <div class="form-group">
                                     <label for="type" class="cols-sm-2 control-label pl-4 ">Room Type</label>
                                     <div class="cols-sm-10">
                                         <div class="input-group">
                                             <span class="input-group-addon mr-2"><i class="fa fa-institution fa" aria-hidden="true"></i></span>
                                             <input required type="text" class="form-control" name="type" id="type" placeholder="Enter room type" />
                                         </div>
                                     </div>
                                 </div>

                                 <div class="form-group">
                                     <label for="price" class="cols-sm-2 control-label pl-4">Price</label>
                                     <div class="cols-sm-10">
                                         <div class="input-group">
                                             <span class="input-group-addon mr-2"><i class="fa fa-dollar fa-lg" aria-hidden="true"></i></span>
                                             <input required type="text" class="form-control" name="price" id="price" placeholder="Enter room price" />
                                         </div>
                                     </div>
                                 </div>
                                 <div class="form-group">
                                     <label for="person" class="cols-sm-2 control-label pl-4">Person</label>
                                     <div class="cols-sm-10">
                                         <div class="input-group">
                                             <span class="input-group-addon mr-2"><i class="fa fa-male fa-lg" aria-hidden="true"></i></span>
                                             <input required type="text" class="form-control" name="person" id="person" placeholder="Enter person number" />
                                         </div>
                                     </div>
                                 </div>
                                 <div class="form-group">
                                     <label for="simg" class="cols-sm-2 control-label pl-4">Image</label>
                                     <div class="cols-sm-10">
                                         <div class="input-group">
                                             <span class="input-group-addon mr-2"><i class="fa fa-image fa-lg" aria-hidden="true"></i></span>
                                             <input required type="file" class="form-control" name="simg" id="simg" />
                                         </div>
                                     </div>
                                 </div>
                                 <div class="form-group mb-2 ">
                                     <input type="submit" value="submit" name="submit" class="btn btn-primary btn-lg btn-block login-button"/>
                                 </div>

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
        <span class="lead">Designed by: Mahabub alahi</span>
      </div>
    </div>
  </div>
</footer>


<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>


</body>
</html>
