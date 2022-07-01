	<html>
<head>
	 <title>restauranT</title>
  <link href="style.css" rel="stylesheet">
<body>

 <div class="search">
		<div class="city"> 
	<form action="interogare4.php" method="GET">
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


<button onclick="goBack()",align="right">Inapoi</button>

<script>
function goBack() {
    window.history.back();
}
</script>



</body>
</head>
</html>