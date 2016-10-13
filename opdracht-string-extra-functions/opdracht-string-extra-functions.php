<?php
	$fruit = 'kokosnoot';
	$lengteFruit = strlen($fruit);
	$positieFruit = strpos($fruit,"o");

	$fruit2 = 'ananas';
	$lettertje = 'e';
	$positieFruit2 = strrpos($fruit2,"a");
	$capitalizatieFruit2 = strtoupper($fruit2);

	$cijfertje = 3;
	$langsteWoord ='zandzeepsodemineralenwatersteenstralen';
	$vervangE = str_replace($lettertje,$cijfertje,$langsteWoord);
?>


<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		<h2>Deel 1</h2>
		<p><?php echo $lengteFruit?></p>
		<p><?php echo $positieFruit?></p>

		<h2>Deel 2</h2>
		<p><?php echo $positieFruit2?></p>
		<p><?php echo $capitalizatieFruit2?></p>

		<h2>Deel 3</h2>
		<p><?php echo $vervangE?></p>

	</body>
</html>