	<html>
<head>
	 <title>restauranT</title>
  <link href="style.css" rel="stylesheet">
<body>

	<div class="search">
		<div class="city"> 
	<form action="interogare5.php" method="GET">
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


<button onclick="goBack()",align="right">Inapoi</button>

<script>
function goBack() {
    window.history.back();
}
</script>



</body>
</head>
</html>