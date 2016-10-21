<?php

	$artikels = array(
						array("title" => "Deze operatoren helpen u het snelst (en het traagst)",
							  "datum" => "13/10/2016",
							  "inhoud" => "Van de grote telecombedrijven in België heeft Scarlet de traagste telefonische helpdesk.",
							  "afbeelding" => "media.jpg",
							  "afbeeldingBeschrijving" => "operatoren"),


						array("title" => "Erdogan wil in Syrië hele steden bouwen voor teruggekeerde vluchtelingen",
							  "datum" => "13/10/2016",
							  "inhoud" => "De Turkse president Recep Tayyip Erdogan ziet in Noord-Syrië, waar zijn leger 5.000 vierkante 
				kilometer van IS probeert te zuiveren, één groot bouwproject.",
							  "afbeelding" => "media2.jpg",
							  "afbeeldingBeschrijving" => "Erdogan"),



						array("title" => "Auto valt stil en brandt uit",
							  "datum" => "13/10/2016",
							  "inhoud" => "Op de Ninoofsesteenweg is dinsdagavond in de rijrichting van Brussel omstreeks 22.30 uur 
				een Opel Astra uitgebrand. Gewonden vielen er niet.",
							  "afbeelding" => "media3.jpg",
							  "afbeeldingBeschrijving" => "auto"),

	);



	$isValid=false;
	$notValid=false;


	if (array_key_exists('id',$_GET)){
    	$id= $_GET['id'];
	 	if (array_key_exists($id,$artikels)){
   			$artikels = array($artikels[$id]);
   			$isValid = true;
  		}else{
   			$notValid = true;
  		} 
	}

?>





<!DOCTYPE html>
<html>
	<head>
		<style>
	body{
		
	}
	img{
		width:250px;
		height:200px;
	}

	h1{
		font-family:tahoma;
		font-size:1em;
	}

	.kolom{
		width:300px;
		display:inline-block;
		background-color:gray;
		float:left;
	}


	.single{
		float:right;
	}

	.multiple{
		float:left;

	}
</style>
	</head>
	<body>

<?php if(!$notValid):?>
		<div class="kolom">
			<?php foreach($artikels as $id => $artikel): ?>

				<article class="<?php echo (!$isValid) ? 'multiple' : 'single' ?>">

					<h1><?php echo $artikel['title']; ?></h1>
					<p><?php echo $artikel['datum']; ?></p>



					<img src="img/<?php echo $artikel['afbeelding'] ?>" alt="<?php echo $artikel['afbeeldingBeschrijving']?>">
					



					
					<p><?php echo $artikel['inhoud']; ?></p>


					<?php if ( !$isValid ): ?>
						<a href="opdracht-get.php?id=<?php echo $id ?>">Lees meer</a>
					<?php endif ?>

					
				
				</article>

			<?php endforeach ?>
		</div>
<?php endif ?>
	</body>
</html>