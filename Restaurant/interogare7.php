	<html>
<head>
	 <title>restauranT</title>
  <link href="style.css" rel="stylesheet">
<body>

	 
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


<button onclick="goBack()",align="right">Inapoi</button>

<script>
function goBack() {
    window.history.back();
}
</script>



</body>
</head>
</html>