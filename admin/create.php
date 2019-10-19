<?php include('../function.php') ?>
<!DOCTYPE html>
<html>
<head>
  <title>Create User</title>

<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600' rel='stylesheet' type='text/css'>
<link href="//netdna.bootstrapcdn.com/font-awesome/3.1.1/css/font-awesome.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="css/create.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
<div class="testbox">
  <h1>Registration</h1>

  <form action="create.php" method="POST"">
  
  <label id="icon" for="name"><i class="icon-user"></i></label>
  <input type="text" name="name" value="<?php echo $name; ?>" id="name" placeholder="Name" required/>
  
  <label id="icon" for="name"><i class="icon-envelope "></i></label>
  <input type="text" name="email" value="<?php echo $email; ?>" id="name" placeholder="Email" required/>
  
  <label id="icon" for="name"><i class="icon-shield"></i></label>
  <input type="password" name="password_1" id="name" placeholder="Password" required/>
   
  <label id="icon" for="name"><i class="icon-shield"></i></label>
  <input type="password" name="password_2" id="name" placeholder="Confirm Password" required/>

  <div class="dropdown">
  <label>User type</label>
      <select name="user_type" id="user_type" >
        <option value=""></option>
        <option value="admin">Admin</option>
        <option value="user">User</option>
      </select></div>
   
   <button type="submit" name="signup_btn" class="btn btn-primary " style="margin-left: 10px, margin-top:3px">Register</button>
 
  </form>
</div>
</body>
</html>