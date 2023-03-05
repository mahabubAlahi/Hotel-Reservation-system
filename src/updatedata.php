<?php


  if(isset($_POST['submit']))
  {
    $con=mysqli_connect($_ENV['MYSQL_HOST'],$_ENV['MYSQL_USER'],$_ENV['MYSQL_PASSWORD'],$_ENV['MYSQL_DATABASE']);

    $name=$_POST['name'];
    $type=$_POST['type'];
    $price=$_POST['price'];
    $person=$_POST['person'];
    $id=$_POST['sid'];
    $imgname=$_FILES['simg']['name'];
    $tempname=$_FILES['simg']['tmp_name'];

    move_uploaded_file($tempname,"img/$imgname");


    $qry= "UPDATE room SET room_name = '$name', roomtype = '$type', price = '$price', person = '$person', img = '$imgname' WHERE room_id = '$id'";

    $run=mysqli_query($con,$qry);

    if($run == true)
    {
           $message = "Data updated Successfully.";
          echo "<script type='text/javascript'>alert('$message');</script>";
           header("Location: edit.php?sid=$id");

    }
  }



?>
