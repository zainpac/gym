<?php
include 'index.php';
if (!$_GET['upid']) {
	header("location:view.php");
}
$id=$_GET['upid'];
$sel=mysqli_query($conn,"SELECT * from food where food_id='$id'");
$data=mysqli_fetch_array($sel,MYSQLI_NUM);
if ($_SERVER['REQUEST_METHOD']=='POST') 
{
	$name=$_REQUEST['name'];
	$own=$_REQUEST['owner'];
	$update=mysqli_query($conn,"UPDATE food set foodname='$name',owner='$own' where food_id='$id'");
	if ($update) {
		echo "<script>alert('$name and $own updated')</script>";
		echo "<script>window.location.replace('view.php')</script>";

	}
	else{
		echo "<script>alert('$name and $own failed to updated')</script>";
       echo "<script>window.location.replace('view.php')</script>";
	}
}
 ?>
<center>

<form action="" method="POST" style="margin-top: 150px">
	<h1>food registration</h1>
	<h3><label>food name </label>
		<input type="text" name="name" placeholder="enter foodname" value="<?php echo $data[1] ?>"></h3>
 	<h3><label>food owner </label>
 		<input type="text" name="owner" placeholder="enter food ownner" value="<?php echo $data[2] ?>"></h3>
    <h3><input type="submit" name="reg" value="upadate food"></h3>
</form> 
<p id="dd">....Imad....&copy;rigth by Blackjay in miad inc</p>

</center>