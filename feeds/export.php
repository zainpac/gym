<?php include 'index.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>food</title>
</head>
<body><center>
	<div style="margin-top: 130px;">
		<table border="1" cellpadding="6" cellspacing="0">
			<tr>
				<th>food_id</th>
				<th>food_name</th>
				<th>food_owner</th>
				<th colspan="2">action</th>
			<?php 
            $select=$conn->query("SELECT * from food  where active=1");
            $n=1;
            while ($row=$select->fetch_assoc()) {
            	$id=$row['food_id'];
            	$name=$row['foodname'];
            	$owner=$row['owner'];
            	echo "</tr>
			<tr><td>$n</td><td>$name</td><td>$owner</td><td><a href='expo.php?id=$id'>EXPORT<a/></td></tr>";
			$n=$n+1;
            }

			 ?>
			 
		</table>
	</div>
	
<!-- <form action="" method="POST" style="margin-top: -460px;">
	<h1>Import food</h1>
	<h3><label>food name  </label><input type="text" name="name"> </h3>
 	<h3><label>quantity.....</label><input type="text" name="qty" placeholder="enter food quantity" required="">
 	</h3>
 	<h3><label>date..... </label><input type="date" name="dt" required=""></h3>
    <h3><input type="submit" name="reg" value="import food"></h3>
</form> -->
<p id="dd">....Imad....&copy;rigth by Blackjay in miad inc</p>

</center>
</body>
</html>