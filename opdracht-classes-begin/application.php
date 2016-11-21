<?php
	require_once 'classes/Percent.php';

	$percent = new Percent(150,100);

	$absolute = $percent->absolute;
	$relative = $percent->relative;
	$hundred = $percent->hundred;
	$nominal = $percent->nominal;

	//$percent->formatNumber();


?>


<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    
</head>

<body>
	<h2>Hoeveel procent is 150 van 100?</h2>
	<p>Absoluut: <?= $absolute ?></p>
	<p>Relatief: <?= $relative ?></p>
	<p>Geheel getal: <?= $hundred ?></p>
	<p>Nominaal: <?= $nominal ?></p>
</body>
</html>