	<html>
<head>
	 <title>restauranT</title>
  <link href="style.css" rel="stylesheet">
<body>

	<div class="search">
		<div class="city"> 
	<form action="interogare1.php" method="GET">
			<p id="titlu_cautare">1.Selecteaza furnitorul: </p> 
			<input type="radio" name="nad" value="Pizza&Spaghetti">Pizza&Spaghetti<br>
			<input type="radio" name="nad" value="BurgersCo">BurgersCo<br>
			<input type="radio" name="nad" value="FermaRo">FermaRo<br>
			<input type="radio" name="nad" value="DulcuriTraditionale">DulcuriTraditionale<br>
			<input type="radio" name="nad" value="CocaCola">CocaCola<br>
			
		<input type="submit" value="Afiseaza">
		</form>
	</div>
     </div>

    
			
	<div>
		<div class="body1">
			<div class="search1">
				<?php
					echo "<h3>1.Afisare categoria de furnitorul ales: </h3>";
					if ($_GET){
							$furnitorii=(!empty($_GET['nad']) ? $_GET['nad'] : null);
					
						require_once("db_con.php");
						require_once("functions.php");
	                    $query= "SELECT C.Nume FROM categorie C JOIN furnitor F ON F.FurnitorID=C.FurnitorID WHERE F.NumeFurnitor= '" . $furnitorii . "'; " ;
                         
							$result=executiequery($connection, $query);
							while ($row = mysqli_fetch_assoc($result))  
							{   
								 ?> 
								<?php  echo "Nume :  ".$row['Nume'];?><br>
								

								<?php
					}}
								?>
</div>	


<button onclick="goBack()",align="right">Inapoi</button>

<script>
function goBack() {
    window.history.back();
}
</script>



</body>
</head>
</html>