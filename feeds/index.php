 <?php 
include 'conn.php';
session_start();
if (!$_SESSION['access']) {
	header("location:manager.php");
}
 ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <link href="css/bootstrap-grid.css" rel="stylesheet">
	<title>
		management system
	</title>
	<style type="text/css">
		body{
			background: url(image/gardens/og.jpg);
			background-repeat:all;
		}
		.src{
			position: absolute;
			left: 410px;
			top: 179px;
			text-align: center;
		}
		.sr{
			position: absolute;
			left: 590px;
			top: 178px;
		}
		.sr1{
			position: absolute;
			left: 680px;
			top: 178px;
		}
		.t2{
			position: absolute;
			left: 500px;
			top: 225px;
			
		}
		.t1{
			position: absolute;
			left: 600px;
			top: 360px;
		}
		.div{
			position: absolute;
			top: 360px;
			left: 360px;
			
		}
		#send{
			position: absolute;
			top: 460px;
			left: 520px;

		}
		td input,input{
			/*border:  1px dotted #556;*/
			border-style: none;
			outline: none;
			border-bottom: 3px dotted #556;

		}
		td input:hover{
			background: #aad;
		}
		input[type=submit]:hover{
			background: #aad;
			

		}
		h4{
			font-size: 40px;
			color: #77fa8d;
		}
		
		ul{
			list-style: none;
			margin: -10px;
			padding: 0px;
		   color: black;
		}
		ul li{color: black;
			float: left;
			width: 150px;
			height: 80px;
			opacity: .9;
			line-height: 100px;
			margin-right: -5px;
			text-align: center;
			font-size: 18px;
		}
		.act,ul li:hover{

			background: black;
			height: 100px;
		}

		a,ul li a{
			text-decoration: none;
			display: block;
		    color: white;
		    border:1px solid #fff;border-radius:2px; 

		}
		ul li ul li a{
			
		    color: black;
		    

		}
		ul li ul li{
			display: none;
			width: 100px;
			height: 40px;
			line-height: 80px;

		}
		ul li:hover ul li{
		   display: block;
		  padding: 35px 25px;

		}
		ul li ul li:hover{
			display: block;
			width: 100px;
			height:0px;
			background: transparent;
			line-height: 40px;
			color: black;

		}
				th,td{
			background: #aad66d;
		}
		span{
			color: red;
		}
		fieldset{
			text-align: center;
			border: 0px;
		}
		legend{
			font-size: 40px;
		}
     table{
     	text-align:center;
     }
     link{
     	width: 100%;
     }
	</style>
</head>
<body>
	<center><h1>DUKUNDUMURIMO FEEDS ltd</h1></center>
	<div class="link">
<ul><li>
<a href="index.php" class="act">Home</a></li>
<li><a href="#">FOOD</a><ul>
<li><a href="food.php">Add Food</a></li>
<li><a href="view.php">View Food</a></li>
</ul></li>
<li><a href="Import.php">Import</a></li>
<li><a href="export.php">Export</a></li>
<li><a href="Report.php">Report</a></li>
<li><a href="profile.php">profile</a></li>
<li><a href="out.php">logout</a></li>
</ul></div>


</body>
</html>