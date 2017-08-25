
<?php
$cookie_name = "user";
$cookie_value = "hill";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
?>

<?php
if(!isset($_COOKIE[$cookie_name])) {
    echo "<script>alert('Cookie named '. $cookie_name . ' is not set!');</script>";
} else {
    echo "<script>alert('Cookie ' . $cookie_name . ' is set!');</script><br>";
    echo "<script>alert('Value is:  . $_COOKIE[$cookie_name]');</script>";
}
?>

<?php
if(count($_COOKIE) > 0) {
    $message = "Cookies are enabled.";
	echo "<script>alert($message);</script>"
} else {
    $message = "Cookies are disabled.";
	echo "<script>alert($message);</script>"
}
?>

<!DOCTYPE html>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <!--Import materialize.css-->
		<!-- Compiled and minified CSS -->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/css/materialize.min.css">


      <!--Let browser know website is optimized for mobile-->
      <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    </head>

<body>
  <nav>
<div class="nav-wrapper">
  <a href="#" class="brand-logo">J<strong>S</strong>nap</a>
  <ul id="nav-mobile" class="right hide-on-med-and-down">
	<li><a href="newsfeed.php">Xplore</a></li>
	<li><a href="upload.php">Upload</a></li>
	<li><a href="profile.php">Profile</a></li>
  </ul>
</div>
</nav>

  <div class="container">	

      </div>
	
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
       <!-- Compiled and minified JavaScript -->
	   <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/js/materialize.min.js"></script>
          
    </body>
  </html>
        