<?php

$messageContainer	=	'';

try{

		$db = new PDO('mysql:host=localhost;dbname=bieren', 'root', 'root'); // Connectie maken
		$messageContainer	=	'Connectie dmv PDO geslaagd.';

		$queryString = 	('	SELECT *
							FROM bieren 
							INNER JOIN soort AND brouwers
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
	<p><?php echo $messageContainer ?></p>
	<h1>Overzicht van de bieren</h1>


		<table>
			<thead>
				<tr>
					<th>Biernummer</th>
					<th>Bier</th>
					<th>Brouwer</th>
					<th>Soort</th>
					<th>Alcoholpercentage</th>
				</tr>
			</thead>
			<tfoot>
			</tfoot>
			<tbody>
					<?php foreach ($fetchAssoc as $row): ?>
						<tr>
							<td><?php echo $row['biernr'] ?></td>
							<td> <?php echo $row['naam'] ?></td>
							<td> <?php echo $row['brnaam'] ?></td>
							<td> <?php echo $row['soort'] ?></td>
							<td> <?php echo $row['alcohol'] ?></td>
						</tr>
					<?php endforeach ?>
			</tbody>
		</table>
</body>
</html>