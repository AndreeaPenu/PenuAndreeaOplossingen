<?php

	
	$dieren = array('kat','hond','muis','giraffe','olifant','aap','vos','wolf','schaap','beer');
	$teZoekenDier = 'hond';
	$dierGevonden = in_array($teZoekenDier,$dieren);
	if($dierGevonden == "true"){
		echo "Het dier is gevonden in de array.";
	}else{
		echo "Het dier zit niet in de array.";
	}

	
?>

<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		
		<p><?php echo count($dieren)?></p>
		
	

	</body>
</html>