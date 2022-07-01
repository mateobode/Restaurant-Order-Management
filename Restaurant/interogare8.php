	<html>
<head>
	 <title>restauranT</title>
  <link href="style.css" rel="stylesheet">
<body>

	 
<div>
		<div class="body1">
			<div class="search1">
				<?php
					echo "<h3>8.Afisare clientii care au comandat mai mult decat 1 articol:</h3>";
						
						require_once("db_con.php");
						require_once("functions.php");
	                    $query8= " SELECT C.NumeClient, C.PrenumeClient FROM client C JOIN comanda D ON D.ClientID=C.ClientID WHERE D.Cantitate > 1" ;
                        
						$result8=executiequery($connection, $query8);
						
							while ($row8 = mysqli_fetch_assoc($result8))  
							{   
								 ?> 
								<?php  echo "NumeClient :  ".$row8['NumeClient'];?>
								<p> <?php echo " PrenumeClient: " .$row8['PrenumeClient'];  ?> </p>

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