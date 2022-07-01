<?php
	$host = "127.0.0.1"; //host-ul
	$user = "mateo"; //userul
	$password = ""; //parola
	$database = "restaurant"; //baza de date
	$connection = mysqli_connect("127.0.0.1","mateo","")
		or die ("Cannot conect to database!");
	$db = mysqli_select_db($connection,"restaurant")
		or die ("Cannot find database!");
?>