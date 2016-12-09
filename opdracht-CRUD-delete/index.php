<?php

	$messageContainer	=	'';
	

	try
	{
		$db = new PDO('mysql:host=localhost;dbname=bieren', 'root', 'root'); // Connectie maken
		$messageContainer	=	'Connectie dmv PDO geslaagd.';

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

		    
		var_dump($_POST);
		
		if(isset($_POST['delete'])){
			 $queryDelete = "DELETE FROM brouwers 
			 				 WHERE brouwernr = :brouwernr";


		$brouwernr = $_POST['delete'];
		$statement2 = $db->prepare($queryDelete);
		$statement2->bindValue(':brouwernr',$brouwernr);
		$deleted = $statement2->execute();

		if($deleted){
			echo "De datarij werd goed verwijderd.";
		}else{
			echo "De datarij kon niet verwijderd worden. Probeer opnieuw.";
		}
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
				<form action="index.php" method="POST">

					<?php foreach ($fetchAssoc as $row): ?>
						<tr>
							<td><?php echo $row['brouwernr'] ?></td><td> <?php echo $row['brnaam'] ?></td>
							<td> <?php echo $row['adres'] ?></td> <td> <?php echo $row['postcode'] ?></td>
							<td> <?php echo $row['gemeente'] ?></td> <td> <?php echo $row['omzet'] ?></td>
							<td><input type="submit" name="delete" value="<?php echo $row['brouwernr'] ?>"><img src="icon-delete.png"></td>
						</tr>
					<?php endforeach ?>

				</form>
			</tbody>
		</table>
</body>
</html>