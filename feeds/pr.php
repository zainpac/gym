<script type="text/javascript">
	print();
</script>
<?php 
header("refresh:6;url=view.php");
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>view foods</title>
	<style type="text/css">
		a:hover{
			background-color: #555;
		}
		th,td{
			background: #aad66d;
		}
	</style>
</head>
<body><center>
<h3>REPORT OF FOOD AND THEIR OWNER</h3>

	<div style="margin-top: 60px">
		<table border="1" cellpadding="6" cellspacing="0" >
			<tr>
				<th>food_id</th>
				<th>food_name</th>
				<th>food_owner</th>
				<th colspan="2">action</th>
			<?php 
			 include 'conn.php';
			 
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



</body>
</html>