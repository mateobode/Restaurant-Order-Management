	<html>
<head>
	 <title>restauranT</title>
  <link href="style.css" rel="stylesheet">
<body>

	<div class="search">
		<div class="city"> 
	<form action="interogare2.php" method="GET">
			<p id="titlu_cautare">2.Selecteaza categoria:</p> 
			<input type="radio" name="in" value="Pizza"> Pizza<br>
			<input type="radio" name="in" value="Burgeri"> Burgeri<br>
			<input type="radio" name="in" value="Paste"> Paste<br>
			<input type="radio" name="in" value="Salate"> Salate<br>
			<input type="radio" name="in" value="Supe"> Supe<br>
			<input type="radio" name="in" value="Deserturi"> Deserturi<br>
			<input type="radio" name="in" value="Bauturi"> Bauturi<br>
			
		<input type="submit" value="Afiseaza">
		</form>
	</div>
     </div>

	
			
<div>
		<div class="body1">
			<div class="search1">
				<?php
					echo "<h3>2.Afisare articole care sunt in cateogria selectata</h3>";
						if ($_GET){
							$art=(!empty($_GET['in']) ? $_GET['in'] : null);
						require_once("db_con.php");
						require_once("functions.php");
	                    $query1= " SELECT A.NumeArticol FROM articol A
							JOIN categorie C  
							ON C.CategorieID=A.CategorieID
					        WHERE C.Nume= '" . $art . "' " ;
                        
							$result1=executiequery($connection, $query1);
							while ($row = mysqli_fetch_assoc($result1))  
							{   
								 ?> 
								<?php  echo "NumeArticol :  ".$row['NumeArticol'];?><br>
								

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