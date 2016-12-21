<?php
	session_start();


	if(isset($_SESSION['registreer'])){
		$email = $_SESSION['registreer']['email'];
		$paswoord = $_SESSION['registreer']['paswoord'];
	}

	var_dump($_SESSION);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registratieformulier</title>
</head>
<body>

	<h1>Registreren</h1>

	<form action="registratie-process.php" method="post">
	<label id="email">e-mail</label>
	</br>
	<input type="text" name="email" value="<?= $email ?>">
	</br>
	<label id="paswoord">paswoord</label>
	</br>
	<input type="text" name="paswoord" value="<?= $paswoord ?>">
	<input type="submit" name="genereer" value="Genereer een paswoord">
	</br>
	<input type="submit" name="registreer" value="Registreer">
	</form>
</body>
</html>