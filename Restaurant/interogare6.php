	<html>
<head>
	 <title>restauranT</title>
  <link href="style.css" rel="stylesheet">
<body>

	<div class="search">
		<div class="city"> 
	<form action="interogare6.php" method="GET">
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


<button onclick="goBack()",align="right">Inapoi</button>

<script>
function goBack() {
    window.history.back();
}
</script>



</body>
</head>
</html>