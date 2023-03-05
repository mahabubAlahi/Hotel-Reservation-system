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
  <style media="screen">

        .card{
          width: 400px;
          height: 300px;
          position: absolute;
          background: rgba(0, 0, 0, 0.5);
          padding: 10px;
          margin-top: 80px;
        }
  </style>
  <title>Admin Page</title>
</head>
<body>

  <nav class="navbar navbar-dark navbar-expand-md" uk-sticky="top: 50; animation: uk-animation-slide-top; bottom: #sticky-on-scroll-up">
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

  <!---Searchbox-->

  <div class="container-fluid" id= "ip">
    <div class="row"></div>
         <div class="row">
           <div class="col"></div>
           <div class="col">
             <div class="card">
               <div class="card-body">
                 <h2 class="text-success text-center">DELETE-BOX</h2>
                 <form action="confirmDelete.php" method="POST" class=" justify-content-center">
                   <label for="destination"class="sr-only">Destination</label>
                  <input type="text"class="form-control m-2 border-dark" name="des"  id="destination" placeholder="Enter destination">
                  <label for="room" class="sr-only">Room</label>
                  <select  id="room"class="form-control m-2 border-dark" name="room" placeholder="Room">
                    <option>One-person room</option>
                    <option>Two-person room</option>
                    <option>Family rooms</option>
                    <option>Multiple rooms</option>
                  </select>
                  <input type="submit" value="Enter" name="submit" id="sub" class="btn btn-primary m-2 text-light btn-outline-dark btn-block">
                 </form>
               </div>
             </div>
           </div>
           <div class="col"></div>
         </div>
     <div class="row"></div>
  </div>

  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

</body>
</html>
