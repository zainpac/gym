<?php 
include 'index.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		h4{
			margin-left: 10px;
			margin-top: 130px;
		}
	</style>
</head>
<body>
<center>
	<h4>MAKE REPORT ORDER</h4>
</center>
<form method="POST">
<table border="0" cellpadding="8" class="t2">
	<tr><td>food</td></tr>
	<tr><td><select name="fo"><option>food</option>
    <option>Exported</option>
    <option>Imported</option>
	</select></td>
<td><input type="submit" name="send" value="send"></td></tr>

</table>
</form>
	<form action="repo.php" method="POST" >
<table border="0" cellpadding="8" class="div">
	<tr><td>Date from</td></tr>
	<tr><td><select name="fm"><option>select date from</option>  
<?php 
       $_SESSION['food']="food";
		if ($_SERVER['REQUEST_METHOD']=='POST')
		 {
			
	$food=$_REQUEST['fo'];
	$_SESSION['food']=$food;
	if ($food=="Exported") {
	$sel=$conn->query("SELECT * FROM export");
	while ($row=$sel->fetch_assoc())
	 {
	 	$dat=$row['exp_date'];
	 	$id=$row['exp_id'];
	echo "<option value='$dat'>$row[exp_date]</option>";
                
						
}				
}
	$food=$_REQUEST['fo'];
	if ($food=="Imported") {

	$sel=$conn->query("SELECT * FROM import");
	while ($row=$sel->fetch_assoc())
	 {
	 	$id=$row['imp_id'];
	 	$dat=$row['imp_date'];
	echo "<option value='$dat'>$row[imp_date]</option>";
                
						
}				
}
}
		 ?>
	</select></td></tr>
</table>
<table border="0" cellpadding="8" class="t1">
	<tr><td>Date to</td></tr>
	<tr><td><select name="to"><option>select date to</option>
	<?php 
		if ($_SERVER['REQUEST_METHOD']=='POST')
		 {
			
	$food=$_REQUEST['fo'];
		
	if ($food=="Exported") {
	$sel=$conn->query("SELECT * FROM export");
	while ($row=$sel->fetch_assoc())
	 {
	 	$dat=$row['exp_date'];
	 	$id=$row['exp_id'];
	echo "<option value='$dat'>$row[exp_date]</option>";
                
						
}				
}
	$food=$_REQUEST['fo'];
	if ($food=="Imported") {

	$sel=$conn->query("SELECT * FROM import");
	while ($row=$sel->fetch_assoc())
	 {
	 	$id=$row['imp_id'];
	 	$dat=$row['imp_date'];
	echo "<option value='$dat'>$row[imp_date]</option>";
                
						
}				
}
}
		 ?>
	</select></td>	
		<td><input type="submit" name="sub" value="send>>"></td></tr></table>


</form>
</body>
</html>
