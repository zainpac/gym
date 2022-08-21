<?php 
include 'index.php'; 
if (!$_SESSION['food']) {
	header("location:view.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>view foods</title>
	<style type="text/css">
		a:hover{
			background-color: #555;
		}

	</style>
</head>
<body>

<center>
	<div style="margin-top: 160px">
		<table border="1" cellpadding="6" cellspacing="0">
			<tr>
				<th>food_id</th>
				<th>food_name</th>
				<th>food_owner</th>
				<th colspan="2">action</th>
			<?php 
			 
				# code...
			
            $select=$conn->query("SELECT * from food where foodname like'%$_SESSION[food]%'");
            $n=1;
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
			 <tr><td colspan="5"><input type="submit" value="back" onclick="history.back()"></td></tr>
		</table>
	</div>
	<script type="text/javascript">
		function fun(id) {
			var a=confirm("are you sure you want to delete this record");
			if (a) {
				window.location.href='delete.php?delid='+id	;		}
		}
	</script>
<p id="dd">....Imad....&copy;rigth by Blackjay in miad inc</p>
</center>

	<form method="POST">
		<input type="text" name="src" placeholder="search foods"class="src" required="">
	<input type="submit" name="sr" value="search" class="sr">
	</form>
<?php 
if (isset($_REQUEST['sr'])) {
		$select=$conn->query("SELECT * from food where foodname like '%$_REQUEST[src]%'");
	if (mysqli_num_rows($select)>0) {
	$_SESSION['food']=$_REQUEST['src'];
	header("location:view2.php");
		
	}
	else{
	echo "<script>alert('sorry no food found')</script>";

	}
	
}
	
 ?>
</body>
</html>