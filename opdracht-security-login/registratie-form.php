<!DOCTYPE html>
<html>
<head>
	<title>Registratieformulier</title>
</head>
<body>

	<h1>Registreren</h1>

	<form action="registratie-process.php" method="">
	<label id="email">e-mail</label>
	</br>
	<input type="text" name="email" value="<?= $value ?>">
	</br>
	<label id="paswoord">paswoord</label>
	</br>
	<input type="text" name="paswoord">
	<input type="submit" name="genereer" value="Genereer een paswoord">
	</br>
	<input type="submit" name="registreer" value="Registreer">
	</form>
</body>
</html>