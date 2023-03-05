<?php

       if(isset($_POST['submit']))
       {

           $conn=mysqli_connect($_ENV['MYSQL_HOST'],$_ENV['MYSQL_USER'],$_ENV['MYSQL_PASSWORD'],$_ENV['MYSQL_DATABASE']);

           $des=$_POST['des'];
           $room=$_POST['room'];
           $sql="SELECT * FROM room WHERE room_name='$des' AND person='$room'";

           $run = mysqli_query($conn,$sql);



      }



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

  <title>Search Result</title>
</head>
<body>
   <!--Navbar-->
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
          <li class="nav-item">
            <a class="nav-link" href="#">Home</a>
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
          <li class="nav-item">
            <a class="nav-link" href="logout.php">LogOut</a>
          </li>
        </ul>
       </div>
     </div>
   </nav>

   <!--Search REsult-->








      <h1 class="text-center">Search Result</h1>



        <div class="container-fluid">
          <div class="row">

            	<br />
             <?php while($data=mysqli_fetch_assoc($run)){ ?>
            	<div class="card-group">

    	        	  <div class="card mr-2 mb-2 ml-2 border-info" style="width:400px;">
                   <img class="card-img-top" style="height: 360px; object-fit:cover;" src="img/<?php echo $data['img']; ?>" />
    	        		 <div class="card-body text-center">
                     <div class="">
                       <span class=" mr-2"><i class="fa fa-hotel "style="font-size:30px;"></i></span>
                       <h4 class="text-bold"><?php echo $data['room_name']; ?></h4>
                     </div>
                     <div class="">
                       <span class=" mr-2"><i class="fa fa-dollar " style="font-size:30px;" ></i></span>
                       <h6 class="text-info"><?php echo "Price: "; echo $data['price'];echo"$"; ?></h6>
                     </div>

                     <div class="">
                       <span class=" mr-2"><i class="fa fa-home " style="font-size:30px;" ></i></span>
                       <h6 class="text-info"><?php echo "Room-type: "; echo $data['roomtype']; ?></h6>
                     </div>


                     <div class="">
                       <span class=" mr-2"><i class="fa fa-male " style="font-size:30px;"></i></span>
                       <h6 class="text-primary"><?php echo "Person: "; echo $data['person']; ?></h6>
                     </div>

                     <a href="afterlogin.php" class="btn btn-primary btn-block">Booking</a>


    	        		</div>
    	        	 </div>



            	</div>
              <?php } ?>
            </div>
          </div>
        </div>

        





  <script src="js/jquery.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>

</body>
</html>


<?php
   if(mysqli_num_rows($run)<1){?>
     <!DOCTYPE html>
     <html lang="en" dir="ltr">
       <head>
         <meta charset="utf-8">
         <title></title>
       </head>
       <body>
           <h1 class="text-center">No records found</h1>
       </body>
     </html>


 <?php


   }




?>
