<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
	
		#tt{
			position: absolute;
			top: 200px;
			left: 280px;
		}
		#pr{
			position: absolute;
			/*top: 200px;*/
			left: 800px;
		}
	</style>
</head>
<body>
<?php include 'index.php';

	if (isset($_REQUEST['sub'])) {
		# code...
	//$_SESSION['from'];$_SESSION['to'];
	 $from=$_REQUEST['fm'];
	 $to=$_REQUEST['to'];
	 if ($from!="select date from" or $to!="select date to") {
	 	# code...
	 if ($_SESSION['food']=="Exported") {
	 	# code...
	 
      $sel=$conn->query("SELECT * from  export where exp_date
       between '$from' and '$to'");
      if (mysqli_num_rows($sel)>0) {
      	//echo mysqli_num_rows($sel);
      
       
  
	?>


<h3>ORDERED REPORT</h3>
<br><br><br>
<table border="1" cellpadding="6" cellspacing="1" id="tt">
	<tr>
		<td>no</td>
		<td>food_name</td>
		<td>food_owner</td>
		<td>exported_date</td>
		<td>expoted_quantity</td>
	</tr>
<?php 
$n=1;
while ($row=mysqli_fetch_array($sel)) {

echo "<tr>
		<td>$n</td>
		<td>$row[food_id]</td>
		<td></td>
		<td>$row[exp_date]</td>
		<td>$row[quantity]</td>
	</tr>";
$n++;
}
 ?>
</table>
<?php 
}
else{
      	echo "<script>alert('no record found');</script>";
      	echo "<script>window.location.replace('report.php');</script>";

      }
  }
      
  if($_SESSION['food']=="Imported"){
  	$sel1=$conn->query("SELECT * from  import where imp_date
       between '$from' and '$to'");
  	if (mysqli_num_rows($sel1)>0) {
  	echo "<table border='1' cellpadding='6'  cellspacing='2' id='tt'>
	<tr>
		<td>no</td>
		<td>food_name</td>
		<td>food_owner</td>
		<td>imported_date</td>
		<td>imprted_quantity</td>
	</tr>";
$n=1;
while ($row=mysqli_fetch_array($sel1)) {

echo "<tr>
		<td>$n</td>
		<td>$row[food_id]</td>
		<td></td>
		<td>$row[imp_date]</td>
		<td>$row[quantity]</td>
	</tr>";
$n++;
}
echo "</table>";
}
else{
      	echo "<script>alert('no record found');</script>";

      	echo "<script>window.location.replace('report.php');</script>";

  }
}
}
  else{
      	echo "<script>alert('select date');</script>";

      	echo "<script>window.location.replace('report.php');</script>";

  }

}

/*if (!isset($_REQUEST['sub']))
{
	header("location:report.php");

	}*/
 ?>


</body>
</html>
<button onclick="pdiv()" id="pr">print</button>
<script type="text/javascript">
/*function pdiv() {


	var restore=document.body.innerHTML;
	var divcontent=document.getElementById('div').innerHTML;
	document.body.innerHTML=divcontent;
	window.print();
	document.body.innerHTML=restore;
	var a=window.open(",",'height=300,width=100');
	a.document.write('<html>');
	a.document.write('<body><h1>content are');
	a.document.write(divcontent);
	a.document.write('</h1></body></html>');
	a.close();
	a.print();

	
}*/
</script>