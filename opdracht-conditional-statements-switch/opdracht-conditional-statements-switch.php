<?php

	$getal=1;
	$dag="";

	switch($getal){
		case 1: $dag="maandag";
		break;
		case 2: $dag="dinsdag";
		break;
		case 3: $dag="woensdag";
		break;
		case 4: $dag="donderdag";
		break;
		case 5: $dag="vrijdag";
		break;
		case 6: $dag="zaterdag";
		break;
		case 7: $dag ="zondag";
		break;
		default: $dag="ongeldig";
	}


	
?>

<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		
		<p><?php echo strtolower($dag)?></p>
		
	

	</body>
</html>
