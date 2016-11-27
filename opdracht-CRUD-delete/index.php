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
						FROM brouwers 
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
		$queryInsert = ('DELETE FROM brouwers 
						 WHERE


						');



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
					<th>brouwernr</th>
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
						<tr><td><?php echo $row['brouwernr'] ?></td><td> <?php echo $row['brnaam'] ?></td>
							<td> <?php echo $row['adres'] ?></td> <td> <?php echo $row['postcode'] ?></td>
							<td> <?php echo $row['gemeente'] ?></td> <td> <?php echo $row['omzet'] ?></td>
							<td><input type="submit" name="delete" value="brouwernummer"><img src="icon-delete.png"></td>
						</tr>
					<?php endforeach ?>

				

			</tbody>
			

		</table>

	
			
</body>
</html>