<?php

	session_start();
	//$fout = $_SESSION['error'];

?>

<!DOCTYPE html>
<html>
<head>
	<title>contactformulier</title>
</head>
<body>


	<form aciton="contact.php" action="POST">
		<label for="email">E-mailadres</label>
		</br>
		<input type="text" name="email">
		</br>
		<label for="boodschap">Boodschap</label>
		</br>
		<textarea rows="8" cols="30" name="boodschap"></textarea>
		</br>
		<input for="kopie" type="checkbox">
		<label name="kopie">Stuur een kopie naar mijzelf</label>
		</br>
		<input type="submit" name="submit" value="Submit Query">
	</form>
</body>
</html>