<!DOCTYPE html>
<html>
<head>
	<title>manager</title>
</head>
<body>
<form method="POST" action="dash.php">	
 <center>
 	<h1>Manager login </h1>
 	<br>
 	<h3><label>username</label><input type="text" name="user" placeholder="user" required=""></h3>
 	<h3><label>password</label><input type="password" name="pass" placeholder="password" required=""></h3>
    <h3><input type="submit" name="log" value="login"></h3>
    or create new account
    <h3><input type="submit"  onclick="document.location='manager.php'" value="register"></h3>
 </center>
</form>
</body>
</html>