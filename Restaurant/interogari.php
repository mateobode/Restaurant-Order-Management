	<html>
<head>
	 <title>restauranT</title>
  <link href="style.css" rel="stylesheet">
<body>

	<div class="search">
		<div class="city"> 
	<form action="interogari.php" method="GET">
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

</h2>


<div class="search">
		<div class="city"> 
	<form action="interogari.php" method="GET">
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

</h2>
	 
	 
	 <div class="search">
		<div class="city"> 
	<form action="interogari.php" method="GET">
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

</h2>

 <div class="search">
		<div class="city"> 
	<form action="interogari.php" method="GET">
			<p id="titlu_cautare">4.Selecteaza data meniului:</p> 
			<input type="radio" name="or" value="2020-09-12"> 2020-09-12<br>
			<input type="radio" name="or" value="2020-09-14"> 2020-09-14<br>
			<input type="radio" name="or" value="2020-09-16"> 2020-09-16<br>
		<input type="submit" value="Afiseaza">
		</form>
	</div>
     </div>
	 

			
<div>
		<div class="body1">
			<div class="search1">
				<?php
					echo "<h3>4.Afisare categoria ce are loc in meniul de data aleasa:</h3>";
						if ($_GET){
							$categ=(!empty($_GET['or']) ? $_GET['or'] : null);
						require_once("db_con.php");
						require_once("functions.php");
	                    $query3=" SELECT C.Nume FROM categorie C JOIN menu M ON M.MenuID=C.MenuID WHERE M.DataInceput = '" . $categ . "' "  ;
                        
							$result3=executiequery($connection, $query3);
							while ($row = mysqli_fetch_assoc($result3))  
							{   
								 ?> 
								<?php  echo "Nume :  ".$row['Nume'];?><br>
								
								

								<?php
						}}
								?>
</div>	

</h2>


<div class="search">
		<div class="city"> 
	<form action="interogari.php" method="GET">
			<p id="titlu_cautare">5.Selecteaza data de comanda:</p> 
			<input type="radio" name="or" value="2020-09-12"> 2020-09-12<br>
			<input type="radio" name="or" value="2020-09-13"> 2020-09-13<br>
			<input type="radio" name="or" value="2020-09-14"> 2020-09-14<br>
		<input type="submit" value="Afiseaza">
		</form>
	</div>
     </div>
	 

			
<div>
		<div class="body1">
			<div class="search1">
				<?php
					echo "<h3>5.Afisare clientul ce a luat comanda in data aleasa:</h3>";
						if ($_GET){
							$dt=(!empty($_GET['or']) ? $_GET['or'] : null);
						require_once("db_con.php");
						require_once("functions.php");
	                    $query4=" SELECT C.NumeClient, C.PrenumeClient FROM client C JOIN comanda D ON D.ClientID=C.ClientID WHERE D.DataComanda = '" . $dt . "' "  ;
                        
							$result4=executiequery($connection, $query4);
							while ($row = mysqli_fetch_assoc($result4))  
							{   
								  ?> 
								<?php  echo "NumeClient :  ".$row['NumeClient'];?>
								<p> <?php echo " PrenumeClient: " .$row['PrenumeClient'];  ?> </p>
								

								<?php
						}}
								?>
</div>	

</h2>

 <div class="search">
		<div class="city"> 
	<form action="interogari.php" method="GET">
			<p id="titlu_cautare">6.Selecteaza data de comanda:</p> 
			<input type="radio" name="or" value="2020-09-12"> 2020-09-12<br>
			<input type="radio" name="or" value="2020-09-13"> 2020-09-13<br>
			<input type="radio" name="or" value="2020-09-14"> 2020-09-14<br>
		<input type="submit" value="Afiseaza">
		</form>
	</div>
     </div>
	 

			
