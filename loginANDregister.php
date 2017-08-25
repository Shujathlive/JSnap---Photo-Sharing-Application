

<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>JSnap | Login</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/css/materialize.min.css">
  <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet prefetch' href='http://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

      <link rel="stylesheet" href="css/style.css">

  
</head>

<body style="background-image:url(img/pic2.gif)">
  
<!-- Mixins-->
<!-- Pen Title-->
<div class="pen-title">
  <h1 style="color:white;font-weight:bold;
   -webkit-text-stroke-width: 2px;
   -webkit-text-stroke-color: black;
">JSnap | Login</h1>
</div>

<div class="container">
  <div class="card"></div>
  <div class="card">
    <h1 class="title">Login</h1>
    <form action="login.php" method="POST">

      <div class="input-container">
        <input type="text" id="username" name="username" value="<?php echo Cookie_val(1) ?>"  required/>
        <label for="username">Username</label>
        <div class="bar"></div>
      </div>
	  
      <div class="input-container">
        <input type="password" id="password" name="password" value="<?php echo Cookie_val(2) ?>"required/> 
        <label for="password">Password</label>
        <div class="bar"></div>
		
      </div>
	  <p style="padding-left:160px;padding-bottom:30px;">
		  <input type="checkbox" name="remuser" value="1" id="test5" />
		  <label for="test5">Remember me ?</label>
	  </p>
	  
      <div class="button-container">
        <button type="submit" name="submit"><span>Go</span></button>
      </div>
      <div class="footer"><a href="#">Forgot your password?</a></div>
    </form>
  </div>
  <div class="card alt">
    <div class="toggle"></div>
    <h1 class="title">Register
      <div class="close"></div>
    </h1>
    <form action="register.php" method="POST">
      <div class="input-container">
        <input type="text" name="username" id="username" required="required"/>
        <label for="username">Username</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" id="password" name="password" required="required"/>
        <label for="password">Password</label>
        <div class="bar"></div>
      </div>
      <div class="input-container">
        <input type="password" id="password" name="rpassword" required="required"/>
        <label for="password">Repeat Password</label>
        <div class="bar"></div>
      </div>
      <div class="button-container">
        <button name="submit"><span>Next</span></button>
      </div>
    </form>
		<?php
		function Cookie_val($ch){
		if ($ch==1)
		{	
			if (isset($_COOKIE['username']))

			{
				return $_COOKIE['username'];
			}
		}
		else
		{
			if (isset($_COOKIE['password']))

			{
				return $_COOKIE['password'];
			}
		}
		}
	?>
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/js/materialize.min.js"></script>
    <script src="js/index.js"></script>

</body>
</html>
