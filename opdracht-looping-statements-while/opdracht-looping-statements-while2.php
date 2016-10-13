<?php


	$boodschappenlijstje = array("wcpapier","melk","bananen","rijst","zalm","advocado");
	$aantal = count($boodschappenlijstje);
	$counter=0;

	

	
?>

<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		
			

			<?php while($counter < $aantal){ ?>
				<li><?= $boodschappenlijstje [ $counter ] ; ?></li>
				<?php $counter++ ;
			}
			?>
		
		
	

	</body>
</html>