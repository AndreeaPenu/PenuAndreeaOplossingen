<?php

$messageContainer	=	'';

try
	{

		$db = new PDO('mysql:host=localhost;dbname=bieren', 'root', 'root'); // Connectie maken
		$messageContainer	=	'Connectie dmv PDO geslaagd.';




	}
	catch ( PDOException $e )
	{
		$messageContainer	=	'Er ging iets mis: ' . $e->getMessage();
	}



	$queryString = 	('	SELECT *
						FROM bieren 
					');

	$statement = $db->prepare($queryString);

	$statement->execute();
	$fetchAssoc 	=	array(); 

	while ( $row = $statement->fetch(PDO::FETCH_ASSOC) )
		{
			$fetchAssoc[]	=	$row;
		}




		$bouwernaam = mysql_escape_string($_POST['bouwernaam']);
		$adres = $_POST['adres'];
		$postcode = $_POST['postcode'];
		$gemeente = $_POST['gemeente'];
		$omzet = $_POST['omzet'];

	if(isset($_POST['submit'])){
		$queryInsert = ('INSERT INTO brouwer (brouwernaam, adres, postcode, gemeente, omzet)
						VALUES ('$bouwernaam','$adres','$postcode','$gemeente','$omzet'); 


						');
	}



?>





<!doctype html>
<html>
<head>
    <meta charset="utf-8">
   
</head>

<body>

	
	<h1>Voeg een brouwer toe</h1>


	<form action="index.php" method="POST">
	  Brouwernaam<br>
	  <input type="text" name="brouwernaam" value="">
	  <br>
	  adres<br>
	  <input type="text" name="adres" value="">
	  <br>
	  postcode<br>
	  <input type="text" name="postcode" value="">
	  <br>
	  gemeente<br>
	  <input type="text" name="gemeente" value="">
	  <br>
	  omzet<br>
	  <input type="text" name="omzet" value="">

	  <br><br>
	  <input type="submit" name="submit" value="Submit query">
	</form> 

	
			
</body>
</html>