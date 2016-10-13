<?php
	
	
	$teller=0;

	function renteBerekenen($teller,$jaar,$geld,$rente){
		$nieuweRente = ($geld/100)*$rente;
		$geld= $geld + $nieuweRente;
		if($teller < $jaar){
			
			
			$teller++;
			echo "Na " . $teller . " jaar heb je ". number_format($geld,2,'.','') ." euro <br>";
			renteBerekenen($teller,$jaar,$geld,$rente);
		}

	}

	
?>

<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>


	<p>	<?php renteBerekenen(0,10,100000,8); ?></p>
	

	</body>
</html>