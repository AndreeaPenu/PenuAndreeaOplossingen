<?php

	$bericht ="";
	$regex = $_POST['regex'];
	$search = $_POST['str'];
	$replace = '#';
	$regx =preg_replace($regex, $replace, $search);

	if($regx != 0 ){
			$bericht = 'Resultaat: '. 'nieuwe string';
	}else{
		$bericht = 'Er werd geen match gevonden.';
	}


	//alle letters tussen a en d, en u en z.
	//[a-d u-z][:alpha:]

	//zowel colour als color 
	//(color)|(colour)

	//1 als duizendtal


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
	<input style="submit" value="Submit">
	<p><?php=$bericht?></p>
</body>
</html>