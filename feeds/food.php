<?php include 'index.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>food</title>
	<meta charset="utf-8">

	<meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">
<style type="text/css">
	#dd1{
			
			margin-top:250px;
		}
</style>
</head>

<body>
	<center>

<form action="" method="POST" style="margin-top: 150px">
	<h1>food registration</h1>
	<h3><label>food name </label><input type="text" name="name" placeholder="enter foodname" required=""></h3>
 	<h3><label>food owner </label><input type="text" name="owner" placeholder="enter food ownner" required=""></h3>
    <h3><input type="submit" name="reg" value="regist food"></h3>
</form><h3><input type="submit"  value="view food" onclick="window.location='view.php'"></h3> 

	<p id="dd1">....Imad....&copy;rigth by <u>Blackjay</u> in miad inc.</p>


</center>
</body>
</html>
<?php 
if (isset($_POST['reg'])) {
	$name=$_POST['name'];
	$own=$_POST['owner'];
$check=$conn->query("SELECT * from food where foodname='$name' and owner='$own'");
if (mysqli_num_rows($check)>0) {
	echo "<script>alert('$name of $own already exist')</script>";

	echo "<script>window.location.replace('food.php')</script>";
	
}
$insert=$conn->query("INSERT into food values('','$name','$own',1)");
if ($insert) {
		echo "<script>alert('$name inserted in stock');</script>";
}
else{
	echo "failed";
}
}
 ?>
