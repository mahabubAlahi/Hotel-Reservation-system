<?php



   $con=mysqli_connect($_ENV['MYSQL_HOST'],$_ENV['MYSQL_USER'],$_ENV['MYSQL_PASSWORD'],$_ENV['MYSQL_DATABASE']); 

    $id= $_REQUEST['sid'];


    $qry= "DELETE FROM room WHERE room_id='$id'";

    $run=mysqli_query($con,$qry);

    if($run == true)
    {
           $message = "Data Deleted Successfully.";
          echo "<script type='text/javascript'>alert('$message');</script>";
           header("Location: deletehotel.php");

    }




?>
