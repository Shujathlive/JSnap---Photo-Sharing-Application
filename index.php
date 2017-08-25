<!DOCTYPE html>
<?php
session_start();
?>
  <html>
    <head>
      <!--Import Google Icon Font-->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <!--Import materialize.css-->
     <!-- Compiled and minified CSS -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/css/materialize.min.css">

  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.0/js/materialize.min.js"></script>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
	<!-- JS for flip button-->
	
<link rel="stylesheet" href="css/flip.css">
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

<?php
$select='';
for($i=0;$i<3;$i++){
$select.="<script>
function flip() {
	$('#cards".$i."').toggleClass('flipped');	
	}
	
</script>";
}
echo $select;
$db = mysqli_connect("localhost","root","root","jsnap");
$sql = sprintf("SELECT image FROM test_image");
$res = mysqli_query($db,$sql);
$images = array();
while ($row = mysqli_fetch_assoc($res)) {
$images[] = $row['image'];
}
$select1='<div class="container">';
foreach ($images as $image) {
	$select1.='<div class="row" style="margin:0 auto;">
      <div class="col s6 offset-s3 m6 offset-m3 center-align">
        <div class="card">
        <div class="card-image">
  <div class="content-wrapper" style="margin-top:30px;">
		<div class="cards-wrapper" style="width:100%;">
			<div class="cards" id="cards'.$i.'">
				<div class="front">
					<img src="data:image/jpeg;base64,'. base64_encode($image) .'" style="height: 100%;"/>
				</div>	
				<div class="back" >
				
						  <h5 style="text-align:left">Comments</h5>
						  <p style="text-align:left">I am a very simple card. I am good at containing small bits of information.
              I am convenient because I require little markup to use effectively.</p>
		
				</div>
			</div>
		</div>
	</div>
        </div>
        <div class="card-content">
              <a id="menu-toggle" class="right" style="color:#009688"><i class="fa small fa-star-o" aria-hidden="true"></i></a>
    <i class="fa small fa-pencil left" aria-hidden="true" onclick="flip()" style="color:#009688;"></i>
  	
	<center>
		<a href="profile.php">	 <div class="chip center">
    <img src="image/shujath.jpg" alt="Contact Person">
    Shujath Khan
  </div></a>
  </center>
  
        </div>
      </div>
      </div>
      </div>';
}
	echo $select1;
	

	?>
    
    
</div>

 <script>
 $('#menu-toggle').click( function(){
    $(this).find('i').toggleClass('fa small fa-star-o').toggleClass('fa small fa-star');
});
 </script>
 <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
      <script type="text/javascript" src="js/materialize.min.js"></script>
    </body>
  </html>
 