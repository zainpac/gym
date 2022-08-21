<?php 
$id=$_GET['delid'];
include 'conn.php';
$delete=mysqli_query($conn,"UPDATE food set active=0 where food_id='$id'");
//if ($delete) {
	header("location:view.php");
//}
 ?>