<?php
	require('db_con.php');
	include("authentication.php"); //include it on all secure pages 
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Dashboard - Secured Page</title>
		<link rel="stylesheet" href="css/style.css" />
	</head>
	<body>
		<div class="form">
		<p>Dashboard</p>
		<p>Welcome to Dashboard</p>
		<p><a href="index.php">Home</a></p>
		<a href="logout.php">Logout</a>
		</div>
	</body>
</html>