<div>
		<div class="body1">
			<div class="search1">
				<?php
					echo "<h3>6.Afisare articolele ce sunt comandate la data aleasa:</h3>";
						if ($_GET){
							$art=(!empty($_GET['or']) ? $_GET['or'] : null);
						require_once("db_con.php");
						require_once("functions.php");
	                    $query5=" SELECT A.NumeArticol FROM articol A JOIN comanda C ON C.ArticolID=A.ArticolID WHERE C.DataComanda = '" . $art . "' "  ;
                        
							$result5=executiequery($connection, $query5);
							while ($row = mysqli_fetch_assoc($result5))  
							{   
								 ?> 
								<?php  echo "NumeArticol :  ".$row['NumeArticol'];?><br>
								
								

								<?php
						}}
								?>
</div>	
</h2>
 
 
<div>
		<div class="body1">
			<div class="search1">
				<?php
					echo "<h3>7.Afisare categoria la care exista un articol care costa mai mult decat media articolele:</h3>";
						
						require_once("db_con.php");
						require_once("functions.php");
	                    $query7= " SELECT DISTINCT C.Nume FROM categorie C JOIN articol A on C.CategorieID=A.CategorieID WHERE A.Pret>(SELECT AVG(AA.Pret) FROM articol AA)" ;
                        
						$result7=executiequery($connection, $query7);
						
							while ($row7 = mysqli_fetch_assoc($result7))  
							{   
								 ?> 
								<?php  echo "Nume :  " .$row7['Nume'];?><br>
								
								

								<?php
						}
								?>
</div>	

</h2>	


			
 
			
	<div>
		<div class="body1">
			<div class="search1">
				<?php
					echo "<h3>8.Selecteaza evenimentele a caror locatie are un spatiu mai mare decat media:</h3>";
						
						require_once("db_con.php");
						require_once("functions.php");
	                    $query8= " SELECT E.Nume FROM evenimente E JOIN locatie L ON L.LocatieID=E.LocatieID WHERE L.Spatiu>(SELECT AVG (LL.Spatiu) FROM locatie LL) ;" ;
                        
							$result8=executiequery($connection, $query8);
							while ($row = mysqli_fetch_assoc($result8))  
							{   
								 ?> 
								<?php  echo "Nume :  " .$row['Nume'];?><br>

								<?php
						}
								?>
</div>	

</h2>
 	 

 
			
<div>
		<div class="body1">
			<div class="search1">
				<?php
					echo "<h3>9.Afisare plannerii a caror evenimente cu limita de varsta mai mare ca media:</h3>";
						
						require_once("db_con.php");
						require_once("functions.php");
	                    $query9= " SELECT P.Nume,P.Prenume FROM planneri P JOIN evenimente E ON E.PlannerID=P.PlannerID WHERE E.RestrictieVarsta>(SELECT AVG(EE.RestrictieVarsta) FROM evenimente EE) " ;
                        
							$result9=executiequery($connection, $query9);
							while ($row = mysqli_fetch_assoc($result9))  
							{   
								 ?> 
								 <?php  echo "Nume :  " .$row['Nume'];?>
								<p> <?php echo " Prenume: " .$row['Prenume'];  ?> </p>
								

								<?php
						}
								?>
</div>	

</h2>	 


			
<div>
		<div class="body1">
			<div class="search1">
				<?php
					echo "<h3>10.Afisare evenimente organizate de plannerul Manea in ordinea descrescatoare a datei de incepere:</h3>";
						
						require_once("db_con.php");
						require_once("functions.php");
	                    $query10= " SELECT E.Nume FROM evenimente E JOIN planneri P ON P.PlannerID=E.PlannerID WHERE P.Nume='Manea' ORDER BY (SELECT EE.DataInceperii FROM evenimente EE WHERE EE.EvenimentID=E.EvenimentID) DESC " ;
                        
							$result10=executiequery($connection, $query10);
							while ($row = mysqli_fetch_assoc($result10))  
							{   
								 ?> 
								 <?php  echo "Nume :  " .$row['Nume'];?><br>
								

								<?php
						}
								?>
</div>	

</h2>	 


<button onclick="goBack()",align="right">Inapoi</button>
<script>
function goBack() {
    window.history.back();
}
</script>



</body>
</head>
</html>