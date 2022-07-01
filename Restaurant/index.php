<?php


include("authentication.php");?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Welcome Home</title>
<link rel="stylesheet" href="css/style.css" />
</head>
<body>
 <div class="row header">
            <div class="logo col-md-10">

                <p class="titlu" style="text-align:center;"><img src="logo.png" alt="restauranT" height="150" width="200" align="center"></p>

            </div>
            <div class="logout col-md-2 text-right">
                <form action="index.php" method="POST">
                    <input type="submit" name="Logout" id = "logoutButton" value="Logout" class="btn btn-primary ButonIesire">
				</form>
            </div>
            


        </div>

        <div class="row content">

			<div id="menu1">
                <!--<class="selected">-->
                    <div class = "dbQueryButtons col-sm-3 btn"><a style="font-size:1.45em; color:black; font-weight:bold;" href="insertarticol.php">INSERT</a></div>
                     <div class = "dbQueryButtons col-sm-3 btn"><a style="font-size:1.45em; color:black; font-weight:bold;" href="updatearticol.php">UPDATE</a></div>
						<div class = "dbQueryButtons col-sm-3 btn"><a style="font-size:1.45em; color:black; font-weight:bold;" href="deletearticol.php">DELETE</a></div>
                        <div class = "dbQueryButtons col-sm-3 btn"><a style="font-size:1.45em; color:black; font-weight:bold;" href="interogare1.php">INTEROGARE1</a></div>
                        <div class = "dbQueryButtons col-sm-3 btn"><a style="font-size:1.45em; color:black; font-weight:bold;" href="interogare2.php">INTEROGARE2</a></div>
                        <div class = "dbQueryButtons col-sm-3 btn"><a style="font-size:1.45em; color:black; font-weight:bold;" href="interogare3.php">INTEROGARE3</a></div>
                        <div class = "dbQueryButtons col-sm-3 btn"><a style="font-size:1.45em; color:black; font-weight:bold;" href="interogare4.php">INTEROGARE4</a></div>
                        <div class = "dbQueryButtons col-sm-3 btn"><a style="font-size:1.45em; color:black; font-weight:bold;" href="interogare5.php">INTEROGARE5</a></div>
                <!--</class="selected">-->
            </div>
			
            
        </div>



        <div class="row header">
            <div class="logo col-md-10">

                <p class="titlu" style="text-align:center;"><img src="logo.png" alt="restauranT" height="150" width="200" align="center"></p>

            </div>
        </div>

        </div>

        <div id="menu2">
            <ul>
                <class="selected">

                    <div class = "dbQueryButtons col-sm-3 btn"><a style="font-size:1.45em; color:black; font-weight:bold;" href="insertcomanda.php">INSERT</a></div>
                    <div class = "dbQueryButtons col-sm-3 btn"><a style="font-size:1.45em; color:black; font-weight:bold;" href="updatecomanda.php">UPDATE</a></div>
                    <div class = "dbQueryButtons col-sm-3 btn"><a style="font-size:1.45em; color:black; font-weight:bold;" href="deletecomanda.php">DELETE</a></div>
                    <div class = "dbQueryButtons col-sm-3 btn"><a style="font-size:1.45em; color:black; font-weight:bold;" href="interogare6.php">INTEROGARE6</a></div>
                    <div class = "dbQueryButtons col-sm-3 btn"><a style="font-size:1.45em; color:black; font-weight:bold;" href="interogare7.php">INTEROGARE7</a></div>
                    <div class = "dbQueryButtons col-sm-3 btn"><a style="font-size:1.45em; color:black; font-weight:bold;" href="interogare8.php">INTEROGARE8</a></div>
                    <div class = "dbQueryButtons col-sm-3 btn"><a style="font-size:1.45em; color:black; font-weight:bold;" href="interogare9.php">INTEROGARE9</a></div>
                    <div class = "dbQueryButtons col-sm-3 btn"><a style="font-size:1.45em; color:black; font-weight:bold;" href="interogare10.php">INTEROGARE10</a></div>


                </class="selected">
            </ul>
        </div>


<p><a href="dashboard.php">Dashboard</a></p>
<a href="logout.php">Logout</a>
</body>
</html>
