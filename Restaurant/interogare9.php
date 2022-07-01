	<html>
<head>
	 <title>restauranT</title>
  <link href="style.css" rel="stylesheet">
<body>

<div>
		<div class="body1">
			<div class="search1">
				<?php
					echo "<h3>9.Afisare cel mai scump articol:</h3>";
						
						require_once("db_con.php");
						require_once("functions.php");
	                    $query9= " SELECT A.NumeArticol FROM articol A JOIN
   							(SELECT MAX(pret) AS maxpret FROM articol) P
   							ON A.pret=P.maxpret" ;
                        
						$result9=executiequery($connection, $query9);
						
							while ($row9 = mysqli_fetch_assoc($result9))  
							{   
								 ?> 
								<?php  echo "NumeArticol :  " .$row9['NumeArticol'];?><br>
								
								

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