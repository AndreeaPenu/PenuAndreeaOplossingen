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
						INNER JOIN brouwers
						ON bieren.brouwernr = brouwers.brouwernr 
						WHERE bieren.naam LIKE "du%" AND brouwers.brnaam LIKE "%a%"
					');

	$statement = $db->prepare($queryString);

	$statement->execute();
	$fetchAssoc 	=	array(); 

	while ( $row = $statement->fetch(PDO::FETCH_ASSOC) )
		{
			$fetchAssoc[]	=	$row;
		}

?>


<!doctype html>
<html>
<head>
    <meta charset="utf-8">
   
</head>

<body>

	

		<h1>Voorbeeld van database connectie - PDO</h1>	

		<p><?php echo $messageContainer ?></p>



		<ul>
			<?php foreach ($fetchAssoc as $row): ?>
				<li><?php echo $row['naam'] ?>: <?php echo $row['alcohol'] ?> promille</li>
			<?php endforeach ?>
		</ul>




		<table>
			<thead>
				<tr>
					<th>Biernr PK</th>
					<th>naam</th>
					<th>brouwernr</th>
					<th>soortnr</th>
					<th>alcohol</th>
					<th>brnaam</th>
					<th>adres</th>
					<th>postcode</th>
					<th>gemeente</th>
					<th>omzet</th>
				</tr>
			</thead>
			<tfoot>
			</tfoot>
			<tbody>

			</tbody>
			

		</table>

	
			
</body>
</html>