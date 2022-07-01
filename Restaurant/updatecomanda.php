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
		 <form action="updatecomanda.php" method="GET" align="center">
		<h2><p id="titlu_adaugare">Modifica datele despre comanda cu ID-ul :</p><br>
		
		
		ComandaID 		<input type="text" name="Me"></h2><br><br>
		ArticolID		<input type="text" name="St"><br><br>
		DataComanda  	<input type="text" name="Nu"><br><br>
		ClientID   		<input type="text" name="Pr"><br><br>
		Cantitate   	<input type="text" name="Nu1"><br><br>
		DataRidicare   	<input type="text" name="St1"><br><br>
		
		
		<input type="Submit" value="Modifica" >
			
		
	</form>
	</div>
	
	




					


<?php
require_once("db_con.php");
require_once("functions.php");
if(isset($_GET['Me'])){
    if ($_GET['Me'] != ""){
		if(isset($_GET['St'])&& isset($_GET['Nu'])&& isset($_GET['Pr'])&&isset($_GET['Nu1'])&&isset($_GET['St1'])){
    				if ($_GET['St'] != "" && $_GET['Nu'] != ""&& $_GET['Pr'] != ""&& $_GET['Nu1'] != "" && $_GET['St1'] != "") 
							{
		   		
		   		$Me = $_GET['Me'];
				$St = $_GET['St'];
   				$Nu = $_GET['Nu'];
   				$Pr = $_GET['Pr'];
   				$Nu1 = $_GET['Nu1'];
   				$St1 = $_GET['St1'];
  			  
			$query="UPDATE comanda SET ArticolID='". $St . "', DataComanda='". $Nu ."', ClientID ='". $Pr ."', Cantitate ='". $Nu1 ."', DataRidicare='". $St1 ."' WHERE ComandaID='".$Me."' ; " ;
			$result=executiequery($connection,$query); 
			 } 
}}}
			
						


?>

</body>
</head>
</html>