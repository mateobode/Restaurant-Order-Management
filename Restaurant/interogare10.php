	<html>
<head>
	 <title>restauranT</title>
  <link href="style.css" rel="stylesheet">
<body>

<div>
		<div class="body1">
			<div class="search1">
				<?php
					echo "<h3>9.Afisare cate articole are fiecare categorie:</h3>";
						
						require_once("db_con.php");
						require_once("functions.php");
	                    $query10= " SELECT C.CategorieID, C.Nume, 
	                    			COUNT(A.CategorieID) AS articolii
									FROM Categorie C INNER JOIN articol A ON
									C.CategorieID = A.CategorieID
									GROUP BY C.CategorieID, C.Nume
								" ;
                        
						$result10=executiequery($connection, $query10);
						
							while ($row10 = mysqli_fetch_assoc($result10))  
							{   
								 ?> 
								<?php  echo "Nume:  ".$row10['Nume'];?>
								<p> <?php echo " Articole: " .$row10['articolii'];  ?> </p>

								<?php
						}
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