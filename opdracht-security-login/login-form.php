<?php
	session_start();
?>


<html>
<head>
	<title></title>
</head>
<body>
	<h1>Inloggen</h1>
	<form action="login-process.php" method="post">
		<label for="email">e-mail</label>
	</br>
		<input id="email" type="text" name="email">
	</br>
	</br>
		<label for="paswoord">paswoord</label>
	</br>
		<input id="paswoord" type="password" name="paswoord">
	</br>
	</br>
		<input type="submit" name="submit" value="Submit">
	</form>
	<p>Nog geen account? Maak er dan eentje aan op de <a href="registratie-form.php">registratiepagina</a></p>
</body>
</html>