<?php

	
	$regex = $_POST['regex'];
	$search = $_POST['str'];
	$replace = '#';
	$regx =preg_replace($regex, $replace, $search);

	if($regx != 0 ){
			$bericht = 'Resultaat: '. 'nieuwe string';
	}else{
		$bericht = 'Er werd geen match gevonden.';
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


	<label for="regex">Regular expression</label>
	<input id="regex" type="text" name="regex">

	<label for="str">String</label>
	<input id="str" style="submit" value="Submit">
	<p><?php=$regx?></p>
</body>
</html>