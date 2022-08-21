<!DOCTYPE html>
<html>
<head>
	<title>manager registration</title>
	<style type="text/css">
		body{
			background: url(image/Gardens/og.jpg);
			background-repeat:all;
		}
		
		span{
			color: red;
		}
		#dd{
			margin-top:400px;
		}
	</style>
</head>
<body>
<form method="POST">	
 <center>
 	<h1>Manager registration </h1>
 	<br>
 	<h3><label>username </label><input type="text" name="user" placeholder="user" required=""></h3>
 	<h3><label>password </label><input type="password" name="pass" placeholder="password" required=""></h3>
    <h3><input type="submit" name="reg" value="register"> <input type="submit" name="reg" value="back" onclick="history.back()"></h3>
<p id="dd">....Imad....&copy;rigth by <u>Blackjay</u> in miad inc.</p>
</center>
 
</form>
</body>
</html>
<?php 
if (isset($_POST['reg'])) {
	include 'conn.php';
	$name=$_POST['user'];
$pass=$_POST['pass'];
$check=$conn->query("SELECT * from manager where uname='$name'");
if (mysqli_num_rows($check)>0) {
	echo "<script>alert('$name already exist')</script>";
	echo "<script>window.location.replace('dash.php')</script>";
	
}
$insert=$conn->query("INSERT into manager values('','$name','$pass')");
if ($insert) {
	echo "<script>alert('$name registered in system')</script>";
	echo "<script>window.location.replace('index.php')</script>";
}
else{
	echo "failed";
}
}
 ?>