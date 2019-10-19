<?php  

	  $db = mysqli_connect("localhost", "root", "", "mumbai_darshan");
$delete_id=$_GET['del'];  
$delete_query="delete  from users WHERE id='$delete_id'";//delete query  
$run=mysqli_query($db,$delete_query);  
if($run)  
{  
//javascript function to open in the same window   
    echo "<script>window.open('user.php?deleted=user has been deleted','_self')</script>";  
}  
  
?>