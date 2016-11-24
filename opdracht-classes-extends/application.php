<?php


function __autoload($classname) {
    $filename = "./classes/". $classname .".php";
    include_once($filename);
	}	
	//require_once '/classes/Animal.php';

	$animal1 = new Animal('Kermit','male',100);
	$animal2 = new Animal('Dikkie','male',90);
	$animal3 = new Animal('Flipper','female',100);
	$animal3->changeHealth(-20);

	$lion1 = new Lion('Simba','male',100,'Congo lion');
	$lion2 = new Lion('Scar','male',100,'Kenia lion');

	$zebra1 = new Zebra('Zeke','male',100,'Quagga');
	$zebra2 = new Zebra('Zena','male',100,'Selous');
?>


<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    
</head>

<body>

	<h1>Instanties van de Animal class</h1>
	<p><?= $animal1->getName() ?> is van het geslacht <?= $animal1->getGender() ?> en heeft momenteel levenspunten <?= $animal1->getHealth() ?>(special move: <?= $animal1->doSpecialMove() ?>)</p>

	<p><?= $animal2->getName() ?> is van het geslacht <?= $animal2->getGender() ?> en heeft momenteel levenspunten <?= $animal2->getHealth() ?>(special move: <?= $animal2->doSpecialMove() ?>)</p>

	<p><?= $animal3->getName() ?> is van het geslacht <?= $animal3->getGender() ?> en heeft momenteel levenspunten <?= $animal3->getHealth() ?>(special move: <?= $animal3->doSpecialMove() ?>)</p>



	<h1>Instanties van de Lion class</h1>

	<p>De speciale move van <?= $lion1->getName() ?> (soort: <?= $lion1->getSpecies() ?>):<?= $lion1->doSpecialMove() ?></p>

	<p>De speciale move van <?= $lion2->getName() ?> (soort: <?= $lion2->getSpecies() ?>):<?= $lion2->doSpecialMove() ?></p>



	<h1>Instanties van de Zebra class</h1>
	<p>De speciale move van <?= $zebra1->getName() ?> (soort:<?= $zebra1->getSpecies() ?>):<?= $zebra1->doSpecialMove() ?></p>

	<p>De speciale move van <?= $zebra2->getName() ?> (soort:<?= $zebra2->getSpecies() ?>):<?= $zebra2->doSpecialMove() ?></p>



</body>
</html>