<?php 
	$baseName = '/' . basename(__FILE__) . '/';
	$root = preg_replace($baseName, '', __FILE__);
	$htaccess = file_get_contents($root .'/.htaccess');
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Redirect</title>
</head>
<body>
	<h1>Het redirect bestand</h1>
	<pre><?php echo $htaccess ?></pre>
</body>
</html>