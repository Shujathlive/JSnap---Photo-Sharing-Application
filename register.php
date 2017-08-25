
<?php
 
session_start();

//connect to db		
define("DB_HOST","localhost");
define("DB_NAME","jsnap");
define("DB_USERNAME","root");
define("DB_PASSWORD","root");
$conn=mysqli_connect(DB_HOST,DB_USERNAME,DB_PASSWORD,DB_NAME) or die(mysqli_connect_error()); 
 $error = false;

 if ( isset($_POST['submit']) ) {

  // clean user inputs to prevent sql injections
  $name = trim($_POST['username']);
  $name = strip_tags($name);
  $name = htmlspecialchars($name);
  
  $pass = trim($_POST['password']);
  $pass = strip_tags($pass);
  $pass = htmlspecialchars($pass);
  
  $rpass = trim($_POST['rpassword']);
  $rpass = strip_tags($pass);
  $rpass = htmlspecialchars($pass);
  

  
	
  if( !$error ) {
   
   $query1 = sprintf("INSERT INTO jsnapuser(username,password) VALUES('$name','$pass')");
   
   $res = mysqli_query($conn,$query1);
    
   if ($res) {
    $errTyp = "success";
    $errMSG = "Successfully registered, you may login now";
	echo "<script type='text/javascript'>alert('$errMSG');</script>";
	header("Location: loginANDregister.php");
    unset($name);
    unset($pass);
	unset($rpass);
   } else {
    $errTyp = "danger";
    $errMSG = "Something went wrong, try again later..."; 
	echo "<script type='text/javascript'>alert('$errMSG');</script>";
	header("Location: loginANDregister.php");
   } 
    
  }
  
  
 }
?>