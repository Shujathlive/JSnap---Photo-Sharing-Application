

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
	<li><a href="newsfeed.php.html">Xplore</a></li>
	<li><a href="upload.html">Upload</a></li>
	<li><a href="logout.php">Profile</a></li>
  </ul>
</div>
</nav>
	<div class="container">
	<!-- Page Content goes here -->
<form enctype="multipart/form-data" action=
"<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
<input type="hidden" name="MAX_FILE_SIZE" value="10000000" />
<br>
<br>
<div class="row">
<div class="col s6">
<div class="file-field input-field ">
      <div class="btn">
        <span>File</span>
        <input type="file" name="userfile" multiple>
      </div>
      <div class="file-path-wrapper">
        <input class="file-path validate col s6" type="text" placeholder="Upload one or more files">
      </div>
    </div>
 </div>
 <div class="col s6">
 <br>
 
<button type="submit" class="btn-floating pulse"><i class="material-icons">add</i></button>
 </div>
 </div>
<br>

</form>

<?php

// check if a file was submitted
if(!isset($_FILES['userfile']))
{
    echo '<p>Please select a file</p>';
}
else
{
    try {
    $msg= upload();  //this will upload your image
    echo $msg;  //Message showing success or failure.
    }
    catch(Exception $e) {
    echo $e->getMessage();
    echo 'Sorry, could not upload file';
    }
}

// the upload function

function upload() {
    include "file_constants.php";
	session_start();
    $maxsize = 10000000; //set to approx 10 MB
	$username = $_SESSION['username'];
    //check associated error code
    if($_FILES['userfile']['error']==UPLOAD_ERR_OK) {

        //check whether file is uploaded with HTTP POST
        if(is_uploaded_file($_FILES['userfile']['tmp_name'])) {    

            //checks size of uploaded image on server side
            if( $_FILES['userfile']['size'] < $maxsize) {  
  
               //checks whether uploaded file is of image type
              //if(strpos(mime_content_type($_FILES['userfile']['tmp_name']),"image")===0) {
                 $finfo = finfo_open(FILEINFO_MIME_TYPE);
                if(strpos(finfo_file($finfo, $_FILES['userfile']['tmp_name']),"image")===0) {    

                    // prepare the image for insertion
                    $imgData =addslashes (file_get_contents($_FILES['userfile']['tmp_name']));
					
					$tablename='user_'.$username;
                    // our sql query
                    $sql1 = "INSERT INTO '$tablename' 
                    (image, name)
                    VALUES
                    ('{$imgData}', '{$_FILES['userfile']['name']}');";

                    // insert the image
                    mysqli_query($con,$sql1);
					$sql = "INSERT INTO test_image
                    (image, name)
                    VALUES
                    ('{$imgData}', '{$_FILES['userfile']['name']}');";

                    // insert the image
                    mysqli_query($con,$sql);
                    $msg='<script>alert("Yay!! Check your newsfeed...");</script>';
                }
                else
                    $msg="<p>Uploaded file is not an image.</p>";
            }
             else {
                // if the file is not less than the maximum allowed, print an error
                $msg='<div>File exceeds the Maximum File limit</div>
                <div>Maximum File limit is '.$maxsize.' bytes</div>
                <div>File '.$_FILES['userfile']['name'].' is '.$_FILES['userfile']['size'].
                ' bytes</div><hr />';
                }
        }
        else
            $msg="File not uploaded successfully.";

    }
    else {
        $msg= file_upload_error_message($_FILES['userfile']['error']);
    }
    return $msg;
}

// Function to return error message based on error code

function file_upload_error_message($error_code) {
    switch ($error_code) {
        case UPLOAD_ERR_INI_SIZE:
            return 'The uploaded file exceeds the upload_max_filesize directive in php.ini';
        case UPLOAD_ERR_FORM_SIZE:
            return 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form';
        case UPLOAD_ERR_PARTIAL:
            return 'The uploaded file was only partially uploaded';
        case UPLOAD_ERR_NO_FILE:
            return 'No file was uploaded';
        case UPLOAD_ERR_NO_TMP_DIR:
            return 'Missing a temporary folder';
        case UPLOAD_ERR_CANT_WRITE:
            return 'Failed to write file to disk';
        case UPLOAD_ERR_EXTENSION:
            return 'File upload stopped by extension';
        default:
            return 'Unknown upload error';
    }
}
?>

      </div>
	
      <!--Import jQuery before materialize.js-->
      <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
       <!-- Compiled and minified JavaScript -->
	   <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/js/materialize.min.js"></script>
          
    </body>
  </html>
        