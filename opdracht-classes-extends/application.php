<?php
	require_once '/classes/Animal.php';

	$animal1 = new Animal('Kermit','male',100);
	$animal2 = new Animal('Dikkie','male',90);
	$animal3 = new Animal('Flipper','female',80);

	$lion1 = new Lion('Simba','Congo lion','roar');
	$lion2 = new Lion('Scar','Kenia lion','roar');

	$zebra1 = new Zebra('Zeke','Quagga');
	$zebra2 = new Zebra('Zena','Selous');
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





	<p>De speciale move van <?= $lion1->$name ?> (soort:<?= $lion1->$species ?>):<?= $lion1->$doSpecialMove() ?></p>

	<p>De speciale move van <?= $lion2->$name ?> (soort:<?= $lion2->$species ?>):<?= $lion2->$doSpecialMove() ?></p>


	<p>De speciale move van <?= $zebra1->$name ?> (soort:<?= $zebra1->$species ?>):<?= $zebra1->$doSpecialMove() ?></p>

	<p>De speciale move van <?= $zebra2->$name ?> (soort:<?= $zebra2->$species ?>):<?= $zebra2->$doSpecialMove() ?></p>




</body>
</html>