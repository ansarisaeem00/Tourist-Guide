<?php 
  include('function.php');
  if (!isLoggedIn()) {
  $_SESSION['msg'] = "You must log in first";
  header('location:final_signup.php');
}
?>



<?php
// Create database connection
  $db = mysqli_connect("localhost", "root", "", "mumbai_darshan");

  // Initialize message variable
  $msg = "";
  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
  	// Get image name
  	$image = $_FILES['image']['name'];
  	// Get text
  	$image_text = mysqli_real_escape_string($db, $_POST['image_text']);

    date_default_timezone_set('Asia/Calcutta'); 
    $time = date('H:i:s');
    $date = date('d-m-Y');// image file directory
    
    $user_id=$_SESSION['user']['id'];
    echo $user_id;
    echo $user_id;
    echo $user_id;
    echo $user_id;
      	// image file directory
  	$target = "images/".basename($image);

  	$sql = "INSERT INTO post (user_id,image, image_text,dt) VALUES ('$user_id','$image', '$image_text',CURRENT_TIMESTAMP)";
  	// execute query
  	mysqli_query($db, $sql);

  	if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
  		$msg = "Image uploaded successfully";
  	}else{
  		$msg = "Failed to upload image";
  	}
  }
?>

<!DOCTYPE html>
<html>
<head>
	<title>User Post</title>
	<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.css" rel="stylesheet"> 
<script src="js/jquery.min.js"> </script>
<!-- Mainly scripts -->
<script src="js/jquery.metisMenu.js"></script>

<script src="jquery-1.9.0.min.js"></script>
<script src="js/jquery.slimscroll.min.js"></script>
<!-- Custom and plugin javascript -->
<link href="css/custom.css" rel="stylesheet">
<script src="js/custom.js"></script>
<script src="js/screenfull.js"></script>

</head>
<body>
			<article> <?php echo $msg; ?>
<div class="jumbotron">
  <div class="container text-center">
    <h1>Please Upload Your Review</div>
</div>

<?php
  include("head.php");
?>

			
      	<form method="POST" action="" enctype="multipart/form-data">
            <div class="container">    
              <div class="row">
                <div class="col-sm-6">
                  <div class="panel panel-primary">
                    <div class="panel-heading">BLACK FRIDAY DEAL</div>
                    <div class="panel-body"><img src="https://placehold.it/150x80?text=IMAGE" class="img-responsive" style="width:100%" alt="Image"></div>


  	          <div>
                 <input type="file"  name="image">
  	           </div>

  	<div>
      <textarea 
      	id="text" 
      	cols="40" 
      	rows="4" 
      	name="image_text" 
      	placeholder="Say something about this image..."></textarea>
  	</div>
  	<div>
  		<button type="submit" name="upload">Upload</button>
  </div>

</body>
</html>
