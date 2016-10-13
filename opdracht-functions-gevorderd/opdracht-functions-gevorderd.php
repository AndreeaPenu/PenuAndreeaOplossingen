<?php
	$md5HashKey = 'd1fa402db91a7a93c4f414b8278ce073';

	

	function one($md5HashKey,$getal){
		$aantal = substr_count($md5HashKey,$getal);
		$lengte = strlen($md5HashKey);
		$percent = round(($aantal/$lengte) * 100);
		return $percent;
	}

	function two($md5HashKey,$getal){
		$aantal = substr_count($md5HashKey,$getal);
		$lengte = strlen($md5HashKey);
		$percent = round(($aantal/$lengte) * 100);
		return $percent;
	}

	function three($md5HashKey,$letter){
		$aantal=substr_count($md5HashKey,$letter);
		$lengte = strlen($md5HashKey);
		$percent = round(($aantal/$lengte) * 100);
		return $percent;
	}

	
?>

<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
	
		
	<p><?php echo "Needle 2 komt " .one($md5HashKey,2) ."% voor in de hash key";?></p>
	<p><?php echo "Needle 8 komt " .two($md5HashKey,8)."% voor in de hash key";?></p>
	<p><?php echo "Needle a komt " .three($md5HashKey,'a')."% voor in de hash key";?></p>


	
	

	</body>
</html>