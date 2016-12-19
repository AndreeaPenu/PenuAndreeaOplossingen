<?php 
	//http://www.domein.be/original.php toont http://www.domein.be/redirect.php 

	$baseName = '/' . basename(__FILE__) . '/';
	$root = preg_replace($baseName, '', __FILE__);
	$htaccess = file_get_contents($root .'/.htaccess');
 ?>
 
<!DOCTYPE html>
<html>
<head>
	<title>Original</title>
</head>
<body>
	<h1>Het originele bestand</h1>
	<pre><?php echo $htaccess ?></pre>
</body>
</html>