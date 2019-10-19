<?php 

  if (session_id() == '') {
   
  include('function.php');
  if (!isLoggedIn()) {
  $_SESSION['msg'] = "You must log in first";
  header('location: final_signup.php');

  }

}
?>



<!DOCTYPE html>
<head>
  <title>Head</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



</head>
<body>
<div class="jumbotron">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
   
    <ul class="nav navbar-nav">
      <li class="active"><a href="main_content.php">Home</a></li>
      <li><a href="near.php">Near-By Places</a></li>
      <li><a href="map3.html">Map</a></li>
      <li><a href="post.php">Post</a></li>
      <li><a href="#">Documents</a></li>
      <li><a href="#">Currency Convertor</a></li>
      <li><a href="#">Emergency Help</a></li>


    </ul>

    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-user"></span> Welcome <?php echo $_SESSION['user']['name']; ?><span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#"><i class="glyphicon glyphicon-edit"></i>Edit Profile</a></li>
          <li><a href="main_content.php?logout='1'"><i class="glyphicon glyphicon-share"></i>Log Out</a></li>
        </ul>
      </li>
     </ul>
  </div>
</nav>
 </div> 

</body>
</html>
