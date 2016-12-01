<?php

	$messageContainer	=	'';

	try
	{

		$db = new PDO('mysql:host=localhost;dbname=bieren', 'root', 'root'); // Connectie maken
		$messageContainer	=	'Connectie dmv PDO geslaagd.';


		$queryString = 	('	SELECT distinct brouwers.brouwernr, brouwers.brnaam
						FROM bieren
						INNER JOIN brouwers
						ON bieren.brouwernr = brouwers.brouwernr
					');

	$statement = $db->prepare($queryString);

	$statement->execute();
	$fetchAssoc 	=	array(); 

	while ( $row = $statement->fetch(PDO::FETCH_ASSOC) )
		{
			$fetchAssoc[]	=	$row;
		}


		if(isset($_GET['brouwernr'])){
			
			$brNummer = $_GET['brouwernr'];
		

			$queryZoekBier = ('SELECT bieren.naam
						   	   FROM bieren
						   	   INNER JOIN brouwers
						   	   ON bieren.brouwernr = brouwers.brouwernr
						   	   WHERE bieren.brouwernr == $brNummer
						 	');
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

		<form action="opdracht-crud-query-deel2.php" method="POST">


		 <select>
  				
	  		<ul>
				<?php foreach ($fetchAssoc as $row): ?>
					<option value="<?php echo $row['brnaam'] ?>"><?php echo $row['brnaam'] ?></option>
					
				<?php endforeach ?>
			</ul>

		</select> 

		<input type="submit" value="Geef mij alle bieren van deze brouwerij">



		</form>










		<table>
			<thead>
				<tr>
					<th>#</th>
					<th>naam</th>
				</tr>
			</thead>
			<tfoot>
			</tfoot>
			<tbody>

				

					<?php foreach ($fetchAssoc as $row): ?>
						<tr> <td>#</td><td> <?php echo $row['brnaam'] ?></td>
						</tr>
					<?php endforeach ?>

				

			</tbody>
			

		</table>
	
			
</body>
</html>