<?php

	$messageContainer	=	'';

	try
	{

		$db = new PDO('mysql:host=localhost;dbname=bieren', 'root', 'root'); // Connectie maken
		$messageContainer	=	'Connectie dmv PDO geslaagd.';


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

		<h1>Voorbeeld van database connectie - PDO</h1>	
		<p><?php echo $messageContainer ?></p>

		<table>
			<thead>
				<tr>
					<th>#</th>
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
					<?php foreach ($fetchAssoc as $row): ?>
						<tr> <td>#</td><td><?php echo $row['biernr'] ?></td><td> <?php echo $row['naam'] ?></td>
							<td> <?php echo $row['brouwernr'] ?></td> <td> <?php echo $row['soortnr'] ?></td>
							<td> <?php echo $row['alcohol'] ?></td> <td> <?php echo $row['brnaam'] ?></td>
							<td> <?php echo $row['adres'] ?></td> <td> <?php echo $row['postcode'] ?></td>
							<td> <?php echo $row['gemeente'] ?></td><td> <?php echo $row['omzet'] ?></td>
						</tr>
					<?php endforeach ?>
			</tbody>
		</table>	
</body>
</html>