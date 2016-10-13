<?php

	$getal=88;
	$melding="Het getal ligt tussen ";


	if ($getal >= 0 && $getal <= 10){
		$melding = $melding . "0 en 10";
	}elseif($getal > 10 && $getal <= 20){
		$melding = $melding . "10 en 20";
	}elseif($getal > 20 && $getal <= 30){
		$melding = $melding . "20 en 30";
	}elseif($getal > 30 && $getal <= 40){
		$melding = $melding . "30 en 40";
	}elseif($getal > 40 && $getal <= 50){
		$melding = $melding . "40 en 50";
	}elseif($getal > 50 && $getal <= 60){
		$melding = $melding . "50 en 60";
	}elseif($getal > 60 && $getal <= 70){
		$melding = $melding . "60 en 70";
	}elseif($getal > 70 && $getal <= 80){
		$melding = $melding . "70 en 80";
	}elseif($getal > 80 && $getal <= 90){
		$melding = $melding . "80 en 90";
	}else{
		$melding = $melding . "90 en 100";
	}

	
?>

<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		
		<p><?php echo $melding?></p>
		<p><?php echo strrev($melding)?></p>
	

	</body>
</html>
