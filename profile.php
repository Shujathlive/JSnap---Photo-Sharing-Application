<?php
session_start();
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
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
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
  <center>
 <br>
 <br>
	<!-- Page Content goes here -->
<div class="card" style="height:30%;width:40%;">
    <div class="card-image waves-effect waves-block waves-light">
      <img class="activator" src="image/shujath.jpg" >
    </div>
    <div class="card-content">
      <span class="card-title activator grey-text text-darken-4">Welcome, <?php echo $_SESSION['username'];?><i class="material-icons right">more_vert</i></span>
         <p><a href="logout.php">Wanna meet-up in the Real-world(Log-out)?</a></p>
    </div>
    <div class="card-reveal">
      <span class="card-title grey-text text-darken-4">About Me<i class="material-icons right">close</i></span>
      <p>Here is some more information about myself that is only revealed once clicked on.</p>
    </div>
  </div>
         <br>
         <br>
		 <div class="card" style="height:60%;width:50%;">
    <div class="card-content">
      <p>I am a very simple person. I am good at containing small bits of information. I am convenient because I require little effort to help out others effectively.</p>
    </div>
    <div class="card-tabs">
      <ul class="tabs tabs-fixed-width">
        <li class="tab"><a href="#test4">This is ME</a></li>
        <li class="tab"><a class="active" href="#test5">My Love</a></li>
        <li class="tab"><a href="#test6">Contact me</a></li>
      </ul>
    </div>
    <div class="card-content grey lighten-4">
      <div id="test4">About me</div>
      <div id="test5">Nothing in Particular</div>
      <div id="test6">Wanna know me better?
	  <div class="fb-follow" data-href="https://www.facebook.com/teamtd" data-layout="standard" data-size="large" data-show-faces="true"></div>
	  </div>
    </div>
  </div>
  </center>
      </div>
	
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
       <!-- Compiled and minified JavaScript -->
	   <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/js/materialize.min.js"></script>
          
    </body>
  </html>
        