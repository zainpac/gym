<?php 
session_start();
include 'conn.php';
?>
 <!DOCTYPE html>
 <html>
 <head>
 	<style type="text/css">
 		body{
			background: url(image/gardens/og.jpg);
			background-repeat:all;
		}
 	</style>
 	<title>reset password</title>
 </head>
 <body>
 <center>
 	
 	<form action="" method="POST" style="margin-top: 150px">
 		<h1>Reset password</h1>
 		<h3><label>user name ...</label>
		<input type="text" name="name" placeholder="enter username"  required><span>*</span></h3>
	    <h3><input type="submit" name="reg" value="send"></h3>
        </form><form>
	<?php
	if ($_SERVER['REQUEST_METHOD']=='POST') {
	 	 	$nam=$_REQUEST['name'];
	 	 	$sel=mysqli_query($conn,"SELECT * from manager where uname='$nam'");
	 	 	if (mysqli_num_rows($sel)>0) {
	 	 		
	 	 $_SESSION['unam']=$nam;
	 	  	 echo "
 	<h3><label>new password </label>
 		<input type='password' name='pass' placeholder='enter new password' required><span>*</span></h3>
 		<h3><label>confirm password </label>
 		<input type='password' name='pass2' placeholder='enter confirm password'><span>*</span></h3>";
 	?>

 	<h3><input type="submit" name="change" value="reset password"></h3>
 	<?php 	 }
else{
	echo "<script>alert('user name not found')</script>";
}
 }

    if (isset($_REQUEST['change'])) {
    	$name=$_SESSION['unam'];
    	$pass=$_REQUEST['pass'];
    	$pass2=$_REQUEST['pass2'];
    	if ($pass==$pass2) {
    		# code...
    	
    	$update=mysqli_query($conn,"UPDATE manager set password='$pass2' where uname='$name'");
	if ($update) {
		echo "<script>alert('password successfuly changed')</script>";
	echo "<script>window.location.replace('index.php')</script>";   
	}
	else{
		echo "<script>alert('password not matching')</script>";
		echo "<script>history.back('')</script>";


	}
    }
}
 	?>

    </form>
 </center>
 </body>
 </html>