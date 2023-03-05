<?php


  if(isset($_POST['submit']))
  {
    $con=mysqli_connect($_ENV['MYSQL_HOST'],$_ENV['MYSQL_USER'],$_ENV['MYSQL_PASSWORD'],$_ENV['MYSQL_DATABASE']);

    $name=$_POST['name'];
    $type=$_POST['type'];
    $price=$_POST['price'];
    $person=$_POST['person'];
    $imgname=$_FILES['simg']['name'];
    $tempname=$_FILES['simg']['tmp_name'];

    move_uploaded_file($tempname,"img/$imgname");


    $qry= "INSERT INTO room (room_id, room_name, roomtype, price, person, img) VALUES (NULL,'$name','$type','$price','$person','$imgname')";

    $run=mysqli_query($con,$qry);

    if($run == true)
    {
           $message = "Inserted Successfully.";
          //echo "<script type='text/javascript'>alert('$message');</script>";
           header("Location: admin.php");

    }
  }



?>
