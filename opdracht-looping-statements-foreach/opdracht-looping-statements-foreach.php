<?php


	
	$text= file_get_contents("text-file.txt");
	$textChars = str.split($text);
	$aantal = count($textChars);

	rsort($textChars);
	sort($textChars);

	$teller=0;

	
	foreach ($textChars as $char) {
    	if( $char < $aantal){
    		$teller++;
	}
?>

<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		

		
	</body>
</html>