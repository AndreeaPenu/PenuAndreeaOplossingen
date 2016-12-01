<?php

	$messageContainer	=	'';
	$pressDelete = false;
	$gevonden = true;

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




		$brouwernr = $_POST['brouwernr'];
	                  
		if(isset($_POST['delete'])){
			$pressDelete = true;
			
			if(isset($_POST['ja'])){
				$queryDelete = "DELETE FROM brouwers 
				 				WHERE brouwernr = '$brouwernr'";

				$statement2 = $db->prepare($queryDelete);
				$deleted = $statement2->execute();

				if($deleted){
					echo "De datarij werd goed verwijderd.";
				}else{
					echo "De datarij kon niet verwijderd worden. Probeer opnieuw.";
				}
			}

			if(isset($_POST['nee'])){
				$pressDelete = false;
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

		<h1>Brouwerij <!--<?php echo $brnaam ?>--> (# ID <!---<?php echo $brouwernr ?> -->) wijzigen</h1>
		<?php if(!$gevonden):?>
			<p>Deze brouwerij werd niet gevonden.</p>
		<?php endif?>

		<?php foreach ($fetchAssoc as $row): ?>

			<form action="index.php" method="POST">
			  Brouwernaam<br>
			  <input type="text" name="brnaam" value="<?php echo $row['brnaam']?>">
			  <br>
			  adres<br>
			  <input type="text" name="adres" value="<?php echo $row['adres'] ?>">
			  <br>
			  postcode<br>
			  <input type="text" name="postcode" value="<?php echo $row['postcode'] ?>">
			  <br>
			  gemeente<br>
			  <input type="text" name="gemeente" value="<?php echo $row['gemeente'] ?>">
			  <br>
			  omzet<br>
			  <input type="text" name="omzet" value="<?php echo $row['omzet'] ?>">
			  <br><br>
			  <input type="submit" name="wijzigen" value="Submit query">
			</form> 

		<?php endforeach ?>

		<h1>Overzicht van de brouwers</h1>		
		<p><?php echo $messageContainer ?></p>

		<?php if ( $pressDelete == true): ?>
			<p>Bent u zeker dat u deze datarij wil verwijderen?</p>
			<input type="submit" name="ja" value="Ja!"/>
			<input type="submit" name="nee" value="Néééé!"/>
		<?php endif?>

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
							<td><input type="submit" name="edit" value="<?php echo $row['brouwernr'] ?>"><img src="icon-edit.png"></td>
						</tr>
					<?php endforeach ?>

				</form>
			</tbody>
		</table>
				
</body>
</html>