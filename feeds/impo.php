<?php 
include 'index.php';
$id=$_GET['id'];
$select=$conn->query("SELECT * from food where food_id='$id'");
$row=$select->fetch_assoc();
$name=$row['foodname'];
$owner=$row['owner'];
if ($_SERVER['REQUEST_METHOD']=='POST') {
	$qty=$_REQUEST['qty'];
	if ($qty<=0) {
		echo "<script>alert(' sory!! quantity must be greater than 0')</script>";
		echo "<script>history.back()</script>";
		
	}else{
	$insert=$conn->query("INSERT into import values('','$id',now(),'$qty')");
	if ($insert) {
		echo "<script>alert('$qty imported on $name')</script>";
	}
}}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		#idd{
			position: absolute;
			top: 600px;
			left: 500px;
		}
	</style>
</head>
<body>

<center>
	<form action="" method="POST" style="margin-top: 140px;margin-left: 0px">
	<h1>Import food</h1>
	<h3><label>food name  </label>
		<input type="text" name="name" style="color: black;text-align: center;" disabled="" value="<?php echo $name; ?>" > </h3>
 	<h3><label>quantity.....</label><input type="text" name="qty" placeholder="enter food quantity" required="" style="color: black;text-align: center;">
 	</h3>
    <h3><input type="submit" name="reg" value="import food"></h3>
</form>
</center>
</body>
</html>
<div style="margin-top: -10px;margin-left: 300px; ">
	<?php   $select=$conn->query("SELECT * from import where food_id='$id'");
	if (mysqli_num_rows($select)>0){?>
	<table border="1" cellpadding="6" cellspacing="0">
			<tr>
				<th>food_id</th>
				<th>food_name</th>
				<th>food_owner</th>
				<th>imported_date</th>
				<th>quantity_imported</th>
				<?php 
           
            $n=1;
            $sel=$conn->query("SELECT sum(quantity) from import where food_id='$id'");
            $data=$sel->fetch_assoc();
            while ($row=$select->fetch_assoc()) {
            	$id=$row['food_id'];
            	$qua=$row['quantity'];
            	$dat=$row['imp_date'];
            	echo "</tr>
			<tr><td>$n</td><td>$name</td><td>$owner</td><td>$dat</td><td>$qua</td></tr>";
			$n=$n+1;
            }
        
            
         
			 ?>
            <tr><td>TOT</td><th colspan="4"><?php echo $data['sum(quantity)']; }?></th></tr>
		</table>
</div>
<p id="idd">....Imad....&copy;rigth by Blackjay in miad inc</p>
	
