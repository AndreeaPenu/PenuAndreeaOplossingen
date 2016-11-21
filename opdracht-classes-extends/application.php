<?php
	require_once '/classes/Animal.php';

	$animal1 = new Animal('Kermit','male',100);
	$animal2 = new Animal('Dikkie','male',90);
	$animal3 = new Animal('Flipper','female',80);

	

	




?>


<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    
</head>

<body>
	<p><?= $animal1->$name ?>is van het geslacht <?= $animal1->$gender ?> en heeft momenteel levenspunten <?= $animal1->$health ?>(special move: <?= $animal1->$doSpecialMove() ?>)</p>

	<p><?= $animal2->$name ?>is van het geslacht <?= $animal2->$gender ?> en heeft momenteel levenspunten <?= $animal2->$health ?>(special move: <?= $animal2->$doSpecialMove() ?>)</p>

	<p><?= $animal3->$name ?>is van het geslacht <?= $animal3->$gender ?> en heeft momenteel levenspunten <?= $animal3->$health ?>(special move: <?= $animal3->$doSpecialMove() ?>)</p>
</body>
</html>