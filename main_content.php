<?php  $db = mysqli_connect("localhost", "root", "", "mumbai_darshan");
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Mumbai Darshan</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default rounded borders and increase the bottom margin */ 
    .navbar {
      margin-bottom: 50px;
      border-radius: 0;
    }
    
    /* Remove the jumbotron's default bottom margin */ 
     .jumbotron {
      margin-bottom: 0;
    }
   
    /* Add a gray background color and some padding to the footer */
    footer {
      background-color: #f2f2f2;
      padding: 25px;
    }

    .panel-footer{
      background-color: #3c3f44;
      text-decoration-color: #eaeff7;
    }
  </style>
</head>
<body>


    <div class="content">
    <!-- notification message -->
    <?php if (isset($_SESSION['success'])) : ?>
      <div class="error success" >
        <h3>
          <?php 
            echo $_SESSION['success']; 
            unset($_SESSION['success']);
          ?>
        </h3>
      </div>
    <?php endif ?>
    <!-- logged in user information -->
        <?php  if (isset($_SESSION['user'])) : ?>
          

     
        <?php endif ?>
      </div>
    </div>
  </div>
</body>
</html>





<div class="jumbotron">
  <div class="container text-center">
    <img src="images/mumbai.jpg" height="300px" width="1000px">
    <h1>Welcome To Bombay</h1>      
    <p>The City Of Dreamers</p>
  </div>
</div>

<?php
  include("head.php");
?>


    <?php
  $sql1 = "SELECT * FROM users inner join post on users.id=post.user_id";
  
  $result=mysqli_query($db,$sql1);
    while ($row = mysqli_fetch_array($result)) {
      
    ?>

<div class="container">    
  <div class="row">
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading"><?php echo $row['name']; ?></div>
        <div class="panel-body"><?php echo "<img style='height:150px;width:150px' src='images/".$row['image']."'>"; ?></div>
        <div class="panel-footer">Review:<br><?php echo $row['image_text']; ?></div>
      </div>
    </div>

<?php  
    }
  ?>
</div>
</div>
</body>
</html>
<?php include('footer.html');?>