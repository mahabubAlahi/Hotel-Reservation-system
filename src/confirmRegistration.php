<?php

  $name= $_POST['name'];
  $email= $_POST['email'];
  $pass= $_POST['password'];
  $con_pass=$_POST['confirm'];

  if($pass != $con_pass)
  {
    session_start();
    $_SESSION['error_msg']="Password and Confirm password didn't match";
    header("Location: registration.php");
  }

  $con=mysqli_connect($_ENV['MYSQL_HOST'],$_ENV['MYSQL_USER'],$_ENV['MYSQL_PASSWORD'],$_ENV['MYSQL_DATABASE']);

  $sql = "INSERT INTO user(name,email,password) VALUES('$name','$email','$pass')";

  if(mysqli_query($con,$sql))
  {

    header("Location: afterlogin.php");
  }
  else{
    header("Location: registration.php");
  }

  ?>
