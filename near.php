

<!DOCTYPE html>
<head>
  <title>Nearby places</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
</head>
<body>
<div class="jumbotron">
  <div class="container text-center">
    <h1>NEARBY PLACES</h1>      
    <p>The City Of Dreamers</p>
  </div>
</div>


<?php
  include("head.php");
?>

<div class="container">    
  <div class="row">
  	<div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">TOURIST PLACES</div>
        <div class="panel-body"><a href="map2.html"><img src="images\tourist.jpg" class="img-responsive" style="width:100%" alt="Image"></a></div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">ATM</div>
        <div class="panel-body"><a href="map2b.html"><img src="images\atm.jpg" class="img-responsive" style="height: 190px" style="width:100%" alt="Image"></a></div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">HOSPITAL</div>
        <div class="panel-body"><a href="map2c.html"><img src="images\hosp.jpg" class="img-responsive" style="width:100%" alt="Image"></a></div>
      </div>
    </div>
    
  </div>
</div><br>

<div class="container">    
  <div class="row">
  	<div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">BANK</div>
        <div class="panel-body"><a href="map2d.html"><img src="images\bank.jpg" class="img-responsive" style="width:100%" alt="Image"></a></div>
      </div>
    </div>
    <div class="col-sm-4">
      <div class="panel panel-primary">
        <div class="panel-heading">MALL</div>
        <div class="panel-body"><a href="map2e.html"><img src="images\mall.jpg" class="img-responsive" style="width:100%" alt="Image"></a></div>
      </div>
    </div>
    <div class="col-sm-4"> 
      <div class="panel panel-primary">
        <div class="panel-heading">RESTRO</div>
        <div class="panel-body"><a href="map2f.html"><img src="images\restro.jpg" class="img-responsive" style="height: 190px" style="width:100%" alt="Image"></a></div>
      </div>
    </div>

  </div>
</div><br><br>
</body>
</html>
<?php include('footer.html');?>