	<html>
<head>
	 <title>restauranT</title>
  <link href="style.css" rel="stylesheet">
<body>

<div class="search">
		<div class="city"> 
	<form action="interogare3.php" method="GET">
			<p id="titlu_cautare">3.Selecteaza articolul:</p> 
			<input type="radio" name="marc" value="Pizza Al Tono"> Pizza Al Tono<br>
			<input type="radio" name="marc" value="Salata Caesar"> Salata Caesar<br>
			<input type="radio" name="marc" value="Sprite"> Sprite<br>
			<input type="radio" name="marc" value="Spaghetti Carbonara"> Spaghetti Carbonara<br>
			<input type="radio" name="marc" value="Supa de Pui"> Supa de Pui<br>
			<input type="radio" name="marc" value="Umami"> Umami<br>
		<input type="submit" value="Afiseaza">
		</form>
	</div>
     </div>
	 
	
			
<div>
		<div class="body1">
			<div class="search1">
				<?php
					echo "<h3>3.Afisare categoria articolului ales:</h3>";
						if ($_GET){
							$cat=(!empty($_GET['marc']) ? $_GET['marc'] : null);
						require_once("db_con.php");
						require_once("functions.php");
	                    $query2= " SELECT C.Nume FROM categorie C JOIN articol A ON A.CategorieID=C.CategorieID WHERE A.NumeArticol='" . $cat . "' " ;
                        
							$result2=executiequery($connection, $query2);
							while ($row = mysqli_fetch_assoc($result2))  
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