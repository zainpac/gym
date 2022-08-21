<?php 
include 'index.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>view foods</title>
	<style type="text/css">
		a:hover{
			background-color: #555;
		}
#dd{
	position: absolute;
	top: 622px;
	left: 500px
	}
	</style>

</head>
<body>

<center>
	<div style="margin-top: 160px">
		<table border="1" cellpadding="6" cellspacing="0" >
			<tr>
				<th>food_id</th>
				<th>food_name</th>
				<th>food_owner</th>
				<th colspan="2">action</th>
			<?php 
			 
			 
			$n=1;
            $select=$conn->query("SELECT * from food where active='$n'");
            
            while ($row=$select->fetch_assoc()) {
            	$name=$row['foodname'];
            	$owner=$row['owner'];
            	$id=$row['food_id'];
            	echo "</tr>
			<tr><td>$n</td><td>$name</td><td>$owner</td><td>
			<a href='javascript:fun($id)'>delete<a/></td><td><a href='update.php?upid=$id'>update</a></td></tr>";
			$n=$n+1;
            }
			 ?>
		</table>
	</div>
	<script type="text/javascript">
		function fun(id) {
			var a=confirm("are you sure you want to delete this record");
			if (a) {
				window.location.href='delete.php?delid='+id	;		}
		}
	</script>
<p id="dd">....Imad....&copy;  Blackjay in <a>miad inc.</a></p>
</center>

	<form method="POST">
		<input type="text" name="src" placeholder="search foods"class="src" required="">
	<input type="submit" name="sr" value="search" class="sr"></form>
	<input type="submit"  value="print" class="sr1" onclick="document.location='pr.php'">

	
<?php 
if ($_SERVER['REQUEST_METHOD']=="POST") {
	$nn=$_REQUEST['src'];
	$select=$conn->query("SELECT * from food where foodname like'%$nn%'");
	if (mysqli_num_rows($select)>0) {
	$_SESSION['food']=$nn;
	// like'%ma%' view2.php
	echo "<script>window.location.replace('view2.php')</script>";
	
		
	}
	else{
	echo "<script>alert('sorry no food found')</script>";

	}
	
}
 ?>

</body>
</html>