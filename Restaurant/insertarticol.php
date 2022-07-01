<html>
<head>
  <title>restauranT</title>
  <link href="style.css" rel="stylesheet">
<body>
	<div>	
	
		<div class="body1">
			<div class="search1">
		 
	<form action="insertarticol.php" method="GET">
		<h1><p id="titlu_adaugare">Adauga un nou articol in baza de date:</p> 
		ArticolID 		<input type="text" name="Me"><br><br>
		NumeArticol   	<input type="text" name="Pr"><br><br>
		CategorieID  	<input type="text" name="Nu"><br><br>
		Pret			<input type="text" name="St"><br><br>
		Ingrediente		<input type="text" name="St1"><br><br>
	
	
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
		if(isset($_GET['Me']) && isset($_GET['Pr'])&& isset($_GET['Nu']) && isset($_GET['St']) && isset($_GET['St1'])){
		if ($_GET['Me'] != "" && $_GET['Pr'] != ""&& $_GET['Nu'] != ""  && $_GET['St'] != "" && $_GET['St1'] != "") 
			{
				$Me = $_GET['Me'];
				$Pr = $_GET['Pr'];
   				$Nu = $_GET['Nu'];
   				$St = $_GET['St'];
   				$St1 = $_GET['St1'];
   				
			
				
				$query="INSERT INTO articol (ArticolID, NumeArticol, CategorieID, Pret, Ingrediente) 
						VALUES ('$Me','$Pr','$Nu','$St', '$St1') ;" ;
		    }
	if (executiequery($connection,$query))
		{
		echo "succes";}}
?> 