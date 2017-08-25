<?php
   define('DB_SERVER', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', 'root');
   define('DB_DATABASE', 'jsnap');
   $db = mysqli_connect(DB_SERVER,DB_USERNAME,DB_PASSWORD,DB_DATABASE);
   
   if(isset($_POST['submit'])) {
      // username and password sent from form 
      
      $myusername = mysqli_real_escape_string($db,$_POST['username']);
      $mypassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT username, password FROM jsnapuser WHERE username = '$myusername' and password = '$mypassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      
      
      $count = mysqli_num_rows($result);
      
      // If result matched $myusername and $mypassword, table row must be 1 row
		
      if($count == 1) {
         
         $_SESSION['username'] = $myusername;
		 	if (isset($_POST['remuser'])){
		setcookie("username",$myusername,time()+60*60*24);
		//setcookie("Pwd",$mypassword,time()+60*60*24);
		
	}
	else
	{
		setcookie("username","",time()-5);
		
	//	setcookie("Pwd","",time()+60*60*24);
	}
         header("Location: newsfeed.php");
die('should have redirected by now');		
      }else {
         header("Location: loginANDregister.php");
die('should have redirected by now');		
      }
   }
?>