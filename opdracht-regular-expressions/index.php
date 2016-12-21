<?php

	$regex="";
	$search="";
	if(isset($_POST['submit'])){
		$regex = $_POST['regex'];
		$search = $_POST['str'];
		$replace = '#';
		$regx =preg_replace('/' . $regex . '/', $replace, $search);

		if($regx != 0 ){
				$bericht = 'Resultaat: '. $regx .' nieuwe string';
		}else{
			$bericht = 'Er werd geen match gevonden.';
		}
	}


	//alle letters tussen a en d, en u en z. ook hoofdletters
	//[a-du-zA-DU-Z]

	//zowel colour als color 
	//(color)|(colour)

	//1 als duizendtal
	//[1]\d{3}

	//enkel en overblijven
	//[^en]

?>

<html>
<head>
	<title></title>
</head>
<body>
	<h1>RegEx tester</h1>

<form action="index.php" method="Post">
	<label for="regex">Regular expression</label>
	<input id="regex" type="text" name="regex" value="<?=$regex?>">
	<br>
	<label for="str">String</label>
	<textarea name="str" id="str" value="<?=$search?>"></textarea>
	<br>
	<input type="submit" name="submit" value="Submit">


	<p><?=$bericht?></p>
</form>


</body>
</html>