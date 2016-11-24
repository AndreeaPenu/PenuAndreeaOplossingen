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



	$statement 	= 	$db->prepare('SELECT bieren.brouwernr
									FROM bieren');

	$statement = $db->prepare($queryString);
	$statement->execute();

?>


<!doctype html>
<html>
<head>
    <meta charset="utf-8">
   
</head>

<body>

	

		<h1>Voorbeeld van database connectie - PDO</h1>	

		<p><?php echo $messageContainer ?></p>

	
			
</body>
</html>