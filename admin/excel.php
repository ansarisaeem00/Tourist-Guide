<?php
// Connection 

$conn=mysqli_connect('localhost','root','');
$db=mysqli_select_db('mumbai_darshan',$conn);

$filename = "user_info.xls"; // File Name
// Download file
header("Content-Disposition: attachment; filename=\"$filename\"");
header("Content-Type: application/vnd.ms-excel");
$user_query = mysqli_query('select id,name,email from user');
// Write data to file
$flag = false;
while ($row = mysqli_fetch_assoc($user_query)) {
    if (!$flag) {
        // display field/column names as first row
        echo implode("\t", array_keys($row)) . "\r\n";
        $flag = true;
    }
	   echo implode("\t", array_values($row)) . "\r\n";

}

header('location:user.php');
?>