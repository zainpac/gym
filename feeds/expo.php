<?php 
include 'index.php';
$id=$_GET['id'];
$select=$conn->query("SELECT * from food where food_id='$id'");
$row=$select->fetch_assoc();
$name=$row['foodname'];
$owner=$row['owner'];
$select=$conn->query("SELECT * from import where food_id='$id'");
if (mysqli_num_rows($select)<1) {
	echo "<script>alert('nothing has been imported on $name of $owner');</script>";
	echo "<script>window.location.replace('export.php');</script>";
}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>export food</title>
</head>
<body>

<center>
	
	<form action="" method="POST" >
	<fieldset style="margin-top: 130px"><legend>Export food</legend>
	<h3><label>food name  </label>
		<input type="text" name="name" value="<?php echo $name; ?>"> </h3>
 	<h3><label>quantity.....</label><input type="text" name="qty" placeholder="enter food quantity" required="">
 	</h3>
    <h3><input type="submit" name="reg" value="export food"></h3></fieldset>
</form>
</center>
</body>
</html>
<div style=" text-align: center; ">
	<center><table border="1" cellpadding="6" cellspacing="0">
	<?php   $select1=$conn->query("SELECT * from export where food_id='$id'");
			echo "<tr><td colspan='5'>exported $name</tr></td>"?>
	
			<tr>
				<th>food_id</th>
				<th>food_name</th>
				<th>food_owner</th>
				<th>imported_date</th>
				<th>quantity_exported</th>
				<?php 
           
            $n=1;
            $sel=$conn->query("SELECT sum(quantity) from export where food_id='$id'");
            $data1=$sel->fetch_assoc();
            while ($row=$select1->fetch_assoc()) {
            	$id=$row['food_id'];
            	$dat=$row['exp_date'];
            	$qua=$row['quantity'];
            	echo "</tr>
			<tr><td>$n</td><td>$name</td><td>$owner</td><td>$dat</td><td>$qua kg</td></tr>";
			$n=$n+1;
            }
        
            
         
			 ?>
            <tr><td>TOT</td><th colspan="4"><?php echo $data1['sum(quantity)'];?> kg</th></tr>
	
		<?php  
        echo "<tr><td colspan='5'>impoted $name</tr></td>";
		?>
		
	
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
            	$dat=$row['imp_date'];
            	$qua=$row['quantity'];
            	echo "</tr>
			<tr><td>$n</td><td>$name</td><td>$owner</td><td>$dat</td><td>$qua kg</td></tr>";
			$n=$n+1;
            }
            $expo=$data1['sum(quantity)'];
         $all=$data['sum(quantity)']-$expo;
         if (isset($_POST['reg'])) {
         	$qty=$_POST['qty'];
         	if ($qty<=$all) {
         		$insert=$conn->query("INSERT into export values('','$id',now(),'$qty')");
	if ($insert) {
		echo "<script>alert('$qty kg exported on $name')</script>";
header("refresh:1;");
	}else{
		echo "<script>alert('$qty kg failed to be exported on $name')</script>";
	}
         	}
         	else{
		echo "<script>alert('$qty kg you want to export is greater than  remaining on $name in stock')</script>";


         	}
         }
         $expo=$data1['sum(quantity)'];
         $all=$data['sum(quantity)']-$expo;
            	if (!mysqli_num_rows($select1)>0)
		{
			$expo=0;
		} 
			 ?>
            <tr><td>TOT</td><th colspan="4"><?php echo $data['sum(quantity)']; ?> kg</th></tr>
            <tr><td>Remaining stock</td><th colspan="4"><?php echo $data['sum(quantity)']; ?> kg-<?php echo $expo."kg = ".$all ." kg"; 
            ?></th></tr>
		</table>
	</center>
</div>
</div>