<?php
include 'index.php';
$user=$_SESSION['access'];
$sel=mysqli_query($conn,"SELECT * from manager where uname='$user'");
$data=mysqli_fetch_array($sel,MYSQLI_NUM);
if ($_SERVER['REQUEST_METHOD']=='POST') 
{   $pass=$_REQUEST['pass'];
    $pass2=$_REQUEST['pass2'];
    $sel1=mysqli_query($conn,"SELECT password from manager where password='$pass'");
    if (empty($pass2))
     {
    	$pass2=$pass;
    }
   
	$name=$_REQUEST['name'];
	
	if (mysqli_num_rows($sel1)>0) {
	
	$update=mysqli_query($conn,"UPDATE manager set uname='$name',password='$pass2' where uname='$user'");
	if ($update) {
		$_SESSION['access']=$name;
		echo "<script>alert('$name updated')</script>";
	echo "<script>window.location.replace('home.php')</script>";
		
         
	}
	else{
		echo "<script>alert('$name and $own failed to be updated')</script>";
       echo "<script>window.location.replace('profile.php')</script>";
	}
}
else{
	echo "<script>alert('old password not matching')</script>";
	echo "<script>window.location.replace('profile.php')</script>";
    }
}
 ?>
<center>

<form action="" method="POST" style="margin-top: 150px">
	<h1>User profile</h1>
	<h3><label>User name ...</label>
		<input type="text" name="name" placeholder="enter foodname" value="<?php echo $data[1] ?>" required><span>*</span></h3>
 	<h3><label>old password </label>
 		<input type="password" name="pass" placeholder="enter old password" required><span>*</span></h3>
 		<h3><label>new password </label>
 		<input type="password" name="pass2" placeholder="enter new password"></h3>
    <h3><input type="submit" name="reg" value="update profile"></h3></form>
<h3><input type="submit" value="reset password" onclick="window.location='reset.php'"></h3>
<p id="dd">....Imad....&copy;rigth by Blackjay in miad inc</p>

</center>