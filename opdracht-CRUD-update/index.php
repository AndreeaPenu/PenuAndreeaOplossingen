<?php

	$messageContainer	=	'';
	$pressDelete = false;
	$gevonden = true;
	$editing = false;

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
				 				WHERE brouwernr = :brouwernr";

				$statement2 = $db->prepare($queryDelete);
				$statement2->bindValue(':brouwernr',$brouwernr);
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



		$brnaam = $_POST['brnaam'];
		$adres = $_POST['adres'];
		$postcode = $_POST['postcode'];
		$gemeente = $_POST['gemeente'];
		$omzet = $_POST['omzet'];

		if(isset($_POST['edit'])){

			$editing = true;

			//haal gegevens op en input velden
			$queryGegevens = "SELECT brouwernr
							  FROM brouwers
							  WHERE brouwernr = :brouwernr";
			$statement4 = $db->prepare($queryGegevens);
			$statement4->bindValue(':brnaam',$brnaam);
			$statement4->bindValue(':adres',$adres);
			$statement4->bindValue(':postcode',$postcode);
			$statement4->bindValue(':gemeente',$gemeente);
			$statement4->bindValue(':omzet',$omzet);
			$statement4->execute();


			$fetchAssoc2 	=	array(); 
			while ( $row2 = $statement4->fetch(PDO::FETCH_ASSOC) )
				{
					$fetchAssoc2[]	=	$row2;
				}


			if(isset($_POST['wijzigen'])){
				$queryEdit = "INSERT INTO brouwers(brnaam,adres,postcode,gemeente,omzet)
							  VALUES (:brnaam,:adres,:postcode,:gemeente,:omzet)";
				$statement3 = $db->prepare($queryEdit);
				$statement3->bindValue(':brnaam',$brnaam);
				$statement3->bindValue(':adres',$adres);
				$statement3->bindValue(':postcode',$postcode);
				$statement3->bindValue(':gemeente',$gemeente);
				$statement3	->bindValue(':omzet',$omzet);
				$edited = $statement3->execute();

				if($edited){
					echo "Aanpassing succesvol doorgevoerd.";
				}else{
					echo "Aanpassing is niet gelukt. Probeer opnieuw of neem contact op met de systeembeheerder wanneer deze fout blijft aanhouden.";
				}
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

		<?php foreach ($fetchAssoc as $row2): ?>

			<form action="index.php" method="POST">
			  Brouwernaam<br>
			  <input type="text" name="brnaam" value="<?php echo $row2['brnaam']?>">
			  <br>
			  adres<br>
			  <input type="text" name="adres" value="<?php echo $row2['adres'] ?>">
			  <br>
			  postcode<br>
			  <input type="text" name="postcode" value="<?php echo $row2['postcode'] ?>">
			  <br>
			  gemeente<br>
			  <input type="text" name="gemeente" value="<?php echo $row2['gemeente'] ?>">
			  <br>
			  omzet<br>
			  <input type="text" name="omzet" value="<?php echo $row2['omzet'] ?>">
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