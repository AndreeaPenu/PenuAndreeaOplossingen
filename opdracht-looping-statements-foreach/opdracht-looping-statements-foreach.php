<?php
	$text= file_get_contents("text-file.txt");
	$textChars = str_split($text);
	$aantal = count($textChars);

	rsort($textChars);
	sort($textChars);

	$teller=array();

	
	foreach ($textChars as $char) {
    	if( $char < $aantal){
    		++$teller[$char];
	}
?>

<!DOCTYPE html>
<html>
	<head>
	</head>
	<body>
		
		<p><?php echo ($teller) ?></p>
		
	</body>
</html>