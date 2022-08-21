 <!DOCTYPE html>
<html>
<head>
	<title>manager</title>
	<style type="text/css">
		body{
			background: url(image/Gardens/og.jpg);
			background-repeat:all;
		}
		
		span{
			color: red;
		}
	</style>
</head>
<body> <center>
<form method="POST">	

 	<h1>Manager login 	<br>
 	<h3><label>username </label><input type="text" name="user" placeholder="user" required="" autocomplete="on" autosave="on"><span>*</span>
</h3>
 	<h3><label>password </label><input type="password" name="pass" placeholder="password" required=""  ><span>*</span></h3>
    <h3><input type="submit" name="log" value="login"> or 
   <input type="submit"  onclick="document.location='register.php'" value="create new account"></h3></form>
    <h3><input type="submit"  onclick="document.location='reset.php'" value="reset password"></h3>
   
 </center>

</body>
</html>
<?php 
session_start();
if (isset($_POST['log'])) {
	include 'conn.php';
	$name=$_POST['user'];
	$pass=$_POST['pass'];
	$select=$conn->query("SELECT * from manager where uname='$name' and password='$pass'");
	if (mysqli_num_rows($select) >0) {
     $row=$select->fetch_assoc();
     $id=$row['m_id'];
     $ps=$row['password'];
		$_SESSION['access']=$row['uname'];
		echo "<script>alert('welcome');</script>";
		echo "<script>window.location.replace('index.php');</script>";
	}
	else{
		echo "<script>alert('credintial invalid');</script>";
	}
}
 ?>