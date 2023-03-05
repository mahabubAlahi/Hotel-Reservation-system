<?php
if(isset($_POST["submit"])){

if(!empty($_POST['email']) && !empty($_POST['password'])) {
$user=$_POST['email'];
$pass=$_POST['password'];

$con=mysqli_connect($_ENV['MYSQL_HOST'],$_ENV['MYSQL_USER'],$_ENV['MYSQL_PASSWORD'],$_ENV['MYSQL_DATABASE']);


$query=mysqli_query( $con,"SELECT * FROM admin WHERE email='".$user."' AND     password='".$pass."'");
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
$_SESSION['sess_user1']=$user;
$_SESSION['login1']=true;

/* Redirect browser */
header("Location: admin.php");

}
} else {
  session_start();
  $_SESSION['error1']=true;
  header("Location: adminlogin.php");
}

} else {
echo "All fields are required!";
}
}
?>
