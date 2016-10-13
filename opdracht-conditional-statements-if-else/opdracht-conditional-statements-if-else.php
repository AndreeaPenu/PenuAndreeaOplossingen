<?php

	$jaar=1600;
	$schrikkeljaar=false;

	if ($jaar % 4 == 0){
		$schrikkeljaar=true;
		
		if($jaar%100==0){
			$schrikkeljaar=false;
			if($jaar%400==0){
				$schrikkeljaar=true;
			}
		}else{
			$schrikkeljaar=false;
		}
	}
	else{
		$schrikkeljaar=false;
	}
	
?>

<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
	
		<p><?php echo $schrikkeljaar?></p>
	

	</body>
</html>