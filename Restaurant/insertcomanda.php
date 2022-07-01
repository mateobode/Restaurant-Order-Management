<html>
<head>
  <title>restauranT</title>
  <link href="style.css" rel="stylesheet">
<body>
	<div>	
	
		<div class="body1">
			<div class="search1">
		 
	<form action="insertcomanda.php" method="GET">
		<h1><p id="titlu_adaugare">Adauga o noua comanda in baza de date:</p> 
		ComandaID 		<input type="text" name="Me"><br><br>
		ArticolID		<input type="text" name="St"><br><br>
		DataComanda  	<input type="text" name="Nu"><br><br>
		ClientID   		<input type="text" name="Pr"><br><br>
		Cantitate   	<input type="text" name="Nu1"><br><br>
		DataRidicare   	<input type="text" name="St1"><br><br>
	</h1>
<br>

		<input type="submit" value="Add">
		</form>
	</div>
</div>





</body>
</head>
</html>

<?php 
	 	require_once("db_con.php");
        require_once("functions.php");
		if(isset($_GET['Me']) && isset($_GET['St']) && isset($_GET['Nu']) && isset($_GET['Pr']) && isset($_GET['Nu1']) && isset($_GET['St1'])){
		if ($_GET['Me'] != "" && $_GET['St'] != "" && $_GET['Nu'] != ""  && $_GET['Pr'] != "" && $_GET['Nu1'] != "" && $_GET['St1'] != "") 
			{
				$Me = $_GET['Me'];
				$St = $_GET['St'];
   				$Nu = $_GET['Nu'];
   				$Pr = $_GET['Pr'];
   				$Nu1 = $_GET['Nu1'];
   				$St1 = $_GET['St1'];
   	
			$query="INSERT into comanda (ComandaID, ArticolID, DataComanda, ClientID, Cantitate, DataRidicare) 
						VALUES ('$Me','$St','$Nu','$Pr',
						'$Nu1', '$St1') ;" ;
		    }
	if (executiequery($connection,$query))
		{
		echo "succes!";}}
?> 