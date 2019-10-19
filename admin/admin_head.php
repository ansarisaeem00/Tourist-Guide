<?php 
  include('../function.php');
  if (!isLoggedIn()) {
  $_SESSION['msg'] = "You must log in first";
  header('location: ../final_signup.php');
}
?>


<!DOCTYPE html>
<head>
  <title>Admin Head</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>



</head>
<body>
<div class="jumbotron">
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <ul class="nav navbar-nav">
      <li class="active"><a href="main_content.php">Home</a></li>
      <li><a href="user.php">User</a></li>
      <li><a href="show_post.php">Post</a></li>
    
    </ul>

    <ul class="nav navbar-nav navbar-right">
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#" style="margin-right: 8px"><span class="glyphicon glyphicon-user"></span>Welcome <?php echo $_SESSION['user']['name']; ?><span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="#"><i class="glyphicon glyphicon-edit"></i>Edit Profile</a></li>
          <li><a href="logout.php"><i class="glyphicon glyphicon-share"></i>Log Out</a></li>
        </ul>
      </li>
     </ul>
  </div>
</nav>
 </div> 

</body>
</html>
