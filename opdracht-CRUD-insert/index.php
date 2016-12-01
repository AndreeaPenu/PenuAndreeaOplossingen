<?php

$messageContainer	=	'';

try
	{

		$db = new PDO('mysql:host=localhost;dbname=bieren', 'root', 'root'); // Connectie maken
		$messageContainer	=	'Connectie dmv PDO geslaagd.';


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




			$brnaam = $_POST['brnaam'];
			$adres = $_POST['adres'];
			$postcode = $_POST['postcode'];
			$gemeente = $_POST['gemeente'];
			$omzet = $_POST['omzet'];

		if(isset($_POST['submit'])){
			$queryInsert = "INSERT INTO brouwers (brnaam, adres, postcode, gemeente, omzet)
							VALUES ('$brnaam','$adres','$postcode','$gemeente','$omzet')";
		}


		$statement2 = $db->prepare($queryInsert);
		$statement2->execute();

		if($queryInsert){
			echo "Brouwerij succesvol toegevoegd. Het unieke nummer van deze brouwerij is ". $db->lastInsertId();
		}else{
			echo "Er ging iets mis met het toevoegen. Probeer opnieuw.";
		}

	}
	catch ( PDOException $e )
	{
		$messageContainer	=	'Er ging iets mis: ' . $e->getMessage();
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
	  <input type="text" name="brnaam" value="">
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