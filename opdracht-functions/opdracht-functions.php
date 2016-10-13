<?php


	

	function berekenSom($getal1, $getal2){
		$totaal = $getal1+$getal2;
		return $totaal;
	}

	function vermenigvuldig($getal1,$getal2){
		$totaal = $getal1*$getal2;
		return $totaal;
	}

	function isEven($getal){
		$isEven="False";
		if ($getal%2==0){
			$isEven="True";
		}
		return $isEven;
	}

	
?>

<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
	
		
	<p><?php echo berekenSom(2,3);

		 	 echo vermenigvuldig(2,3);
		 	 echo isEven(3);

	?></p>
	

	</body>
</html>