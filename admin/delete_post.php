<?php  

	  $db = mysqli_connect("localhost", "root", "", "mumbai_darshan");
		$delete_id=$_GET['del'];  
		$delete_query="DELETE  from post WHERE post_id='$delete_id'";//delete query  
		$run=mysqli_query($db,$delete_query);  
		if($run)  
		{  
		//javascript function to open in the same window   
		    echo "<script>window.open('show_post.php?deleted=post has been deleted','_self')</script>";  
		}  
  
?>