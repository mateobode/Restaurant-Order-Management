<!DOCTYPE html>
<html>

<head>
  <title>restauranT</title>
  <link href="style.css" rel="stylesheet">
</head>

<body>
<div id="main">

<h1><center>restauranT</center></h1> 
<h2><center>Organizarea Restaurantului</center></h2>
<div>	
	

	<div class="body1">
			<div class="search1">
		 
	<form action="deletearticol.php" method="GET" align="center">
		<h2><p id="titlu_adaugare">Sterge articolul cu id-ul:</p><br>
		ID  : <input type="text" name="Nu"></h2><br><br>
		<input type="submit" value="Sterge">
	</form>
	</div>
	
	

</div>
</div>
</div>
</body>
</head>
</html>



<?php
require_once("db_con.php");
require_once("functions.php");
         if(isset($_GET['Nu'])){
		if ($_GET['Nu'] != "")
		{$Nu = $_GET['Nu'];
				$query5="DELETE  
 				FROM articol 
 				WHERE ArticolID='$Nu' ;" ;
 		}
 		if (executiequery($connection, $query5))
		{
		 echo "Am sters!";
		} else 
		 echo "EROARE!";}
?>