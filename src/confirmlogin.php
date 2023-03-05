<?php
if(isset($_POST["submit"])){

if(!empty($_POST['email']) && !empty($_POST['password'])) {
$user=$_POST['email'];
$pass=$_POST['password'];

$con=mysqli_connect($_ENV['MYSQL_HOST'],$_ENV['MYSQL_USER'],$_ENV['MYSQL_PASSWORD'],$_ENV['MYSQL_DATABASE']);


$query=mysqli_query( $con,"SELECT * FROM user WHERE email='".$user."' AND     password='".$pass."'");
$numrows=mysqli_num_rows($query);
if($numrows!=0)
{
while($row=mysqli_fetch_assoc($query))
{
$dbusername=$row['email'];
$dbpassword=$row['password'];
}

if($user == $dbusername && $pass == $dbpassword)
{
session_start();
$_SESSION['sess_user']=$user;
$_SESSION['login']=true;

/* Redirect browser */
header("Location: afterlogin.php");

}
} else {
  session_start();
  $_SESSION['error']=true;
  header("Location: guestlogin.php");
}

} else {
echo "All fields are required!";
}
}
?>
